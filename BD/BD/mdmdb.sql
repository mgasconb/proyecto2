drop database mdmdb;
create database mdmdb;

use mdmdb;


 -- ------------------------------------------------------- Table `mdmdb`.`Tasks`-- --------------------------------------------------

DROP TABLE IF EXISTS `tasks`;

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `group_id` varchar(45) NOT NULL,
  `other` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB;
--
-- Dumping data for table `tasks`
--


INSERT INTO `tasks` VALUES (1,'tarea1','4','tarea1'),(2,'tarea2','5','tarea2'),(3,'tarea3','6','tarea3'),(4,'tarea4','4','tarea4'),(5,'tarea5','5','tarea5'),(6,'tarea6','6','tarea6'),(7,'tarea7','4','tarea7'),(8,'tarea8','5','tarea8'),(9,'tarea9','6','tarea9'),(10,'tarea10','4','tarea10'),(11,'tarea11','5','tarea11'),(12,'tarea12','6','tarea12');

-- ------------------------------------------------------- Table `mdmdb`.`Groups`-- --------------------------------------------------

DROP TABLE IF EXISTS `groups`;

CREATE TABLE `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB;

--
-- Dumping data for table `groups`
--


INSERT INTO `groups` VALUES (1,'a','a'),(2,'b','b'),(3,'p','p'),(4,'grupo1','grupo1'),(5,'grupo2','grupo2'),(6,'grupo3','grupo3');

-- ------------------------------------------------------- Table `mdmdb`.`Users'-- --------------------------------------------------


DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `surname` varchar(45) NOT NULL,
  `group_id` int(11) NOT NULL,
  `other` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `login_UNIQUE` (`login`),
  KEY `group_id_idx` (`group_id`),
  CONSTRAINT `group_id` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB;

--
-- Dumping data for table `users`
--

INSERT INTO `users` VALUES (1,'a','a','a','a',1,'a','a'),(2,'b','b','b','b',2,'b','b'),(3,'p','p','p','p',3,'p','p'),(4,'user1','user1','user1','user1',4,'user1','user1'),(5,'user2','user2','user2','user2',5,'user2','user2'),(6,'user3','user3','user3','user3',6,'user3','user3');


-- ------------------------------------------------------- Table `mdmdb`.`Roles'-- --------------------------------------------------


DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB;


-- ------------------------------------------------------- Table `mdmdb`.`Permissions'-- --------------------------------------------------

DROP TABLE IF EXISTS `permissions`;

CREATE TABLE `permissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `description` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB;


-- ------------------------------------------------------- Table `mdmdb`.`Users_tasks'-- --------------------------------------------------

DROP TABLE IF EXISTS `users_tasks`;

CREATE TABLE `users_tasks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `task_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `user_id_idx` (`user_id`),
  KEY `task_id_idx` (`task_id`),
  CONSTRAINT `task_id` FOREIGN KEY (`task_id`) REFERENCES `tasks` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB;

--
-- Dumping data for table `users_tasks`
--

INSERT INTO `users_tasks` VALUES (1,4,1),(2,5,2),(3,6,3),(4,4,4),(5,5,5),(6,6,6),(7,4,7),(8,5,8),(9,6,9),(10,4,10),(11,5,11),(12,6,12),(13,1,1);

-- ------------------------------------------------------- Table `mdmdb`.`Roles_permissions'-- --------------------------------------------------

DROP TABLE IF EXISTS `roles_permissions`;

CREATE TABLE `roles_permissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rol_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `permission_id_idx` (`permission_id`),
  KEY `rol_id` (`rol_id`),
  CONSTRAINT `permission_id` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `rol_id` FOREIGN KEY (`rol_id`) REFERENCES `roles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB;

--
-- Dumping data for table `roles_permissions`
--

 -- ------------------------------------------------------- Table `mdmdb`.`Roles_users`-- --------------------------------------------------

DROP TABLE IF EXISTS `roles_users`;

CREATE TABLE `roles_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rol_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `user_id_idx` (`user_id`),
  KEY `rol_id_idx` (`rol_id`),
  CONSTRAINT `rol_id2` FOREIGN KEY (`rol_id`) REFERENCES `roles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `user_id2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB;

