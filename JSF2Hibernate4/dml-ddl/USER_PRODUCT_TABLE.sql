DROP TABLE USER_PRODUCT_TABLE

CREATE TABLE USER_PRODUCT_TABLE (
ID INT NOT NULL PRIMARY KEY,
USER_ID INT NOT NULL FOREIGN KEY REFERENCES USER_TABLE(ID),
PRODUCT_ID INT NOT NULL FOREIGN KEY REFERENCES PRODUCT_TABLE(ID),
NOTES VARCHAR(500) NOT NULL,
STATUS VARCHAR(50) NOT NULL,
DATE_TIME DATETIME NOT NULL,
UPDATED_DATE DATETIME NOT NULL,
CREATED_DATE DATETIME NOT NULL,
UPDATED_USER VARCHAR(50) NOT NULL,
CREATED_USER VARCHAR(50) NOT NULL
)
