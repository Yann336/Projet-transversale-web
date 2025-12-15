DROP DATABASE IF EXISTS Clarte_Ornee;
CREATE DATABASE Clarte_Ornee CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE Clarte_Ornee;

CREATE TABLE Lamps(
    name VARCHAR (50) NOT NULL,
    idLamp INT NOT NULL AUTO_INCREMENT,
    TypeLamp VARCHAR (50) NOT NULL,
    name VARCHAR (50) NOT NULL,
    Power VARCHAR (50) NOT NULL,
    Color VARCHAR (50) NOT NULL,
    Price DECIMAL (6, 2) NOT NULL,
    Style VARCHAR (50) NOT NULL,
    Material VARCHAR (50) NOT NULL,
    Dimensions VARCHAR (50) NOT NULL,
    Description VARCHAR (1000) NOT NULL,
    Quantity INT(8) NOT NULL,
    PathPicture VARCHAR(255) NOT NULL,
    PRIMARY KEY (idLamp)
) ENGINE = INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE Customers(
    idCustomer INT NOT NULL AUTO_INCREMENT,
    Name VARCHAR(50) NOT NULL,
    Lastname VARCHAR(50) NOT NULL,
    Email VARCHAR(50) NOT NULL,
    Street VARCHAR(50) NOT NULL,
    City VARCHAR(50) NOT NULL,
    Country VARCHAR(50) NOT NULL,
    PostCode VARCHAR(10) NOT NULL,
    NumberPhone VARCHAR(12) NOT NULL,
    password VARCHAR(255) NOT NULL,
    PRIMARY KEY (idCustomer)
) ENGINE = INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE Baskets(
    idBasket INT NOT NULL AUTO_INCREMENT,
    idLamp INT NOT NULL,
    idCustomer INT NOT NULL,
    Quantity INT(8) NOT NULL,
    PRIMARY KEY (idBasket),
    CONSTRAINT fk_BasketLamp FOREIGN KEY (idLamp) REFERENCES Lamps (idLamp),
    CONSTRAINT fk_BasketCustomer FOREIGN KEY (idCustomer) REFERENCES Customers(idCustomer)
) ENGINE = INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE Associates(
    idAssociate INT NOT NULL AUTO_INCREMENT,
    idLamp INT NOT NULL,
    idOrder INT NOT NULL,
    Quantity INT NOT NULL,
    PriceBought INT NOT NULL,
    PRIMARY KEY (idAssociate),
    CONSTRAINT fk_AssociateLamp FOREIGN KEY (idLamp) REFERENCES Lamps (idLamp)
) ENGINE = INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE CustomerService(
    idCustomerService INT NOT NULL AUTO_INCREMENT,
    Request VARCHAR(1000) NULL,
    OrderNumber INT NOT NULL,
    PRIMARY KEY (idCustomerService),
    CONSTRAINT fk_CustomerService-Customers FOREIGN KEY (idCustomer) REFERENCES Customers(idCustomer)
) ENGINE = INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;