<?php

class m160321_073031_dettaglisky extends CDbMigration
{
	public function up()
	{
		$sql ="
				DROP TABLE IF EXISTS `dettaglisky`;
				CREATE TABLE `dettaglisky` (
				  `ID` int(11) NOT NULL,
				  `COMMESSA` varchar(25) DEFAULT NULL,
				  `SOTTOCOMMESSA` varchar(25) DEFAULT NULL,
				  `RISORSA` varchar(50) DEFAULT NULL,
				  `DATA` datetime DEFAULT NULL,
				  `ATTIVITA` varchar(2048) DEFAULT NULL,
				  `ORE` float DEFAULT NULL,
				  `TURNO` varchar(6) DEFAULT NULL
				) ENGINE=InnoDB DEFAULT CHARSET=utf8;

				ALTER TABLE `dettaglisky`
  				ADD PRIMARY KEY (`ID`);

				ALTER TABLE `dettaglisky`
  				MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
		";
		$this->execute($sql);
	}

	public function down()
	{
		echo "m160321_073031_dettaglisky does not support migration down.\n";
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