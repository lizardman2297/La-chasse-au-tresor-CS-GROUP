DROP DATABASE IF EXISTS chasseAuTresor;
CREATE DATABASE chasseAuTresor;
USE chasseAuTresor;

CREATE TABLE tuto(
    numTuto TINYINT UNSIGNED AUTO_INCREMENT,
    VALIDATION BOOLEAN NOT NULL,
    CONSTRAINT pk_tuto PRIMARY KEY (numTuto)
) ENGINE=INNODB CHARSET=UTF8;

INSERT INTO tuto VALUE(1, FALSE);
INSERT INTO tuto VALUE(2, FALSE);
INSERT INTO tuto VALUE(3, FALSE);