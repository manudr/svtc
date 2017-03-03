package com.dronamraju.svtemple.bean;

import com.dronamraju.svtemple.dao.ProductDAO;
import com.dronamraju.svtemple.model.Product;
import javax.faces.bean.ManagedBean;
import javax.faces.bean.ManagedProperty;
import javax.faces.bean.RequestScoped;
import javax.faces.bean.ViewScoped;
import javax.annotation.PostConstruct;
import java.sql.Timestamp;
import java.util.Calendar;
import java.util.List;
import java.io.Serializable;
import org.apache.commons.logging.Log;
import org.apache.commons.logging.LogFactory;

import com.dronamraju.svtemple.service.ProductService;

/**
 * Created by mdronamr on 2/23/17.
 */

@ManagedBean(name = "productBean")
@RequestScoped
public class ProductBean implements Serializable {

    private static Log log = LogFactory.getLog(ProductBean.class);

    public Product product;

//    private String name;
//    private String description;
//    private Double price;
//    private String location;
//    private String schedule;
//    private String type;
//    private Timestamp updatedDate;
//    private Timestamp createdDate;
//    private String updatedUser;
//    private String createdUser;

    @ManagedProperty("#{productService}")
    private ProductService productService;

    private List<Product> products;

    private List<Product> filteredProducts;

    private Product selectedProduct;

    public List<Product> getFilteredProducts() {
        return filteredProducts;
    }

    public void setFilteredProducts(List<Product> filteredProducts) {
        this.filteredProducts = filteredProducts;
    }

    public Product getSelectedProduct() {
        return selectedProduct;
    }

    public void setSelectedProduct(Product selectedProduct) {
        this.selectedProduct = selectedProduct;
    }

    public List<Product> getProducts() {
        return products;
    }

    public void setProducts(List<Product> products) {
        this.products = products;
    }

    public Product getProduct() {
        return product;
    }

    public void setProduct(Product product) {
        this.product = product;
    }

    @PostConstruct
    public void init() {
        products = productService.getProducts();
        product = new Product();
    }

    public String addProduct() {
        log.info("addProduct()...");
        ProductDAO productDAO = new ProductDAO();
        //Product product = new Product(name, description, price, location, schedule, Calendar.getInstance().getTime(), Calendar.getInstance().getTime(), "Manu", "Manu");
        product.setCreatedDate(Calendar.getInstance().getTime());
        product.setUpdatedDate(Calendar.getInstance().getTime());
        product.setCreatedUser("Manu");
        product.setUpdatedUser("Manu");
        log.info("product: " + product);
        productDAO.save(product);
        log.info("New Temple Service has been successfully saved.");
        getProducts();
        return "products.xhtml";
    }

    public String updateProduct() {
        log.info("updateProduct()...");
        //Product product = new Product(name, description, price, location, schedule, Calendar.getInstance().getTime(), Calendar.getInstance().getTime(), "Manu", "Manu");
        product.setId(selectedProduct.getId());
        product.setCreatedDate(Calendar.getInstance().getTime());
        product.setUpdatedDate(Calendar.getInstance().getTime());
        product.setCreatedUser("Manu");
        product.setUpdatedUser("Manu");
        productService.updateProduct(product);
        log.info("Temple Service has been successfully updated.");
        getProducts();
        return "products.xhtml";
    }

    public void deleteProduct() {
        productService.removeProduct(selectedProduct);
        products.remove(selectedProduct);
        selectedProduct = null;
    }

    public void cancel() {
        log.info("cancel()..");
    }

    public void setProductService(ProductService productService) {
        this.productService = productService;
    }

    /*
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

    public String getType() {
        return type;
    }

    public void setType(String type) {
        this.type = type;
    }

    public Timestamp getUpdatedDate() {
        return updatedDate;
    }

    public void setUpdatedDate(Timestamp updatedDate) {
        this.updatedDate = updatedDate;
    }

    public Timestamp getCreatedDate() {
        return createdDate;
    }

    public void setCreatedDate(Timestamp createdDate) {
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

    */

    public ProductService getProductService() {
        return productService;
    }
}
