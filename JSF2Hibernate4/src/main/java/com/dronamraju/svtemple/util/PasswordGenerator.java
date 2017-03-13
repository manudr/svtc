package com.dronamraju.svtemple.util;

import org.apache.commons.logging.Log;
import org.apache.commons.logging.LogFactory;

import java.security.SecureRandom;
import java.math.BigInteger;

/**
 * Created by mdronamr on 3/6/17.
 */
public final class PasswordGenerator {
    private static Log log = LogFactory.getLog(PasswordGenerator.class);
    private SecureRandom random = new SecureRandom();

    public String newPassword() {
        String newPassword = new BigInteger(130, random).toString(32);
        log.info("newPassword: " + newPassword);
        return newPassword;
    }

}
