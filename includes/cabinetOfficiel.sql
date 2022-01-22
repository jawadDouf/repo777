CREATE TABLE medcins(
    idm int PRIMARY KEY AUTO_INCREMENT,
    nom varchar(30),
    prénom varchar(30),
    email varchar(30),
    motDePasse varchar(8)
);
CREATE TABLE patients(
    idp  int  AUTO_INCREMENT,
    nom varchar(30),
    prénom varchar(30),
    email varchar(30),
    telephone int(10),
    dateNaissance date,
    maladie varchar(30),
    idm int not null,
    PRIMARY KEY(idp),
    FOREIGN KEY (idm) REFERENCES medcins(idm) 
);
INSERT INTO medcins (nom, prénom, email, motDePasse)
VALUES ('Soultani', 'Aya', 'email1', 'password');
