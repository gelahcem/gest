<?php

class m160321_073135_planning extends CDbMigration
{
	public function up()
	{
		$sql="
			DROP TABLE IF EXISTS `planning`;
			CREATE TABLE `planning` (
			  `ID` int(11) NOT NULL,
			  `RISORSA` varchar(55) DEFAULT NULL,
			  `IDENTIFICATIVO` varchar(55) DEFAULT NULL,
			  `IDCOMMESSA` varchar(10) DEFAULT NULL,
			  `ANNO` int(11) DEFAULT NULL,
			  `MESE` int(11) DEFAULT NULL,
			  `SETTIMANA` int(11) DEFAULT NULL,
			  `GIORNO` varchar(3) DEFAULT NULL,
			  `ORA` int(11) DEFAULT NULL
			) ENGINE=InnoDB DEFAULT CHARSET=utf8;

			ALTER TABLE `planning`
  			ADD PRIMARY KEY (`ID`);

			ALTER TABLE `planning`
  			MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
		";
		$this->execute($sql);
	}

	public function down()
	{
		echo "m160321_073135_planning does not support migration down.\n";
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