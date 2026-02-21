--Name: Samuel Olagoke
--Date: October 3, 2025
--Course: IT202-003
--Assignment: Phase01
--Email: sio6@njit,edu
SHOW DATABASES;

CREATE TABLE ShirtManagers(
ShirtManagerID      INT(11)      NOT NULL   AUTO_INCREMENT,
emailAddress        VARCHAR(255)   NOT NULL   UNIQUE,
password            VARCHAR(64)    NOT NULL,
pronouns            VARCHAR(60)    NOT NULL,
firstName           VARCHAR(60)    NOT NULL,
lastName            VARCHAR(60)    NOT NULL,
DateTimeCreated     TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
DateTimeUpdated     TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
PRIMARY KEY (ShirtManagerID)
);

INSERT INTO ShirtManagers 
(emailAddress, password, pronouns, firstName, lastName)
VALUES
('Kev@shirtShop.com', SHA2('myL0ngP@ssword', 256), 'He/Him', 'Kevin', 'Fudge');

INSERT INTO ShirtManagers 
(emailAddress, password, pronouns, firstName, lastName)
VALUES
('ZAZ@shirtShop.com', SHA2('myL0ngP@ssword', 256), 'He/Him', 'Zach', 'Zaborenko');
INSERT INTO ShirtManagers 
(emailAddress, password, pronouns, firstName, lastName)
VALUES
('Demide@shirtShop.com', SHA2('myL0ngP@ssword', 256), 'She/Her', 'Ademide', 'Johnson');

SELECT * FROM ShirtManagers;