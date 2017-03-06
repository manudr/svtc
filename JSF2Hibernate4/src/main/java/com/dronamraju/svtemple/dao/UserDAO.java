package com.dronamraju.svtemple.dao;

import java.util.List;

import com.dronamraju.svtemple.model.Product;
import com.dronamraju.svtemple.model.PujaRegistration;
import com.dronamraju.svtemple.model.User;
import com.dronamraju.svtemple.util.EntityManagerUtil;
import org.apache.commons.logging.Log;
import org.apache.commons.logging.LogFactory;

import javax.persistence.Query;

import javax.persistence.EntityManager;


public class UserDAO {
	private static Log log = LogFactory.getLog(UserDAO.class);

	EntityManager em = EntityManagerUtil.getEntityManager();

	public List<User> getUsers() {
		Query query = em.createNativeQuery("SELECT " +
				"u.id, " +
				"u.first_name, " +
				"u.last_name, " +
				"u.email, " +
				"u.phone_number, " +
				"u.street_address, " +
				"u.city, " +
				"u.state, " +
				"u.zip, " +
				"u.password, " +
				"u.family_gothram, " +
				"u.primary_nakshathram, " +
				"u.primary_padam, " +
				"u.spouse_name, " +
				"u.spouse_nakshathram, " +
				"u.spouse_padam, " +
				"u.child1_name, " +
				"u.child1_nakshathram, " +
				"u.child1_padam, " +
				"u.child2_name, " +
				"u.child2_nakshathram, " +
				"u.child2_padam, " +
				"u.child3_name, " +
				"u.child3_nakshathram, " +
				"u.child3_padam, " +
				"u.child4_name, " +
				"u.child4_nakshathram, " +
				"u.child4_padam, " +
				"u.is_admin, " +
				"u.updated_date, " +
				"u.created_date, " +
				"u.updated_user, " +
				"u.created_user " +
				" FROM User_Table u ", User.class);
		List<User> users = query.getResultList();
		log.info("UserDAO - users: " + users);
		return users;
	}

	public List<User> getServicesByEmail() {
		Query query = em.createNativeQuery("SELECT " +
				"u.id, " +
				"u.first_name, " +
				"u.last_name, " +
				"u.email, " +
				"u.phone_number, " +
				"u.street_address, " +
				"u.city, " +
				"u.state, " +
				"u.zip, " +
				"u.password, " +
				"u.family_gothram, " +
				"u.primary_nakshathram, " +
				"u.primary_padam, " +
				"u.spouse_name, " +
				"u.spouse_nakshathram, " +
				"u.spouse_padam, " +
				"u.child1_name, " +
				"u.child1_nakshathram, " +
				"u.child1_padam, " +
				"u.child2_name, " +
				"u.child2_nakshathram, " +
				"u.child2_padam, " +
				"u.child3_name, " +
				"u.child3_nakshathram, " +
				"u.child3_padam, " +
				"u.child4_name, " +
				"u.child4_nakshathram, " +
				"u.child4_padam, " +
				"u.is_admin, " +
				"u.updated_date, " +
				"u.created_date, " +
				"u.updated_user, " +
				"u.created_user " +
				" FROM User_Table u where u.email = ?", User.class);
		List<User> users = query.getResultList();
		log.info("UserDAO - users: " + users);
		return users;
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

	public void saveUser(User user){
		log.info("Saving user: " + user);
		em.getTransaction().begin();
		em.persist(user);
		em.getTransaction().commit();
	}

	public void savePujaRegistration(PujaRegistration pujaRegistration){
		log.info("Saving pujaRegistration: " + pujaRegistration);
		em.getTransaction().begin();
		em.persist(pujaRegistration);
		em.getTransaction().commit();
	}

	public User findUser(String email) {
		Query query = em.createNativeQuery("SELECT " +
				"u.id, " +
				"u.first_name, " +
				"u.last_name, " +
				"u.email, " +
				"u.phone_number, " +
				"u.street_address, " +
				"u.city, " +
				"u.state, " +
				"u.zip, " +
				"u.password, " +
				"u.family_gothram, " +
				"u.primary_nakshathram, " +
				"u.primary_padam, " +
				"u.spouse_name, " +
				"u.spouse_nakshathram, " +
				"u.spouse_padam, " +
				"u.child1_name, " +
				"u.child1_nakshathram, " +
				"u.child1_padam, " +
				"u.child2_name, " +
				"u.child2_nakshathram, " +
				"u.child2_padam, " +
				"u.child3_name, " +
				"u.child3_nakshathram, " +
				"u.child3_padam, " +
				"u.child4_name, " +
				"u.child4_nakshathram, " +
				"u.child4_padam, " +
				"u.is_admin, " +
				"u.updated_date, " +
				"u.created_date, " +
				"u.updated_user, " +
				"u.created_user " +
				" FROM User_Table u where u.email = ?", User.class);
		query.setParameter(1, email);
		List<User> users = query.getResultList();
		log.info("UserDAO - users: " + users);
		return users.get(0);
	}

	public void updateUser(User selectedUser) {
		em.getTransaction().begin();
		em.persist(selectedUser);
		em.getTransaction().commit();
	}

	public void removeUser(User selectedUser) {
		em.getTransaction().begin();
		em.remove(selectedUser);
		em.getTransaction().commit();
	}
}
