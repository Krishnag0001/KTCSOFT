SET FOREIGN_KEY_CHECKS=0; DROP TABLE IF EXISTS bills;

CREATE TABLE `bills` (
  `id_bills` int(11) NOT NULL AUTO_INCREMENT,
  `invoice_number` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `shipped_to_id` int(11) DEFAULT NULL,
  `bill_type` int(11) DEFAULT NULL,
  `goods_id` int(11) DEFAULT NULL,
  `rate` varchar(45) DEFAULT NULL,
  `quantity` varchar(45) DEFAULT NULL,
  `qty_type` varchar(100) NOT NULL,
  `total` varchar(45) DEFAULT NULL,
  `cgst_percent` varchar(45) DEFAULT NULL,
  `cgst_amount` varchar(45) DEFAULT NULL,
  `sgst_percent` varchar(45) DEFAULT NULL,
  `sgst_amount` varchar(45) DEFAULT NULL,
  `taxable_value` varchar(45) DEFAULT NULL,
  `all_total` varchar(45) DEFAULT NULL,
  `transport_hamali` varchar(45) NOT NULL,
  `round_off` varchar(45) NOT NULL,
  `grand_total` varchar(45) NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `status` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_bills`),
  KEY `customer_id_idx` (`customer_id`),
  KEY `goods_id_idx` (`goods_id`),
  CONSTRAINT `customer_id` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id_customer`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `goods_id` FOREIGN KEY (`goods_id`) REFERENCES `goods` (`id_goods`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `shipped_to_id` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id_customer`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=latin1;

INSERT INTO bills VALUES("1","0","","","","","","","","","","","","","","","","","","","","1");
INSERT INTO bills VALUES("2","1","1","0","1","1","44","2","","88.00","","","","","","88.00","2","90","90","2019-04-20 09:22:05","","1");
INSERT INTO bills VALUES("3","2","1","0","2","1","44","2","","88.00","","","","","","88.00","2","3126","3126","2019-04-20 09:44:28","","1");
INSERT INTO bills VALUES("4","2","1","0","2","1","44","2","","88.00","","","","","","88.00","2","3126","3126","2019-04-20 09:44:28","","1");
INSERT INTO bills VALUES("5","2","1","0","2","1","44","3","","132.00","","","","","","132.00","2","3126","3126","2019-04-20 09:44:28","","1");
INSERT INTO bills VALUES("6","2","1","0","2","1","44","4","","176.00","","","","","","176.00","2","3126","3126","2019-04-20 09:44:28","","1");
INSERT INTO bills VALUES("7","2","1","0","2","1","44","2","","88.00","","","","","","88.00","2","3126","3126","2019-04-20 09:44:28","","1");
INSERT INTO bills VALUES("8","2","1","0","2","1","44","1","","44.00","","","","","","44.00","2","3126","3126","2019-04-20 09:44:28","","1");
INSERT INTO bills VALUES("9","2","1","0","2","1","44","3","","132.00","","","","","","132.00","2","3126","3126","2019-04-20 09:44:28","","1");
INSERT INTO bills VALUES("10","2","1","0","2","1","44","4","","176.00","","","","","","176.00","2","3126","3126","2019-04-20 09:44:28","","1");
INSERT INTO bills VALUES("11","2","1","0","2","1","44","5","","220.00","","","","","","220.00","2","3126","3126","2019-04-20 09:44:28","","1");
INSERT INTO bills VALUES("12","2","1","0","2","1","44","4","","176.00","","","","","","176.00","2","3126","3126","2019-04-20 09:44:28","","1");
INSERT INTO bills VALUES("13","2","1","0","2","1","44","1","","44.00","","","","","","44.00","2","3126","3126","2019-04-20 09:44:28","","1");
INSERT INTO bills VALUES("14","2","1","0","2","1","44","2","","88.00","","","","","","88.00","2","3126","3126","2019-04-20 09:44:28","","1");
INSERT INTO bills VALUES("15","2","1","0","2","1","44","32","","1408.00","","","","","","1408.00","2","3126","3126","2019-04-20 09:44:28","","1");
INSERT INTO bills VALUES("16","2","1","0","2","1","44","3","","132.00","","","","","","132.00","2","3126","3126","2019-04-20 09:44:28","","1");
INSERT INTO bills VALUES("17","2","1","0","2","1","44","3","","132.00","","","","","","132.00","2","3126","3126","2019-04-20 09:44:28","","1");
INSERT INTO bills VALUES("18","3","1","","2","1","44","2","","88.00","","","","","","88.00","2","3126","3126","2019-04-20 09:53:36","","1");
INSERT INTO bills VALUES("19","3","1","","2","1","44","2","","88.00","","","","","","88.00","2","3126","3126","2019-04-20 09:53:36","","1");
INSERT INTO bills VALUES("20","3","1","","2","1","44","3","","132.00","","","","","","132.00","2","3126","3126","2019-04-20 09:53:36","","1");
INSERT INTO bills VALUES("21","3","1","","2","1","44","4","","176.00","","","","","","176.00","2","3126","3126","2019-04-20 09:53:36","","1");
INSERT INTO bills VALUES("22","3","1","","2","1","44","2","","88.00","","","","","","88.00","2","3126","3126","2019-04-20 09:53:36","","1");
INSERT INTO bills VALUES("23","3","1","","2","1","44","1","","44.00","","","","","","44.00","2","3126","3126","2019-04-20 09:53:36","","1");
INSERT INTO bills VALUES("24","3","1","","2","1","44","3","","132.00","","","","","","132.00","2","3126","3126","2019-04-20 09:53:36","","1");
INSERT INTO bills VALUES("25","3","1","","2","1","44","4","","176.00","","","","","","176.00","2","3126","3126","2019-04-20 09:53:36","","1");
INSERT INTO bills VALUES("26","3","1","","2","1","44","5","","220.00","","","","","","220.00","2","3126","3126","2019-04-20 09:53:36","","1");
INSERT INTO bills VALUES("27","3","1","","2","1","44","4","","176.00","","","","","","176.00","2","3126","3126","2019-04-20 09:53:36","","1");
INSERT INTO bills VALUES("28","3","1","","2","1","44","1","","44.00","","","","","","44.00","2","3126","3126","2019-04-20 09:53:36","","1");
INSERT INTO bills VALUES("29","3","1","","2","1","44","2","","88.00","","","","","","88.00","2","3126","3126","2019-04-20 09:53:36","","1");
INSERT INTO bills VALUES("30","3","1","","2","1","44","32","","1408.00","","","","","","1408.00","2","3126","3126","2019-04-20 09:53:36","","1");
INSERT INTO bills VALUES("31","3","1","","2","1","44","3","","132.00","","","","","","132.00","2","3126","3126","2019-04-20 09:53:36","","1");
INSERT INTO bills VALUES("32","3","1","","2","1","44","3","","132.00","","","","","","132.00","2","3126","3126","2019-04-20 09:53:36","","1");
INSERT INTO bills VALUES("33","4","7","","1","1","44","2","","88.00","","","","","","88.00","11","1111","1111","2019-04-21 08:43:23","","1");
INSERT INTO bills VALUES("34","4","7","","1","1","44","23","","1012.00","","","","","","1012.00","11","1111","1111","2019-04-21 08:43:23","","1");
INSERT INTO bills VALUES("35","5","5","","2","1","44","2","","88.00","","","","","","88.00","1","89","89","2019-04-21 08:48:10","","1");
INSERT INTO bills VALUES("36","6","7","","1","1","44","4","","176.00","","","","","","176.00","34","210","210","2019-04-21 08:49:33","","1");
INSERT INTO bills VALUES("37","7","1","","1","1","44","23","","1012.00","","","","","","1012.00","2","1014","1014","2019-04-21 06:46:42","","1");
INSERT INTO bills VALUES("38","8","5","","2","1","44","3","","132.00","","","","","","132.00","2","134","134","2019-04-24 09:53:07","","1");
INSERT INTO bills VALUES("39","9","5","","1","1","44","2","Mtr.","88.00","","","","","","88.00","2","2422","2422","2019-04-28 01:25:13","","2");
INSERT INTO bills VALUES("40","9","5","","1","1","44","2","Mtr.","88.00","","","","","","88.00","2","2422","2422","2019-04-28 01:25:13","","2");
INSERT INTO bills VALUES("41","9","5","","1","1","44","3","Mtr.","132.00","","","","","","132.00","2","2422","2422","2019-04-28 01:25:13","","2");
INSERT INTO bills VALUES("42","9","5","","1","1","44","3","Mtr.","132.00","","","","","","132.00","2","2422","2422","2019-04-28 01:25:13","","2");
INSERT INTO bills VALUES("43","9","5","","1","1","44","3","Mtr.","132.00","","","","","","132.00","2","2422","2422","2019-04-28 01:25:13","","2");
INSERT INTO bills VALUES("44","9","5","","1","1","44","1","Mtr.","44.00","","","","","","44.00","2","2422","2422","2019-04-28 01:25:13","","2");
INSERT INTO bills VALUES("45","9","5","","1","1","44","1","Mtr.","44.00","","","","","","44.00","2","2422","2422","2019-04-28 01:25:13","","2");
INSERT INTO bills VALUES("46","9","5","","1","1","44","2","Mtr.","88.00","","","","","","88.00","2","2422","2422","2019-04-28 01:25:13","","2");
INSERT INTO bills VALUES("47","9","5","","1","1","44","2","Mtr.","88.00","","","","","","88.00","2","2422","2422","2019-04-28 01:25:13","","2");
INSERT INTO bills VALUES("48","9","5","","1","1","44","3","Mtr.","132.00","","","","","","132.00","2","2422","2422","2019-04-28 01:25:13","","2");
INSERT INTO bills VALUES("49","9","5","","1","1","44","3","Mtr.","132.00","","","","","","132.00","2","2422","2422","2019-04-28 01:25:13","","2");
INSERT INTO bills VALUES("50","9","5","","1","1","44","3","Mtr.","132.00","","","","","","132.00","2","2422","2422","2019-04-28 01:25:13","","2");
INSERT INTO bills VALUES("51","9","5","","1","1","44","23","Mtr.","1012.00","","","","","","1012.00","2","2422","2422","2019-04-28 01:25:13","","2");
INSERT INTO bills VALUES("52","9","5","","1","1","44","2","Mtr.","88.00","","","","","","88.00","2","2422","2422","2019-04-28 01:25:13","","2");
INSERT INTO bills VALUES("53","9","5","","1","1","44","2","Mtr.","88.00","","","","","","88.00","2","2422","2422","2019-04-28 01:25:13","","2");
INSERT INTO bills VALUES("54","10","1","","1","1","44","2","Mtr.","88.00","","","","","","88.00","1","177","177","2019-04-28 01:47:24","","1");
INSERT INTO bills VALUES("55","10","1","","1","1","44","2","Mtr.","88.00","","","","","","88.00","1","177","177","2019-04-28 01:47:24","","1");
INSERT INTO bills VALUES("56","11","7","","2","1","44","1","Mtr.","44.00","","","","","","44.00","2","2598","2598","2019-04-28 01:50:44","","1");
INSERT INTO bills VALUES("57","11","7","","2","1","44","2","Mtr.","88.00","","","","","","88.00","2","2598","2598","2019-04-28 01:50:44","","1");
INSERT INTO bills VALUES("58","11","7","","2","1","44","3","Mtr.","132.00","","","","","","132.00","2","2598","2598","2019-04-28 01:50:44","","1");
INSERT INTO bills VALUES("59","11","7","","2","1","44","3","Mtr.","132.00","","","","","","132.00","2","2598","2598","2019-04-28 01:50:44","","1");
INSERT INTO bills VALUES("60","11","7","","2","1","44","23","Mtr.","1012.00","","","","","","1012.00","2","2598","2598","2019-04-28 01:50:44","","1");
INSERT INTO bills VALUES("61","11","7","","2","1","44","2","Mtr.","88.00","","","","","","88.00","2","2598","2598","2019-04-28 01:50:44","","1");
INSERT INTO bills VALUES("62","11","7","","2","1","44","2","Mtr.","88.00","","","","","","88.00","2","2598","2598","2019-04-28 01:50:44","","1");
INSERT INTO bills VALUES("63","11","7","","2","1","44","3","Mtr.","132.00","","","","","","132.00","2","2598","2598","2019-04-28 01:50:44","","1");
INSERT INTO bills VALUES("64","11","7","","2","1","44","3","Mtr.","132.00","","","","","","132.00","2","2598","2598","2019-04-28 01:50:44","","1");
INSERT INTO bills VALUES("65","11","7","","2","1","44","3","Mtr.","132.00","","","","","","132.00","2","2598","2598","2019-04-28 01:50:44","","1");
INSERT INTO bills VALUES("66","11","7","","2","1","44","3","Mtr.","132.00","","","","","","132.00","2","2598","2598","2019-04-28 01:50:44","","1");
INSERT INTO bills VALUES("67","11","7","","2","1","44","3","Mtr.","132.00","","","","","","132.00","2","2598","2598","2019-04-28 01:50:44","","1");
INSERT INTO bills VALUES("68","11","7","","2","1","44","2","Mtr.","88.00","","","","","","88.00","2","2598","2598","2019-04-28 01:50:44","","1");
INSERT INTO bills VALUES("69","11","7","","2","1","44","3","Mtr.","132.00","","","","","","132.00","2","2598","2598","2019-04-28 01:50:44","","1");
INSERT INTO bills VALUES("70","11","7","","2","1","44","3","Mtr.","132.00","","","","","","132.00","2","2598","2598","2019-04-28 01:50:44","","1");
INSERT INTO bills VALUES("71","12","7","","2","1","44","2","Mtr.","88.00","","","","","","88.00","1","89","89","2019-04-29 11:23:23","","1");



SET FOREIGN_KEY_CHECKS=0; DROP TABLE IF EXISTS cash_payment;

CREATE TABLE `cash_payment` (
  `id_cash_payment` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) DEFAULT NULL,
  `payment` varchar(100) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id_cash_payment`),
  KEY `customer_id_idx` (`customer_id`),
  CONSTRAINT `customer_id_payment` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id_customer`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO cash_payment VALUES("1","1","3126","2019-04-20 09:53:36","");
INSERT INTO cash_payment VALUES("2","5","89","2019-04-21 08:48:10","");
INSERT INTO cash_payment VALUES("3","5","134","2019-04-24 09:53:07","");
INSERT INTO cash_payment VALUES("4","7","2598","2019-04-28 01:50:44","");
INSERT INTO cash_payment VALUES("5","7","89","2019-04-29 11:23:23","");



SET FOREIGN_KEY_CHECKS=0; DROP TABLE IF EXISTS customer;

CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(100) DEFAULT NULL,
  `customer_address` varchar(200) DEFAULT NULL,
  `customer_mobile_no` varchar(45) DEFAULT NULL,
  `customer_GST_NO` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_customer`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO customer VALUES("1","Mayur Pradip Kharat","somwar peth, mayur dresses","09028802091","fdgdfggf");
INSERT INTO customer VALUES("2","kakak","kakak","543545353454","");
INSERT INTO customer VALUES("3","76","yt","7868","");
INSERT INTO customer VALUES("4","76","yt","7868","");
INSERT INTO customer VALUES("5","76","yt","7868","");
INSERT INTO customer VALUES("6","as","sa","34234","");
INSERT INTO customer VALUES("7","Mayur Pradip Kharat","somwar peth, mayur dresses","09028802091","");



SET FOREIGN_KEY_CHECKS=0; DROP TABLE IF EXISTS expences;

CREATE TABLE `expences` (
  `id_expence` int(100) NOT NULL AUTO_INCREMENT,
  `expence_name` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `comment` varchar(100) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id_expence`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




SET FOREIGN_KEY_CHECKS=0; DROP TABLE IF EXISTS goods;

CREATE TABLE `goods` (
  `id_goods` int(11) NOT NULL AUTO_INCREMENT,
  `goods_name` varchar(200) DEFAULT NULL,
  `HSN_code` varchar(100) DEFAULT NULL,
  `party_id` int(11) NOT NULL,
  `purchasing_rate` varchar(100) NOT NULL,
  `purchase_date` datetime NOT NULL,
  `our_rate` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `qty_type` varchar(100) NOT NULL,
  `gst_in_per` varchar(100) NOT NULL,
  `gst_rate` varchar(100) NOT NULL,
  PRIMARY KEY (`id_goods`),
  KEY `id_par` (`party_id`),
  CONSTRAINT `id_par` FOREIGN KEY (`party_id`) REFERENCES `party` (`id_party`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO goods VALUES("1","dsfsf","","1","44","2019-04-21 09:21:06","44","","Mtr.","","");



SET FOREIGN_KEY_CHECKS=0; DROP TABLE IF EXISTS goods_quantity;

CREATE TABLE `goods_quantity` (
  `id_goods_quantity` int(11) NOT NULL AUTO_INCREMENT,
  `id_good` int(11) DEFAULT NULL,
  `goods_quantity` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_goods_quantity`),
  KEY `goods_id_idx` (`id_good`),
  CONSTRAINT `goods_identity` FOREIGN KEY (`id_good`) REFERENCES `goods` (`id_goods`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO goods_quantity VALUES("1","1","-277");



SET FOREIGN_KEY_CHECKS=0; DROP TABLE IF EXISTS ledger_account;

CREATE TABLE `ledger_account` (
  `id_ledger_account` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) DEFAULT NULL,
  `invoice_id` int(11) DEFAULT NULL,
  `debit_amount` varchar(45) DEFAULT NULL,
  `credit_amount` varchar(45) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id_ledger_account`),
  KEY `custom_id_idx` (`customer_id`),
  CONSTRAINT `custom_id` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id_customer`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

INSERT INTO ledger_account VALUES("2","1","1","90","","2019-04-20 09:22:05","");
INSERT INTO ledger_account VALUES("3","1","1","90","","2019-04-20 09:22:05","");
INSERT INTO ledger_account VALUES("4","1","1","90","","2019-04-20 09:22:05","");
INSERT INTO ledger_account VALUES("5","1","1","90","","2019-04-20 09:22:05","");
INSERT INTO ledger_account VALUES("6","1","1","90","","2019-04-20 09:22:05","");
INSERT INTO ledger_account VALUES("7","1","1","90","","2019-04-20 09:22:05","");
INSERT INTO ledger_account VALUES("8","1","1","90","","2019-04-20 09:22:05","");
INSERT INTO ledger_account VALUES("9","1","1","90","","2019-04-20 09:22:05","");
INSERT INTO ledger_account VALUES("10","1","1","90","","2019-04-20 09:22:05","");
INSERT INTO ledger_account VALUES("11","1","1","90","","2019-04-20 09:22:05","");
INSERT INTO ledger_account VALUES("12","1","1","90","","2019-04-20 09:22:05","");
INSERT INTO ledger_account VALUES("13","1","1","90","","2019-04-20 09:22:05","");
INSERT INTO ledger_account VALUES("14","1","1","90","","2019-04-20 09:22:05","");
INSERT INTO ledger_account VALUES("15","1","3","3126","3126","2019-04-20 09:53:36","");
INSERT INTO ledger_account VALUES("16","7","4","1111","","2019-04-21 08:43:23","");
INSERT INTO ledger_account VALUES("17","5","5","89","89","2019-04-21 08:48:10","");
INSERT INTO ledger_account VALUES("18","7","6","210","","2019-04-21 08:49:33","");
INSERT INTO ledger_account VALUES("19","1","7","1014","","2019-04-21 06:46:42","");
INSERT INTO ledger_account VALUES("20","5","8","134","134","2019-04-24 09:53:07","");
INSERT INTO ledger_account VALUES("22","1","10","177","","2019-04-28 01:47:24","");
INSERT INTO ledger_account VALUES("23","7","11","2598","2598","2019-04-28 01:50:44","");
INSERT INTO ledger_account VALUES("24","7","12","89","89","2019-04-29 11:23:23","");



SET FOREIGN_KEY_CHECKS=0; DROP TABLE IF EXISTS party;

CREATE TABLE `party` (
  `id_party` int(11) NOT NULL AUTO_INCREMENT,
  `party_name` varchar(100) DEFAULT NULL,
  `party_address` varchar(200) DEFAULT NULL,
  `party_mobile_no` int(10) NOT NULL,
  `party_GST_NO` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_party`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO party VALUES("1","mayur","ahga","990809080","kkjhlk");



SET FOREIGN_KEY_CHECKS=0; DROP TABLE IF EXISTS party_ledger;

CREATE TABLE `party_ledger` (
  `id_party_ledger` int(100) NOT NULL AUTO_INCREMENT,
  `invoice_no` varchar(1000) NOT NULL,
  `party_id` int(100) NOT NULL,
  `debit_amount` varchar(1000) NOT NULL,
  `credit_amount` varchar(1000) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id_party_ledger`),
  KEY `party-led_id` (`party_id`),
  CONSTRAINT `party-led_id` FOREIGN KEY (`party_id`) REFERENCES `party` (`id_party`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO party_ledger VALUES("1","3","1","13","","","2019-04-29 02:34:01");



