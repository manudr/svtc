package com.dronamraju.svtemple.dao;

import java.util.List;

import com.dronamraju.svtemple.model.User;
import com.dronamraju.svtemple.util.HibernateUtil;
import org.hibernate.Query;
import org.hibernate.Session;


public class UserDAO {
	Session session = HibernateUtil.getSessionFactory().openSession();
	public void save(User user){
		session.beginTransaction();
		session.save(user);
		session.getTransaction().commit();
		session.close();
	}
	public Integer getId (){
		String hql = "select max(user.id) from User user";
		Query query = session.createQuery(hql);
		List<Integer> results = query.list();
		Integer userId = 1;
        if (results.get(0) != null ) {
        	userId = results.get(0) + 1;
        }
        return userId;
	}
}
