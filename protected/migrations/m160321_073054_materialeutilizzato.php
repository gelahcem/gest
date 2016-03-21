<?php

class m160321_073054_materialeutilizzato extends CDbMigration
{
	public function up()
	{
		$sql="
				DROP TABLE IF EXISTS `materialeutilizzato`;
				CREATE TABLE `materialeutilizzato` (
				  `ID` int(50) NOT NULL DEFAULT '0',
				  `DATAACQUISTO` varchar(50) DEFAULT NULL,
				  `RISORSA` varchar(50) DEFAULT NULL,
				  `IDMATERIALE` varchar(50) DEFAULT NULL,
				  `BOLLA` varchar(50) DEFAULT NULL,
				  `FATTURA` varchar(50) DEFAULT NULL,
				  `QUANTITA` varchar(50) DEFAULT NULL
				) ENGINE=InnoDB DEFAULT CHARSET=utf8;

				ALTER TABLE `materialeutilizzato`
  				ADD PRIMARY KEY (`ID`);
		";
		$this->execute($sql);
	}

	public function down()
	{
		echo "m160321_073054_materialeutilizzato does not support migration down.\n";
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