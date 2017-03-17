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

	public void saveUser(User user){
		log.info("Saving user: " + user);
		log.info("entityManager: " + entityManager);
		EntityTransaction entityTransaction = entityManager.getTransaction();
		try {
			entityTransaction.begin();
			if (user != null && user.getUserId() != null) {
				log.info("User already exists...");
				for (UserProduct userProduct : user.getUserProducts()) {
					log.info("Persisting user product...");
					entityManager.persist(userProduct);
				}
			} else {
				log.info("Persisting user...");
				entityManager.persist(user);
			}
			entityTransaction.commit();
		} catch (Exception e) {
			if (entityTransaction.isActive()) {
				entityTransaction.rollback();
			}
			throw new RuntimeException(e);
		}
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


}
