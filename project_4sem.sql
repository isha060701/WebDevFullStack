
create database placement_db;
use placement_db;

create table Student(
usn varchar(10),
password varchar(20),
name varchar(20),
email varchar(20),
cgpa float,
tenth_per float, 
twelfth_per float,
dept_name varchar(50),
backlogs varchar(50),
primary key(usn));

create table Resume(
usn varchar(10),
resume_file varchar(50) UNIQUE,
primary key(usn),
foreign key(usn) references Student(usn));

create table Company(
comp_id int,
password varchar(20),
cname varchar(15),
cgpa_crit float,
tenth_per_crit float, 
twelfth_per_crit float,
backlogs varchar(50),
offering varchar(30),
dname varchar(50),
ctc_package int,
internship_info int,
location varchar(255),
role varchar(50),
tentative_test_date date,
additional_instruction varchar(255),
primary key(comp_id));

create table Applies(
usn varchar(10),
compid int,
primary key(usn,compid),
foreign key(usn) references Student(usn),
foreign key(compid) references Company(comp_id));

create table Offers_job(
compid int,
usn varchar(10),
primary key(compid, usn),
foreign key(compid) references Company(comp_id),
foreign key(usn) references student(usn));
