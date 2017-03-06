package com.dronamraju.svtemple.model;

/**
 * Created by mdronamr on 3/6/17.
 */
import javax.persistence.*;
import java.io.Serializable;
import java.util.Date;
import java.util.List;

@Entity
@Table(name="Puja_Registration")
public class PujaRegistration implements Serializable {

    @Id
    @Column(name="id")
    @GeneratedValue(strategy=GenerationType.IDENTITY)
    private Long id;

    @Column(name="user_id")
    private Long userId;

    @Column(name="product_id")
    private Long productId;

    @Column(name="notes")
    private String notes;

    @Column(name="status")
    private String status;

    @Column(name="date_time")
    private Date dateAndTime;

    public PujaRegistration() {
    }

    public Long getId() {
        return id;
    }

    public void setId(Long id) {
        this.id = id;
    }

    public Long getUserId() {
        return userId;
    }

    public void setUserId(Long userId) {
        this.userId = userId;
    }

    public Long getProductId() {
        return productId;
    }

    public void setProductId(Long productId) {
        this.productId = productId;
    }

    public String getNotes() {
        return notes;
    }

    public void setNotes(String notes) {
        this.notes = notes;
    }

    public String getStatus() {
        return status;
    }

    public void setStatus(String status) {
        this.status = status;
    }

    public Date getDateAndTime() {
        return dateAndTime;
    }

    public void setDateAndTime(Date dateAndTime) {
        this.dateAndTime = dateAndTime;
    }

    @Override
    public String toString() {
        return "PujaRegistration{" +
                "id=" + id +
                ", userId=" + userId +
                ", productId=" + productId +
                ", notes='" + notes + '\'' +
                ", status='" + status + '\'' +
                ", dateAndTime='" + dateAndTime + '\'' +
                '}';
    }
}
