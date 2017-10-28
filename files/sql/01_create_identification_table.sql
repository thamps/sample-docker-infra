CREATE TABLE IF NOT EXISTS `identification` 
(
  `userID` tinyint(5) unsigned NOT NULL AUTO_INCREMENT,
  `Name` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `Description` mediumtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`userID`)
) ;
