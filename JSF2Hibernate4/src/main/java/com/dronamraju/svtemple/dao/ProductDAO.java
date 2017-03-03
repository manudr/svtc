package com.dronamraju.svtemple.dao;

import com.dronamraju.svtemple.model.Product;
import com.dronamraju.svtemple.util.EntityManagerUtil;
import org.apache.commons.logging.Log;
import org.apache.commons.logging.LogFactory;
import javax.persistence.Query;
import org.hibernate.Session;

import javax.persistence.EntityManager;
import java.util.ArrayList;
import java.util.Date;
import java.util.List;

/**
 * Created by mdronamr on 2/23/17.
 */
public class ProductDAO {

    private static Log log = LogFactory.getLog(ProductDAO.class);

    EntityManager em = EntityManagerUtil.getEntityManager();

    public List getProducts() {
        Query query = em.createNativeQuery("SELECT " +
                "p.id, " +
                "p.name, " +
                "p.description, " +
                "p.location, " +
                "p.schedule, " +
                "p.updated_date, " +
                "p.created_date, " +
                "p.updated_user, " +
                "p.created_user, " +
                "p.price, " +
                "p.type" +
                " FROM Product p ", Product.class);
        List<Product> products = query.getResultList();
        log.info("ProductDAO - Products: " + products);
        return products;
    }

    public void save(Product product){
        log.info("Saving product: " + product);
        em.getTransaction().begin();
        em.persist(product);
        em.getTransaction().commit();
    }

    public void updateProduct(Product selectedProduct) {
        em.getTransaction().begin();
        em.persist(selectedProduct);
        em.getTransaction().commit();
    }

    public void removeProduct(Product selectedProduct) {
        em.getTransaction().begin();
        em.remove(selectedProduct);
        em.getTransaction().commit();
    }
}