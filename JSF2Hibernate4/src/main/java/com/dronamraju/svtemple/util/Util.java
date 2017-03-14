package com.dronamraju.svtemple.util;

import com.microsoft.sqlserver.jdbc.StringUtils;
import org.apache.commons.logging.Log;
import org.apache.commons.logging.LogFactory;

import java.text.ParseException;
import java.text.SimpleDateFormat;
import java.util.Calendar;
import java.util.Date;
import java.util.UUID;
import java.util.regex.Matcher;
import java.util.regex.Pattern;

/**
 * Created by mdronamr on 3/10/17.
 */

public class Util {

    private static Log log = LogFactory.getLog(Util.class);

    private static final String EMAIL_PATTERN =
            "^[_A-Za-z0-9-\\+]+(\\.[_A-Za-z0-9-]+)*@"
                    + "[A-Za-z0-9-]+(\\.[A-Za-z0-9]+)*(\\.[A-Za-z]{2,})$";

    private static Pattern pattern = Pattern.compile(EMAIL_PATTERN);
    private static Matcher matcher;

    public static boolean isValidDate(Date dateToValidate){
        log.info("Calendar.getInstance().getTime(): " + Calendar.getInstance().getTime());
        if (dateToValidate.before(Calendar.getInstance().getTime())) {
            return false;
        }
        return true;
    }

    public static String newPassword() {
        String newPassword = UUID.randomUUID().toString();
        log.info("newPassword: " + newPassword);
        return newPassword;
    }

    public static boolean isValidEmail(String email) {
        matcher = pattern.matcher(email);
        return matcher.matches();
    }

    public static boolean isValidPhoneNumber(String phoneNumber) {
        return (StringUtils.isNumeric(phoneNumber)  && phoneNumber.length() == 10);
    }

    public static boolean isValidZip(String zip) {
        return (StringUtils.isNumeric(zip) && zip.length() == 5) ;
    }
}
