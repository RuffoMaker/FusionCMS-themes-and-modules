DROP TABLE IF EXISTS `migration_transfer`;
CREATE TABLE `migration_transfer` (
  `id` INT(11) NOT NULL AUTO_INCREMENT COMMENT 'Identifier',
  `cStatus` BOOL DEFAULT NULL,
  `cDump` TEXT,
  `cNameOLD` CHAR(16) NOT NULL DEFAULT '',
  `cNameNEW` CHAR(16) NOT NULL DEFAULT '', 
  `cAccount` INT(11) UNSIGNED NOT NULL DEFAULT 0,
  `cRealm` INT(2) UNSIGNED NOT NULL DEFAULT 1,
  `date_created` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_checked` TIMESTAMP DEFAULT 0,
  `oPassword` CHAR(40) NOT NULL DEFAULT '',
  `oAccount` CHAR(16) NOT NULL DEFAULT '',
  `oServer` TEXT,
  `oRealm` TEXT,
  `oRealmlist` TEXT,
  `GUID` INT(11) UNSIGNED NOT NULL DEFAULT 0,
   PRIMARY KEY (`id`)
) ENGINE=MYISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

ALTER TABLE `migration_transfer` ADD COLUMN `cItemRow` TEXT AFTER `date_checked`;
ALTER TABLE `migration_transfer` ADD COLUMN `gmAccount` INT(11) UNSIGNED NOT NULL DEFAULT 0 AFTER `cAccount`;
ALTER TABLE `migration_transfer` CHANGE `oRealm` `oRealm` VARCHAR(32);
-- FOR COMMENTS
ALTER TABLE `migration_transfer` ADD COLUMN `Reason` TEXT AFTER `GUID`;
UPDATE `migration_transfer` SET `Reason` = "Not meet requirements";
--
ALTER TABLE `migration_transfer` CHANGE `cDump` `cDump` MEDIUMTEXT;
ALTER TABLE `migration_transfer` CHANGE `cItemRow` `cItemRow` MEDIUMTEXT;
--
ALTER TABLE `migration_transfer` CHANGE `oPassword` `oPassword` VARCHAR(255);
-- OPTION: ONE CHARNAME PER 1 REALMNAME, for disable:
/* ALTER TABLE `migration_transfer` ENGINE = INNODB;
CREATE UNIQUE INDEX `idx_name_realm` ON `migration_transfer`(`cNameOLD`,`oRealm`); */

DROP TABLE IF EXISTS `migration_blacklist`;
CREATE TABLE `migration_blacklist` (
  `server` CHAR(255) NOT NULL DEFAULT '',
   PRIMARY KEY (`server`)
) ENGINE=MYISAM DEFAULT CHARSET=utf8;
-- EXAMPLE HOW TO FEEL BLACKLIST
INSERT INTO `migration_blacklist` VALUES ("localhost"),("127.0.0.1");