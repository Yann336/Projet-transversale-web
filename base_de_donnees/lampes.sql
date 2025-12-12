DROP DATABASE IF EXISTS Clarte_Ornee;
CREATE DATABASE Clarte_Ornee CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE Clarte_Ornee;

CREATE TABLE Lamps(
    idLamp INT NOT NULL AUTO_INCREMENT,
    TypeLamp VARCHAR (50) NOT NULL,
    Power VARCHAR (50) NOT NULL,
    Color VARCHAR (50) NOT NULL,
    Price DECIMAL (5, 2) NOT NULL,
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
    NumerPhone VARCHAR(12) NOT NULL,
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

CREATE TABLE Orders(
    idOrder INT NOT NULL AUTO_INCREMENT,
    idBasket INT NOT NULL,
    idCustomer INT NOT NULL,
    OrderDate DATE NOT NULL,
    Quantity INT(8) NOT NULL,
    Paiement DECIMAL (6, 2),
    PRIMARY KEY (idOrder),
    CONSTRAINT fk_OrderBasket FOREIGN KEY (idBasket) REFERENCES Baskets(idBasket),  
    CONSTRAINT fk_OrderCustomer FOREIGN KEY (idCustomer) REFERENCES Customers(idCustomer)  
) ENGINE = INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE Associates(
    idAssociate INT NOT NULL AUTO_INCREMENT,
    idLamp INT NOT NULL,
    idOrder INT NOT NULL,
    Quantity INT NOT NULL,
    PriceBought INT NOT NULL,
    PRIMARY KEY (idAssociate),
    CONSTRAINT fk_AssociateLamp FOREIGN KEY (idLamp) REFERENCES Lamps (idLamp),
    CONSTRAINT fk_AssociateOrder FOREIGN KEY (idOrder) REFERENCES Orders(idOrder)
) ENGINE = INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ====================================================
-- =============== 1. LAMPES DE PLAFOND ===============
-- ====================================================

INSERT INTO Lamps (TypeLamp, Power, Color, Price, Style, Material, Dimensions, Description, Quantity, PathPicture) VALUES
('Lampe de plafond','LED 20W','Cuivrée',1399.90,'Minimaliste','Aluminium','150 x 200 cm',
'Cette suspension circulaire diffuse une lumière douce et homogène. Son design épuré rend la pièce plus lumineuse et agréable. Les matériaux de qualité assurent une grande longévité. Elle s’intègre parfaitement dans un intérieur moderne.',20,'assets/images/plafond1.jpg'),

('Lampe de plafond','LED 30W','Doré',1500.00,'Moderne','Acier','100 x 100 cm',
'Cette lampe en forme de fleur apporte un style architectural affirmé. Sa finition doré offre un contraste élégant dans la pièce. La lumière diffusée est douce et confortable. Elle devient rapidement un élément central de la décoration.',15,'assets/images/plafond2.jpg'),

('Lampe de plafond','LED 22W','Blanc',600.00,'Design italien','PMMA & Aluminium','150 x 50 x 70 cm',
'Cette lampe carrée offre une diffusion lumineuse parfaitement homogène. Son design inspiré du style italien apporte une touche élégante. Le PMMA crée une lumière agréable et douce. C’est un excellent choix pour un intérieur moderne.',18,'assets/images/plafond3.jpg'),

('Lampe de plafond','LED 18W','Noir',389.50,'Contemporain','Aluminium','100 x 100 cm',
'Ce plafonnier présente une finition subtile et raffinée. Il diffuse une lumière chaude qui favorise une ambiance apaisante. Sa forme lui permet d’être installé dans toutes les pièces. Il allie discrétion et élégance.',25,'assets/images/plafond4.jpg'),

('Lampe de plafond','LED 40W','Blanc',2500.00,'Architectural','Argent et crystal','300 x 100 cm',
'Cette grande suspension est conçue pour les vastes espaces. Elle offre une luminosité intense et homogène. Son design épuré met en valeur l’argent blanc. Elle devient le point focal de la pièce.',10,'assets/images/plafond5.jpg'),

('Lampe de plafond','LED 12W','Multicolore',500.00,'Scandinave','Aluminium','300 x 100 cm',
'Cette suspension mélange habilement l aluminium et les couleurs. Son style scandinave apporte une atmosphère chaleureuse. La lumière diffusée est douce et non agressive. Elle convient parfaitement aux petites pièces et aux espaces détente.',30,'assets/images/plafond6.jpg'),

('Lampe de plafond','LED 25W','Blanc',720.00,'Design sculptural','crystal','50 x 50 x 20 cm',
'Cette suspension joue avec des tiges métalliques croisées. Elle crée un jeu d’ombres élégant dans la pièce. Le blanc renforce son caractère moderne. Elle attire immédiatement l’attention par son originalité.',14,'assets/images/plafond7.jpg'),

('Lampe de plafond','LED 16W','Rose',450.00,'Luxe discret','Résine','40 x 40 x 13 cm',
'Ce plafonnier en résine incarne l’élégance. Sa lumière chaleureuse crée une atmosphère cosy. Son design simple mais raffiné lui permet de s’adapter partout. Il offre une touche luxueuse sans être ostentatoire.',8,'assets/images/plafond8.jpg'),

('Lampe de plafond','LED 28W','Blanc et noir',520.00,'Minimaliste','PMMA','Ø150 x 19 cm',
'Le diffuseur en PMMA offre une lumière laiteuse très douce. Le design floral rappelle les classiques italiens. Elle crée une ambiance apaisante dans toute la pièce. Son style épuré s’adapte à tous les intérieurs.',20,'assets/images/plafond9.jpg'),

('Lampe de plafond','LED 10W','Noir',450.00,'Industriel chic','Acier et bois','130 x 130 x 25 cm',
'Cette suspension ronde offre une lumière directionnelle. Son style industriel apporte du caractère à la pièce. Le métal noir lui donne une allure moderne. Elle est idéale pour les salons ou cuisines contemporaines.',35,'assets/images/plafond10.jpg');


-- ====================================================
-- =============== 2. LAMPES DE CHEVET ================
-- ====================================================

INSERT INTO Lamps (TypeLamp, Power, Color, Price, Style, Material, Dimensions, Description, Quantity, PathPicture) VALUES

('Lampe de chevet','LED 6W','Rose',230.00,'Futuriste','Aluminium brossé','20 x 20 x 26 cm',
'Cette lampe cylindrique reflète un style futuriste marqué. L’aluminium brossé lui offre une finition premium. Sa lumière indirecte crée une ambiance sophistiquée. Elle convient aux décors modernes et élégants.',18,'assets/images/chevet1.jpg'),

('Lampe de chevet','LED 4W','Blanc et or',210.00,'Naturel','Bois & verre','20 x 20 x 23 cm',
'Cette lampe combine un globe en verre et une base en or massif. Sa couleur or évoque un style moderne. La lumière est douce et chaleureuse. Elle est parfaite pour les chambres au style organique.',19,'assets/images/chevet2.jpg'),

('Lampe de chevet','LED 6W','Blanc et or ',170.00,'Industriel','Métal','25 x 18 x 30 cm',
'Cette lampe offre une grande flexibilité. Son style industriel apporte du caractère à la pièce. Le métal doré renforce son allure robuste. Elle est idéale pour un usage quotidien.',26,'assets/images/chevet3.jpg');

('Lampe de chevet','LED 7W','Blanc',260.00,'Iconique','PMMA','Ø26 x 29 cm',
'Cette lampe ronde évoque les classiques du design italien. Elle diffuse une lumière douce et régulière. Le PMMA lui donne une apparence élégante et homogène. Elle convient parfaitement aux ambiances zen.',22,'assets/images/chevet4.jpg'),

('Lampe de chevet','LED 5W','Blanc et noir',195.00,'Vintage','Résine','18 x 18 x 24 cm',
'Cette lampe évoque les années 70 avec ses fleurs. La couleur blanche apporte une touche chaleureuse. Elle diffuse une lumière douce idéale pour les soirées. Son style nostalgique la rend unique.',28,'assets/images/chevet5.jpg'),

('Lampe de chevet','LED 5W','Noir',220.00,'Design','Résine','18 x 18 x 25 cm',
'Cette lampe champignon reprend les codes du design italien. Sa couleur noire apporte une touche vive dans la pièce. La lumière est douce et agréable pour les soirées. Elle devient rapidement un élément décoratif incontournable.',25,'assets/images/chevet6.jpg'),

('Lampe de chevet','LED 6W','Blanc',189.00,'Minimaliste','PMMA','20 x 20 x 28 cm',
'Cette lampe dôme diffuse une lumière douce idéale pour la lecture. Son design minimaliste s’intègre facilement dans les chambres modernes. Le PMMA offre un toucher lisse et une belle diffusion lumineuse. Elle crée une ambiance reposante.',40,'assets/images/chevet7.jpg'),

('Lampe de chevet','LED 7W','Blanc',250.00,'Origami','Polycarbonate','24 x 24 x 27 cm',
'Cette lampe pliée semble sculptée d’un seul bloc. Son design inspiré de l’origami apporte une touche artistique. La lumière est diffuse et agréable. Elle embellit immédiatement la pièce.',17,'assets/images/chevet8.jpg'),

('Lampe de chevet','LED 3W','Blanc',180.00,'Contemporain','résine','15 x 15 x 21 cm',
'Cette petite lampe en résine crée une ambiance intime. Sa couleur blanche évoque la tranquillité. La lumière douce est idéale pour les soirées. Elle apporte une touche artistique à la pièce.',32,'assets/images/chevet9.jpg'),

('Lampe de chevet','LED 4W','Noir',149.99,'Moderne','Aluminium','22 x 22 x 30 cm',
'Cette lampe tube offre une lumière orientable très pratique. Son design en aluminium rappelle les lampes professionnelles. Elle apporte une touche moderne à la chambre. Son format compact en fait un choix polyvalent.',30,'assets/images/chevet10.jpg');

-- ====================================================
-- =============== 3. LAMPES D’EXTÉRIEUR ==============
-- ====================================================

INSERT INTO Lamps (TypeLamp, Power, Color, Price, Style, Material, Dimensions, Description, Quantity, PathPicture) VALUES
('Lampe extérieur','LED 8W','Anthracite',600.00,'Minimaliste','Aluminium IP65','200 x 12 x 8 cm',
'Cette lampe cubique est conçue pour résister aux intempéries. Sa finition anthracite apporte un look moderne. La lumière est projetée de manière douce. Elle décore parfaitement terrasses et jardins.',20,'assets/images/exterieur1.jpg'),

('Lampe extérieur','LED 10W','Noir',1200.00,'Moderne','polethylène moulé','150 x Ø50',
'Cette borne lumineuse diffuse une lumière directionnelle élégante. Le polethylène moulé lui assure une grande résistance. Son design élancé embellit les allées. Elle apporte une atmosphère sécurisante la nuit.',14,'assets/images/exterieur2.jpg'),

('Lampe extérieur','LED 6W','Blanc',900.00,'Contemporain','Acier Inoxydable','25 x 25 x 30 cm',
'Cette lampe sphérique illumine le jardin avec une douce lumière. L acier inoxydable la rend résistante et légère. Son design simple rappelle les classiques italiens. Elle s’utilise aussi bien au sol que sur une table.',32,'assets/images/exterieur3'),

('Lampe extérieur','LED 8W','Noir',350.00,'Industriel','Métal galvanisé','300 x 150 x Ø25 cm',
'Cette lampe extérieure présente un design moderne et futuriste. Sa finition argentée reflète élégamment la lumière. Le diffuseur circulaire crée une ambiance unique. Elle attire immédiatement le regard.',22,'assets/images/exterieur4.jpg'),

('Lampe extérieur','LED 8W','Noir',2500.00,'Industriel','Métal galvanisé','300 x 150 x Ø25 cm',
'Cette lampe extérieure présente un design moderne et futuriste. Sa finition argentée reflète élégamment la lumière. Le diffuseur circulaire crée une ambiance unique. Elle attire immédiatement le regard.',22,'assets/images/exterieur5.jpg'),

('Lampe extérieur','LED 12W','Gris',410.00,'Architectural','Aluminium','60 x 10 x 10 cm',
'Cette borne extérieure présente un design très épuré. Sa hauteur lui donne une allure élégante. La lumière diffuse met en valeur les chemins. Elle apporte une touche architecturale au jardin.',12,'assets/images/exterieur6.jpg'),

('Lampe de plafond','12W LED','Blanc chaud',400.00,'Moderne','Aluminium et résine texturée','30cm x 30cm x 4cm','Cette lampe murale représente un croissant de lune sculpté avec un niveau de détail remarquable. Elle diffuse une lumière douce et chaude qui met en valeur les reliefs du motif. Son design moderne et poétique en fait une pièce décorative unique pour tout intérieur contemporain. Elle s’intègre parfaitement dans un salon, une chambre ou un couloir.', 25,'assets/images/exterieur7.png'),

('Lampe exterieur','LED 9W','Noir',1300.00,'Futuriste','Métal brossé','250 x 200 cm',
'Cette lampe extérieure présente un design moderne et futuriste. Sa finition argentée reflète élégamment la lumière. Le diffuseur circulaire crée une ambiance unique. Elle attire immédiatement le regard.',15,'assets/images/exterieur8.jpg'),

('Lampe extérieur','LED 6W','Argent',300.00,'Minimaliste','Acier','18 x 12 x 22 cm',
'Le style Clarté Ornée se distingue par des formes sculpturales, une lumière expressive et une fusion entre nature et géométrie. C’est un design italien audacieux, fonctionnel et intemporel..',27,'assets/images/exterieur9.jpg'),

('Lampe extérieur','LED 12W','Noir',500.00,'Sculptural','PMMA & métal','40 x 30 x 35 cm',
'Cette lampe extérieure adopte une forme de nuage originale. Le PMMA diffuse une lumière douce et homogène. Son design sculptural embellit les jardins. Elle crée une ambiance féerique le soir venu.',10,'assets/images/exterieur10');


-- ====================================================
-- ================= 4. LAMPES DE SOL =================
-- ====================================================

INSERT INTO Lamps (TypeLamp, Power, Color, Price, Style, Material, Dimensions, Description, Quantity, PathPicture) VALUES
('Lampe de sol','LED 19W','Metal',540.00,'Industriel','Métal','150 x 32 x 32 cm',
'Ce lampadaire articulé rappelle les lampes d’atelier. Son style industriel apporte une touche authentique. Le métal noir renforce son caractère robuste. Il est idéal pour les espaces contemporains.',20,'assets/images/sol1.jpg'),

('Lampe de sol','LED 12W','Noir mat',250.00,'Contemporain','Métal et tissu','H150 x Ø40 cm',
'Cette lampe de sol au design épuré apporte une touche moderne à tout intérieur. Son abat-jour en tissu diffuse une lumière douce et chaleureuse. La structure courbée en métal noir crée une silhouette élégante et discrète. Parfaite pour un salon ou une chambre, elle allie fonctionnalité et esthétisme.',25,'assets/images/sol2.jpg'),

('Lampe de sol', 'LED 3x5W', 'Noir et blanc', 300.00, 'Moderne', 'Métal et verre', 'H160 x Ø30 cm', 'Cette lampe de sol élancée combine élégance et fonctionnalité avec ses trois globes lumineux. Son pied noir minimaliste contraste avec les sphères blanches pour un effet visuel raffiné. Elle diffuse une lumière chaleureuse idéale pour les coins lecture ou les ambiances feutrées. Son design vertical optimise l’espace tout en apportant une touche contemporaine.', 20, 'assets/images/sol3.jpg'),

('Lampe de sol','LED 30W','Or',780.00,'Luxe moderne','Laiton brossé','155 x 40 x 40 cm',
'Ce lampadaire anneau illumine la pièce avec élégance. Le laiton brossé lui donne une touche luxueuse. Sa forme circulaire crée un effet lumineux unique. Il devient rapidement une pièce maîtresse.',5,'assets/images/sol4.jpg'),

('Lampe de sol','LED 18W','Blanc',560.00,'Moderne','PMMA','145 x 30 x 30 cm',
'Ce lampadaire sphérique sur pied diffuse une lumière douce. Le design moderne le rend très polyvalent. Le PMMA assure une très belle diffusion lumineuse. Il apporte tranquillité et élégance à la pièce.',9,'assets/images/sol5.jpg'),

('Lampe de sol','LED 15W','Blanc',480.00,'Contemporain','Aluminium','148 x 30 x 30 cm',
'Ce lampadaire gris perlé offre une lumière apaisante. Son style contemporain s’adapte à tous les salons. L’aluminium garantit une finition élégante. Il apporte une ambiance chaleureuse à la pièce.',18,'assets/images/sol6.jpg'),

('Lampe de sol','LED 22W','Rouge',620.00,'Vintage 70s','Résine','140 x 38 x 38 cm',
'Ce lampadaire s’inspire des icônes des années 70. Sa couleur rouge lui donne une forte personnalité. La lumière est chaude et chaleureuse. Il devient un élément décoratif incontournable.',11,'assets/images/sol7.jpg'),

('Lampe de sol','LED 24W','Noir',690.00,'Sculptural','Polycarbonate','150 x 40 x 40 cm',
'Ce lampadaire torsadé évoque des formes organiques. Le polycarbonate diffuse une lumière douce. Son design sculptural en fait une pièce unique. Il apporte un effet artistique remarquable.',7,'img/sol/sol8.jpg'),

('Lampe de sol','LED 27W','Or',720.00,'Architectural','Acier','160 x 28 x 25 cm',
'Ce lampadaire en arche possède une présence forte. L’acier noir lui donne un style audacieux. La lumière est diffuse et agréable. Il met en valeur les grands espaces.',6,'assets/images/sol9.jpg'),

('Lampe de sol','LED 20W','Anthracite',510.00,'Minimaliste','Acier','145 x 33 x 33 cm',
'Ce lampadaire cylindrique diffuse une lumière homogène. Sa forme simple crée une atmosphère apaisante. L acier assure une excellente diffusion lumineuse. Il s’accorde facilement à un intérieur moderne.',14,'assets/images/sol10.jpg');

-- ====================================================
-- =============== 5. LAMPES MURALE ================
-- ====================================================


INSERT INTO Lamps (TypeLamp, Power, Color, Price, Style, Material, Dimensions, Description, Quantity, PathPicture) VALUES
('Lampe murale', 'LED 12W', 'Blanc', 320.00, 'Architectural', 'Aluminium', '30 x 15 x 10 cm',
 'Cette lampe diffuse un éclairage haut-bas très graphique. Son design architectural structure l’espace. L’aluminium blanc renforce sa modernité. Elle convient parfaitement aux intérieurs minimalistes.',
 15, 'assets/images/murale1.jpg'),

('Lampe murale', 'LED 6W', 'Or brossé', 310.00, 'Luxe discret', 'Laiton', '21 x 12 x 9 cm',
 'Cette applique en laiton brossé apporte une touche de sophistication. La lumière dorée enrichit l’atmosphère de la pièce. Sa forme compacte reste élégante sans être trop visible. Elle s’intègre parfaitement dans un intérieur premium.',
 10, 'assets/images/murale2.jpg');

('Lampe murale', 'LED 10W', 'Gris anthracite', 255.00, 'Extérieur/Intérieur', 'Aluminium IP65', '27 x 13 x 11 cm',
 'Cette lampe est adaptée aussi bien à l’intérieur qu’à l’extérieur. Sa structure IP65 résiste parfaitement aux intempéries. Le design sobre la rend polyvalente. Elle offre un faisceau lumineux haut-bas très esthétique.',
 19, 'assets/images/murale3.jpg'),

('Lampe murale', 'LED 8W', 'Blanc', 270.00, 'Sculptural', 'PMMA', '24 x 14 x 10 cm',
 'Cette applique en PMMA propose une forme ondulée très sculpturale. La lumière traverse la matière avec élégance. Elle apporte un effet décoratif même lorsqu’elle est éteinte. Son style italien reste immédiatement reconnaissable.',
 14, 'assets/images/murale4.jpg'),

('Lampe murale', 'LED 5W', 'Beige', 190.00, 'Naturel', 'Bois & métal', '18 x 12 x 9 cm',
 'Cette applique associe bois naturel et métal pour un rendu chaleureux. La lumière projetée crée une ambiance douce. Son style naturel s’accorde bien avec les décors apaisants. Elle s’utilise parfaitement dans les chambres ou entrées.',
 30, 'assets/images/murale5.jpg'),

('Lampe murale', 'LED 9W', 'Noir mat', 230.00, 'Industriel', 'Acier', '26 x 14 x 12 cm',
 'Cette applique articulée offre une grande flexibilité d’orientation. Le style industriel apporte un caractère fort. Son bras en acier donne une impression de robustesse. Elle est idéale pour les bureaux et les coins lecture.',
 25, 'assets/images/murale6.jpg'),

 ('Lampe murale', 'LED 8W', 'Noir mat', 210.00, 'Minimaliste', 'Aluminium', '25 x 12 x 8 cm',
 'Cette applique diffuse une lumière douce orientée vers le haut. Son design épuré lui permet de s’intégrer dans tout type d’intérieur. Le noir mat met en valeur la pureté de ses lignes. Elle apporte une ambiance calme et moderne.',
 24, 'assets/images/murale7.jpg'),

('Lampe murale', 'LED 7W', 'Argent', 280.00, 'Futuriste', 'Aluminium poli', '20 x 18 x 10 cm',
 'Cette applique à surface miroir reflète subtilement la lumière. La forme d animal renforce son aspect futuriste. Elle ajoute une touche technologique à l’intérieur. La diffusion douce évite tout éblouissement.',
 12, 'assets/images/murale8.jpg'),

('Lampe murale', 'LED 6W', 'Bronze', 240.00, 'Contemporain', 'Métal brossé', '22 x 10 x 8 cm',
 'Cette applique en bronze crée un jeu de lumière chaleureux. Sa finition brossée apporte une touche raffinée. Elle convient parfaitement aux décors sophistiqués. Sa lumière douce améliore le confort visuel.',
 20, 'assets/images/murale9.jpg'),

('Lampe murale', 'LED 10W', 'Noir', 260.00, 'Moderne', 'Acier', '28 x 14 x 9 cm',
 'Cette lampe au style moderne projette un faisceau lumineux précis. La finition noire lui donne une présence élégante et discrète. Sa forme simple facilite son intégration dans les couloirs ou salons. Elle renforce l’identité contemporaine de la pièce.',
 18, 'assets/images/murale10.jpg');