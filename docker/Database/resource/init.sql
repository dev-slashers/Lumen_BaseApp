create table Users (
    id int not null primary key auto_increment,
    name varchar(25)  not null,
    surname varchar(25)  not null,
    email varchar(80)  not null,
    password varchar(32)  not null,
    createAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
insert into Users(name, surname, email, password) values ("Salvatore", "Turboli", "salvatore.turboli@gmail.com", md5("example"));