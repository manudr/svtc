package com.dronamraju.svtemple.dao;

import com.dronamraju.svtemple.model.Product;
import com.dronamraju.svtemple.util.EntityManagerUtil;
import com.dronamraju.svtemple.util.HibernateUtil;
import org.apache.commons.logging.Log;
import org.apache.commons.logging.LogFactory;
import javax.persistence.Query;
import org.hibernate.Session;

import javax.persistence.EntityManager;
import java.util.List;

/**
 * Created by mdronamr on 2/23/17.
 */
public class ProductDAO {

    private static Log log = LogFactory.getLog(ProductDAO.class);

    public List getProducts() {
        EntityManager em = EntityManagerUtil.getEntityManager();
        Query query = em.createQuery("from Product" );
        List products = query.getResultList();
        log.info("ProductDAO - Products: " + products);
        return products;
    }

    public void save(Product product){
        Session session = HibernateUtil.getSessionFactory().openSession();
        session.beginTransaction();
        session.save(product);
        session.getTransaction().commit();
        session.close();
    }

    public void updateProduct(Product selectedProduct) {
        Session session = HibernateUtil.getSessionFactory().openSession();
        session.beginTransaction();
        session.update(selectedProduct);
        session.getTransaction().commit();
        session.close();
    }

    public void removeProduct(Product selectedProduct) {
        Session session = HibernateUtil.getSessionFactory().openSession();
        session.beginTransaction();
        session.delete(selectedProduct);
        session.getTransaction().commit();
        session.close();
    }
}
