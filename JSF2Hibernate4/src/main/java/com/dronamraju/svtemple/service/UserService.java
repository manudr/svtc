package com.dronamraju.svtemple.service;

import javax.faces.bean.ApplicationScoped;
import javax.faces.bean.ManagedBean;

import com.dronamraju.svtemple.dao.UserDAO;
import com.dronamraju.svtemple.model.PujaRegistration;
import com.dronamraju.svtemple.model.User;

import java.util.*;

/**
 * Created by mdronamr on 2/24/17.
 */

@ManagedBean(name = "userService")
@ApplicationScoped
public class UserService {
    UserDAO userDAO = new UserDAO();

    public List<User> getUsers() {
        List<User> list = userDAO.getUsers();
        return list;
    }

    public void saveUser(User user) {
        userDAO.saveUser(user);
    }

    public void savePujaRegistration(PujaRegistration pujaRegistration) {
        userDAO.savePujaRegistration(pujaRegistration);
    }

    public void updateUser(User selectedUser) {
        userDAO.updateUser(selectedUser);
    }

    public void removeUser(User selectedUser) {
        userDAO.removeUser(selectedUser);
    }

    public User findUser(String email) {
        return userDAO.findUser(email);
    }
}
