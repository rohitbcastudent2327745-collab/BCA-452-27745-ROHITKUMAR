CREATE DATABASE sports_management;

USE sports_management;

CREATE TABLE teams (
id INT AUTO_INCREMENT PRIMARY KEY,
team_name VARCHAR(100)
);

CREATE TABLE players (
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100),
team_id INT,
role VARCHAR(50)
);

CREATE TABLE matches (
id INT AUTO_INCREMENT PRIMARY KEY,
team1_id INT,
team2_id INT,
match_date DATE
);

CREATE TABLE scores (
id INT AUTO_INCREMENT PRIMARY KEY,
match_id INT,
player_id INT,
score INT
);