package com.dronamraju.svtemple.util;


import org.apache.poi.ss.usermodel.Cell;
import org.apache.poi.ss.usermodel.Row;
import org.apache.poi.xssf.usermodel.XSSFSheet;
import org.apache.poi.xssf.usermodel.XSSFWorkbook;

import java.io.File;
import java.io.FileInputStream;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.Statement;
import java.util.Date;
import java.util.Iterator;

/**
 * Created by mdronamr on 3/28/17.
 */
public class ReadExcel
{
    public static void main(String[] args)
    {
        try
        {
            String USER = "svt0722712121140";
            String PASS = "SVTemple@2014";
            Connection conn = null;
            Statement stmt = null;
            Class.forName("com.microsoft.sqlserver.jdbc.SQLServerDriver");
            String dbUrl = "jdbc:sqlserver://svt0722712121140.db.2655960.hostedresource.com:1433;database=svt0722712121140";

            conn = DriverManager.getConnection(dbUrl,USER,PASS);
            stmt = conn.createStatement();

            FileInputStream file = new FileInputStream(new File("/Users/admin/development/modules/svtco/onlineRegistration/src/main/java/com/dronamraju/svtemple/util/POSCustomers.xls"));

            //Create Workbook instance holding reference to .xlsx file
            XSSFWorkbook workbook = new XSSFWorkbook(file);

            //Get first/desired sheet from the workbook
            XSSFSheet sheet = workbook.getSheetAt(0);

            //Iterate through each rows one by one
            Iterator<Row> rowIterator = sheet.iterator();

            while (rowIterator.hasNext()) {
                Row row = rowIterator.next();
                Iterator<Cell> cellIterator1 = row.cellIterator();
                while (cellIterator1.hasNext()) {
                    Cell cell = cellIterator1.next();
                    switch (cell.getCellType()) {
                        case Cell.CELL_TYPE_NUMERIC:
                            System.out.print(cell.getNumericCellValue() + "(" + cell.getColumnIndex() + ")" + ", ");
                            break;
                        case Cell.CELL_TYPE_STRING:
                            System.out.print(cell.getStringCellValue() + "(" + cell.getColumnIndex() + ")" + ", ");
                            break;
                    }
                }
            }

            /*
            while (rowIterator.hasNext())
            {
                Row row = rowIterator.next();

                //For each row, iterate through all the columns
                Iterator<Cell> cellIterator = row.cellIterator();

                while (cellIterator.hasNext())
                {
                    Cell cell = cellIterator.next();
                    //Check the cell type and format accordingly
                    if (cell.getColumnIndex() == 27 && cell.getStringCellValue() != null && cell.getStringCellValue().trim().length() > 0) {
                        Row row1 = cell.getRow();

                        System.out.print("row1: " + row1);

                        String sql = "INSERT INTO USER_TABLE (FIRST_NAME,LAST_NAME,EMAIL,PHONE_NUMBER,STREET_ADDRESS,CITY,STATE,ZIP,PASSWORD,FAMILY_GOTHRAM,PRIMARY_NAKSHATHRAM,PRIMARY_PADAM,SPOUSE_NAME,SPOUSE_NAKSHATHRAM,SPOUSE_PADAM,CHILD1_NAME,CHILD1_NAKSHATHRAM,CHILD1_PADAM,CHILD2_NAME,CHILD2_NAKSHATHRAM,CHILD2_PADAM,CHILD3_NAME,CHILD3_NAKSHATHRAM,CHILD3_PADAM,CHILD4_NAME,CHILD4_NAKSHATHRAM,CHILD4_PADAM,IS_ADMIN,UPDATED_DATE,CREATED_DATE,UPDATED_USER,CREATED_USER) VALUES (" +
                                (row1.getCell(2)).getStringCellValue() + ", " +
                                row1.getCell(1).getStringCellValue() + ", " +
                                row1.getCell(27).getStringCellValue() + ", " +
                                row1.getCell(18).getStringCellValue() + ", " +
                                row1.getCell(5).getStringCellValue() + ' ' + row1.getCell(6).getStringCellValue() + ", " +
                                row1.getCell(7).getStringCellValue() + ", " +
                                row1.getCell(8).getStringCellValue() + ", " +
                                row1.getCell(9).getStringCellValue() + ", " +
                                Util.randomAlphaNumeric(8) + ", " +
                                null + ", " +
                                null + ", " +
                                null + ", " +
                                null + ", " +
                                null + ", " +
                                null + ", " +
                                null + ", " +
                                null + ", " +
                                null + ", " +
                                null + ", " +
                                null + ", " +
                                null + ", " +
                                null + ", " +
                                null + ", " +
                                null + ", " +
                                null + ", " +
                                null + ", " +
                                null + ", " +
                                'N' + ", " +
                                new Date() + ", " +
                                new Date() + ", " +
                                "'sys'" + ", " +
                                "'sys'" + ")";

                        System.out.println("sql: " + sql);

                        //stmt.executeQuery(sql);

                    }
                }

                System.out.println("\n");
            }
            */
            file.close();
        }
        catch (Exception e)
        {
            e.printStackTrace();
        }

    }
}