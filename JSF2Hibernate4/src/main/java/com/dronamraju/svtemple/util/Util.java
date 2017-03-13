package com.dronamraju.svtemple.util;

import java.text.ParseException;
import java.text.SimpleDateFormat;
import java.util.Calendar;
import java.util.Date;

/**
 * Created by mdronamr on 3/10/17.
 */

public class Util {

    public static boolean isThisDateValid(Date dateToValidate){
        System.out.println("Calendar.getInstance().getTime(): " + Calendar.getInstance().getTime());
        if (dateToValidate.before(Calendar.getInstance().getTime())) {
            return false;
        }
        return true;
    }
}
