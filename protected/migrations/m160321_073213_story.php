<?php

class m160321_073213_story extends CDbMigration
{
	public function up()
	{
		$sql="
				DROP TABLE IF EXISTS `story`;
				CREATE TABLE `story` (
				  `ID` int(11) NOT NULL,
				  `USER` int(11) DEFAULT NULL,
				  `DATETIME` datetime DEFAULT NULL,
				  `ACTION` varchar(15) DEFAULT NULL
				) ENGINE=InnoDB DEFAULT CHARSET=utf8;

				ALTER TABLE `story`
				ADD PRIMARY KEY (`ID`);

				ALTER TABLE `story`
  				MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
		";
		$this->execute($sql);
	}

	public function down()
	{
		echo "m160321_073213_story does not support migration down.\n";
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