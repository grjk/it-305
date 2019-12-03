CREATE TABLE guest(
    guest_id INT NULL AUTO_INCREMENT,
    firstName VARCHAR(255) NOT NULL,
    lastName VARCHAR(255) NOT NULL,
    title VARCHAR(255) NOT NULL,
    company VARCHAR(255) NOT NULL,
    linkedin VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    comments TEXT NOT NULL,
    mailList BOOLEAN NOT NULL,
    mailFormat VARCHAR(255) NOT NULL,
    howWeMet VARCHAR(255) NOT NULL,
    other TEXT NOT NULL,

    PRIMARY KEY (guest_id)
);