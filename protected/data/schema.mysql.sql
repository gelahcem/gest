-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Creato il: Mar 21, 2016 alle 10:00
-- Versione del server: 10.0.23-MariaDB-0ubuntu0.15.10.1
-- Versione PHP: 5.6.11-1ubuntu3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gest`
--
CREATE DATABASE IF NOT EXISTS `gest` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `gest`;

-- --------------------------------------------------------

--
-- Struttura della tabella `attivitasky`
--

CREATE TABLE `attivitasky` (
  `ID` int(11) NOT NULL,
  `attivita` varchar(50) DEFAULT NULL,
  `descrizione` varchar(512) DEFAULT NULL,
  `datainserimento` datetime DEFAULT NULL,
  `dataeliminazione` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struttura della tabella `clienti`
--

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

-- --------------------------------------------------------

--
-- Struttura della tabella `commesse`
--

CREATE TABLE `commesse` (
  `ID` int(11) NOT NULL,
  `IDENTIFICATIVO` varchar(50) DEFAULT NULL,
  `DATAAPERTURA` datetime DEFAULT NULL,
  `DATACHIUSURA` datetime DEFAULT NULL,
  `CLIENTE` varchar(255) DEFAULT NULL,
  `DESCRIZIONE` varchar(255) DEFAULT NULL,
  `TITOLO` varchar(255) DEFAULT NULL,
  `REFERENTE` varchar(255) DEFAULT NULL,
  `RESPCOMMESSA` varchar(50) DEFAULT NULL,
  `COORDINATORE` varchar(50) DEFAULT NULL,
  `IDPREVENTIVO` varchar(50) DEFAULT NULL,
  `SUPERCOMMESSA` varchar(50) DEFAULT NULL,
  `COMMESSEPRECEDENTI` varchar(255) DEFAULT NULL,
  `NUMEROFATTURA` varchar(255) DEFAULT NULL,
  `DATAFATTURA` datetime DEFAULT NULL,
  `SOLOFORNITURA` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struttura della tabella `dettaglisky`
--

CREATE TABLE `dettaglisky` (
  `ID` int(11) NOT NULL,
  `COMMESSA` varchar(25) DEFAULT NULL,
  `SOTTOCOMMESSA` varchar(25) DEFAULT NULL,
  `RISORSA` varchar(50) DEFAULT NULL,
  `DATA` datetime DEFAULT NULL,
  `ATTIVITA` varchar(2048) DEFAULT NULL,
  `ORE` float DEFAULT NULL,
  `TURNO` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struttura della tabella `materialeutilizzato`
--

CREATE TABLE `materialeutilizzato` (
  `ID` int(50) NOT NULL DEFAULT '0',
  `DATAACQUISTO` varchar(50) DEFAULT NULL,
  `RISORSA` varchar(50) DEFAULT NULL,
  `IDMATERIALE` varchar(50) DEFAULT NULL,
  `BOLLA` varchar(50) DEFAULT NULL,
  `FATTURA` varchar(50) DEFAULT NULL,
  `QUANTITA` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struttura della tabella `materiali`
--

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

-- --------------------------------------------------------

--
-- Struttura della tabella `note`
--

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

-- --------------------------------------------------------

--
-- Struttura della tabella `notetimesheet`
--

CREATE TABLE `notetimesheet` (
  `TIMESHEET_ID` int(11) NOT NULL,
  `NOTA` varchar(2048) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struttura della tabella `notifiche`
--

CREATE TABLE `notifiche` (
  `ID` int(11) NOT NULL,
  `DATA` datetime DEFAULT NULL,
  `GIORNO` int(11) DEFAULT NULL,
  `MESE` int(11) DEFAULT NULL,
  `ANNO` int(11) DEFAULT NULL,
  `CHI` varchar(1024) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struttura della tabella `planning`
--

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

-- --------------------------------------------------------

--
-- Struttura della tabella `planning_notes`
--

CREATE TABLE `planning_notes` (
  `ID` int(11) NOT NULL,
  `ANNO` int(11) DEFAULT NULL,
  `MESE` int(11) DEFAULT NULL,
  `SETTIMANA` int(11) DEFAULT NULL,
  `NOTE` varchar(16384) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struttura della tabella `preventivi`
--

CREATE TABLE `preventivi` (
  `ID` int(255) NOT NULL,
  `IDENTIFICATIVO` varchar(255) DEFAULT NULL,
  `DATAAPERTURA` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `DATACHIUSURA` varchar(255) DEFAULT '',
  `CLIENTE` varchar(255) DEFAULT NULL,
  `DESCRIZIONE` varchar(512) DEFAULT NULL,
  `TITOLO` varchar(255) DEFAULT NULL,
  `REFERENTE` varchar(255) DEFAULT NULL,
  `RESPCOMMESSA` varchar(30) DEFAULT NULL,
  `COORDINATORE` varchar(50) NOT NULL,
  `MOSTRA` tinyint(4) DEFAULT NULL,
  `TRASFORMATO` tinyint(4) NOT NULL,
  `SOLOFORNITURA` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struttura della tabella `risorse`
--

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

-- --------------------------------------------------------

--
-- Struttura della tabella `rubrica`
--

CREATE TABLE `rubrica` (
  `Id` int(11) NOT NULL DEFAULT '0',
  `Nome` varchar(0) DEFAULT NULL,
  `Cognome` varchar(0) DEFAULT NULL,
  `Societa` varchar(0) DEFAULT NULL,
  `Ufficio` varchar(0) DEFAULT NULL,
  `Cellulare` varchar(0) DEFAULT NULL,
  `Descrizione` varchar(0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struttura della tabella `story`
--

CREATE TABLE `story` (
  `ID` int(11) NOT NULL,
  `USER` int(11) DEFAULT NULL,
  `DATETIME` datetime DEFAULT NULL,
  `ACTION` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struttura della tabella `tbl_migration`
--

CREATE TABLE `tbl_migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struttura della tabella `timesheet`
--

CREATE TABLE `timesheet` (
  `ID` int(11) NOT NULL,
  `ANNO` int(11) DEFAULT NULL,
  `MESE` int(11) DEFAULT NULL,
  `SETTIMANA` int(11) DEFAULT NULL,
  `IDENTIFICATIVO` varchar(15) DEFAULT NULL,
  `DATA` varchar(16) DEFAULT NULL,
  `DATASHORT` datetime DEFAULT NULL,
  `RISORSA` varchar(50) DEFAULT NULL,
  `IDCOMMESSA` varchar(255) DEFAULT NULL,
  `ORE` varchar(6) DEFAULT NULL,
  `KM` varchar(4) DEFAULT NULL,
  `AUTO` varchar(10) DEFAULT NULL,
  `PASTO` varchar(10) DEFAULT NULL,
  `DESCRIZIONE` varchar(2048) DEFAULT NULL,
  `BLOCCO` tinyint(4) DEFAULT NULL,
  `INSERITO` datetime DEFAULT NULL,
  `MODIFICATO` datetime DEFAULT NULL,
  `MODIFICATODA` varchar(15) DEFAULT NULL,
  `IDPREVENTIVO` varchar(15) DEFAULT NULL,
  `SUPERCOMMESSA` varchar(50) DEFAULT NULL,
  `STRAORDINARIO` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `attivitasky`
--
ALTER TABLE `attivitasky`
  ADD PRIMARY KEY (`ID`);

--
-- Indici per le tabelle `clienti`
--
ALTER TABLE `clienti`
  ADD PRIMARY KEY (`ID`);

--
-- Indici per le tabelle `commesse`
--
ALTER TABLE `commesse`
  ADD PRIMARY KEY (`ID`);

--
-- Indici per le tabelle `dettaglisky`
--
ALTER TABLE `dettaglisky`
  ADD PRIMARY KEY (`ID`);

--
-- Indici per le tabelle `materialeutilizzato`
--
ALTER TABLE `materialeutilizzato`
  ADD PRIMARY KEY (`ID`);

--
-- Indici per le tabelle `materiali`
--
ALTER TABLE `materiali`
  ADD PRIMARY KEY (`ID`);

--
-- Indici per le tabelle `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`ID`);

--
-- Indici per le tabelle `notetimesheet`
--
ALTER TABLE `notetimesheet`
  ADD PRIMARY KEY (`TIMESHEET_ID`);

--
-- Indici per le tabelle `notifiche`
--
ALTER TABLE `notifiche`
  ADD PRIMARY KEY (`ID`);

--
-- Indici per le tabelle `planning`
--
ALTER TABLE `planning`
  ADD PRIMARY KEY (`ID`);

--
-- Indici per le tabelle `planning_notes`
--
ALTER TABLE `planning_notes`
  ADD PRIMARY KEY (`ID`);

--
-- Indici per le tabelle `preventivi`
--
ALTER TABLE `preventivi`
  ADD PRIMARY KEY (`ID`);

--
-- Indici per le tabelle `risorse`
--
ALTER TABLE `risorse`
  ADD PRIMARY KEY (`ID`);

--
-- Indici per le tabelle `rubrica`
--
ALTER TABLE `rubrica`
  ADD PRIMARY KEY (`Id`);

--
-- Indici per le tabelle `story`
--
ALTER TABLE `story`
  ADD PRIMARY KEY (`ID`);

--
-- Indici per le tabelle `tbl_migration`
--
ALTER TABLE `tbl_migration`
  ADD PRIMARY KEY (`version`);

--
-- Indici per le tabelle `timesheet`
--
ALTER TABLE `timesheet`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `attivitasky`
--
ALTER TABLE `attivitasky`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT per la tabella `clienti`
--
ALTER TABLE `clienti`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT per la tabella `commesse`
--
ALTER TABLE `commesse`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT per la tabella `dettaglisky`
--
ALTER TABLE `dettaglisky`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT per la tabella `materiali`
--
ALTER TABLE `materiali`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT per la tabella `note`
--
ALTER TABLE `note`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT per la tabella `notifiche`
--
ALTER TABLE `notifiche`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT per la tabella `planning`
--
ALTER TABLE `planning`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT per la tabella `planning_notes`
--
ALTER TABLE `planning_notes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT per la tabella `preventivi`
--
ALTER TABLE `preventivi`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT per la tabella `risorse`
--
ALTER TABLE `risorse`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT per la tabella `story`
--
ALTER TABLE `story`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT per la tabella `timesheet`
--
ALTER TABLE `timesheet`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;