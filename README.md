# Travel Management System
 Travel management admin panel using PHP,MySQL,JavaScript,CSS,HTML Bootstrap

PHP version 8.2
BOOTSTRAP VERSION  5.2
HTML5
CSS3
JavaScript (ES6) 
XAMPP -8.2
MySQL-8.3


<!-- Database 
Using XAMPP or MySQL-->
create db name is travel
create table name  signin(id int primary key,email varchar(250),password varchar(250));
create table name signup(id int primary key,name varchar(100),email varchar(250),password varchar(250));
create table name crud(id int primary key,placename varchar(250),discount int,price int,description varchar(250) );
create table name book_form( id int primary key,location varchar(250),guest int,arrivals date,leaveing date)