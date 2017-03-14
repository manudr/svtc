package com.dronamraju.svtemple.model;

import java.util.Date;
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
	private String firstName;
	private String lastName;
	private String email;
	private String phoneNumber;
	private String streetAddress;
	private String city;
	private String state;
	private String zip;
	private String password;
	private String familyGothram;
	private String primaryNakshathram;
	private String primaryPadam;
	private String spouseName;
	private String spouseNakshathram;
	private String spousePadam;
	private String child1Name;
	private String child1Nakshathram;
	private String child1Padam;
	private String child2Name;
	private String child2Nakshathram;
	private String child2Padam;
	private String child3Name;
	private String child3Nakshathram;
	private String child3Padam;
	private String child4Name;
	private String child4Nakshathram;
	private String child4Padam;
	private String isAdmin;
	private Date updatedDate;
	private Date createdDate;
	private String updatedUser;
	private String createdUser;


	private Set<UserProduct> userProducts = new HashSet<UserProduct>(0);

	public User() {
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

	@Column(name="first_name")
	public String getFirstName() {
		return firstName;
	}

	public void setFirstName(String firstName) {
		this.firstName = firstName;
	}

	@Column(name="last_name")
	public String getLastName() {
		return lastName;
	}

	public void setLastName(String lastName) {
		this.lastName = lastName;
	}

	@Column(name="email")
	public String getEmail() {
		return email;
	}

	public void setEmail(String email) {
		this.email = email;
	}

	@Column(name="phone_number")
	public String getPhoneNumber() {
		return phoneNumber;
	}

	public void setPhoneNumber(String phoneNumber) {
		this.phoneNumber = phoneNumber;
	}

	@Column(name="street_address")
	public String getStreetAddress() {
		return streetAddress;
	}

	public void setStreetAddress(String streetAddress) {
		this.streetAddress = streetAddress;
	}

	@Column(name="city")
	public String getCity() {
		return city;
	}

	public void setCity(String city) {
		this.city = city;
	}

	@Column(name="state")
	public String getState() {
		return state;
	}

	public void setState(String state) {
		this.state = state;
	}

	@Column(name="zip")
	public String getZip() {
		return zip;
	}

	public void setZip(String zip) {
		this.zip = zip;
	}

	@Column(name="password")
	public String getPassword() {
		return password;
	}

	public void setPassword(String password) {
		this.password = password;
	}

	@Column(name="family_gothram")
	public String getFamilyGothram() {
		return familyGothram;
	}

	public void setFamilyGothram(String familyGothram) {
		this.familyGothram = familyGothram;
	}

	@Column(name="primary_nakshathram")
	public String getPrimaryNakshathram() {
		return primaryNakshathram;
	}

	public void setPrimaryNakshathram(String primaryNakshathram) {
		this.primaryNakshathram = primaryNakshathram;
	}

	@Column(name="primary_padam")
	public String getPrimaryPadam() {
		return primaryPadam;
	}

	public void setPrimaryPadam(String primaryPadam) {
		this.primaryPadam = primaryPadam;
	}

	@Column(name="spouse_name")
	public String getSpouseName() {
		return spouseName;
	}

	public void setSpouseName(String spouseName) {
		this.spouseName = spouseName;
	}

	@Column(name="spouse_nakshathram")
	public String getSpouseNakshathram() {
		return spouseNakshathram;
	}

	public void setSpouseNakshathram(String spouseNakshathram) {
		this.spouseNakshathram = spouseNakshathram;
	}

	@Column(name="spouse_padam")
	public String getSpousePadam() {
		return spousePadam;
	}

	public void setSpousePadam(String spousePadam) {
		this.spousePadam = spousePadam;
	}

	@Column(name="child1_name")
	public String getChild1Name() {
		return child1Name;
	}

	public void setChild1Name(String child1Name) {
		this.child1Name = child1Name;
	}

	@Column(name="child1_nakshathram")
	public String getChild1Nakshathram() {
		return child1Nakshathram;
	}

	public void setChild1Nakshathram(String child1Nakshathram) {
		this.child1Nakshathram = child1Nakshathram;
	}

	@Column(name="child1_padam")
	public String getChild1Padam() {
		return child1Padam;
	}

	public void setChild1Padam(String child1Padam) {
		this.child1Padam = child1Padam;
	}

	@Column(name="child2_name")
	public String getChild2Name() {
		return child2Name;
	}

	public void setChild2Name(String child2Name) {
		this.child2Name = child2Name;
	}

	@Column(name="child2_nakshathram")
	public String getChild2Nakshathram() {
		return child2Nakshathram;
	}

	public void setChild2Nakshathram(String child2Nakshathram) {
		this.child2Nakshathram = child2Nakshathram;
	}

	@Column(name="child2_padam")
	public String getChild2Padam() {
		return child2Padam;
	}

	public void setChild2Padam(String child2Padam) {
		this.child2Padam = child2Padam;
	}

	@Column(name="child3_name")
	public String getChild3Name() {
		return child3Name;
	}

	public void setChild3Name(String child3Name) {
		this.child3Name = child3Name;
	}

	@Column(name="child3_nakshathram")
	public String getChild3Nakshathram() {
		return child3Nakshathram;
	}

	public void setChild3Nakshathram(String child3Nakshathram) {
		this.child3Nakshathram = child3Nakshathram;
	}

	@Column(name="child3_padam")
	public String getChild3Padam() {
		return child3Padam;
	}

	public void setChild3Padam(String child3Padam) {
		this.child3Padam = child3Padam;
	}

	@Column(name="child4_name")
	public String getChild4Name() {
		return child4Name;
	}

	public void setChild4Name(String child4Name) {
		this.child4Name = child4Name;
	}

	@Column(name="child4_nakshathram")
	public String getChild4Nakshathram() {
		return child4Nakshathram;
	}

	public void setChild4Nakshathram(String child4Nakshathram) {
		this.child4Nakshathram = child4Nakshathram;
	}

	@Column(name="child4_padam")
	public String getChild4Padam() {
		return child4Padam;
	}

	public void setChild4Padam(String child4Padam) {
		this.child4Padam = child4Padam;
	}

	@Column(name="is_admin")
	public String getIsAdmin() {
		return isAdmin;
	}

	public void setIsAdmin(String isAdmin) {
		this.isAdmin = isAdmin;
	}

	@Column(name="updated_date")
	public Date getUpdatedDate() {
		return updatedDate;
	}

	public void setUpdatedDate(Date updatedDate) {
		this.updatedDate = updatedDate;
	}

	@Column(name="created_date")
	public Date getCreatedDate() {
		return createdDate;
	}

	public void setCreatedDate(Date createdDate) {
		this.createdDate = createdDate;
	}

	@Column(name="updated_user")
	public String getUpdatedUser() {
		return updatedUser;
	}

	public void setUpdatedUser(String updatedUser) {
		this.updatedUser = updatedUser;
	}

	@Column(name="created_user")
	public String getCreatedUser() {
		return createdUser;
	}

	public void setCreatedUser(String createdUser) {
		this.createdUser = createdUser;
	}

	@OneToMany(fetch = FetchType.LAZY, mappedBy = "pk.user", cascade=CascadeType.ALL)
	public Set<UserProduct> getUserProducts() {
		return this.userProducts;
	}

	public void setUserProducts(Set<UserProduct> userProducts) {
		this.userProducts = userProducts;
	}

}