<?php

class m160321_073106_note extends CDbMigration
{
	public function up()
	{
		$sql="
				DROP TABLE IF EXISTS `note`;
				CREATE TABLE `note` (
				  `ID` int(11) NOT NULL,
				  `note` varchar(5120) DEFAULT NULL,
				  `destinatari` varchar(5120) DEFAULT NULL,
				  `attiva` tinyint(4) DEFAULT NULL,
				  `datainserimento` datetime DEFAULT NULL,
				  `inseritoda` varchar(50) DEFAULT NULL,
				  `datadisattivazione` datetime DEFAULT NULL,
				  `disattivatoda` varchar(50) DEFAULT NULL
				) ENGINE=InnoDB DEFAULT CHARSET=utf8;

				ALTER TABLE `note`
				ADD PRIMARY KEY (`ID`);

				ALTER TABLE `note`
				MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
			";
			$this->execute($sql);
	}

	public function down()
	{
		echo "m160321_073106_note does not support migration down.\n";
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