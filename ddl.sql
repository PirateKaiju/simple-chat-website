DROP TABLE IF EXISTS messages;
CREATE TABLE messages(
    idMsg INTEGER NOT NULL PRIMARY KEY,
    idUser INTEGER NOT NULL,
    idChat INTEGER NOT NULL,
    messagetxt TEXT

);

INSERT INTO messages (idUser, idChat, messagetxt) VALUES ("1", "1", "Oi");
INSERT INTO messages (idUser, idChat, messagetxt) VALUES ("2", "1", "Ola, como vai");
INSERT INTO messages (idUser, idChat, messagetxt) VALUES ("1", "1", "Tudo bain e contigo?");
INSERT INTO messages (idUser, idChat, messagetxt) VALUES ("2", "1", "To testando uma parada aqui");

/*ALSO IMPLEMENT USERS AND OTHERS*/