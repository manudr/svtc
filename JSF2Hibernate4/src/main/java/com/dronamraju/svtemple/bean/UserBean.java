package com.dronamraju.svtemple.bean;

import com.dronamraju.svtemple.dao.UserDAO;
import com.dronamraju.svtemple.model.Product;
import com.dronamraju.svtemple.model.PujaRegistration;
import com.dronamraju.svtemple.model.User;
import com.dronamraju.svtemple.service.UserService;
import com.dronamraju.svtemple.util.FacesUtil;
import com.dronamraju.svtemple.util.PasswordGenerator;
import org.apache.commons.logging.Log;
import org.apache.commons.logging.LogFactory;

import javax.annotation.PostConstruct;
import javax.faces.application.FacesMessage;
import javax.faces.bean.ManagedBean;
import javax.faces.bean.ManagedProperty;
import javax.faces.bean.RequestScoped;
import javax.faces.context.FacesContext;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import java.io.Serializable;
import java.util.ArrayList;
import java.util.Calendar;
import java.util.List;
import java.util.Map;

@ManagedBean(name = "userBean")
@RequestScoped
public class UserBean implements Serializable {

	private static Log log = LogFactory.getLog(UserBean.class);

	@ManagedProperty("#{userService}")
	private UserService userService;

	private User user;

	private PujaRegistration pujaRegistration;

	private List<User> users;

	@PostConstruct
	public void init() {
		//users = userService.getUsers();
		user = new User(); //This is required for: Target Unreachable, 'null' returned null
		pujaRegistration = new PujaRegistration(); //This is required for: Target Unreachable, 'null' returned null
	}

	public User getUser() {
		return user;
	}

	public PujaRegistration getPujaRegistration() {
		return pujaRegistration;
	}

	public void setPujaRegistration(PujaRegistration pujaRegistration) {
		this.pujaRegistration = pujaRegistration;
	}

	public void setUser(User user) {
		this.user = user;
	}

	public UserService getUserService() {
		return userService;
	}

	public void setUserService(UserService userService) {
		this.userService = userService;
	}

	public List<User> getUsers() {
		return users;
	}

	public void setUsers(List<User> users) {
		this.users = users;
	}

	public void register() {
		log.info("register()...");

		Boolean hasValidationErrors = false;

		if (user.getFirstName() == null || user.getFirstName().trim().length() < 1) {
			FacesUtil.getFacesContext().addMessage("firstName", new FacesMessage(FacesMessage.SEVERITY_ERROR, "A Valid Fisrt Name is required.", null));
			hasValidationErrors = true;
		}

		if (user.getLastName() == null || user.getLastName().trim().length() < 1) {
			FacesUtil.getFacesContext().addMessage("lastName", new FacesMessage(FacesMessage.SEVERITY_ERROR, "A Valid Lst Name is required.", null));
			hasValidationErrors = true;
		}

		if (user.getEmail() == null || user.getEmail().trim().length() < 1) {
			FacesUtil.getFacesContext().addMessage("email", new FacesMessage(FacesMessage.SEVERITY_ERROR, "A Valid email is required.", null));
			hasValidationErrors = true;
		}

		if (user.getPhoneNumber() == null || user.getPhoneNumber().trim().length() < 1) {
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

		if (user.getZip() == null || user.getZip().trim().length() < 1) {
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

		if (hasValidationErrors) {
			log.info("Validation Failed...");
			return;
		}

		user.setCreatedDate(Calendar.getInstance().getTime());
		user.setUpdatedDate(Calendar.getInstance().getTime());
		user.setCreatedUser("Manu");
		user.setUpdatedUser("Manu");
		user.setPassword(new PasswordGenerator().newPassword());
		user.setIsAdmin("N");
		log.info("user: " + user);
		userService.saveUser(user);
		log.info("New User has been successfully saved.");
		user = userService.findUser(user.getEmail());
		users = userService.getUsers();
		log.info("pujaRegistration: " + pujaRegistration);
		String[] productIds = FacesUtil.getRequest().getParameterValues("userForm:selectedProductIds");
		for (Object prodId : productIds) {
			PujaRegistration pr = new PujaRegistration();
			pr.setProductId(new Long(prodId.toString()));
			pr.setUserId(user.getId());
			pr.setStatus("Scheduled");
			pr.setNotes(pujaRegistration.getNotes());
			log.info("pr: " + pr);
			userService.savePujaRegistration(pr);
		}
		FacesUtil.redirect("users.xhtml");
	}

	public void cancel() {
		log.info("cancel()..");
		FacesUtil.redirect("users.xhtml");
	}
}