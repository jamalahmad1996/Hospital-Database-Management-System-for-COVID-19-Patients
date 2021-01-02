CREATE DATABASE covid_tracker;
USE covid_tracker;

create table Visit(
	Log_NO int PRIMARY KEY,
	Date Date,
	Symptoms VARCHAR(1000)
	);



CREATE TABLE Doctor (
	Doctor_ID int PRIMARY KEY,
	LastName varchar(50),
	FirstName VARCHAR(50),
	Gender VARCHAR(5),
	Office int,
	Phone VARCHAR(50)
);

CREATE TABLE Nurse (
	Nurse_ID int PRIMARY KEY,
	LastName varchar(50),
	FirstName VARCHAR(50),
	Gender VARCHAR(5),
	Office int,
	Phone VARCHAR(50)
);

CREATE TABLE Patient (
	SSN int PRIMARY KEY,
	LastName varchar(50),
	FirstName VARCHAR(50),
	Gender VARCHAR(5),
	DOB DATE,
	Address VARCHAR(1000),
	Phone VARCHAR(50)
);

CREATE TABLE Diagnosis (
	Diagnosis Varchar(1000),
	Hospitalization VARCHAR(5) DEFAULT 'N',
	Treatment_period int,
	Room_Assigned Varchar(50) DEFAULT 'none',
	Test_frequency Varchar(50),
	SSN int,
	Doctor_ID int,
	Nurse_ID int,
	FOREIGN KEY (SSN) REFERENCES Patient(SSN) ON DELETE CASCADE,
	FOREIGN KEY (Doctor_ID) REFERENCES Doctor(Doctor_ID),
	FOREIGN KEY (Nurse_ID) REFERENCES Nurse(Nurse_ID)
	);


CREATE TABLE Registers (
	SSN int,
	Log_NO int,
	FOREIGN KEY (SSN) REFERENCES Patient(SSN) ON DELETE CASCADE,
	FOREIGN KEY (Log_NO) REFERENCES Visit(Log_NO)
	);

CREATE TABLE Lab (
	Lab_NO int PRIMARY KEY,
	Test_type varchar(50),
	Response_time varchar(50)
	);



CREATE TABLE Tests (
	NumberOfTests int,
	Date date,
	Result varchar(50),
	SSN int,
	Lab_NO int,
	FOREIGN KEY (SSN) REFERENCES Patient(SSN) ON DELETE CASCADE,
	FOREIGN KEY (Lab_NO) REFERENCES Lab(Lab_NO)
);


CREATE TABLE Appointed (
	Doctor_ID int,
	Log_NO int,
	FOREIGN KEY (Doctor_ID) REFERENCES Doctor(Doctor_ID),
	FOREIGN KEY (Log_NO) REFERENCES Visit(Log_NO)
	);


CREATE TABLE Medical_supply (
	Name VARCHAR(200),
	Type VARCHAR(100),
	Quantity int,
	Lab_NO int,
	FOREIGN KEY (Lab_NO) REFERENCES Lab (Lab_NO)
);