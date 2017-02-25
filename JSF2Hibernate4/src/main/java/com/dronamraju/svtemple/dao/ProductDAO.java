package com.dronamraju.svtemple.dao;

import com.dronamraju.svtemple.model.Product;
import com.dronamraju.svtemple.util.HibernateUtil;
import org.hibernate.Session;

/**
 * Created by mdronamr on 2/23/17.
 */
public class ProductDAO {

    Session session = HibernateUtil.getSessionFactory().openSession();

    public void save(Product product){
        session.beginTransaction();
        session.save(product);
        session.getTransaction().commit();
        session.close();
    }
}
