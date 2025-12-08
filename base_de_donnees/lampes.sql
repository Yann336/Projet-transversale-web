DROP DATABASE IF EXISTS Clarte_Ornee;
CREATE DATABASE Clarte_Ornee CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE Clarte_Ornee;

CREATE TABLE LampTypes(
    idType INT NOT NULL AUTO_INCREMENT,
    typeName VARCHAR (50) NOT NULL,
    catégorieDescription VARCHAR (500) NOT NULL,
    PRIMARY KEY (idType)
) ENGINE = INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE LivingRoomLamps(
    idLivingRoomLamp INT NOT NULL AUTO_INCREMENT,
    idType INT NOT NULL,
    power VARCHAR (50) NOT NULL,
    color VARCHAR (50) NOT NULL,
    price DECIMAL (5, 2) NOT NULL,
    style VARCHAR (50) NOT NULL,
    material VARCHAR (50) NOT NULL,
    dimensions VARCHAR (50) NOT NULL,
    description VARCHAR (1000) NOT NULL,
    PRIMARY KEY (idLivingRoomLamp),
    CONSTRAINT fk_living_type FOREIGN KEY (idType) REFERENCES LampTypes (idType)
) ENGINE = INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE WallLamps(
    idWallLamp INT NOT NULL AUTO_INCREMENT,
    idType INT NOT NULL,
    power VARCHAR (50) NOT NULL,
    color VARCHAR (50) NOT NULL,
    price DECIMAL (5, 2) NOT NULL,
    style VARCHAR (50) NOT NULL,
    material VARCHAR (50) NOT NULL,
    dimensions VARCHAR (50) NOT NULL,
    description VARCHAR (1000) NOT NULL,
    PRIMARY KEY (idWallLamp),
    CONSTRAINT fk_wall_type FOREIGN KEY (idType) REFERENCES LampTypes (idType)
) ENGINE = INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE OutdoorLamps(
    idOutdoorLamp INT NOT NULL AUTO_INCREMENT,
    idType INT NOT NULL,
    power VARCHAR (50) NOT NULL,
    color VARCHAR (50) NOT NULL,
    price DECIMAL (5, 2) NOT NULL,
    style VARCHAR (50) NOT NULL,
    material VARCHAR (50) NOT NULL,
    dimensions VARCHAR (50) NOT NULL,
    description VARCHAR (1000) NOT NULL,
    PRIMARY KEY (idOutdoorLamp),
    CONSTRAINT fk_outdoor_type FOREIGN KEY (idType) REFERENCES LampTypes (idType)
) ENGINE = INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE LampPictures(
    idPicture INT NOT NULL AUTO_INCREMENT,
    imagePath VARCHAR(255),
    altText VARCHAR(200) NULL,
    idLivingRoomLamp INT NULL,
    idWallLamp INT NULL,
    idOutdoorLamp INT NULL,
    PRIMARY KEY (idPicture),
    CONSTRAINT fk_img_living FOREIGN KEY (idLivingRoomLamp) REFERENCES LivingRoomLamps (idLivingRoomLamp),
    CONSTRAINT fk_img_wall FOREIGN KEY (idWallLamp) REFERENCES WallLamps (idWallLamp),
    CONSTRAINT fk_img_outdoor FOREIGN KEY (idOutdoorLamp) REFERENCES OutdoorLamps (idOutdoorLamp)
) ENGINE = INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE Customers(
    idClient INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    lastName VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    adress VARCHAR(50) NOT NULL,
    country VARCHAR(50) NOT NULL,
    postCode VARCHAR(10) NOT NULL,
    numberPhone VARCHAR(20) NOT NULL,
    PRIMARY KEY(idClient)
) ENGINE = INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE Orders(
    idOrder INT NOT NULL AUTO_INCREMENT,
    idLivingRoomLamp INT NULL,
    idWallLamp INT NULL,
    idOutdoorLamp INT NULL,
    orderDate DATE NOT NULL,
    quantity INT(10) NOT NULL,
    price DECIMAL(5, 2) NOT NULL,
    PRIMARY KEY(idOrder),
    CONSTRAINT fk_order_living FOREIGN KEY (idLivingRoomLamp) REFERENCES LivingRoomLamps (idLivingRoomLamp),
    CONSTRAINT fk_order_wall FOREIGN KEY (idWallLamp) REFERENCES WallLamps (idWallLamp),
    CONSTRAINT fk_order_outdoor FOREIGN KEY (idOutdoorLamp) REFERENCES OutdoorLamps (idOutdoorLamp)   
) ENGINE = INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO LampTypes (typeName, catégorieDescription) VALUES
('Lampadaire', 'Lampes sur pied offrant un éclairage diffus et élégant pour les grands espaces.'),
('Suspension', 'Lampes suspendues au design contemporain, idéales pour habiller une pièce.'),
('Lampe Murale', 'Lampes fixées au mur pour créer un éclairage d’ambiance moderne.'),
('Lampe d’Extérieur', 'Lampes résistantes aux intempéries avec un design architectural.');


INSERT INTO LivingRoomLamps (idType, power, color, price, style, material, dimensions, description) VALUES
(1, 'LED 14W', 'Blanc Mat', 499.90, 'Minimaliste', 'Polyéthylène', 'Ø 45 cm x H 150 cm',
 'Lampadaire aux lignes rondes rappelant les formes organiques iconiques de Martinelli Luce. Éclairage doux et uniforme.'),
(1, 'LED 10W', 'Noir Satiné', 629.00, 'Contemporain', 'Aluminium', 'Ø 30 cm x H 140 cm',
 'Design tubulaire épuré inspiré de la série Pipistrello. Idéal pour les salons modernes.'),
(2, 'LED 18W', 'Opale', 890.00, 'Design Italien', 'Verre Soufflé', 'Ø 50 cm',
 'Suspension sphérique diffusant une lumière homogène et raffinée, typique de l’esthétique Martinelli.');


INSERT INTO WallLamps (idType, power, color, price, style, material, dimensions, description) VALUES
(3, 'LED 8W', 'Blanc Opalin', 329.90, 'Géométrique', 'Polycarbonate', '30 cm x 12 cm',
 'Applique murale aux formes courbées, créant un jeu subtil d’ombre et de lumière.'),
(3, 'LED 6W', 'Gris Anthracite', 289.00, 'Architectural', 'Aluminium', '25 cm x 10 cm',
 'Ligne nette et moderne, inspirée de la rigueur chromatique de Martinelli Luce.'),
(3, 'LED 10W', 'Cuivre Brossé', 379.00, 'Élégant', 'Métal et Verre', '28 cm x 14 cm',
 'Applique combinant matériaux nobles et lumière chaleureuse pour un intérieur raffiné.');


INSERT INTO OutdoorLamps (idType, power, color, price, style, material, dimensions, description) VALUES
(4, 'LED 12W', 'Blanc Mat', 459.00, 'Moderniste', 'Polyéthylène IP65', 'Ø 35 cm x H 60 cm',
 'Lampe d’extérieur résistante aux intempéries, diffusant une lueur douce rappelant les modèles de jardin Martinelli.'),
(4, 'LED 9W', 'Noir', 389.90, 'Architectural', 'Aluminium IP67', '20 cm x 45 cm',
 'Bloc lumineux géométrique idéal pour chemins et terrasses.'),
(4, 'LED 15W', 'Gris Clair', 520.00, 'Sculptural', 'Résine Technique IP65', 'Ø 40 cm x H 75 cm',
 'Lampe extérieure au design sculptural évoquant les formes organiques emblématiques de la marque italienne.');


 -- Images pour les lampes de salon
INSERT INTO LampPictures (imagePath, altText, idLivingRoomLamp) VALUES
('images/livingroom/lampadaire_blanc.jpg', 'Lampadaire blanc mat au design minimaliste', 1),
('images/livingroom/lampadaire_noir.jpg', 'Lampadaire noir satiné au style contemporain', 2),
('images/livingroom/suspension_opale.jpg', 'Suspension en verre opale au design italien', 3);

-- Images pour les lampes murales
INSERT INTO LampPictures (imagePath, altText, idWallLamp) VALUES
('images/wall/blanc_opalin.jpg', 'Applique murale blanche opaline géométrique', 1),
('images/wall/gris_anthracite.jpg', 'Applique murale gris anthracite architectural', 2),
('images/wall/cuivre_brosse.jpg', 'Applique murale cuivre brossé élégante', 3);

-- Images pour les lampes d’extérieur
INSERT INTO LampPictures (imagePath, altText, idOutdoorLamp) VALUES
('images/outdoor/blanc_mat.jpg', 'Lampe d’extérieur blanche mat moderniste', 1),
('images/outdoor/noir.jpg', 'Lampe extérieure noire architecturale', 2),
('images/outdoor/gris_clair.jpg', 'Lampe extérieure gris clair sculpturale', 3);
