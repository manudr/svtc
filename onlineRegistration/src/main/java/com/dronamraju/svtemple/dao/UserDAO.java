package com.dronamraju.svtemple.dao;

import com.dronamraju.svtemple.model.Product;
import com.dronamraju.svtemple.model.User;
import com.dronamraju.svtemple.model.UserProduct;
import com.dronamraju.svtemple.util.AES;
import com.dronamraju.svtemple.util.EntityManagerUtil;
import org.apache.commons.logging.Log;
import org.apache.commons.logging.LogFactory;

import javax.persistence.EntityManager;
import javax.persistence.EntityTransaction;
import javax.persistence.Query;
import java.util.List;


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
			if (entityTransaction.isActive()) {
				entityTransaction.rollback();
			}
			throw new RuntimeException(e);
		}
	}

	public void updateUserPassword(String email, String newPassword){
		EntityTransaction entityTransaction = entityManager.getTransaction();
		try {
			entityTransaction.begin();
			Query query = entityManager.createNativeQuery("UPDATE USER_TABLE SET PASSWORD = '" + newPassword + "' WHERE EMAIL = '" + email + "'");
			query.executeUpdate();
			entityTransaction.commit();
		} catch (Exception e) {
			if (entityTransaction.isActive()) {
				entityTransaction.rollback();
			}
			throw new RuntimeException(e);
		}
	}

	public User saveUser(User user){
		EntityTransaction entityTransaction = entityManager.getTransaction();
		try {
			log.info("Saving user: " + user);
			log.info("entityManager: " + entityManager);
			User savedUser = null;
			entityTransaction.begin();
			savedUser = entityManager.merge(user);
			entityTransaction.commit();
			log.info("savedUser: " + savedUser);
			return savedUser;
		} catch (Exception e) {
			if (entityTransaction.isActive()) {
				entityTransaction.rollback();
			}
			throw new RuntimeException(e);
		}
	}

	public User findUser(Long userId){
		EntityTransaction entityTransaction = entityManager.getTransaction();
		log.info("findUser..");
		try {
			User user = entityManager.find(User.class, userId);
			return user;
		} catch (Exception e) {
			if (entityTransaction.isActive()) {
				entityTransaction.rollback();
			}
			throw new RuntimeException(e);
		}
	}

	public List<User> findAllUsers(){
		EntityTransaction entityTransaction = entityManager.getTransaction();
		try {
			Query query = entityManager.createQuery("SELECT user FROM User user", User.class);
			List<User> users = query.getResultList();
			if (users == null || users.size() < 1) {
				return null;
			}
			return users;
		} catch (Exception e) {
			if (entityTransaction.isActive()) {
				entityTransaction.rollback();
			}
			throw new RuntimeException(e);
		}
	}

	public User findUser(String email, String password) {
		log.info("email, password: " + email + ", " + password);
		EntityTransaction entityTransaction = entityManager.getTransaction();
		try {
			Query query = entityManager.createQuery("SELECT user FROM User user WHERE email = :email and password = :password", User.class);
			query.setParameter("email", email);
			query.setParameter("password", password);
			List<User> users = query.getResultList();
			if (users == null || users.size() < 1) {
				return null;
			}
			User user = users.get(0);
			log.info("findUser - user: " + user);
			return user;
		} catch (Exception e) {
			if (entityTransaction.isActive()) {
				entityTransaction.rollback();
			}
			throw new RuntimeException(e);
		}
	}

	public List<UserProduct> findUserProducts(String orderNumber) {
		EntityTransaction entityTransaction = entityManager.getTransaction();
		try {
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
		} catch (Exception e) {
			if (entityTransaction.isActive()) {
				entityTransaction.rollback();
			}
			throw new RuntimeException(e);
		}
	}

	public List<UserProduct> findUserProducts() {
		EntityTransaction entityTransaction = entityManager.getTransaction();
		try {
			Query query = entityManager.createQuery("SELECT userProduct FROM UserProduct userProduct", UserProduct.class);
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
		} catch (Exception e) {
			if (entityTransaction.isActive()) {
				entityTransaction.rollback();
			}
			throw new RuntimeException(e);
		}
	}

	public List<UserProduct> findUserProducts(Long userId) {
		EntityTransaction entityTransaction = entityManager.getTransaction();
		try {
			Query query = entityManager.createQuery("SELECT userProduct FROM UserProduct userProduct WHERE userId = :userId", UserProduct.class);
			query.setParameter("userId", userId);
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
		} catch (Exception e) {
			if (entityTransaction.isActive()) {
				entityTransaction.rollback();
			}
			throw new RuntimeException(e);
		}
	}

	public String findValue(String name) {
		EntityTransaction entityTransaction = entityManager.getTransaction();
		try {
			log.info("findValue: " + name);
			Query query = entityManager.createQuery("SELECT value FROM configuration_table configuration WHERE configuration_name = :name", String.class);
			query.setParameter("name", name);
			List<String> values = query.getResultList();
			log.info("values: " + values);
			if (values != null && values.size() > 0) {
				return values.get(0);
			}
			return null;
		} catch (Exception e) {
			if (entityTransaction.isActive()) {
				entityTransaction.rollback();
			}
			throw new RuntimeException(e);
		}
	}

	public String findPassword(String email) {
		EntityTransaction entityTransaction = entityManager.getTransaction();
		try {
			log.info("email: " + email);
			Query query = entityManager.createQuery("SELECT password FROM User user WHERE email = :email", String.class);
			query.setParameter("email", email);
			List<String> values = query.getResultList();
			//log.info("values: " + values);
			if (values != null && values.size() > 0) {
				return values.get(0);
			}
			return null;
		} catch (Exception e) {
			if (entityTransaction.isActive()) {
				entityTransaction.rollback();
			}
			throw new RuntimeException(e);
		}
	}

	public boolean orderNumberExists(String orderNumber) {
		EntityTransaction entityTransaction = entityManager.getTransaction();
		try {
			log.info("orderNumberExists: " + orderNumber);
			Query query = entityManager.createQuery("SELECT orderNumber FROM UserProduct userProduct WHERE orderNumber = :orderNumber", String.class);
			query.setParameter("orderNumber", orderNumber);
			List<String> orderNumbers = query.getResultList();
			log.info("orderNumbers: " + orderNumbers);
			if (orderNumbers == null || orderNumbers.size() < 1) {
				return false;
			}
			return true;
		} catch (Exception e) {
			if (entityTransaction.isActive()) {
				entityTransaction.rollback();
			}
			throw new RuntimeException(e);
		}
	}

	public Product findProduct(Long productId){
		EntityTransaction entityTransaction = entityManager.getTransaction();
		try {
			log.info("findProduct..");
			return entityManager.find(Product.class, productId);
		} catch (Exception e) {
			if (entityTransaction.isActive()) {
				entityTransaction.rollback();
			}
			throw new RuntimeException(e);
		}
	}

	public void deleteUserProducts(String orderNumber){
		EntityTransaction entityTransaction = entityManager.getTransaction();
		try {
			log.info("deleteUserProducts..");
			List<UserProduct> userProducts = findUserProducts(orderNumber);
			for (UserProduct userProduct : userProducts) {
				entityManager.remove(userProduct);
			}
		} catch (Exception e) {
			if (entityTransaction.isActive()) {
				entityTransaction.rollback();
			}
			throw new RuntimeException(e);
		}
	}
}