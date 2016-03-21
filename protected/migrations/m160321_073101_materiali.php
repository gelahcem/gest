<?php

class m160321_073101_materiali extends CDbMigration
{
	public function up()
	{
		$sql="
				DROP TABLE IF EXISTS `materiali`;
				CREATE TABLE `materiali` (
				  `ID` int(50) NOT NULL,
				  `IDENTIFICATIVO` varchar(50) DEFAULT NULL,
				  `MARCA` varchar(50) DEFAULT NULL,
				  `MODELLO` varchar(50) DEFAULT NULL,
				  `TIPO` varchar(50) DEFAULT NULL,
				  `FORNITORE` varchar(50) DEFAULT NULL,
				  `COSTOUNITARIO` varchar(50) DEFAULT NULL,
				  `DESCRIZIONE` varchar(50) DEFAULT NULL
				) ENGINE=InnoDB DEFAULT CHARSET=utf8;

				ALTER TABLE `materiali`
  				ADD PRIMARY KEY (`ID`);

				ALTER TABLE `materiali`
  				MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
		";
		$this->execute($sql);
	}

	public function down()
	{
		echo "m160321_073101_materiali does not support migration down.\n";
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