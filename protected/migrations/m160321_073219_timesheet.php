<?php

class m160321_073219_timesheet extends CDbMigration
{
	public function up()
	{
		$sql="
				DROP TABLE IF EXISTS `timesheet`;
				CREATE TABLE `timesheet` (
				  `ID` int(11) NOT NULL,
				  `ANNO` int(11) DEFAULT NULL,
				  `MESE` int(11) DEFAULT NULL,
				  `SETTIMANA` int(11) DEFAULT NULL,
				  `IDENTIFICATIVO` varchar(15) DEFAULT NULL,
				  `DATA` varchar(16) DEFAULT NULL,
				  `DATASHORT` datetime DEFAULT NULL,
				  `RISORSA` varchar(50) DEFAULT NULL,
				  `IDCOMMESSA` varchar(255) DEFAULT NULL,
				  `ORE` varchar(6) DEFAULT NULL,
				  `KM` varchar(4) DEFAULT NULL,
				  `AUTO` varchar(10) DEFAULT NULL,
				  `PASTO` varchar(10) DEFAULT NULL,
				  `DESCRIZIONE` varchar(2048) DEFAULT NULL,
				  `BLOCCO` tinyint(4) DEFAULT NULL,
				  `INSERITO` datetime DEFAULT NULL,
				  `MODIFICATO` datetime DEFAULT NULL,
				  `MODIFICATODA` varchar(15) DEFAULT NULL,
				  `IDPREVENTIVO` varchar(15) DEFAULT NULL,
				  `SUPERCOMMESSA` varchar(50) DEFAULT NULL,
				  `STRAORDINARIO` tinyint(4) NOT NULL DEFAULT '0'
				  )ENGINE=InnoDB DEFAULT CHARSET=utf8;

				ALTER TABLE `timesheet`
  				ADD PRIMARY KEY (`ID`);

  				ALTER TABLE `timesheet`
  				MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
		";
		$this->execute($sql);
	}

	public function down()
	{
		echo "m160321_073219_timesheet does not support migration down.\n";
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