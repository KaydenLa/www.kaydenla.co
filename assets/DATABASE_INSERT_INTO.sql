-- MAKE EMPLOYEE:
insert into EMPLOYEE()
values (832, "Jayson", "Myers");

-- MAKE TRUCK (REQ: EMPLOYEE):
insert into TRUCK()
values(1998,281,"Chevy","Cobalt",2008);

-- MAKE PACKAGE (REQ: TRUCK REQ:EMPLOYEE):
insert into PACKAGE()
values(8726,"09/25/2023");

insert into PTL(AUTO_PTL_ID, PACKAGE_ID, TRUCK_ID)
values(75412,8726,1998);


-- MAKE CUSTOMER:
INSERT INTO CUSTOMER()
VALUES(538,"Mark", "Shepherd","5133, Richmond, Ave, Houston");

-- Make INVOICE (REQ: Customer)
INSERT INTO INVOICE()
values (2219, 538, "10/04/2023");

-- Make Warehouse
insert into WAREHOUSE()
values(512, "Warehouse2","Houston");

-- Make Item (REQ: Warehouse)
insert into ITEM()
values(834, "TallGlass", 10.4);
insert into WHIL()
values (12465, 834, 512);

-- MAKE IIL (Item Invoice List) (REQ: ITEM & REQ: Invoice REQ: Customer)
insert into IIL()
values(23642, 853, 2219);

select * from ITEM;
select * from INVOICE;

-- MAKE IIPL (Item Invoice Package List) (REQ: ITEM * REQ: INVOICE REQ:Customer & REQ: PACKAGE)
insert into IIPL()
VALUES (23557, 834, 2211, 8726);

select * from IIL;
select * from PACKAGE;

