package com.dronamraju.svtemple.bean;

import com.dronamraju.svtemple.dao.UserDAO;
import com.dronamraju.svtemple.model.User;
import org.apache.commons.logging.Log;
import org.apache.commons.logging.LogFactory;

import javax.faces.bean.ManagedBean;
import javax.faces.bean.RequestScoped;
import java.io.Serializable;

@ManagedBean(name = "userBean", eager = true)
@RequestScoped
public class UserBean implements Serializable {

	private static Log log = LogFactory.getLog(UserBean.class);

	private String name;
	private Integer age;

	private User user;

	public String saveUser(){
		UserDAO userDao = new UserDAO();
		Integer userId= userDao.getId();
		//User user = new User(String firstName, String lastName, String email, String phoneNumber, String streetAddress, String city, String state, String zip, Integer password, String familyGothram, String primaryNakshathram, String primaryPadam, String spouseName, String spouseNakshathram, String spousePadam, String child1Name, String child1Nakshathram, String child1Padam, String child2Name, String child2Nakshathram, String child2Padam, String child3eName, String child3Nakshathram, String child3Padam, child4Name, child4Nakshathram, child4Padam);
		userDao.save(user);
		log.info("User successfully saved.");
		return "output";
	}

	public String getName() {
		return name;
	}

	public void setName(String name) {
		this.name = name;
	}

	public Integer getAge() {
		return age;
	}

	public void setAge(Integer age) {
		this.age = age;
	}

	public User getUser() {
		return user;
	}

	public void setUser(User user) {
		this.user = user;
	}
}