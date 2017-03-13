package com.dronamraju.svtemple.service;

import javax.faces.bean.ApplicationScoped;
import javax.faces.bean.ManagedBean;

import com.dronamraju.svtemple.dao.UserDAO;
import com.dronamraju.svtemple.model.Category;
import com.dronamraju.svtemple.model.Stock;

/**
 * Created by mdronamr on 2/24/17.
 */

@ManagedBean(name = "userService")
@ApplicationScoped
public class UserService {
    UserDAO userDAO = new UserDAO();

    public void saveCat(Category cat) {
        userDAO.saveCat(cat);
    }

    public void saveStock(Stock stock) {
        userDAO.saveStock(stock);
    }

}
