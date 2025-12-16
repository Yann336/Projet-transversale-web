# **README**







#### **Clarté Ornée**



Site web dynamique en PHP connecté à une base MySQL locale, permettant la gestion du panier, des clients, du SAV ainsi que des lampes misent en vente (description, prix etc...).



#### **Prérequis**



###### **Logiciel nécessaire :**



* PHP > 8.0
* MySQL ou MariaDB
* Serveur local : WAMP
* Navigateur web





###### **Extension PHP :**



* pdo\_mysql activée





#### **Installation et lancement**



##### **Installation de WAMP**



###### **Prérequis**

* Windows 10 ou supérieur
* Droits administrateur
* Microsoft Visual C++ Redistribuable (souvent requis)



###### **Téléchargement**

1. Se rendre sur le site officiel de WampServer
2. Télécharger la version correspondant à votre système (64 bits recommandé)



###### **Démarrage du server**

1. Lancer WampServer
2. Vérifier que l'icône est verte dans la barre des tâches
3. Ouvrir un navigateur et accéder à : http://localhost





##### **Installation de phpMyAdmin**



phpMyAdmin est utilisé pour gérer la base de données du projet.



###### **Installation**

1. Lancer WampServer
2. Vérifier que l'icône WAMP est verte



##### **Lancement**

1. Accéder à phpMyAdmin via : http://localhost/phpmyadmin





##### **Installation du site web**



###### **Installation**

1. Dans votre ordinateur aller dans C:\\wamp64\\www
2. Ouvrez le terminal en faisant un clique droit
3. Puis rentrer la commandes suivante :



* git clone https://github.com/Yann336/Projet-transversale-web.git



###### **Lancement du site web**

1. Retourner dans votre navigateur internet
2. Coller cette ligne :



 http://localhost/Projet-transversale-web/index.php





#### **Architecture du projet**


/PROJET-TRANSVERSALE-WEB
<br>|──assets/
<br>|	└── css/
<br>|	└── images/
<br>|──base_de_donnees/
<br>| 	└──lampes.sql
<br>|──models/
<br>|	└──Lamps/
<br>|──views/
<br>|	└──pages/
<br>|	└──partials/
<br>|──index.php
<br>|──README.text


* assets/ : contenue permettant l'esthétique du site web
* models/ : connexion et récupération des données de la database en local
* base\_de\_données/ : script de création des actions utilisateur
* views/ : affichage HTML

##### 

#### **base de données**



###### **Résumé des tables :**

* **Lamps**(idLamps, TypeLamp, Power, Color, Price, Style, Material, Dimensions, Description, Stock, PathPicture)
* **Basket**(idBasket, NbSelected, LampSelected)
* **Customers**(idCustomer, Name, Lastname, Email, Street, City, Country, PostCode, NumberPhone, Password)
* **CustomerService**(idCustomerService, Request, OrderNumber





###### **Importation :**



1. Lancer WAMP directement depuis votre ordinateur
2. Ouvrir phpMyAdmin via internet via /localhost
3. Dans utilisateur sélectionnez 'root'
4. Dans Choix du serveur sélectionnez 'MySQL' puis connexion
5. Aller dans → Nouvelle base de données/SQL
6. Coller le fichier dans base\_de\_donnees/lampes.sql puis exécuter





#### **Configuration**



Dans le fichier : Lamps/dbConnect.php



###### **Paramètre :**

'db\_sgbd' => 'mysql',

'db\_host' => 'localhost',

'db\_name' => 'Clarte\_Ornee',

'db\_username' => 'root',

'db\_password' => ''



###### **Description des paramètres :**

'db\_sgbd' : Système de gestion de base de données utilisé (MySQL)

'db\_host' : Adresse du serveur de base de données (localhost en environnement local)

'db\_name' : Nom de la base de données

'db\_username' : Nom d'utilisateur MySQL

'db\_password' : Mot de passe MySQL (vide par défaut sous WAMP)



###### **Environnement requis :**

* PHP 8.0 minimum
* MySQL ou MariaDB
* Serveur local (WAMP)



###### **Remarques importantes :**

* Vérifier que la base de données 'Clarte\_Ornee' est bien de créée avant de lancer le projet
* Importer le fichier SQL fourni dans le dossier base\_de\_donnees/lampes.sql
* Ces informations sont valables uniquement pour un environnement local





#### **Fonctionnalités**



* Création de compte utilisateur
* Connexion / Déconnexion
* Ajout / modification / suppression de données
* Sécurisation basique (PDOO, requêtes préparées)





#### **Sécurité**



* Requêtes préparées avec PDO
* Hash des mots de passe
* Validation des formulaires





#### **Auteur**



**Projet réalise par :**

* Edely Lola
* Popov Yann
* Lefranc Nathan
* Bourt Théo
