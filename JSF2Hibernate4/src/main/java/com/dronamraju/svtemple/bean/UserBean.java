package com.dronamraju.svtemple.bean;

import com.dronamraju.svtemple.model.Product;
import com.dronamraju.svtemple.model.User;
import com.dronamraju.svtemple.model.UserProduct;
import com.dronamraju.svtemple.service.ProductService;
import com.dronamraju.svtemple.service.UserService;
import com.dronamraju.svtemple.util.FacesUtil;
import com.dronamraju.svtemple.util.SendEmail;
import com.dronamraju.svtemple.util.Util;
import org.apache.commons.logging.Log;
import org.apache.commons.logging.LogFactory;

import javax.annotation.PostConstruct;
import javax.faces.application.FacesMessage;
import javax.faces.bean.ManagedBean;
import javax.faces.bean.ManagedProperty;
import javax.faces.bean.SessionScoped;
import java.io.Serializable;
import java.util.*;

@ManagedBean(name = "userBean")
@SessionScoped
public class UserBean implements Serializable {

	private static Log log = LogFactory.getLog(UserBean.class);

	@ManagedProperty("#{userService}")
	private UserService userService;

	@ManagedProperty("#{productService}")
	private ProductService productService;

	private User user = new User();

	private Product product = new Product();

	private Date dateAndTime;

	private String additionalNotes;

	private String[] selectedProductIds;

	private Set<UserProduct> userProducts;

	private List<Product> products;

	@PostConstruct
	public void init() {
		products = productService.getProducts();
	}

	public UserService getUserService() {
		return userService;
	}

	public void setUserService(UserService userService) {
		this.userService = userService;
	}

	public void register() {
		log.info("register()...");
		try {
			Boolean hasValidationErrors = false;

			if (user.getFirstName() == null || user.getFirstName().trim().length() < 1) {
				FacesUtil.getFacesContext().addMessage("firstName", new FacesMessage(FacesMessage.SEVERITY_ERROR, "A Valid Fisrt Name is required.", null));
				hasValidationErrors = true;
			}

			if (user.getLastName() == null || user.getLastName().trim().length() < 1) {
				FacesUtil.getFacesContext().addMessage("lastName", new FacesMessage(FacesMessage.SEVERITY_ERROR, "A Valid Lst Name is required.", null));
				hasValidationErrors = true;
			}

			if (user.getEmail() == null || user.getEmail().trim().length() < 1 || !Util.isValidEmail(user.getEmail())) {
				FacesUtil.getFacesContext().addMessage("email", new FacesMessage(FacesMessage.SEVERITY_ERROR, "A Valid email is required.", null));
				hasValidationErrors = true;
			}

			if (user.getPhoneNumber() == null || user.getPhoneNumber().trim().length() < 1 || !Util.isValidPhoneNumber(user.getPhoneNumber())) {
				FacesUtil.getFacesContext().addMessage("phoneNumber", new FacesMessage(FacesMessage.SEVERITY_ERROR, "A Valid Phone Number is required.", null));
				hasValidationErrors = true;
			}

			if (user.getStreetAddress() == null || user.getStreetAddress().trim().length() < 1) {
				FacesUtil.getFacesContext().addMessage("streetAddress", new FacesMessage(FacesMessage.SEVERITY_ERROR, "A Valid streetAddress is required.", null));
				hasValidationErrors = true;
			}


			if (user.getCity() == null || user.getPhoneNumber().trim().length() < 1) {
				FacesUtil.getFacesContext().addMessage("phoneNumber", new FacesMessage(FacesMessage.SEVERITY_ERROR, "A Valid Phone Number is required.", null));
				hasValidationErrors = true;
			}

			if (user.getState() == null || user.getState().trim().length() < 1) {
				FacesUtil.getFacesContext().addMessage("state", new FacesMessage(FacesMessage.SEVERITY_ERROR, "A Valid state is required.", null));
				hasValidationErrors = true;
			}

			if (user.getZip() == null || user.getZip().trim().length() < 1 || !Util.isValidZip(user.getZip())) {
				FacesUtil.getFacesContext().addMessage("zip", new FacesMessage(FacesMessage.SEVERITY_ERROR, "A Valid zip is required.", null));
				hasValidationErrors = true;
			}

			if (user.getFamilyGothram() == null || user.getFamilyGothram().trim().length() < 1) {
				FacesUtil.getFacesContext().addMessage("familyGothram", new FacesMessage(FacesMessage.SEVERITY_ERROR, "A Valid familyGothram is required.", null));
				hasValidationErrors = true;
			}

			if (user.getPrimaryNakshathram() == null || user.getPrimaryNakshathram().trim().length() < 1) {
				FacesUtil.getFacesContext().addMessage("primaryNakshathram", new FacesMessage(FacesMessage.SEVERITY_ERROR, "A Valid Primary Nakshathram is required.", null));
				hasValidationErrors = true;
			}

			log.info("selectedProductIds: " + selectedProductIds);
			if (selectedProductIds == null || selectedProductIds.length < 1) {
				FacesUtil.getFacesContext().addMessage("selectedProductIds", new FacesMessage(FacesMessage.SEVERITY_ERROR, "One or more pujas must be selecetd.", null));
				hasValidationErrors = true;
			}

			log.info("additionalNotes: " + additionalNotes);

			log.info("dateAndTime: " + dateAndTime);
			if (dateAndTime == null || !(Util.isValidDate(dateAndTime))) {
				log.info("date failed");
				FacesUtil.getFacesContext().addMessage("dateAndTime", new FacesMessage(FacesMessage.SEVERITY_ERROR, "A Valid Date and Time is required.", null));
				hasValidationErrors = true;
			}

			if (hasValidationErrors) {
				log.info("Validation Failed...");
				return;
			}
			user.setCreatedDate(Calendar.getInstance().getTime());
			user.setUpdatedDate(Calendar.getInstance().getTime());
			user.setCreatedUser("Manu");
			user.setUpdatedUser("Manu");
			user.setPassword(Util.newPassword());
			user.setIsAdmin("N");

			for (Object prodId : selectedProductIds) {
				product = productService.findProduct(new Long(prodId.toString()));
				UserProduct userProduct = new UserProduct();
				userProduct.setStatus("Scheduled");
				userProduct.setNotes(additionalNotes);
				userProduct.setDateAndTime(dateAndTime);
				userProduct.setUser(user);
				userProduct.setProduct(product);
				userProduct.setCreatedDate(Calendar.getInstance().getTime());
				userProduct.setUpdatedDate(Calendar.getInstance().getTime());
				userProduct.setCreatedUser("Manu");
				userProduct.setUpdatedUser("Manu");
				log.info("userProduct: " + userProduct);
				user.getUserProducts().add(userProduct);
			}
			userService.saveUser(user);
			userProducts = user.getUserProducts();
			log.info("userProducts: " + userProducts);
			StringBuilder sb = new StringBuilder();
			sb.append("<h4>Thank you. You have registered for the below temple services:</h4>");
			for (UserProduct userProduct : userProducts) {
				sb.append("<b>Puja/Service Name: </b>" + userProduct.getProduct().getName() + "<br></br>");
				sb.append("<b>Price: </b>" + userProduct.getProduct().getPrice() + "<br></br>");
				sb.append("<b>Location: </b>" + userProduct.getProduct().getLocation() + "<br></br>");
				sb.append("<b>Date and Time: </b>" + userProduct.getDateAndTime() + "<br></br>");
				sb.append("<br></br><br></br>");
			}
			sb.append("<b>Thank you</b><br></br>");
			sb.append("<b>Sri Venkateswara Swamy Temple Of Colorado</b><br></br>");
			sb.append("<b>1495 S Ridge Road Castle Rock CO 80104</b><br></br>");
			sb.append("<b>Manager: 303-898-5514 | Temple: 303-660-9555 | Email: info@svtempleco.org</b><br></br>");
			sb.append("<b>Website: http://www.svtempleco.org</b><br></br>");
			sb.append("<b>Facebook: SVTC.Colorado</b><br></br>");
			sb.append("<b>PayPal Donation: SVTC PayPal Link</b><br></br>");
			SendEmail.sendMail(sb.toString());
			FacesUtil.redirect("userProducts.xhtml");
		} catch(Exception e) {
			throw new RuntimeException(e);
		}
	}

	public void cancel() {
		log.info("cancel()..");
		FacesUtil.redirect("users.xhtml");
	}

	public String updateUser() {
		log.info("updateUser()...");
		return null;
	}


	public ProductService getProductService() {
		return productService;
	}

	public void setProductService(ProductService productService) {
		this.productService = productService;
	}

	public Date getDateAndTime() {
		return dateAndTime;
	}

	public void setDateAndTime(Date dateAndTime) {
		this.dateAndTime = dateAndTime;
	}

	public String getAdditionalNotes() {
		return additionalNotes;
	}

	public void setAdditionalNotes(String additionalNotes) {
		this.additionalNotes = additionalNotes;
	}

	public String[] getSelectedProductIds() {
		return selectedProductIds;
	}

	public void setSelectedProductIds(String[] selectedProductIds) {
		this.selectedProductIds = selectedProductIds;
	}

	public User getUser() {
		return user;
	}

	public void setUser(User user) {
		this.user = user;
	}

	public Product getProduct() {
		return product;
	}

	public void setProduct(Product product) {
		this.product = product;
	}

	public Set<UserProduct> getUserProducts() {
		return userProducts;
	}

	public void setUserProducts(Set<UserProduct> userProducts) {
		this.userProducts = userProducts;
	}

	public List<Product> getProducts() {
		return products;
	}

	public void setProducts(List<Product> products) {
		this.products = products;
	}
}