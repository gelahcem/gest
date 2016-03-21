<?php

class m160321_073153_preventivi extends CDbMigration
{
	public function up()
	{
		$sql="
				DROP TABLE IF EXISTS `preventivi`;
				CREATE TABLE `preventivi` (
				  `ID` int(255) NOT NULL,
				  `IDENTIFICATIVO` varchar(255) DEFAULT NULL,
				  `DATAAPERTURA` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
				  `DATACHIUSURA` varchar(255) DEFAULT '',
				  `CLIENTE` varchar(255) DEFAULT NULL,
				  `DESCRIZIONE` varchar(512) DEFAULT NULL,
				  `TITOLO` varchar(255) DEFAULT NULL,
				  `REFERENTE` varchar(255) DEFAULT NULL,
				  `RESPCOMMESSA` varchar(30) DEFAULT NULL,
				  `COORDINATORE` varchar(50) NOT NULL,
				  `MOSTRA` tinyint(4) DEFAULT NULL,
				  `TRASFORMATO` tinyint(4) NOT NULL,
				  `SOLOFORNITURA` tinyint(1) NOT NULL DEFAULT '0'
				) ENGINE=InnoDB DEFAULT CHARSET=utf8;

				ALTER TABLE `preventivi`
  				ADD PRIMARY KEY (`ID`);

				ALTER TABLE `preventivi`
  				MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
		";
		$this->execute($sql);
	}

	public function down()
	{
		echo "m160321_073153_preventivi does not support migration down.\n";
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