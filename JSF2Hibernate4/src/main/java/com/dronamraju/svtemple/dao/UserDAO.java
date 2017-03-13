package com.dronamraju.svtemple.dao;

import java.util.List;

import com.dronamraju.svtemple.model.Category;
import com.dronamraju.svtemple.model.Stock;
import com.dronamraju.svtemple.util.EntityManagerUtil;
import org.apache.commons.logging.Log;
import org.apache.commons.logging.LogFactory;

import javax.persistence.Query;

import javax.persistence.EntityManager;


public class UserDAO {
	private static Log log = LogFactory.getLog(UserDAO.class);

	EntityManager em = EntityManagerUtil.getEntityManager();

	public void saveCat(Category cat){
		log.info("Saving cat: " + cat);
		em.getTransaction().begin();
		em.persist(cat);
		em.getTransaction().commit();
	}

	public void saveStock(Stock stock){
		log.info("Saving stock: " + stock);
		em.getTransaction().begin();
		em.persist(stock);
		em.getTransaction().commit();
	}


}
