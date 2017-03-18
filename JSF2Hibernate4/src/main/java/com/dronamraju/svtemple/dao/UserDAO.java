package com.dronamraju.svtemple.dao;

import com.dronamraju.svtemple.model.Product;
import com.dronamraju.svtemple.model.User;
import com.dronamraju.svtemple.model.UserProduct;
import com.dronamraju.svtemple.util.EntityManagerUtil;
import org.apache.commons.logging.Log;
import org.apache.commons.logging.LogFactory;

import javax.persistence.EntityManager;
import javax.persistence.EntityTransaction;
import javax.persistence.Query;
import java.util.List;
import java.util.Set;


public class UserDAO {
	private static Log log = LogFactory.getLog(UserDAO.class);

	EntityManager entityManager = EntityManagerUtil.getEntityManager();

	public void saveCat(Product cat){
		EntityTransaction entityTransaction = entityManager.getTransaction();
		try {
			log.info("Saving cat: " + cat);
			entityTransaction.begin();
			entityManager.persist(cat);
			entityTransaction.commit();
		} catch (Exception e) {
			entityTransaction.rollback();
			throw new RuntimeException(e);
		}
	}

	public User saveUser(User user){
		log.info("Saving user: " + user);
		log.info("entityManager: " + entityManager);
		User savedUser = null;
		EntityTransaction entityTransaction = entityManager.getTransaction();
		try {
			entityTransaction.begin();
			savedUser = entityManager.merge(user);
			entityTransaction.commit();
		} catch (Exception e) {
			if (entityTransaction.isActive()) {
				entityTransaction.rollback();
			}
			throw new RuntimeException(e);
		}
		return savedUser;
	}

	public User findUser(Long userId){
		log.info("findUser..");
		return entityManager.find(User.class, userId);
	}

	public User findUser(String email, String password) {
		Query query = entityManager.createQuery("SELECT user FROM User user WHERE email = :email and password = :password", User.class);
		query.setParameter("email", email);
		query.setParameter("password", password);
		List<User> users = query.getResultList();
		log.info("users - users: " + users);
		if (users == null || users.size() < 1) {
			return null;
		}
		return users.get(0);
	}

	public List<UserProduct> findUserProducts(String orderNumber) {
		Query query = entityManager.createQuery("SELECT userProduct FROM UserProduct userProduct WHERE orderNumber = :orderNumber", UserProduct.class);
		query.setParameter("orderNumber", orderNumber);
		List<UserProduct> userProducts = query.getResultList();
		for (UserProduct userProduct : userProducts) {
			userProduct.setUser(findUser(userProduct.getUserId()));
			userProduct.setProduct(findProduct(userProduct.getProductId()));
		}
		log.info("userProducts: " + userProducts.size());
		if (userProducts == null || userProducts.size() < 1) {
			return null;
		}
		return userProducts;
	}

	public boolean orderNumberExists(String orderNumber) {
		log.info("orderNumberExists: " + orderNumber);
		Query query = entityManager.createQuery("SELECT orderNumber FROM UserProduct userProduct WHERE orderNumber = :orderNumber", String.class);
		query.setParameter("orderNumber", orderNumber);
		List<String> orderNumbers = query.getResultList();
		log.info("orderNumbers: " + orderNumbers);
		if (orderNumbers == null || orderNumbers.size() < 1) {
			return false;
		}
		return true;
	}

	public Product findProduct(Long productId){
		log.info("findProduct..");
		return entityManager.find(Product.class, productId);
	}
}
