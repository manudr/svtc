package com.dronamraju.svtemple.dao;

import com.dronamraju.svtemple.model.Product;
import com.dronamraju.svtemple.util.HibernateUtil;
import org.hibernate.Query;
import org.hibernate.Session;

import java.util.List;

/**
 * Created by mdronamr on 2/23/17.
 */
public class ProductDAO {

    Session session = HibernateUtil.getSessionFactory().openSession();

    public List<Product> getProducts() {
        String hql = "select product from Product product";
        Query query = session.createQuery(hql);
        List<Product> products = query.list();
        System.out.println("ProductDAO - Products: " + products);
        return products;
    }

    public void save(Product product){
        session.beginTransaction();
        session.save(product);
        session.getTransaction().commit();
        session.close();
    }
}
