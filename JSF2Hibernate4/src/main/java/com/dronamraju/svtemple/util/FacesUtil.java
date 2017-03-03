package com.dronamraju.svtemple.util;

import org.apache.commons.logging.Log;
import org.apache.commons.logging.LogFactory;

import javax.faces.application.ConfigurableNavigationHandler;
import javax.faces.context.FacesContext;

/**
 * Created by mdronamr on 3/3/17.
 */
public class FacesUtil {
    private static Log log = LogFactory.getLog(FacesUtil.class);


    public static void redirect(String outcome) {
        log.info("redirect(String[" + outcome + "]): Entry.");
        if (outcome.contains("?")) {
            getNavigationHandler().performNavigation(outcome + "&faces-redirect=true");
        } else {
            getNavigationHandler().performNavigation(outcome + "?faces-redirect=true");
        }
    }

    public static ConfigurableNavigationHandler getNavigationHandler() {
        log.info("getNavigationHandler(): Entry.");
        return (ConfigurableNavigationHandler) FacesContext.getCurrentInstance().getApplication().getNavigationHandler();
    }

    public static FacesContext getFacesContext() {
        return FacesContext.getCurrentInstance();
    }

}
