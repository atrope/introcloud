CREATE TABLE `214_products` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `color` varchar(25) NOT NULL,
  `description` varchar(225) NOT NULL,
  `features` varchar(255) NOT NULL,
  `care` varchar(255) NOT NULL,
  `country` int(11) unsigned NOT NULL,
  `gender` tinyint(2) unsigned NOT NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE `214_history` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userId` int(11) unsigned NOT NULL,
  `productsId` int(11) unsigned NOT NULL,
  UNIQUE KEY `UK_Unique` (`userId`,`productsId`),
  PRIMARY KEY (`id`),
  CONSTRAINT `pidT` FOREIGN KEY (`productsId`) REFERENCES `214_products` (`id`) ON DELETE CASCADE,
  CONSTRAINT `sidT` FOREIGN KEY (`userId`) REFERENCES `214_users` (`id`) ON DELETE CASCADE
);


CREATE TABLE `214_productsStores` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `productsId` int(11) unsigned NOT NULL,
  `storeId` int(11) unsigned NOT NULL,
  `price` decimal(15,2) NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `pidT` FOREIGN KEY (`productsId`) REFERENCES `214_products` (`id`) ON DELETE CASCADE,
  CONSTRAINT `sidT` FOREIGN KEY (`storeId`) REFERENCES `214_stores` (`id`) ON DELETE CASCADE);

  CREATE TABLE IF NOT EXISTS `214_country` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `name` varchar(80) NOT NULL,
    PRIMARY KEY (`id`)
  );
  INSERT INTO 214_stores(title,country) values ("Zara",104),("Calvin Klein",104),("Nike",104),("Bershka",104),("Mango",104);
  INSERT INTO 214_products(title,color,description,features,care,country,gender) values
  ("Formal Dress","Red","Designed by CK Itself","Custom Fit, Hand Tailored","Dry Clean Only",54,0),
  ("Cutest Party Dress","Black","Express yourself!","Made To Measure","No Need of special care",123,0),
  ("Shabat Dress","Black","Made to shine","Bespoke","Dry Clean Only",154,0),
  ("Open Back Dress","Black","All the attention to details","Custom Fit, Hand Tailored","No Need of special care",32,0);
  INSERT INTO 214_productsStores(productsId,storeId,price) values (2, 3, 200.64),(1, 1, 181.82),(4, 1, 448.44),(4, 2, 251.09),(4, 3, 150.08),(4, 5, 281.81),(2, 4, 372.39),(1, 3, 210.44),(3, 4, 228.38),(1, 4, 424.58),(3, 2, 424.58);
