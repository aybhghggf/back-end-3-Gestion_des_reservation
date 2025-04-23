-- Création de la base
CREATE DATABASE IF NOT EXISTS Réservation_des_Cours;
USE Réservation_des_Cours;

-- Table des utilisateurs
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(250) NOT NULL,
    email VARCHAR(250) UNIQUE NOT NULL,
    _password VARCHAR(250) NOT NULL,
    type_user ENUM('client', 'admin') DEFAULT 'client',
    date_creation DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- Table des cours
CREATE TABLE cours (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(250) NOT NULL,
    _description TEXT,
    _type VARCHAR(100),
    prix INT,
    _date DATE,
    heure TIME,
    date_creation DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- Table des réservations
CREATE TABLE reservation (
    id_reservation INT AUTO_INCREMENT PRIMARY KEY,
    id_user INT NOT NULL,
    id_cours INT NOT NULL,
    _status ENUM('en attente', 'confirmé', 'annulé') DEFAULT 'en attente',
    date_creation DATETIME DEFAULT CURRENT_TIMESTAMP,

    FOREIGN KEY (id_user) REFERENCES users(id) ON DELETE CASCADE,
    FOREIGN KEY (id_cours) REFERENCES cours(id) ON DELETE CASCADE
);

-- Table des abonnements
CREATE TABLE abonnements (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_user INT NOT NULL,
    type ENUM('gratuit', 'mensuel', 'annuel') DEFAULT 'gratuit',
    date_debut DATE,
    date_fin DATE,

    FOREIGN KEY (id_user) REFERENCES users(id) ON DELETE CASCADE
);

-- Table des notifications
CREATE TABLE notifications (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_user INT NOT NULL,
    message TEXT NOT NULL,
    vu BOOLEAN DEFAULT FALSE,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,

    FOREIGN KEY (id_user) REFERENCES users(id) ON DELETE CASCADE
);
