DROP SCHEMA IF EXISTS myAssignment2043;
CREATE SCHEMA myAssignment2043;         
USE myAssignment2043;


CREATE TABLE members (
	member_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	student_id VARCHAR (20) NOT NULL,		
	student_password VARCHAR (20) NOT NULL,	
	student_name VARCHAR (20) NOT NULL
);



