package com.dronamraju.svtemple.service;

import javax.faces.bean.ApplicationScoped;
import javax.faces.bean.ManagedBean;

import com.dronamraju.svtemple.dao.ProductDAO;

import java.util.*;

/**
 * Created by mdronamr on 2/24/17.
 */

@ManagedBean(name = "productService")
@ApplicationScoped
public class ProductService {
    ProductDAO productDAO = new ProductDAO();

}
