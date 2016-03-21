<?php

class m160321_072944_attivitasky extends CDbMigration
{
	public function up()
	{
		$sql= "
				DROP TABLE IF EXISTS `attivitasky`;
				CREATE TABLE `attivitasky` (
				  `ID` int(11) NOT NULL,
				  `attivita` varchar(50) DEFAULT NULL,
				  `descrizione` varchar(512) DEFAULT NULL,
				  `datainserimento` datetime DEFAULT NULL,
				  `dataeliminazione` datetime DEFAULT NULL
				) ENGINE=InnoDB DEFAULT CHARSET=utf8;

				ALTER TABLE `attivitasky`
  				ADD PRIMARY KEY (`ID`);

				ALTER TABLE `attivitasky`
  				MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
		";
		$this->execute($sql);
	}

	public function down()
	{
		echo "m160321_072944_attivitasky does not support migration down.\n";
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