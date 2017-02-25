package com.dronamraju.svtemple.model;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.Id;
import javax.persistence.Table;
import java.io.Serializable;

@Entity
@Table(name="svt0722712121140.dbo.User_Table")
public class User implements Serializable {
	@Id
	@Column(name="id")
    private int id;
	@Column(name="name")
	private String name;
	@Column(name="age")
	private Integer age;

	public User (int id, String name, Integer age) {
		this.id = id;
		this.name = name;
		this.age = age;
	}

	public int getId() {
		return id;
	}
	public void setId(int id) {
		this.id = id;
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
}
