<?php
$create_1 = "
CREATE TABLE Doctors (
    id int GENERATED BY DEFAULT AS IDENTITY PRIMARY KEY,
	FirstName varchar(255),
    LastName varchar(255),
	Phone varchar(255),
	Profession varchar(255),
	Gender varchar(255)
                     
)
";

$create_2 = "
CREATE TABLE Persons (
    id int GENERATED BY DEFAULT AS IDENTITY PRIMARY KEY,
	person_name varchar(255),
	diagnosis varchar(255),
	phone varchar(255),
    address varchar(255),
    dateofbirth varchar(255),
	gender varchar(255),
	status varchar(255),
	Id_Doctor int,
                     
    CONSTRAINT phone_person UNIQUE(phone)
)
";

$create_3 = "
CREATE TABLE Users
(
id int GENERATED BY DEFAULT AS IDENTITY PRIMARY KEY,
Login varchar(255) NOT NULL,
Password varchar(255),
DoctorId varchar(255),
Acl varchar(255),
CONSTRAINT login UNIQUE(login)
)
";

$create_4 ="
CREATE TABLE appoint
(
id int GENERATED BY DEFAULT AS IDENTITY PRIMARY KEY,
date date,
time time,
phone varchar(255) NOT NULL,
Id_Doctor int,

CONSTRAINT phone UNIQUE(phone)
)
";

//$create_5 =
//$create_6 =
////UPDATE users
////SET acl = 'admin'
////where id = 1
//// ";


