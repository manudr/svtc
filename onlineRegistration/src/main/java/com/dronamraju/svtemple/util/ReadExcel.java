package com.dronamraju.svtemple.util;

import com.dronamraju.svtemple.model.User;
import org.apache.poi.ss.usermodel.*;
import org.apache.poi.xssf.usermodel.XSSFWorkbook;

import java.io.File;
import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.io.IOException;
import java.sql.Connection;
import java.sql.Statement;
import java.util.Date;
import java.util.Iterator;

public class ReadExcel {

    private static final String FILE_NAME = "/Users/admin/development/modules/svtco/onlineRegistration/src/main/java/com/dronamraju/svtemple/util/POSCustomers.xls";

    public static void main(String[] args) {
        try {
            Connection conn = null;
            Statement stmt = null;
            FileInputStream excelFile = new FileInputStream(new File(FILE_NAME));
            Workbook workbook = new XSSFWorkbook(excelFile);
            Sheet datatypeSheet = workbook.getSheetAt(0);
            Iterator<Row> iterator = datatypeSheet.iterator();
            while (iterator.hasNext()) {
                Row currentRow = iterator.next();
                if (currentRow.getCell(27) != null && currentRow.getCell(27).toString().trim().length() > 0) {
                    String street1 = currentRow.getCell(5) == null ? "" : currentRow.getCell(5).toString();
                    String street2 = currentRow.getCell(6) == null ? "" : currentRow.getCell(6).toString();

                    User user = new User(currentRow.getCell(2) == null ? "" : currentRow.getCell(2).toString(),
                            currentRow.getCell(1) == null ? "" : currentRow.getCell(1).toString(),
                            currentRow.getCell(27) == null ? "" : currentRow.getCell(27).toString(),
                            currentRow.getCell(18) == null ? "" : currentRow.getCell(18).toString(),
                            street1 + street2,
                            currentRow.getCell(7) == null ? "" : currentRow.getCell(7).toString(),
                            currentRow.getCell(8) == null ? "" : currentRow.getCell(8).toString(),
                            currentRow.getCell(9) == null ? "" : currentRow.getCell(9).toString(),
                            Util.randomAlphaNumeric(5),
                            currentRow.getCell(33) == null ? "" : currentRow.getCell(33).toString(),
                            currentRow.getCell(34) == null ? "" : currentRow.getCell(34).toString(),
                            currentRow.getCell(35) == null ? "" : currentRow.getCell(35).toString(),
                            currentRow.getCell(35) == null ? "" : currentRow.getCell(35).toString(),
                            currentRow.getCell(36) == null ? "" : currentRow.getCell(36).toString(),
                            currentRow.getCell(36) == null ? "" : currentRow.getCell(36).toString(),
                            currentRow.getCell(37) == null ? "" : currentRow.getCell(37).toString(),
                            currentRow.getCell(37) == null ? "" : currentRow.getCell(37).toString(),
                            currentRow.getCell(38) == null ? "" : currentRow.getCell(38).toString(),
                            currentRow.getCell(38) == null ? "" : currentRow.getCell(38).toString(),
                            currentRow.getCell(39) == null ? "" : currentRow.getCell(39).toString(),
                            currentRow.getCell(39) == null ? "" : currentRow.getCell(39).toString(),
                            "N",
                            new Date(),
                            new Date(),
                            "System",
                            "System");

                    System.out.println("user: " + user);

                    String sqlQuery = "Insert into USER_TABLE (FIRST_NAME,LAST_NAME,EMAIL,PHONE_NUMBER,STREET_ADDRESS,CITY,STATE,ZIP,PASSWORD," +
                            "FAMILY_GOTHRAM,PRIMARY_NAKSHATHRAM,PRIMARY_PADAM,SPOUSE_NAME,SPOUSE_NAKSHATHRAM,SPOUSE_PADAM,CHILD1_NAME,CHILD1_NAKSHATHRAM," +
                            "CHILD1_PADAM,CHILD2_NAME,CHILD2_NAKSHATHRAM,CHILD2_PADAM,CHILD3_NAME,CHILD3_NAKSHATHRAM,CHILD3_PADAM,CHILD4_NAME,CHILD4_NAKSHATHRAM," +
                            "CHILD4_PADAM,IS_ADMIN,UPDATED_DATE,CREATED_DATE,UPDATED_USER,CREATED_USER)\n" +
                            " values (" +
                            "'" + user.getFirstName() + "', " +
                            "'" + user.getLastName() + "', " +
                            "'" + user.getEmail() + "', " +
                            "'" + user.getPhoneNumber() + "', " +
                            "'" + user.getStreetAddress() + "', " +
                            "'" + user.getCity() + "', " +
                            "'" + user.getState() + "', " +
                            "'" + user.getZip() + "', " +
                            "'" + Util.randomAlphaNumeric(6) + "', " +
                            "'" + user.getFamilyGothram() + "', " +
                            "'" + user.getPrimaryNakshathram() + "', " +
                            null + ", " +
                            "'" + user.getSpouseName() + "', " +
                            "'" + user.getSpouseNakshathram() + "', " +
                            "'" + null + ", " +
                            "'" + user.getChild1Name() + "', " +
                            "'" + user.getChild1Nakshathram() + "', " +
                            "'" + null + ", " +
                            "'" + user.getChild2Name() + "', " +
                            "'" + user.getChild2Nakshathram() + "', " +
                            "'" + null + ", " +
                            "'" + user.getChild3Name() + "', " +
                            "'" + user.getChild3Nakshathram() + "', " +
                            "'" + null + ", " +
                            "'" + user.getChild4Name() + "', " +
                            "'" + user.getChild4Nakshathram() + "', " +
                            "'" + null + ", " +
                            "'N'," +
                            "getdate()," +
                            "getdate()," +
                            "'System'," +
                            "'System'" +
                            ")";
                    System.out.println("sqlQuery: " + sqlQuery);
                }
            }
        } catch (Exception e) {
            e.printStackTrace();
        }
    }
}