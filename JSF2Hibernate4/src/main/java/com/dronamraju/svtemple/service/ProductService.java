package com.dronamraju.svtemple.service;

import javax.faces.bean.ApplicationScoped;
import javax.faces.bean.ManagedBean;
import com.dronamraju.svtemple.model.Product;
import java.util.List;
import java.util.ArrayList;
import java.util.Arrays;
import java.util.UUID;

/**
 * Created by mdronamr on 2/24/17.
 */

@ManagedBean(name = "productService")
@ApplicationScoped
public class ProductService {

    private final static String[] colors;

    private final static String[] brands;

    static {
        colors = new String[10];
        colors[0] = "Black";
        colors[1] = "White";
        colors[2] = "Green";
        colors[3] = "Red";
        colors[4] = "Blue";
        colors[5] = "Orange";
        colors[6] = "Silver";
        colors[7] = "Yellow";
        colors[8] = "Brown";
        colors[9] = "Maroon";

        brands = new String[10];
        brands[0] = "BMW";
        brands[1] = "Mercedes";
        brands[2] = "Volvo";
        brands[3] = "Audi";
        brands[4] = "Renault";
        brands[5] = "Fiat";
        brands[6] = "Volkswagen";
        brands[7] = "Honda";
        brands[8] = "Jaguar";
        brands[9] = "Ford";
    }

    public List<Product> createProducts(int size) {
        List<Product> list = new ArrayList<Product>();
        for(int i = 0 ; i < size ; i++) {
            list.add(new Product(getRandomId(), getRandomBrand(), getRandomBrand(), getRandomPrice(), getRandomColor(), getRandomBrand()));
        }

        return list;
    }

    private Long getRandomId() {
        return UUID.randomUUID().getLeastSignificantBits();
    }

    private int getRandomYear() {
        return (int) (Math.random() * 50 + 1960);
    }

    private String getRandomColor() {
        return colors[(int) (Math.random() * 10)];
    }

    private String getRandomBrand() {
        return brands[(int) (Math.random() * 10)];
    }

    public Double getRandomPrice() {
        return (Double) (Math.random() * 100000);
    }


    public List<String> getColors() {
        return Arrays.asList(colors);
    }

    public List<String> getBrands() {
        return Arrays.asList(brands);
    }

}
