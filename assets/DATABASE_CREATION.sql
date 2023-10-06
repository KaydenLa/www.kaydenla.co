
CREATE TABLE WAREHOUSE (
	WAREHOUSE_ID int NOT NULL,
	TITLE VARCHAR(255),
    LOCATION VARCHAR(255) NOT NULL,
    PRIMARY KEY (WAREHOUSE_ID)
);
--WHIL: WAREHOUSE ITEM LIST
CREATE TABLE WHIL(
	WHIL_ID int NOT NULL,
    ITEM_ID int not null,
    WAREHOUSE_ID int not null,
    primary key (WHIL_ID),
    foreign key (WAREHOUSE_ID) references WAREHOUSE(WAREHOUSE_ID),
    foreign key (ITEM_ID) references ITEM(ITEM_ID)
);
CREATE TABLE ITEM(
	ITEM_ID int not null,
    ITEM_NAME varchar(255),
    ITEM_PRICE float NOT NULL,
    primary key (ITEM_ID)
);
-- IIL: ITEM INVOICE LIST
CREATE TABLE IIL(
	IIL_ID int not null,
    ITEM_ID int NOT NULL,
    INVOICE_ID int not null,
    primary key (IIL_ID),
    foreign key (ITEM_ID) references ITEM(ITEM_ID),
    foreign key (INVOICE_ID) references INVOICE(INVOICE_ID)
);
CREATE TABLE INVOICE (
	INVOICE_ID int not null,
    CUSTOMER_ID int not null,
    DATE varchar(255) not null,
	primary key (INVOICE_ID),
    foreign key (CUSTOMER_ID) references CUSTOMER(CUSTOMER_ID)
);
CREATE TABLE CUSTOMER(
	CUSTOMER_ID int not null,
    FNAME VARCHAR(255),
    LNAME VARCHAR(255),
    ADDRESS VARCHAR(255),
    PRIMARY KEY (CUSTOMER_ID)
);
-- IPL: INVOICE PACKAGE LIST
CREATE TABLE IPL(
	AUTO_IPL_ID int not null,
    INVOICE_ID int null null,
    PACKAGE_ID int not null,
    primary  key (AUTO_IPL_ID),
    foreign key (INVOICE_ID) references INVOICE(INVOICE_ID),
    foreign key (PACKAGE_ID) references PACKAGE(PACKAGE_ID)
);
CREATE TABLE PACKAGE(
	PACKAGE_ID int not null,
    CREATED_DATE varchar(255) not null,
    primary key (PACKAGE_ID)
);
CREATE TABLE PTL(
	AUTO_PTL_ID int not null,
	PACKAGE_ID int not null,
    TRUCK_ID int not null,
    primary key (AUTO_PTL_ID),
    foreign key (truck_ID) references TRUCK(TRUCK_ID),
    foreign key (PACKAGE_ID) references PACKAGE(PACKAGE_ID)
);
CREATE TABLE TRUCK(
	TRUCK_ID INT NOT NULL,
    EMPLOYEE_ID int NOT NULL,
    MAKE VARCHAR(255),
    MODEL VARCHAR(255),
    YEAR int,
    primary key (TRUCK_ID),
    foreign key (EMPLOYEE_ID) references EMPLOYEE(EMPLOYEE_ID)
);
CREATE TABLE EMPLOYEE(
	EMPLOYEE_ID int not null,
    FNAME varchar(255) not null,
    LNAME varchar(255),
    PRIMARY KEY (EMPLOYEE_ID)
);