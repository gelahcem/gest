<?php

class m160321_073008_clienti extends CDbMigration
{
	public function up()
	{
		$sql="
				DROP TABLE IF EXISTS `clienti`;
				CREATE TABLE `clienti` (
				  `ID` int(11) NOT NULL,
				  `IDENTIFICATIVO` varchar(255) DEFAULT NULL,
				  `AZIENDA` varchar(255) DEFAULT NULL,
				  `INDIRIZZO` varchar(255) DEFAULT NULL,
				  `CITTA` varchar(255) DEFAULT NULL,
				  `TEL1` varchar(255) DEFAULT NULL,
				  `TEL2` varchar(255) DEFAULT NULL,
				  `FAX` varchar(255) DEFAULT NULL,
				  `MAIL` varchar(255) DEFAULT NULL,
				  `REFERENTI` varchar(255) DEFAULT NULL,
				  `NOTE` varchar(255) DEFAULT NULL,
				  `ATTIVO` tinyint(1) DEFAULT '1'
				) ENGINE=InnoDB DEFAULT CHARSET=utf8;

				ALTER TABLE `clienti`
  				ADD PRIMARY KEY (`ID`);

  				ALTER TABLE `clienti`
  				MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
		";
		$this->execute($sql);
	}

	public function down()
	{
		echo "m160321_073008_clienti does not support migration down.\n";
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