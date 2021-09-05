DROP TABLE biblioteka;
CREATE TABLE biblioteka(
    id int PRIMARY KEY UNIQUE AUTO_INCREMENT,
    Imie varchar(20) NOT NULL,
    Nazwisko varchar(30) NOT NULL,
    Ksiazka varchar(30) NOT NULL
);

INSERT INTO biblioteka values('','Adam', 'Mickiewicz', 'Dziady');
INSERT INTO biblioteka values('','Jarosław', 'Kaczyński', 'PiS');
INSERT INTO biblioteka values('','Bartosz', 'Walaszek', 'Kapitan Bomba');
INSERT INTO biblioteka values('','Bartosz', 'Formela', 'Bimbas');

