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
  PRIMARY KEY (`id_bills`),
  KEY `customer_id_idx` (`customer_id`),
  KEY `goods_id_idx` (`goods_id`),
  CONSTRAINT `customer_id` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id_customer`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `goods_id` FOREIGN KEY (`goods_id`) REFERENCES `goods` (`id_goods`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `shipped_to_id` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id_customer`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO bills VALUES("1","0","","","","","","","","","","","","","","","","","","");
INSERT INTO bills VALUES("2","1","2","","1","7","462","5","2310.00","17","293.00","17","293.00","1724.00","2310.00","6","2316","2316","2019-04-21 10:02:32","");
INSERT INTO bills VALUES("3","2","2","","2","7","462","34","15708.00","17","1993.00","17","1993.00","11722.00","15708.00","6","15714","15714","2019-04-21 10:04:35","");
INSERT INTO bills VALUES("4","3","1","","1","4","28","2","56.00","14","6.00","14","6.00","44.00","56.00","2","58","58","2019-04-21 06:29:26","");
INSERT INTO bills VALUES("5","4","1","","1","2","42","3","126.00","17.1","16.00","17.1","16.00","94.00","126.00","2","128","128","2019-04-21 06:37:07","");
INSERT INTO bills VALUES("6","5","1","","2","1","37","2","74.00","16.5","9.00","16.5","9.00","56.00","74.00","2","76","76","2019-04-24 09:32:19","");
INSERT INTO bills VALUES("7","6","2","","1","7","462","3","1386.00","17","176.00","17","176.00","1034.00","1386.00","23","1409","1409","2019-04-24 09:52:39","");



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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO cash_payment VALUES("1","2","15714","2019-04-21 10:04:35","");
INSERT INTO cash_payment VALUES("2","1","76","2019-04-24 09:32:19","");



SET FOREIGN_KEY_CHECKS=0; DROP TABLE IF EXISTS customer;

CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(100) DEFAULT NULL,
  `customer_address` varchar(200) DEFAULT NULL,
  `customer_mobile_no` varchar(45) DEFAULT NULL,
  `customer_GST_NO` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_customer`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO customer VALUES("1","Ram Deshmukh","Sindhkhed raja","09028802091","989dsfjkdskj");
INSERT INTO customer VALUES("2","jhgjkh","hgjh","8098","hgfkjg");



SET FOREIGN_KEY_CHECKS=0; DROP TABLE IF EXISTS expences;

CREATE TABLE `expences` (
  `id_expence` int(100) NOT NULL AUTO_INCREMENT,
  `expence_name` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `comment` varchar(100) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id_expence`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO expences VALUES("1","Mayur","300","hello","2019-04-20 01:24:03");



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
  `gst_in_per` varchar(100) NOT NULL,
  `gst_rate` varchar(100) NOT NULL,
  PRIMARY KEY (`id_goods`),
  KEY `id_par` (`party_id`),
  CONSTRAINT `id_par` FOREIGN KEY (`party_id`) REFERENCES `party` (`id_party`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO goods VALUES("1","mnbsadmsa jksdfbska kjksdajhasd jskdfajsbha","233","1","21","0000-00-00 00:00:00","11","-12","33","37");
INSERT INTO goods VALUES("2","fgd","324","1","23.4","2019-04-06 07:29:38","24.2","45","34.2","42");
INSERT INTO goods VALUES("3","asd","sad","2","2","2019-04-12 11:49:22","23","23","22","23");
INSERT INTO goods VALUES("4","dfsf","dsf","2","34","2019-04-12 11:50:30","23","2","28","28");
INSERT INTO goods VALUES("5","qw","qww","2","23","2019-04-12 12:04:52","23","2","28","29");
INSERT INTO goods VALUES("6","rwer","ewrwr","2","34","2019-04-12 12:07:02","23","25","28","29");
INSERT INTO goods VALUES("7","dfsa","dsfsdf","2","342","2019-04-02 06:36:02","345","","34","462");



SET FOREIGN_KEY_CHECKS=0; DROP TABLE IF EXISTS goods_quantity;

CREATE TABLE `goods_quantity` (
  `id_goods_quantity` int(11) NOT NULL AUTO_INCREMENT,
  `id_good` int(11) DEFAULT NULL,
  `goods_quantity` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_goods_quantity`),
  KEY `goods_id_idx` (`id_good`),
  CONSTRAINT `goods_identity` FOREIGN KEY (`id_good`) REFERENCES `goods` (`id_goods`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO goods_quantity VALUES("1","7","1");



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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO ledger_account VALUES("1","2","1","2316","","2019-04-21 10:02:32","");
INSERT INTO ledger_account VALUES("2","2","1","2316","","2019-04-21 10:02:32","");
INSERT INTO ledger_account VALUES("3","2","1","2316","","2019-04-21 10:02:32","");
INSERT INTO ledger_account VALUES("4","2","2","15714","15714","2019-04-21 10:04:35","");
INSERT INTO ledger_account VALUES("5","1","3","58","","2019-04-21 06:29:26","");
INSERT INTO ledger_account VALUES("6","1","4","128","","2019-04-21 06:37:07","");
INSERT INTO ledger_account VALUES("7","1","5","76","76","2019-04-24 09:32:19","");
INSERT INTO ledger_account VALUES("8","2","6","1409","","2019-04-24 09:52:39","");



SET FOREIGN_KEY_CHECKS=0; DROP TABLE IF EXISTS party;

CREATE TABLE `party` (
  `id_party` int(11) NOT NULL AUTO_INCREMENT,
  `party_name` varchar(100) DEFAULT NULL,
  `party_address` varchar(200) DEFAULT NULL,
  `party_mobile_no` int(10) NOT NULL,
  `party_GST_NO` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_party`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO party VALUES("1","Mayur Kharat","Sindhkhed raja","2147483647","dfsdfew");
INSERT INTO party VALUES("2","ABCD","SS","2147483647","kjahskkjs");



