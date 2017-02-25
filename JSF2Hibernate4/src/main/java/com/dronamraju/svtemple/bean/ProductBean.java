package com.dronamraju.svtemple.bean;

import com.dronamraju.svtemple.dao.ProductDAO;
import com.dronamraju.svtemple.model.Product;

import javax.annotation.PostConstruct;
import javax.faces.bean.ManagedBean;
import javax.faces.bean.RequestScoped;
import java.util.ArrayList;
import java.util.List;
import java.io.Serializable;
import javax.faces.bean.ManagedProperty;
import com.dronamraju.svtemple.service.ProductService;

/**
 * Created by mdronamr on 2/23/17.
 */

@ManagedBean(name = "productBean", eager = true)
@RequestScoped
public class ProductBean implements Serializable {


    private List<Product> products = new ArrayList<Product>();


    @PostConstruct
    public void populateProductList() {
        for (int i = 1; i <= 10; i++) {
            Product product = new Product();
            product.setId(new Long(i));
            product.setName("Product#" + i);
            product.setDescription("Product#" + i);
            product.setName("Product#" + i);
            product.setName("Product#" + i);
            product.setName("Product#" + i);
            this.products.add(product);
        }
    }

    public List<Product> getProducts() {
        return products;
    }

    public void setProducts(List<Product> products) {
        this.products = products;
    }

    public String addProduct() {
        System.out.println("addProduct()...");
        ProductDAO productDAO = new ProductDAO();
        Product product = new Product();
        productDAO.save(product);
        System.out.println("New Temple Service has been successfully saved.");
        return "products";
    }

    public void removeProduct() {

    }

    public void cancel() {

    }

    @ManagedProperty("#{productService}")
    private ProductService productService;

    public void setProductService(ProductService productService) {
        this.productService = productService;
    }

}
