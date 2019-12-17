/*заполняем пользователей*/

INSERT INTO users 
      (name,user_password,email,registration_date,contacts,user_rights)
      VALUES
      ('Vartan Saakian','lifehater210892','vardan.saakian@kohyoung.com',NOW(),'89195157163',1);

/*заполняем категории*/
INSERT INTO test_categories 
      (title,code)
      VALUES
      ('AOI','001'),
      ('SPI','002'),
      ('IT','003'),
      ('SMT','004'),
      ('MES','005'); 

/*заполняем типы пользователей*/
INSERT INTO user_types 
      (class)
      VALUES
      ('Admin'),
      ('User'),
      ('Trainer'),
      ('Manager');          

/*заполняем типы вопросы*/
INSERT INTO questions
      (description,image,lvl,author_id,category_id)
      VALUES
      ('Whats meaning this lable have','img/img_quiestion/00401.jpg','1',1,4);