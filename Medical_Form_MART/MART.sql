CREATE DATABASE MART_PATIENTS ;
create table Patient_INFO (
    ID INT primary key,
    first_n VARCHAR(50) NOT NULL,
    last_n VARCHAR(50) NOT NULL,
    gender VARCHAR(50) NOT NULL,
    DOB VARCHAR(50) NOT NULL,
    numb VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    addre VARCHAR(50) NOT NULL
)

CREATE TABLE BI0_DATA(
    ID INT primary key,
    height INT NOT NULL,
    weight INT NOT NULL,
    genotype VARCHAR(50) NOT NULL,
    blood_group VARCHAR(50) NOT NULL,
    health_con VARCHAR(50) NOT NULL
)

CREATE TABLE HABITS(
    ID INT primary key,
    smoke BIT ,
    drink BIT ,
    excercise BIT ,
    detox BIT ,
    therapy BIT ,
    meditaion BIT ,
    other_hobbies VARCHAR(50) 
)

CREATE TABLE PURPOSE(
    ID INT primary key,
    test BIT ,
    consult BIT ,
    ar_tech BIT ,
    pg_testing BIT ,
    donation BIT ,
    hormone_man BIT
)

CREATE TABLE E_CONTACT_1(
    ID INT primary key,
    E_first_name_1 VARCHAR(50) NOT NULL,
    E_last_name_1 VARCHAR(50) NOT NULL,
    E_relation_1 VARCHAR(50) NOT NULL,
    E_address_1 VARCHAR(50) NOT NULL,
    E_number_1 VARCHAR(50) NOT NULL,
    E_email_1 VARCHAR(50) NOT NULL
)

CREATE TABLE E_CONTACT_2(
    ID INT primary key,
    E_first_name_2 VARCHAR(50) NOT NULL,
    E_last_name_2 VARCHAR(50) NOT NULL,
    E_relation_2 VARCHAR(50) NOT NULL,
    E_address_2 VARCHAR(50) NOT NULL,
    E_number_2 VARCHAR(50) NOT NULL,
    E_email_2 VARCHAR(50) NOT NULL
)

INSERT INTO Patient_INFO (ID, first_n, last_n, gender, DOB, numb, email, addre)
VALUES (1,$data['first_n'],$data['last_n'],$data['gender'],$data['DOB'],$data['numb'],$data['email'],$data['addre']);

INSERT INTO BI0_DATA (ID, height, weight, genotype, blood_group, health_con)
VALUES (1,$data['height'],$data['weight'],$data['genotype'],$data['blood_group'],$data['health_con']);

INSERT INTO HABITS (ID, smoke, drink, excercise, detox, therapy, meditaion, other_hobbies)
VALUES (1,$data['smoke'],$data['drink'],$data['excercise'],$data['detox'],$data['therapy'],$data['meditaion'],$data['other_hobbies']);

INSERT INTO PURPOSE (ID, test, consult, ar_tech, pg_testing, donation,  hormone_man)
VALUES (1,$data['test'],$data['consult'],$data['ar_tech'],$data['pg_testing'],$data['donation'],$data['hormone_man']);

INSERT INTO E_CONTACT_1 (ID, E_first_name_1, E_last_name_1, E_relation_1, E_address_1, E_number_1, E_email_1)
VALUES (1,$data['E_first_name_1'],$data['E_last_name_1'],$data['E_relation_1'],$data['E_address_1'],$data['E_number_1'],$data['E_email_1']);    

INSERT INTO E_CONTACT_2 (ID, E_first_name_2, E_last_name_2, E_relation_2, E_address_2, E_number_2, E_email_2)   
VALUES (1,$data['E_first_name_2'],$data['E_last_name_2'],$data['E_relation_2'],$data['E_address_2'],$data['E_number_2'],$data['E_email_2']);   