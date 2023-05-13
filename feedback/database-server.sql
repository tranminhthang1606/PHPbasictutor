create database feedbackProject;

use feedbackProject;

create table feedback(
id int primary key auto_increment,
`name` varchar(100) not null,
email varchar(100) not null,
body text,
`date` datetime
);

insert into feedback(name,email,body,date) 
values('Thang','thangtmph29942@fpt.edu.vn','fitness',current_timestamp()),
('Long','longtmph29942@fpt.edu.vn','fat',current_timestamp()),
('An','antmph29942@fpt.edu.vn','slim',current_timestamp()),
('Cac','cactmph29942@fpt.edu.vn','buoitovcl',current_timestamp())

