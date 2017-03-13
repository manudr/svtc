DROP TABLE USER_PRODUCT_TABLE;
DROP TABLE PRODUCT_TABLE;
DROP TABLE USER_TABLE;

CREATE TABLE USER_TABLE (
USER_ID INT NOT NULL IDENTITY,
FIRST_NAME VARCHAR(50) NOT NULL,
LAST_NAME VARCHAR(50) NOT NULL,
EMAIL VARCHAR(50) NOT NULL,
PHONE_NUMBER VARCHAR(50) NOT NULL,
STREET_ADDRESS VARCHAR(100) NOT NULL,
CITY VARCHAR(50) NOT NULL,
STATE VARCHAR(50) NOT NULL,
ZIP VARCHAR(50) NOT NULL,
PASSWORD VARCHAR(50) NOT NULL,
FAMILY_GOTHRAM VARCHAR(50),
PRIMARY_NAKSHATHRAM VARCHAR(50),
PRIMARY_PADAM VARCHAR(50),
SPOUSE_NAME VARCHAR(50),
SPOUSE_NAKSHATHRAM VARCHAR(50),
SPOUSE_PADAM VARCHAR(50),
CHILD1_NAME VARCHAR(50),
CHILD1_NAKSHATHRAM VARCHAR(50),
CHILD1_PADAM VARCHAR(50),
CHILD2_NAME VARCHAR(50),
CHILD2_NAKSHATHRAM VARCHAR(50),
CHILD2_PADAM VARCHAR(50),
CHILD3_NAME VARCHAR(50),
CHILD3_NAKSHATHRAM VARCHAR(50),
CHILD3_PADAM VARCHAR(50),
CHILD4_NAME VARCHAR(50),
CHILD4_NAKSHATHRAM VARCHAR(50),
CHILD4_PADAM VARCHAR(50),
IS_ADMIN VARCHAR(50),
UPDATED_DATE DATETIME,
CREATED_DATE DATETIME,
UPDATED_USER VARCHAR(50),
CREATED_USER VARCHAR(50),
PRIMARY KEY (USER_ID),
CONSTRAINT UNI_FIRST_NAME UNIQUE (FIRST_NAME),
CONSTRAINT UNI_LAST_NAME UNIQUE (LAST_NAME),
CONSTRAINT UNI_EMAIL UNIQUE (EMAIL),
CONSTRAINT UNI_PHONE_NUMBER UNIQUE (PHONE_NUMBER),
);

CREATE TABLE PRODUCT_TABLE (
PRODUCT_ID INT NOT NULL IDENTITY,
NAME VARCHAR(200) NOT NULL,
LOCATION VARCHAR(50) NOT NULL,
SCHEDULE VARCHAR(50) NOT NULL,
PRICE DECIMAL(18, 2) NOT NULL,
DESCRIPTION VARCHAR(500) NOT NULL,
UPDATED_DATE DATETIME NOT NULL,
CREATED_DATE DATETIME NOT NULL,
UPDATED_USER VARCHAR(50) NOT NULL,
CREATED_USER VARCHAR(50) NOT NULL,
PRIMARY KEY (PRODUCT_ID),
CONSTRAINT UNI_NAME UNIQUE (NAME),
CONSTRAINT UNI_LOCATION UNIQUE (LOCATION),
CONSTRAINT UNI_SCHEDULE UNIQUE (SCHEDULE),
CONSTRAINT UNI_PRICE UNIQUE (PRICE),
);

CREATE TABLE USER_PRODUCT_TABLE (
USER_ID INT NOT NULL,
PRODUCT_ID INT NOT NULL,
NOTES VARCHAR(500),
STATUS VARCHAR(50) NOT NULL,
DATE_TIME DATETIME NOT NULL,
UPDATED_DATE DATETIME NOT NULL,
CREATED_DATE DATETIME NOT NULL,
UPDATED_USER VARCHAR(50) NOT NULL,
CREATED_USER VARCHAR(50) NOT NULL,
PRIMARY KEY (USER_ID, PRODUCT_ID),
CONSTRAINT FK_USER_ID FOREIGN KEY (USER_ID) REFERENCES USER_TABLE (USER_ID),
CONSTRAINT FK_PRODUCT_ID FOREIGN KEY (PRODUCT_ID) REFERENCES PRODUCT_TABLE (PRODUCT_ID),
);