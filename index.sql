CREATE TABLE index
(
   index_id    INT NOT NULL AUTO_INCREMENT,
   name         VARCHAR(128) NOT NULL,
   email        VARCHAR(128) NOT NULL,
   password     VARCHAR(256) NOT NULL,

   textarea     TEXT NOT NULL,
   PRIMARY KEY  (index_id)
);