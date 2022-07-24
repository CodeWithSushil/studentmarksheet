CREATE DATABASE result;

CREATE TABLE marksheet (
    id int NOT NULL AUTO_INCREMENT,
    name varchar(255) NOT NULL,
    mil varchar(255) NOT NULL,
    eng varchar(255) NOT NULL,
    tlhs varchar(255) NOT NULL,
    math varchar(255) NOT NULL,
    gsc varchar(255) NOT NULL,
    ssc varchar(255) NOT NULL,
    mark varchar(255) NOT NULL,
    PRIMARY KEY (id)
);
