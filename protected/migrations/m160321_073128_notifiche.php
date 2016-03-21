<?php

class m160321_073128_notifiche extends CDbMigration
{
	public function up()
	{
		$sql="
				DROP TABLE IF EXISTS `notifiche`;
				CREATE TABLE `notifiche` (
				  `ID` int(11) NOT NULL,
				  `DATA` datetime DEFAULT NULL,
				  `GIORNO` int(11) DEFAULT NULL,
				  `MESE` int(11) DEFAULT NULL,
				  `ANNO` int(11) DEFAULT NULL,
				  `CHI` varchar(1024) DEFAULT NULL
				) ENGINE=InnoDB DEFAULT CHARSET=utf8;

				ALTER TABLE `notifiche`
  				ADD PRIMARY KEY (`ID`);

  				ALTER TABLE `notifiche`
  				MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
		";
		$this->execute($sql);
	}

	public function down()
	{
		echo "m160321_073128_notifiche does not support migration down.\n";
		return false;
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}