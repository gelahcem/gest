<?php

class m160321_073016_commesse extends CDbMigration
{
	public function up()
	{
		$sql="
				DROP TABLE IF EXISTS `commesse`;
				CREATE TABLE `commesse` (
				  `ID` int(11) NOT NULL,
				  `IDENTIFICATIVO` varchar(50) DEFAULT NULL,
				  `DATAAPERTURA` datetime DEFAULT NULL,
				  `DATACHIUSURA` datetime DEFAULT NULL,
				  `CLIENTE` varchar(255) DEFAULT NULL,
				  `DESCRIZIONE` varchar(255) DEFAULT NULL,
				  `TITOLO` varchar(255) DEFAULT NULL,
				  `REFERENTE` varchar(255) DEFAULT NULL,
				  `RESPCOMMESSA` varchar(50) DEFAULT NULL,
				  `COORDINATORE` varchar(50) DEFAULT NULL,
				  `IDPREVENTIVO` varchar(50) DEFAULT NULL,
				  `SUPERCOMMESSA` varchar(50) DEFAULT NULL,
				  `COMMESSEPRECEDENTI` varchar(255) DEFAULT NULL,
				  `NUMEROFATTURA` varchar(255) DEFAULT NULL,
				  `DATAFATTURA` datetime DEFAULT NULL,
				  `SOLOFORNITURA` tinyint(4) DEFAULT NULL
				) ENGINE=InnoDB DEFAULT CHARSET=utf8;

				ALTER TABLE `commesse`
  				ADD PRIMARY KEY (`ID`);

  				ALTER TABLE `commesse`
  				MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
		";
		$this->execute($sql);
	}

	public function down()
	{
		echo "m160321_073016_commesse does not support migration down.\n";
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