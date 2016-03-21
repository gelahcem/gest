<?php

class m160321_073206_rubrica extends CDbMigration
{
	public function up()
	{
		$sql="
				DROP TABLE IF EXISTS `rubrica`;
				CREATE TABLE `rubrica` (
				  `Id` int(11) NOT NULL DEFAULT '0',
				  `Nome` varchar(0) DEFAULT NULL,
				  `Cognome` varchar(0) DEFAULT NULL,
				  `Societa` varchar(0) DEFAULT NULL,
				  `Ufficio` varchar(0) DEFAULT NULL,
				  `Cellulare` varchar(0) DEFAULT NULL,
				  `Descrizione` varchar(0) DEFAULT NULL
				) ENGINE=InnoDB DEFAULT CHARSET=utf8;

				ALTER TABLE `rubrica`
  				ADD PRIMARY KEY (`Id`);

		";
		$this->execute($sql);
	}

	public function down()
	{
		echo "m160321_073206_rubrica does not support migration down.\n";
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