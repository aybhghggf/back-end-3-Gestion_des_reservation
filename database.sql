-- Création de la base
CREATE DATABASE IF NOT EXISTS Cours;
USE Cours;

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
    _image VARCHAR,
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

INSERT INTO cours (_image, titre, _description, _type, prix, _date, heure)
VALUES
('01.jpeg', 'Web Development Masterclass', 'Learn modern web development with HTML, CSS, JavaScript, and more.', 'Programming', 150, '2025-04-01', '10:00:00'),
('02.jpeg', 'Business Management Essentials', 'Master the fundamentals of business management and leadership.', 'Business', 200, '2025-04-02', '14:00:00'),
('03.jpeg', 'Graphic Design for Beginners', 'A comprehensive introduction to graphic design and visual communication.', 'Design', 100, '2025-04-03', '09:00:00'),
('04.jpeg', 'Photography Basics', 'Learn the art of photography and how to capture stunning photos.', 'Photography', 120, '2025-04-04', '15:00:00'),
('05.jpeg', 'Spanish Language Course', 'Learn Spanish from the ground up with practical lessons and exercises.', 'Languages', 80, '2025-04-05', '11:00:00'),
('06.jpeg', 'Digital Marketing Strategies', 'Get an in-depth understanding of digital marketing and how to apply it.', 'Business', 180, '2025-04-06', '13:00:00'),
('07.jpeg', 'UI/UX Design Mastery', 'Dive deep into the world of UI/UX design and create beautiful user interfaces.', 'Design', 140, '2025-04-07', '16:00:00'),
('08.jpeg', 'Mobile Photography Tips', 'Learn how to take professional-quality photos with your smartphone.', 'Photography', 110, '2025-04-08', '08:00:00'),
('09.jpeg', 'JavaScript for Beginners', 'A beginner-friendly course for learning JavaScript programming.', 'Programming', 160, '2025-04-09', '10:30:00'),
('10.jpeg', 'Health & Wellness Coaching', 'Get the skills to become a health and wellness coach and help others.', 'Health', 190, '2025-04-10', '17:00:00');

