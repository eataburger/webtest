# Magebit test website

## Introduction

Hello! This is the README file for this project.
Inside the folder alongside this README file are the necessary files for this webpage.


## Installation

For running the project locally I recommend using a XAMPP server.
The control panel can be downloaded here: https://www.apachefriends.org/index.html
After downloading and installing XAMPP I recommend creating the email database first.
After launching Apache and MySQL modules in the control panel, opening `localhost/phpmyadmin/` on any browser should be possible.
Visiting the SQL tab and copying the code below will create the database and list.
Afterward, the website files should downloaded and extracted to the installation location of XAMPP in the htdocs folder.
Running the website from the browser at `localhost/webtest-main/main.html` is now possible.
To open the email list table, go to `localhost/webtest-main/email_list.php`


## Code for creating the email list database and table

CREATE DATABASE `email`
USE `email`
CREATE TABLE `list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4
