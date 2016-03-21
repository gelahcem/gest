<?php

class m160321_073143_planning_notes extends CDbMigration
{
	public function up()
	{
		$sql="
			DROP TABLE IF EXISTS `planning_notes`;
			CREATE TABLE `planning_notes` (
			  `ID` int(11) NOT NULL,
			  `ANNO` int(11) DEFAULT NULL,
			  `MESE` int(11) DEFAULT NULL,
			  `SETTIMANA` int(11) DEFAULT NULL,
			  `NOTE` varchar(16384) DEFAULT NULL
			) ENGINE=InnoDB DEFAULT CHARSET=utf8;

			ALTER TABLE `planning_notes`
  			ADD PRIMARY KEY (`ID`);

  			ALTER TABLE `planning_notes`
  			MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
		";
		$this->execute($sql);
	}

	public function down()
	{
		echo "m160321_073143_planning_notes does not support migration down.\n";
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