CREATE DATABASE exam;

USE exam;

CREATE TABLE test_categories (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(256) UNIQUE NOT NULL,
  code VARCHAR(256) UNIQUE NOT NULL
);

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(256) UNIQUE NOT NULL,
  user_password VARCHAR(256) NOT NULL,
  email VARCHAR(256) UNIQUE NOT NULL,
  registration_date  DATETIME DEFAULT NOW() NOT NULL,
  contacts VARCHAR(256),
  user_rights INT NOT NULL,
  last_passed_test INT 
  FOREIGN KEY (user_rights) REFERENCES user_types(id),
  
);

CREATE TABLE user_types (
	id INT AUTO_INCREMENT PRIMARY KEY,
	class VARCHAR(256) NOT NULL,
);

CREATE TABLE questions (
  id INT AUTO_INCREMENT PRIMARY KEY,
  description TEXT,
  image VARCHAR(256) NOT NULL,
  lvl INT NOT NULL,
  author_id INT NOT NULL,
  category_id INT NOT NULL,
  FOREIGN KEY (author_id) REFERENCES users(id),
  FOREIGN KEY (category_id) REFERENCES test_categories(id)
);



CREATE TABLE answers (
	id INT AUTO_INCREMENT PRIMARY KEY,
	answ_text  TEXT,
	lvl INT NOT NULL,
	question_id INT NOT NULL,
	creation_time DATETIME DEFAULT NOW() NOT NULL,
	category_id INT NOT NULL,
	user_name INT NOT NULL,
	FOREIGN KEY (question_id) REFERENCES questions(id),
	FOREIGN KEY (lvl) REFERENCES questions(id),
	FOREIGN KEY (category_id) REFERENCES test_categories(id),
	FOREIGN KEY (user_name) REFERENCES users(id),
);

