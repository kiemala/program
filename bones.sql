
CREATE DATABASE bones;
USE bones;

CREATE TABLE Experiment(
id_exp INT(10) NOT NULL AUTO_INCREMENT,
date VARCHAR(30) NOT NULL,
time VARCHAR(30) NOT NULL,
name VARCHAR(30) NOT NULL,
bones_num INT(10) NOT NULL,
throws INT(10) NOT NULL,
PRIMARY KEY (id_exp)
);

CREATE TABLE Results (
id_result INT(10) NOT NULL AUTO_INCREMENT,
num INT(10) NOT NULL,
count INT(10) NOT NULL,
id_exp INT(11) NOT NULL,
PRIMARY KEY (id_result),
FOREIGN KEY (id_exp) REFERENCES Experiment (id_exp)
);



