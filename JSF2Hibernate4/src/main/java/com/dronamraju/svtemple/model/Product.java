package com.dronamraju.svtemple.model;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.Id;
import javax.persistence.Table;
import java.util.Calendar;

/**
 * Created by mdronamr on 2/23/17.
 */

@Entity
@Table(name="svt0722712121140.dbo.Temple_Services")
public class Product {


    @Id
    @Column(name="id")
    private Long id;

    @Column(name="name")
    private String name;

    @Column(name="description")
    private String description;

    @Column(name="price")
    private Double price;

    @Column(name="location")
    private String location;

    @Column(name="schedule")
    private String schedule;


    public Product(Long id, String name, String description, Double price, String location, String schedule) {
        this.id = id;
        this.name = name;
        this.description = description;
        this.price = price;
        this.location = location;
        this.schedule = schedule;
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

    @Override
    public String toString() {
        return "Product{" +
                "id=" + id +
                ", name='" + name + '\'' +
                ", description='" + description + '\'' +
                ", price=" + price +
                ", location='" + location +
                ", schedule='" + schedule +
                '}';
    }
}
