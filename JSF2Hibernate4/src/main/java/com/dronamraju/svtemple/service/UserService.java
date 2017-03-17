package com.dronamraju.svtemple.service;

import javax.faces.bean.ApplicationScoped;
import javax.faces.bean.ManagedBean;

import com.dronamraju.svtemple.dao.UserDAO;
import com.dronamraju.svtemple.model.Product;
import com.dronamraju.svtemple.model.User;

/**
 * Created by mdronamr on 2/24/17.
 */

@ManagedBean(name = "userService")
@ApplicationScoped
public class UserService {
    UserDAO userDAO = new UserDAO();

    public void saveCat(Product cat) {
        userDAO.saveCat(cat);
    }

    public void saveUser(User user) {
        userDAO.saveUser(user);
    }

    public User findUser(String email, String password) {
        return userDAO.findUser(email, password);
    }

}
