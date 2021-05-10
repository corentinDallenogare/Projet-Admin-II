CREATE DATABASE;/*Cr�ation de la base de donn�e*/
USE myDb;
CREATE USER 'coda' IDENTIFIED BY 'test'; /*utiliser la base de donn�e*/
GRANT ALL PRIVILEGES ON * . * TO 'coda';
FLUSH PRIVILEGES;

CREATE TABLE `objets` (`name` varchar(40) NOT NULL ,`prix` INTEGER NOT NULL); /*cr�ation de la table*/
INSERT INTO /*insertion des valeurs */
  `objets` (`name`,`prix`) 
VALUES /*ajout des valeurs */
  ('cheval de bois', 45),
  ('siflet en bois', 10),
  ('d�s en bois', 3) ;
