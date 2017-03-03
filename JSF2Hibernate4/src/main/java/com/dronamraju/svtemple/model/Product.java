package com.dronamraju.svtemple.model;

import javax.persistence.*;
import java.io.Serializable;
import java.util.Date;

/**
 * Created by mdronamr on 2/23/17.
 */

@Entity
@Table(name="svt0722712121140.dbo.Product")
public class Product implements Serializable {

    @Id
    @Column(name="id")
    @GeneratedValue(strategy=GenerationType.IDENTITY)

    private Long id;

    @Column(name="name")
    public String name;

    @Column(name="description")
    private String description;

    @Column(name="price")
    private Double price;

    @Column(name="location")
    private String location;

    @Column(name="schedule")
    private String schedule;

    @Column(name="updated_date")
    private Date updatedDate;

    @Column(name="created_date")
    private Date createdDate;

    @Column(name="updated_user")
    private String updatedUser;

    @Column(name="created_user")
    private String createdUser;

    public Product(String name, String description, Double price, String location, String schedule, Date updatedDate, Date createdDate, String updatedUser, String createdUser) {
        this.name = name;
        this.description = description;
        this.price = price;
        this.location = location;
        this.schedule = schedule;
        this.updatedDate = updatedDate;
        this.createdDate = createdDate;
        this.updatedUser = updatedUser;
        this.createdUser = createdUser;
    }

    public Product() {
    }

    public Long getId() {
        return id;
    }

    public void setId(Long id) {
        this.id = id;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public String getDescription() {
        return description;
    }

    public void setDescription(String description) {
        this.description = description;
    }

    public Double getPrice() {
        return price;
    }

    public void setPrice(Double price) {
        this.price = price;
    }

    public String getLocation() {
        return location;
    }

    public void setLocation(String location) {
        this.location = location;
    }

    public String getSchedule() {
        return schedule;
    }

    public void setSchedule(String schedule) {
        this.schedule = schedule;
    }

    public Date getUpdatedDate() {
        return updatedDate;
    }

    public void setUpdatedDate(Date updatedDate) {
        this.updatedDate = updatedDate;
    }

    public Date getCreatedDate() {
        return createdDate;
    }

    public void setCreatedDate(Date createdDate) {
        this.createdDate = createdDate;
    }

    public String getUpdatedUser() {
        return updatedUser;
    }

    public void setUpdatedUser(String updatedUser) {
        this.updatedUser = updatedUser;
    }

    public String getCreatedUser() {
        return createdUser;
    }

    public void setCreatedUser(String createdUser) {
        this.createdUser = createdUser;
    }

    public String toString() {
        return "Product{" +
                "id=" + id +
                ", name='" + name + '\'' +
                ", description='" + description + '\'' +
                ", price=" + price +
                ", location='" + location + '\'' +
                ", schedule='" + schedule + '\'' +
                ", updatedDate=" + updatedDate +
                ", createdDate=" + createdDate +
                ", updatedUser='" + updatedUser + '\'' +
                ", createdUser='" + createdUser + '\'' +
                '}';
    }
}
