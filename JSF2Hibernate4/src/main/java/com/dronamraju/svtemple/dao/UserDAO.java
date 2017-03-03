package com.dronamraju.svtemple.dao;

import java.util.List;

import com.dronamraju.svtemple.model.User;
import com.dronamraju.svtemple.util.EntityManagerUtil;
import javax.persistence.Query;

import javax.persistence.EntityManager;


public class UserDAO {

	EntityManager em = EntityManagerUtil.getEntityManager();

	public void save(User user){
		em.persist(user);
	}
	public Integer getId (){
		String hql = "select max(user.id) from User user";
		Query query = em.createQuery(hql);
		List<Integer> results = query.getResultList();
		Integer userId = 1;
        if (results.get(0) != null ) {
        	userId = results.get(0) + 1;
        }
        return userId;
	}
}
