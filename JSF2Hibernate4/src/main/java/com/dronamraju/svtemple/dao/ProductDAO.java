package com.dronamraju.svtemple.dao;


import com.dronamraju.svtemple.model.Product;
import com.dronamraju.svtemple.model.User;
import com.dronamraju.svtemple.model.UserProduct;
import com.dronamraju.svtemple.util.EntityManagerUtil;
import org.apache.commons.logging.Log;
import org.apache.commons.logging.LogFactory;
import javax.persistence.Query;

import javax.persistence.EntityManager;
import java.util.ArrayList;
import java.util.List;

/**
 * Created by mdronamr on 2/23/17.
 */
public class ProductDAO {

    private static Log log = LogFactory.getLog(ProductDAO.class);

    EntityManager em = EntityManagerUtil.getEntityManager();

    public Product findProduct(Long productId){
        log.info("findProduct..");
        return em.find(Product.class, productId);
    }

    public List getProducts() {
        Query query = em.createQuery("SELECT product FROM Product product", Product.class);
        List results = query.getResultList();
        List<Product> products = query.getResultList();
        log.info("ProductDAO - Products: " + products);
        return products;
    }

    public List getProducts(Long userId) {
        Query query = em.createQuery("SELECT product FROM Product product WHERE productId = :userId", Product.class);
        query.setParameter("userId", userId);
        List results = query.getResultList();
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

    public void save(UserProduct userProduct){
        log.info("Saving userProduct: " + userProduct);
        em.getTransaction().begin();
        em.persist(userProduct);
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

    public Product find(Long id) {
        return em.find(Product.class, id);
    }

}