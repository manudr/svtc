package com.dronamraju.svtemple.dao;

import com.dronamraju.svtemple.model.Product;
import com.dronamraju.svtemple.model.User;
import com.dronamraju.svtemple.util.EntityManagerUtil;
import org.apache.commons.logging.Log;
import org.apache.commons.logging.LogFactory;

import javax.persistence.EntityManager;


public class UserDAO {
	private static Log log = LogFactory.getLog(UserDAO.class);

	EntityManager em = EntityManagerUtil.getEntityManager();

	public void saveCat(Product cat){
		log.info("Saving cat: " + cat);
		em.getTransaction().begin();
		em.persist(cat);
		em.getTransaction().commit();
	}

	public void saveUser(User user){
		log.info("Saving user: " + user);
		em.getTransaction().begin();
		em.persist(user);
		em.getTransaction().commit();
	}

	public User findUser(Long userId){
		log.info("findUser..");
		return em.find(User.class, userId);
	}


}
