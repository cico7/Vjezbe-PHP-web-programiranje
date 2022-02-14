CREATE TABLE users( 
  id int( 11 ) UNSIGNED NOT NULL AUTO_INCREMENT ,
  name varchar( 50 ) ,
  lastname varchar( 50 ) ,
  username varchar( 100 ) NOT NULL ,
  password varchar( 100 ) NOT NULL ,
  country_code varchar( 3 ) NOT NULL,
  about text,
  created tinyint( 1 ) UNSIGNED NOT NULL ,
  modified tinyint( 1 ) UNSIGNED NOT NULL ,
  date timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP ,
PRIMARY KEY ( id ) ,
UNIQUE KEY username_key( username ) )