package com.dronamraju.svtemple.dao;

import com.dronamraju.svtemple.model.Product;
import com.dronamraju.svtemple.model.User;
import com.dronamraju.svtemple.util.EntityManagerUtil;
import org.apache.commons.logging.Log;
import org.apache.commons.logging.LogFactory;

import javax.persistence.EntityManager;
import javax.persistence.EntityTransaction;


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
		EntityTransaction entityTransaction = entityManager.getTransaction();
		try {
			entityTransaction.begin();
			entityManager.persist(user);
			entityTransaction.commit();
		} catch (Exception e) {
			entityTransaction.rollback();
			throw new RuntimeException(e);
		}
	}

	public User findUser(Long userId){
		log.info("findUser..");
		return entityManager.find(User.class, userId);
	}


}
