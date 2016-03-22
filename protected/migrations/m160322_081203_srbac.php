<?php

class m160322_081203_srbac extends CDbMigration
{
	public function up()
	{
		$sql ="
			CREATE TABLE `assignments` (
			  `itemname` varchar(64) NOT NULL,
			  `userid` varchar(64) NOT NULL,
			  `bizrule` text,
			  `data` text
			) ENGINE=InnoDB DEFAULT CHARSET=utf8;

			CREATE TABLE `itemchildren` (
			  `parent` varchar(64) NOT NULL,
			  `child` varchar(64) NOT NULL
			) ENGINE=InnoDB DEFAULT CHARSET=utf8;

			CREATE TABLE `items` (
			  `name` varchar(64) NOT NULL,
			  `type` int(11) NOT NULL,
			  `description` text,
			  `bizrule` text,
			  `data` text
			) ENGINE=InnoDB DEFAULT CHARSET=utf8;

			--
			-- Dump dei dati per la tabella `assignments`
			--

			INSERT INTO `assignments` VALUES
			('Administrator', '1', '', 's:0:\"\";'),
			('Authority', '1', '', 's:0:\"\";'),
			('User', '1', '', 's:0:\"\";');

			--
			-- Dump dei dati per la tabella `itemchildren`
			--

			INSERT INTO `itemchildren` VALUES
			('Administrator', 'User Manager'),
			('Authority', 'User Manager'),
			('User Manager', 'Create User'),
			('User Manager', 'Delete User'),
			('User Manager', 'View User');

			--
			-- Dump dei dati per la tabella `items`
			--

			INSERT INTO `items` VALUES
			('Administrator', 2, NULL, NULL, NULL),
			('Authority', 2, NULL, NULL, NULL),
			('Create Post', 0, NULL, NULL, NULL),
			('Create User', 0, NULL, NULL, NULL),
			('Delete Post', 0, NULL, NULL, NULL),
			('Delete User', 0, NULL, NULL, NULL),
			('Edit Post', 0, NULL, NULL, NULL),
			('Edit User', 0, NULL, NULL, NULL),
			('Post Manager', 1, NULL, NULL, NULL),
			('User', 2, NULL, NULL, NULL),
			('User Manager', 1, NULL, NULL, NULL),
			('View Post', 0, NULL, NULL, NULL),
			('View User', 0, NULL, NULL, NULL);

			ALTER TABLE `assignments`
			  ADD PRIMARY KEY (`itemname`,`userid`);

			ALTER TABLE `itemchildren`
			  ADD PRIMARY KEY (`parent`,`child`),
			  ADD KEY `child` (`child`);

			ALTER TABLE `items`
			  ADD PRIMARY KEY (`name`);

			ALTER TABLE `assignments`
			  ADD CONSTRAINT `assignments_ibfk_1` FOREIGN KEY (`itemname`) REFERENCES `items` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

			ALTER TABLE `itemchildren`
			  ADD CONSTRAINT `itemchildren_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `items` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
			  ADD CONSTRAINT `itemchildren_ibfk_2` FOREIGN KEY (`child`) REFERENCES `items` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;
		";
			$this->execute($sql);
	}

	public function down()
	{
		echo "m160322_081203_srbac does not support migration down.\n";
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