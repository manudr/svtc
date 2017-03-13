package com.dronamraju.svtemple.bean;

import com.dronamraju.svtemple.model.Category;
import com.dronamraju.svtemple.model.Stock;
import com.dronamraju.svtemple.model.StockCategory;
import com.dronamraju.svtemple.service.ProductService;
import com.dronamraju.svtemple.service.UserService;
import com.dronamraju.svtemple.util.FacesUtil;
import com.dronamraju.svtemple.util.PasswordGenerator;
import com.dronamraju.svtemple.util.Util;
import org.apache.commons.logging.Log;
import org.apache.commons.logging.LogFactory;

import javax.annotation.PostConstruct;
import javax.faces.application.FacesMessage;
import javax.faces.bean.ManagedBean;
import javax.faces.bean.ManagedProperty;
import javax.faces.bean.RequestScoped;
import java.io.Serializable;
import java.text.SimpleDateFormat;
import java.util.*;

@ManagedBean(name = "userBean")
@RequestScoped
public class UserBean implements Serializable {

	private static Log log = LogFactory.getLog(UserBean.class);

	@ManagedProperty("#{userService}")
	private UserService userService;

	@ManagedProperty("#{productService}")
	private ProductService productService;

	private Stock stock;

	private Category category;

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

			Stock stock = new Stock();
			stock.setStockCode("7052");
			stock.setStockName("PADINI");

			Category category1 = new Category("CONSUMER", "CONSUMER COMPANY");
			//new category, need save to get the id first
			userService.saveCat(category1);

			//Category category1 = (Category)session.get(Category.class, 8);

			StockCategory stockCategory = new StockCategory();

			stockCategory.setStock(stock);
			stockCategory.setCategory(category1);
			stockCategory.setCreatedDate(new Date());
			stockCategory.setCreatedBy("system");

			stock.getStockCategories().add(stockCategory);

			userService.saveStock(stock);



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