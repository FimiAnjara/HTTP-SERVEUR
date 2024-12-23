-- Active: 1732406298309@@127.0.0.1@3306@noel

DROP Table Depot;
DROP Table Utilisateur;
DROP Table Cadeau;

use Noel;
CREATE TABLE Cadeau(
   idCadeau INT AUTO_INCREMENT,
   nom VARCHAR(50)  NOT NULL,
   type VARCHAR(50)  NOT NULL,
   image VARCHAR(50)  NOT NULL,
   montant DECIMAL(15,2)   NOT NULL,
   PRIMARY KEY(idCadeau)
);

CREATE TABLE Utilisateur(
   idUtilisateur INT AUTO_INCREMENT,
   email VARCHAR(50)  NOT NULL,
   password VARCHAR(50)  NOT NULL,
   PRIMARY KEY(idUtilisateur)
);

CREATE TABLE Depot(
   idDepot INT AUTO_INCREMENT,
   montant DECIMAL(15,2)   NOT NULL,
   validation BOOLEAN NOT NULL,
   daty DATE NOT NULL,
   idUtilisateur INT NOT NULL,
   PRIMARY KEY(idDepot),
   FOREIGN KEY(idUtilisateur) REFERENCES Utilisateur(idUtilisateur)
);

CREATE TABLE ValidationDepot(
   idValidation INT AUTO_INCREMENT PRIMARY KEY,
   idDepot INT,
   idUtilisateur INT,
   dateValidation date,
   FOREIGN KEY(idUtilisateur) REFERENCES Utilisateur(idUtilisateur),
   FOREIGN KEY(idDepot) REFERENCES Depot(idDepot)
);

-- insertion de user

INSERT INTO Utilisateur (email, password) VALUES
('alice@example.com', 'password123'),
('bob@example.com', 'securepassword'),
('charlie@example.com', 'mypassword'),
('diane@example.com', 'diane2024'),
('eve@example.com', 'evepassword');


-- insertion de depot

INSERT INTO Depot (montant, validation, daty, idUtilisateur) VALUES
(25.00, TRUE, '2024-12-01', 1),
(25.00, TRUE, '2024-12-10', 1),
(50.00, TRUE, '2024-12-15', 2),
(30.00, TRUE, '2024-12-05', 3),
(20.00, TRUE, '2024-12-06', 3),
(50.00, TRUE, '2024-12-07', 4),
(50.00, FALSE, '2024-12-08', 5);


-- insertion de cadeau

INSERT INTO Cadeau (nom, type, image, montant) VALUES
('Carte cadeau Amazon', 'Neutre', 'amazon.png', 20.00),
('Carte cadeau Spotify', 'Neutre', 'spotify.png', 15.00),
('Abonnement Netflix', 'Neutre', 'netflix.png', 50.00),
('Crédit Uber', 'Neutre', 'uber.png', 30.00),
('Chèque cadeau Fnac', 'Neutre', 'fnac.png', 25.00),
('Carte cadeau iTunes', 'Neutre', 'itunes.png', 10.00),
('Abonnement Disney+', 'Neutre', 'disney.png', 45.00),
('Carte cadeau Google Play', 'Neutre', 'googleplay.png', 20.00),
('Crédit Airbnb', 'Neutre', 'airbnb.png', 100.00),
('Abonnement Audible', 'Neutre', 'audible.png', 12.00),
('Carte cadeau Starbucks', 'Fille', 'starbucks.png', 15.00),
('Abonnement Canva Pro', 'Fille', 'canva.png', 40.00),
('Crédit Xbox', 'Garçon', 'xbox.png', 30.00),
('Carte cadeau Playstation', 'Garçon', 'playstation.png', 25.00),
('Chèque cadeau Zara', 'Fille', 'zara.png', 50.00),
('Carte cadeau Sephora', 'Fille', 'sephora.png', 35.00),
('Crédit Steam', 'Garçon', 'steam.png', 60.00),
('Abonnement Adobe Creative', 'Neutre', 'adobe.png', 75.00),
('Crédit Uber Eats', 'Neutre', 'ubereats.png', 20.00),
('Chèque cadeau IKEA', 'Neutre', 'ikea.png', 100.00),
('Carte cadeau Decathlon', 'Garçon', 'decathlon.png', 25.00),
('Abonnement Amazon Prime', 'Neutre', 'prime.png', 30.00),
('Crédit Airbnb', 'Neutre', 'airbnb.png', 50.00),
('Abonnement Spotify Premium', 'Neutre', 'spotify.png', 10.00),
('Carte cadeau H&M', 'Fille', 'hm.png', 40.00),
('Carte cadeau Fnac Darty', 'Neutre', 'fnac.png', 60.00),
('Crédit Epic Games', 'Garçon', 'epic.png', 20.00),
('Carte cadeau Uber', 'Neutre', 'uber.png', 35.00),
('Abonnement LinkedIn Premium', 'Neutre', 'linkedin.png', 50.00),
('Carte cadeau Etsy', 'Fille', 'etsy.png', 45.00),
('Abonnement Deezer', 'Neutre', 'deezer.png', 20.00),
('Crédit Blizzard', 'Garçon', 'blizzard.png', 70.00),
('Carte cadeau Netflix', 'Neutre', 'netflix.png', 60.00),
('Chèque cadeau Amazon', 'Neutre', 'amazon.png', 80.00),
('Carte cadeau Google Play', 'Neutre', 'googleplay.png', 25.00),
('Crédit Nintendo', 'Garçon', 'nintendo.png', 50.00),
('Abonnement Tidal', 'Neutre', 'tidal.png', 15.00),
('Carte cadeau Uber Eats', 'Neutre', 'ubereats.png', 25.00),
('Chèque cadeau Leroy Merlin', 'Garçon', 'leroymerlin.png', 50.00),
('Carte cadeau Cultura', 'Neutre', 'cultura.png', 30.00),
('Crédit Revolut', 'Neutre', 'revolut.png', 20.00),
('Abonnement NordVPN', 'Neutre', 'nordvpn.png', 40.00),
('Carte cadeau Zalando', 'Fille', 'zalando.png', 35.00),
('Crédit Riot Games', 'Garçon', 'riotgames.png', 30.00),
('Carte cadeau Booking.com', 'Neutre', 'booking.png', 100.00),
('Abonnement Skillshare', 'Neutre', 'skillshare.png', 25.00),
('Carte cadeau Carrefour', 'Neutre', 'carrefour.png', 50.00),
('Carte cadeau eBay', 'Neutre', 'ebay.png', 40.00),
('Crédit G2A', 'Garçon', 'g2a.png', 15.00),
('Carte cadeau Apple Store', 'Neutre', 'applestore.png', 100.00);

