<?php

class m160321_072924_risorse extends CDbMigration
{
	public function up()
	{
		$sql = "
				DROP TABLE IF EXISTS `risorse`;
				CREATE TABLE `risorse` (
				  `ID` int(50) NOT NULL,
				  `IDENTIFICATIVO` varchar(50) DEFAULT NULL,
				  `NOME` varchar(50) DEFAULT NULL,
				  `COGNOME` varchar(50) DEFAULT NULL,
				  `NOMINATIVO` varchar(50) DEFAULT NULL,
				  `USERNAME` varchar(50) DEFAULT NULL,
				  `PASSWORD` varchar(50) DEFAULT NULL,
				  `RUOLO` varchar(50) DEFAULT NULL,
				  `COSTO` varchar(50) DEFAULT NULL,
				  `ACL` varchar(50) DEFAULT NULL,
				  `MAIL` varchar(50) DEFAULT NULL,
				  `ACLFORTE` int(11) DEFAULT '0',
				  `ACLSKY` int(11) DEFAULT NULL
				) ENGINE=InnoDB DEFAULT CHARSET=utf8;

				ALTER TABLE `risorse`
  				ADD PRIMARY KEY (`ID`);

  				ALTER TABLE `risorse`
  				MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
		";
		$this->execute($sql);
	}

	public function down()
	{
		echo "m160321_072924_risorse does not support migration down.\n";
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