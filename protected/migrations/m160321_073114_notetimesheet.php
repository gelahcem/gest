<?php

class m160321_073114_notetimesheet extends CDbMigration
{
	public function up()
	{
		$sql="
			DROP TABLE IF EXISTS `notetimesheet`;
			CREATE TABLE `notetimesheet` (
			  `TIMESHEET_ID` int(11) NOT NULL,
			  `NOTA` varchar(2048) DEFAULT NULL
			) ENGINE=InnoDB DEFAULT CHARSET=utf8;

			ALTER TABLE `notetimesheet`
  			ADD PRIMARY KEY (`TIMESHEET_ID`);
		";
		$this->execute($sql);
	}

	public function down()
	{
		echo "m160321_073114_notetimesheet does not support migration down.\n";
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