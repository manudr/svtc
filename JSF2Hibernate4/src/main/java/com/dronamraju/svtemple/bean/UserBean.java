package com.dronamraju.svtemple.bean;

import com.dronamraju.svtemple.model.Product;
import com.dronamraju.svtemple.model.User;
import com.dronamraju.svtemple.model.UserProduct;
import com.dronamraju.svtemple.service.ProductService;
import com.dronamraju.svtemple.service.UserService;
import com.dronamraju.svtemple.util.FacesUtil;
import com.dronamraju.svtemple.util.PasswordGenerator;
import org.apache.commons.logging.Log;
import org.apache.commons.logging.LogFactory;

import javax.annotation.PostConstruct;
import javax.faces.bean.ManagedBean;
import javax.faces.bean.ManagedProperty;
import javax.faces.bean.RequestScoped;
import java.io.Serializable;
import java.util.*;

@ManagedBean(name = "userBean")
@RequestScoped
public class UserBean implements Serializable {

	private static Log log = LogFactory.getLog(UserBean.class);

	@ManagedProperty("#{userService}")
	private UserService userService;

	@ManagedProperty("#{productService}")
	private ProductService productService;

	//private User user;

	//private Product product;

	private Date dateAndTime;

	private String additionalNotes;

	private String[] selectedProductIds;

	@PostConstruct
	public void init() {

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
			for (int i=0; i<50; i++) {
				User user1 = new User();
				user1.setUserCode("7052" + "-" + i);
				user1.setUserName("PADINI" + "-" + i);
				user1.setIsAdmin("N");
				user1.setCity("Aurora");
				user1.setCreatedUser("Manu");
				user1.setZip("80134");
				user1.setUpdatedUser("Manu");
				user1.setUpdatedDate(Calendar.getInstance().getTime());
				user1.setStreetAddress("10234 Main St");
				user1.setState("CO");
				user1.setPrimaryPadam("1st");
				user1.setPhoneNumber("1234567890");
				PasswordGenerator passwordGenerator = new PasswordGenerator();
				user1.setPassword(passwordGenerator.newPassword());
				user1.setPrimaryNakshathram("UB");
				user1.setLastName("Dr");
				user1.setFirstName("Man");
				user1.setEmail("testemail");
				user1.setFamilyGothram("TestGothram");


				Product product1 = new Product();
				product1.setName("Test Puja1" + "-" + i);
				product1.setSchedule("Any Time" + "-" + i);
				product1.setLocation("Home" + "-" + i);
				product1.setCreatedDate(Calendar.getInstance().getTime());
				product1.setUpdatedDate(Calendar.getInstance().getTime());
				product1.setUpdatedUser("Tester" + "-" + i);
				product1.setCreatedUser("Tester" + "-" + i);
				product1.setDescription("TestDesc" + "-" + i);
				product1.setPrice(51.00);

				//new product, need save to get the id first
				userService.saveCat(product1);

				//Product product1 = (Product)session.get(Product.class, 8);

				UserProduct userProduct = new UserProduct();
				userProduct.setStatus("Scheduled");
				userProduct.setNotes(additionalNotes);
				userProduct.setDateAndTime(Calendar.getInstance().getTime());
				userProduct.setUser(user1);
				userProduct.setProduct(product1);
				userProduct.setCreatedDate(Calendar.getInstance().getTime());
				userProduct.setUpdatedDate(Calendar.getInstance().getTime());
				userProduct.setCreatedUser("Manu");
				userProduct.setUpdatedUser("Manu");

				user1.getUserProducts().add(userProduct);

				userService.saveUser(user1);
			}



			FacesUtil.redirect("testConfirmation.xhtml");
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
}