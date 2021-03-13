# Host: localhost  (Version 5.5.5-10.3.16-MariaDB)
# Date: 2021-03-12 18:22:17
# Generator: MySQL-Front 6.1  (Build 1.26)


#
# Structure for table "email"
#

DROP TABLE IF EXISTS `email`;
CREATE TABLE `email` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `service` varchar(255) DEFAULT NULL,
  `order` varchar(255) DEFAULT NULL,
  `fatura` varchar(255) DEFAULT NULL,
  `product` varchar(255) DEFAULT NULL,
  `message` longtext DEFAULT NULL,
  `attachment` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "email"
#

INSERT INTO `email` VALUES (1,'asdasd','ahmethusreversen@hotmail.com','564654','6546545','Trendyol','asd','asd','asd','ddd',NULL),(2,'asdasd','ahmethusreversen@hotmail.com','546545','65465465','Hepsiburada','sad','asd','asd','asd',NULL),(3,'asdsa','ahmethusreversen@hotmail.com','654654','654654','Trendyol','sd','sd','sd','sd',NULL),(4,'asdsa','ahmethusreversen@hotmail.com','654654','654654','Trendyol','sd','sd','sd','sd',NULL),(5,'asdsa','ahmethusreversen@hotmail.com','4654','56465','Trendyol','d','d','d','d',NULL),(6,'asdas','ahmethusreversen@hotmail.com','65456','56456','Trendyol','d','d','d','d',NULL),(7,'asdasd','ahmethusreversen@hotmail.com','654564','564654','Trendyol','d','d','d','d',NULL),(8,'asdasdas','ahmethusreversen@hotmail.com','4656','564654','Trendyol','d','d','d','d',NULL),(9,'sdfsaf','ahmethusreversen@hotmail.com','asdas','sadsa','Hepsiburada','asd','asd','asd','asd',NULL),(10,'sdfsaf','ahmethusreversen@hotmail.com','asdas','sadsa','Hepsiburada','asd','asd','asd','asd',NULL),(11,'dasda','ahmethusreversen@hotmail.com','465465','65465','Trendyol','d','d','d','d',NULL),(12,'sadasd','ahmethusreversen@hotmail.com','4564654','465456456','Trendyol','sd','sd','ds','ds',NULL),(13,'asdsadsada','ahmethusreversen@hotmail.com','46465','646465','Trendyol','d','d','d','d',NULL);
