package com.dronamraju.svtemple.bean;

import com.dronamraju.svtemple.model.Product;
import com.dronamraju.svtemple.model.User;

import javax.persistence.Entity;
import javax.persistence.Table;
import java.io.Serializable;
import java.util.List;


/**
 * Created by mdronamr on 3/2/17.
 */


public class RegistrationBean implements Serializable {
    private User user;

    List<Product> productList;


}
