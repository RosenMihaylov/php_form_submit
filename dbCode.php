CREATE TABLE users(
    id int(11) not null PRIMARY KEY auto_increment,
    userName varchar(15) not null unique,
    password varchar(1000) not null,
);

INSERT INTO users (userName, password)
    VALUES('Rosen', '12345678')