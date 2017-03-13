package com.dronamraju.svtemple.model;

import java.util.HashSet;
import java.util.Set;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.FetchType;
import javax.persistence.GeneratedValue;
import static javax.persistence.GenerationType.IDENTITY;
import javax.persistence.Id;
import javax.persistence.OneToMany;
import javax.persistence.Table;

@Entity
@Table(name = "CATEGORY")
public class Product implements java.io.Serializable {

	private Integer productId;
	private String name;
	private String desc;
	private Set<UserProduct> userCategories = new HashSet<UserProduct>(0);

	public Product() {
	}

	public Product(String name, String desc) {
		this.name = name;
		this.desc = desc;
	}

	public Product(String name, String desc, Set<UserProduct> userCategories) {
		this.name = name;
		this.desc = desc;
		this.userCategories = userCategories;
	}

	@Id
	@GeneratedValue(strategy = IDENTITY)
	@Column(name = "CATEGORY_ID", unique = true, nullable = false)
	public Integer getProductId() {
		return this.productId;
	}

	public void setProductId(Integer productId) {
		this.productId = productId;
	}

	@Column(name = "NAME", nullable = false, length = 10)
	public String getName() {
		return this.name;
	}

	public void setName(String name) {
		this.name = name;
	}

	@Column(name = "[DESCR]", nullable = false)
	public String getDesc() {
		return this.desc;
	}

	public void setDesc(String desc) {
		this.desc = desc;
	}

	@OneToMany(fetch = FetchType.LAZY, mappedBy = "pk.product")
	public Set<UserProduct> getUserCategories() {
		return this.userCategories;
	}

	public void setUserCategories(Set<UserProduct> userCategories) {
		this.userCategories = userCategories;
	}

}