DROP TABLE USER_PRODUCT_TABLE;
DROP TABLE USER_TABLE;
DROP TABLE PRODUCT_TABLE;
DROP TABLE CONFIGURATION_TABLE;

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
  CONSTRAINT UNI_FIRST_NAME_LAST_NAME UNIQUE (FIRST_NAME, LAST_NAME),
  CONSTRAINT UNI_EMAIL UNIQUE (EMAIL),
  CONSTRAINT UNI_PHONE_NUMBER UNIQUE (PHONE_NUMBER)
);

CREATE TABLE PRODUCT_TABLE (
  PRODUCT_ID INT NOT NULL IDENTITY,
  NAME VARCHAR(200) NOT NULL,
  LOCATION VARCHAR(50) NOT NULL,
  SCHEDULE VARCHAR(50) NOT NULL,
  DATE_OF_SERVICE DATE,
  TIME_OF_SERVICE TIME,
  PRICE DECIMAL(10, 2) NOT NULL,
  DESCRIPTION VARCHAR(500) NOT NULL,
  UPDATED_DATE DATETIME NOT NULL,
  CREATED_DATE DATETIME NOT NULL,
  UPDATED_USER VARCHAR(50) NOT NULL,
  CREATED_USER VARCHAR(50) NOT NULL,
  PRIMARY KEY (PRODUCT_ID)
);

CREATE TABLE USER_PRODUCT_TABLE (
  USER_PRODUCT_ID INT NOT NULL IDENTITY,
  USER_ID INT NOT NULL,
  PRODUCT_ID INT NOT NULL,
  ORDER_NUMBER VARCHAR(20) NOT NULL,
  NOTES VARCHAR(500),
  STATUS VARCHAR(50) NOT NULL,
  DATE_TIME VARCHAR(50),
  UPDATED_DATE DATE NOT NULL,
  CREATED_DATE DATETIME NOT NULL,
  UPDATED_USER VARCHAR(50) NOT NULL,
  CREATED_USER VARCHAR(50) NOT NULL,
  PRIMARY KEY (USER_PRODUCT_ID),
  CONSTRAINT FK_PRODUCT_ID FOREIGN KEY (PRODUCT_ID)
             REFERENCES PRODUCT_TABLE (PRODUCT_ID),
  CONSTRAINT FK_USER_ID FOREIGN KEY (USER_ID)
             REFERENCES USER_TABLE (USER_ID)
);

CREATE TABLE CONFIGURATION_TABLE (
  CONFIGURATION_ID INT NOT NULL IDENTITY,
  CONFIGURATION_NAME VARCHAR(100) NOT NULL,
  VALUE VARCHAR(100) NOT NULL,
  UPDATED_DATE DATETIME NOT NULL,
  CREATED_DATE DATETIME NOT NULL,
  UPDATED_USER VARCHAR(50) NOT NULL,
  CREATED_USER VARCHAR(50) NOT NULL,
  PRIMARY KEY (CONFIGURATION_ID),
  CONSTRAINT UNI_CONFIGURATION_NAME UNIQUE (CONFIGURATION_NAME)
);

Insert into CONFIGURATION_TABLE (CONFIGURATION_NAME, VALUE, UPDATED_DATE, CREATED_DATE, UPDATED_USER, CREATED_USER)
values ('recipients','manu_may@yahoo.com, manudr@hotmail.com',getdate(),getdate(),'Manu','Manu');

Insert into USER_TABLE (FIRST_NAME,LAST_NAME,EMAIL,PHONE_NUMBER,STREET_ADDRESS,CITY,STATE,ZIP,PASSWORD,FAMILY_GOTHRAM,PRIMARY_NAKSHATHRAM,PRIMARY_PADAM,SPOUSE_NAME,SPOUSE_NAKSHATHRAM,SPOUSE_PADAM,CHILD1_NAME,CHILD1_NAKSHATHRAM,CHILD1_PADAM,CHILD2_NAME,CHILD2_NAKSHATHRAM,CHILD2_PADAM,CHILD3_NAME,CHILD3_NAKSHATHRAM,CHILD3_PADAM,CHILD4_NAME,CHILD4_NAKSHATHRAM,CHILD4_PADAM,IS_ADMIN,UPDATED_DATE,CREATED_DATE,UPDATED_USER,CREATED_USER)
  values ('Sreedhar','Donthula','sdonthula@gmail.com','3039035211','16133 E Maplewood Pl','Centennial','CO','80016','Wuu4NAfElgT8N5XiKxPd/w==','Padigashila','Poorvabhadra',null,'Parvathi Donthula','Satabisham',null,'Sahiti','Krittika',null,'Samhita','Pushyami',null,'','',null,'','',null,'N',GETDATE(),GETDATE(),'Manu','Manu');
Insert into USER_TABLE (FIRST_NAME,LAST_NAME,EMAIL,PHONE_NUMBER,STREET_ADDRESS,CITY,STATE,ZIP,PASSWORD,FAMILY_GOTHRAM,PRIMARY_NAKSHATHRAM,PRIMARY_PADAM,SPOUSE_NAME,SPOUSE_NAKSHATHRAM,SPOUSE_PADAM,CHILD1_NAME,CHILD1_NAKSHATHRAM,CHILD1_PADAM,CHILD2_NAME,CHILD2_NAKSHATHRAM,CHILD2_PADAM,CHILD3_NAME,CHILD3_NAKSHATHRAM,CHILD3_PADAM,CHILD4_NAME,CHILD4_NAKSHATHRAM,CHILD4_PADAM,IS_ADMIN,UPDATED_DATE,CREATED_DATE,UPDATED_USER,CREATED_USER)
  values ('Ravinder','Vookanti','vookanti@comcast.net','7202216978','26356 E Peakview Dr','Aurora','Colorado','80016','6IKOEjiJAfXSb+DBNpvB6w==','Paidipala','',null,'','',null,'','',null,'','',null,'','',null,'','',null,'N',GETDATE(),GETDATE(),'Manu','Manu');
Insert into USER_TABLE (FIRST_NAME,LAST_NAME,EMAIL,PHONE_NUMBER,STREET_ADDRESS,CITY,STATE,ZIP,PASSWORD,FAMILY_GOTHRAM,PRIMARY_NAKSHATHRAM,PRIMARY_PADAM,SPOUSE_NAME,SPOUSE_NAKSHATHRAM,SPOUSE_PADAM,CHILD1_NAME,CHILD1_NAKSHATHRAM,CHILD1_PADAM,CHILD2_NAME,CHILD2_NAKSHATHRAM,CHILD2_PADAM,CHILD3_NAME,CHILD3_NAKSHATHRAM,CHILD3_PADAM,CHILD4_NAME,CHILD4_NAKSHATHRAM,CHILD4_PADAM,IS_ADMIN,UPDATED_DATE,CREATED_DATE,UPDATED_USER,CREATED_USER)
  values ('Satyanarayana','Velagapudi','satya1116@yahoo.com','7205605869','3251 Chandon Way','Highlands Ranch','CO','80126','w+Qyd46E6A8CxceX1Tvt5g==','Chennamallu','Sathabhisha',null,'Usha','Revathi',null,'Vijay Aditya','Visakha',null,'','',null,'','',null,'','',null,'N',GETDATE(),GETDATE(),'Manu','Manu');
Insert into USER_TABLE (FIRST_NAME,LAST_NAME,EMAIL,PHONE_NUMBER,STREET_ADDRESS,CITY,STATE,ZIP,PASSWORD,FAMILY_GOTHRAM,PRIMARY_NAKSHATHRAM,PRIMARY_PADAM,SPOUSE_NAME,SPOUSE_NAKSHATHRAM,SPOUSE_PADAM,CHILD1_NAME,CHILD1_NAKSHATHRAM,CHILD1_PADAM,CHILD2_NAME,CHILD2_NAKSHATHRAM,CHILD2_PADAM,CHILD3_NAME,CHILD3_NAKSHATHRAM,CHILD3_PADAM,CHILD4_NAME,CHILD4_NAKSHATHRAM,CHILD4_PADAM,IS_ADMIN,UPDATED_DATE,CREATED_DATE,UPDATED_USER,CREATED_USER)
  values ('Jag','Kalagiri','jk24102011@gmail.com','3033242496','19358 E. Briarwood Pl','Centennial','CO','80016','6eOAODeoqLqLg4w8CFMoXw==','','',null,'','',null,'','',null,'','',null,'','',null,'','',null,'N',GETDATE(),GETDATE(),'Manu','Manu');
Insert into USER_TABLE (FIRST_NAME,LAST_NAME,EMAIL,PHONE_NUMBER,STREET_ADDRESS,CITY,STATE,ZIP,PASSWORD,FAMILY_GOTHRAM,PRIMARY_NAKSHATHRAM,PRIMARY_PADAM,SPOUSE_NAME,SPOUSE_NAKSHATHRAM,SPOUSE_PADAM,CHILD1_NAME,CHILD1_NAKSHATHRAM,CHILD1_PADAM,CHILD2_NAME,CHILD2_NAKSHATHRAM,CHILD2_PADAM,CHILD3_NAME,CHILD3_NAKSHATHRAM,CHILD3_PADAM,CHILD4_NAME,CHILD4_NAKSHATHRAM,CHILD4_PADAM,IS_ADMIN,UPDATED_DATE,CREATED_DATE,UPDATED_USER,CREATED_USER)
  values ('Manu','D','manudr@hotmail.com','8979879879','kjhkjhkj','khkjh','kjhkjh','89798','6hdLEgwAjr4/R3acmBDiZw==','','',null,'','',null,'','',null,'','',null,'','',null,'','',null,'Y',GETDATE(),GETDATE(),'Manu D','Manu D');
Insert into USER_TABLE (FIRST_NAME,LAST_NAME,EMAIL,PHONE_NUMBER,STREET_ADDRESS,CITY,STATE,ZIP,PASSWORD,FAMILY_GOTHRAM,PRIMARY_NAKSHATHRAM,PRIMARY_PADAM,SPOUSE_NAME,SPOUSE_NAKSHATHRAM,SPOUSE_PADAM,CHILD1_NAME,CHILD1_NAKSHATHRAM,CHILD1_PADAM,CHILD2_NAME,CHILD2_NAKSHATHRAM,CHILD2_PADAM,CHILD3_NAME,CHILD3_NAKSHATHRAM,CHILD3_PADAM,CHILD4_NAME,CHILD4_NAKSHATHRAM,CHILD4_PADAM,IS_ADMIN,UPDATED_DATE,CREATED_DATE,UPDATED_USER,CREATED_USER)
  values ('Manmohan','Dronamraju','mdrnju@gmail.com','9879879879','876876786','87686','utyuytuyt','89787','6gSaqXnTpNp+katAO8vJww==','','',null,'','',null,'','',null,'','',null,'','',null,'','',null,'N',GETDATE(),GETDATE(),'Manmohan Dronamraju','Manmohan Dronamraju');


--Insert into USER_TABLE (FIRST_NAME,LAST_NAME,EMAIL,PHONE_NUMBER,STREET_ADDRESS,CITY,STATE,ZIP,PASSWORD,FAMILY_GOTHRAM,PRIMARY_NAKSHATHRAM,PRIMARY_PADAM,SPOUSE_NAME,SPOUSE_NAKSHATHRAM,SPOUSE_PADAM,CHILD1_NAME,CHILD1_NAKSHATHRAM,CHILD1_PADAM,CHILD2_NAME,CHILD2_NAKSHATHRAM,CHILD2_PADAM,CHILD3_NAME,CHILD3_NAKSHATHRAM,CHILD3_PADAM,CHILD4_NAME,CHILD4_NAKSHATHRAM,CHILD4_PADAM,IS_ADMIN,UPDATED_DATE,CREATED_DATE,UPDATED_USER,CREATED_USER)
--values ('Manu','D','manudr@hotmail.com','7868767868','jhkjhkjhkj','kjhkjh','nbmnbmn','67576','pass12345','nbvnvnbv','lkjlkjk','','','','','','','','','','','','','','','','','N',getdate(),getdate(),'Manu','Manu');

Insert into PRODUCT_TABLE (NAME,LOCATION,SCHEDULE,DATE_OF_SERVICE,TIME_OF_SERVICE,PRICE,DESCRIPTION,UPDATED_DATE,CREATED_DATE,UPDATED_USER,CREATED_USER)
values ('Sri Mahalakshmi Abhishekam', 'Temple', 'Ugadi Special Event', convert(datetime,'28-03-17',5), '08:00', 51.00, 'Sri Mahalakshmi Abhishekam Kumkumarchana', GETDATE(), GETDATE(), 'Manu', 'Manu');

Insert into PRODUCT_TABLE (NAME,LOCATION,SCHEDULE,DATE_OF_SERVICE,TIME_OF_SERVICE,PRICE,DESCRIPTION,UPDATED_DATE,CREATED_DATE,UPDATED_USER,CREATED_USER)
values ('Sri Mahalakshmi Kumkumarchana', 'Temple', 'Ugadi Special Event', convert(datetime,'28-03-17',5), '09:30', 31.00, 'Sri Mahalakshmi Astothara Kumkumarchana', GETDATE(), GETDATE(), 'Manu', 'Manu');

Insert into PRODUCT_TABLE (NAME,LOCATION,SCHEDULE,DATE_OF_SERVICE,TIME_OF_SERVICE,PRICE,DESCRIPTION,UPDATED_DATE,CREATED_DATE,UPDATED_USER,CREATED_USER)
values ('Unjal Seva', 'Temple', 'Ugadi Special Event', convert(datetime,'28-03-17',5), '02:30', 51.00, 'Unjal Seva', '2017-03-28', GETDATE(), 'Manu', 'Manu');

Insert into PRODUCT_TABLE (NAME,LOCATION,SCHEDULE,DATE_OF_SERVICE,TIME_OF_SERVICE,PRICE,DESCRIPTION,UPDATED_DATE,CREATED_DATE,UPDATED_USER,CREATED_USER)
values ('Grand Sponsor (All of the above)', 'Temple', 'Ugadi Special Event',convert(datetime,'28-03-17',5), '20:00', 116.00, 'Grand Sponsor (All of the above)', GETDATE(), GETDATE(), 'Manu', 'Manu');