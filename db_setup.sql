create database mdb;

use mdb;

CREATE TABLE `imagedb` (
  `imageid` int(11) NOT NULL AUTO_INCREMENT,
  `tags` text NOT NULL,
  `image` longblob NOT NULL,
  `name` text NOT NULL,
  `rv` int(11) NOT NULL,
  `gv` int(11) NOT NULL,
  `bv` int(11) NOT NULL,
  PRIMARY KEY (`imageid`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;


CREATE TABLE `tagmap` (
  `imageid` int(11) NOT NULL,
  `tag` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;