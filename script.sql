-- Creation de la database eleves

CREATE DATABASE IF NOT EXISTS db_eleves;

USE db_eleves;

-- TABLE CLASSE
CREATE TABLE `classe` (
  `Id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `Libelle` varchar(50) NOT NULL
);

INSERT INTO `classe` (`Libelle`) VALUES
('BTS SIO'),
('T. Géneral'),
('T. Pro'),
('T. STI2D'),
('T. STMG');

-- TABLE ELEVE

CREATE TABLE eleve (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    prenom VARCHAR(255) NOT NULL,
    ville VARCHAR(255) NOT NULL,
    email VARCHAR(255) NULL UNIQUE,
    classe_id INT,
    FOREIGN KEY (classe_id) REFERENCES classe(Id)
);

INSERT INTO eleve (nom, prenom, ville, email, classe_id) VALUES
('KROUCH', 'Kellyann', 'Villeparisis', 'kellyannkrouch@gmail.com', 1),
('UZUMAKI', 'Naruto', 'Konoha', NULL, 5),
('IZUKU', 'Midoriya', 'Tokyo', NULL, 3);



