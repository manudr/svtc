package com.dronamraju.svtemple.model;

import java.util.HashSet;
import java.util.Set;

import javax.persistence.CascadeType;
import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.FetchType;
import javax.persistence.GeneratedValue;
import static javax.persistence.GenerationType.IDENTITY;
import javax.persistence.Id;
import javax.persistence.OneToMany;
import javax.persistence.Table;
import javax.persistence.UniqueConstraint;

@Entity
@Table(name = "USER_TABLE", uniqueConstraints = {
		@UniqueConstraint(columnNames = "USER_NAME"),
		@UniqueConstraint(columnNames = "USER_CODE") })
public class User implements java.io.Serializable {

	private Integer userId;
	private String userCode;
	private String userName;
	private Set<UserProduct> userCategories = new HashSet<UserProduct>(0);

	public User() {
	}

	public User(String userCode, String userName) {
		this.userCode = userCode;
		this.userName = userName;
	}

	public User(String userCode, String userName,
				Set<UserProduct> userCategories) {
		this.userCode = userCode;
		this.userName = userName;
		this.userCategories = userCategories;
	}

	@Id
	@GeneratedValue(strategy = IDENTITY)
	@Column(name = "USER_ID", unique = true, nullable = false)
	public Integer getUserId() {
		return this.userId;
	}

	public void setUserId(Integer userId) {
		this.userId = userId;
	}

	@Column(name = "USER_CODE", unique = true, nullable = false, length = 10)
	public String getUserCode() {
		return this.userCode;
	}

	public void setUserCode(String userCode) {
		this.userCode = userCode;
	}

	@Column(name = "USER_NAME", unique = true, nullable = false, length = 20)
	public String getUserName() {
		return this.userName;
	}

	public void setUserName(String userName) {
		this.userName = userName;
	}

	@OneToMany(fetch = FetchType.LAZY, mappedBy = "pk.user", cascade=CascadeType.ALL)
	public Set<UserProduct> getUserCategories() {
		return this.userCategories;
	}

	public void setUserCategories(Set<UserProduct> userCategories) {
		this.userCategories = userCategories;
	}

}