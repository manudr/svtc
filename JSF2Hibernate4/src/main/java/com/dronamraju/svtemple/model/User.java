package com.dronamraju.svtemple.model;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.Id;
import javax.persistence.Table;
import java.io.Serializable;

@Entity
@Table(name="User_Table")
public class User implements Serializable {
	@Id
	@Column(name="id")
    private int id;

	@Column(name="first_name")
	private String firstName;

	@Column(name="last_name")
	private String lastName;

	@Column(name="email")
	private String email;

	@Column(name="phone_number")
	private String phoneNumber;

	@Column(name="Street_address")
	private String streetAddress;

	@Column(name="city")
	private String city;

	@Column(name="state")
	private String state;

	@Column(name="zip")
	private String zip;

	@Column(name="password")
	private Integer password;

	@Column(name="family_gothram")
	private String familyGothram;

	@Column(name="primary_nakshathram")
	private String primaryNakshathram;

	@Column(name="primary_padam")
	private String primaryPadam;

	@Column(name="spouse_name")
	private String spouseName;

	@Column(name="spouse_nakshathram")
	private String spouseNakshathram;

	@Column(name="spouse_padam")
	private String spousePadam;

	@Column(name="child1_name")
	private String child1Name;

	@Column(name="child1_nakshathram")
	private String child1Nakshathram;

	@Column(name="child1_padam")
	private String child1Padam;

	@Column(name="child2_name")
	private String child2Name;

	@Column(name="child2_nakshathram")
	private String child2Nakshathram;

	@Column(name="child2_padam")
	private String child2Padam;

	@Column(name="child3_name")
	private String child3eName;

	@Column(name="child3_nakshathram")
	private String child3Nakshathram;

	@Column(name="child3_padam")
	private String child3Padam;

	@Column(name="child4_name")
	private String child4Name;

	@Column(name="child4_nakshathram")
	private String child4Nakshathram;

	@Column(name="child4_padam")
	private String child4Padam;


	public int getId() {
		return id;
	}

	public void setId(int id) {
		this.id = id;
	}

	public String getFirstName() {
		return firstName;
	}

	public void setFirstName(String firstName) {
		this.firstName = firstName;
	}

	public String getLastName() {
		return lastName;
	}

	public void setLastName(String lastName) {
		this.lastName = lastName;
	}

	public String getEmail() {
		return email;
	}

	public void setEmail(String email) {
		this.email = email;
	}

	public String getPhoneNumber() {
		return phoneNumber;
	}

	public void setPhoneNumber(String phoneNumber) {
		this.phoneNumber = phoneNumber;
	}

	public String getStreetAddress() {
		return streetAddress;
	}

	public void setStreetAddress(String streetAddress) {
		this.streetAddress = streetAddress;
	}

	public String getCity() {
		return city;
	}

	public void setCity(String city) {
		this.city = city;
	}

	public String getState() {
		return state;
	}

	public void setState(String state) {
		this.state = state;
	}

	public String getZip() {
		return zip;
	}

	public void setZip(String zip) {
		this.zip = zip;
	}

	public Integer getPassword() {
		return password;
	}

	public void setPassword(Integer password) {
		this.password = password;
	}

	public String getFamilyGothram() {
		return familyGothram;
	}

	public void setFamilyGothram(String familyGothram) {
		this.familyGothram = familyGothram;
	}

	public String getPrimaryNakshathram() {
		return primaryNakshathram;
	}

	public void setPrimaryNakshathram(String primaryNakshathram) {
		this.primaryNakshathram = primaryNakshathram;
	}

	public String getPrimaryPadam() {
		return primaryPadam;
	}

	public void setPrimaryPadam(String primaryPadam) {
		this.primaryPadam = primaryPadam;
	}

	public String getSpouseName() {
		return spouseName;
	}

	public void setSpouseName(String spouseName) {
		this.spouseName = spouseName;
	}

	public String getSpouseNakshathram() {
		return spouseNakshathram;
	}

	public void setSpouseNakshathram(String spouseNakshathram) {
		this.spouseNakshathram = spouseNakshathram;
	}

	public String getSpousePadam() {
		return spousePadam;
	}

	public void setSpousePadam(String spousePadam) {
		this.spousePadam = spousePadam;
	}

	public String getChild1Name() {
		return child1Name;
	}

	public void setChild1Name(String child1Name) {
		this.child1Name = child1Name;
	}

	public String getChild1Nakshathram() {
		return child1Nakshathram;
	}

	public void setChild1Nakshathram(String child1Nakshathram) {
		this.child1Nakshathram = child1Nakshathram;
	}

	public String getChild1Padam() {
		return child1Padam;
	}

	public void setChild1Padam(String child1Padam) {
		this.child1Padam = child1Padam;
	}

	public String getChild2Name() {
		return child2Name;
	}

	public void setChild2Name(String child2Name) {
		this.child2Name = child2Name;
	}

	public String getChild2Nakshathram() {
		return child2Nakshathram;
	}

	public void setChild2Nakshathram(String child2Nakshathram) {
		this.child2Nakshathram = child2Nakshathram;
	}

	public String getChild2Padam() {
		return child2Padam;
	}

	public void setChild2Padam(String child2Padam) {
		this.child2Padam = child2Padam;
	}

	public String getChild3eName() {
		return child3eName;
	}

	public void setChild3eName(String child3eName) {
		this.child3eName = child3eName;
	}

	public String getChild3Nakshathram() {
		return child3Nakshathram;
	}

	public void setChild3Nakshathram(String child3Nakshathram) {
		this.child3Nakshathram = child3Nakshathram;
	}

	public String getChild3Padam() {
		return child3Padam;
	}

	public void setChild3Padam(String child3Padam) {
		this.child3Padam = child3Padam;
	}

	public String getChild4Name() {
		return child4Name;
	}

	public void setChild4Name(String child4Name) {
		this.child4Name = child4Name;
	}

	public String getChild4Nakshathram() {
		return child4Nakshathram;
	}

	public void setChild4Nakshathram(String child4Nakshathram) {
		this.child4Nakshathram = child4Nakshathram;
	}

	public String getChild4Padam() {
		return child4Padam;
	}

	public void setChild4Padam(String child4Padam) {
		this.child4Padam = child4Padam;
	}

	public User() {
	}

	public User(int id, String firstName, String lastName, String email, String phoneNumber, String streetAddress, String city, String state, String zip, Integer password, String familyGothram, String primaryNakshathram, String primaryPadam, String spouseName, String spouseNakshathram, String spousePadam, String child1Name, String child1Nakshathram, String child1Padam, String child2Name, String child2Nakshathram, String child2Padam, String child3eName, String child3Nakshathram, String child3Padam, String child4Name, String child4Nakshathram, String child4Padam) {
		this.id = id;
		this.firstName = firstName;
		this.lastName = lastName;
		this.email = email;
		this.phoneNumber = phoneNumber;
		this.streetAddress = streetAddress;
		this.city = city;
		this.state = state;
		this.zip = zip;
		this.password = password;
		this.familyGothram = familyGothram;
		this.primaryNakshathram = primaryNakshathram;
		this.primaryPadam = primaryPadam;
		this.spouseName = spouseName;
		this.spouseNakshathram = spouseNakshathram;
		this.spousePadam = spousePadam;
		this.child1Name = child1Name;
		this.child1Nakshathram = child1Nakshathram;
		this.child1Padam = child1Padam;
		this.child2Name = child2Name;
		this.child2Nakshathram = child2Nakshathram;
		this.child2Padam = child2Padam;
		this.child3eName = child3eName;
		this.child3Nakshathram = child3Nakshathram;
		this.child3Padam = child3Padam;
		this.child4Name = child4Name;
		this.child4Nakshathram = child4Nakshathram;
		this.child4Padam = child4Padam;
	}

	@Override
	public String toString() {
		return "User{" +
				"id=" + id +
				", firstName='" + firstName + '\'' +
				", lastName='" + lastName + '\'' +
				", email='" + email + '\'' +
				", phoneNumber='" + phoneNumber + '\'' +
				", streetAddress='" + streetAddress + '\'' +
				", city='" + city + '\'' +
				", state='" + state + '\'' +
				", zip='" + zip + '\'' +
				", password=" + password +
				", familyGothram='" + familyGothram + '\'' +
				", primaryNakshathram='" + primaryNakshathram + '\'' +
				", primaryPadam='" + primaryPadam + '\'' +
				", spouseName='" + spouseName + '\'' +
				", spouseNakshathram='" + spouseNakshathram + '\'' +
				", spousePadam='" + spousePadam + '\'' +
				", child1Name='" + child1Name + '\'' +
				", child1Nakshathram='" + child1Nakshathram + '\'' +
				", child1Padam='" + child1Padam + '\'' +
				", child2Name='" + child2Name + '\'' +
				", child2Nakshathram='" + child2Nakshathram + '\'' +
				", child2Padam='" + child2Padam + '\'' +
				", child3eName='" + child3eName + '\'' +
				", child3Nakshathram='" + child3Nakshathram + '\'' +
				", child3Padam='" + child3Padam + '\'' +
				", child4Name='" + child4Name + '\'' +
				", child4Nakshathram='" + child4Nakshathram + '\'' +
				", child4Padam='" + child4Padam + '\'' +
				'}';
	}
}
