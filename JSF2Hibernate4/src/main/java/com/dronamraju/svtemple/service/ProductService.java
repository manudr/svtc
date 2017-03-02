package com.dronamraju.svtemple.service;

import javax.faces.bean.ApplicationScoped;
import javax.faces.bean.ManagedBean;

import com.dronamraju.svtemple.dao.ProductDAO;
import com.dronamraju.svtemple.dao.UserDAO;
import com.dronamraju.svtemple.model.Product;

import java.util.*;

/**
 * Created by mdronamr on 2/24/17.
 */

@ManagedBean(name = "productService")
@ApplicationScoped
public class ProductService {
    ProductDAO productDAO = new ProductDAO();

    public List<Product> getProducts() {
        List<Product> list = productDAO.getProducts();
        return list;
    }

    public void updateProduct(Product selectedProduct) {
        productDAO.updateProduct(selectedProduct);
    }

    public void removeProduct(Product selectedProduct) {
        productDAO.removeProduct(selectedProduct);
    }


}
