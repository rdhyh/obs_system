-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table obs_system.floodvictim
CREATE TABLE IF NOT EXISTS `floodvictim` (
  `vic_id` bigint(20) NOT NULL DEFAULT '0',
  `vic_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`vic_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table obs_system.floodvictim: ~0 rows (approximately)
/*!40000 ALTER TABLE `floodvictim` DISABLE KEYS */;
INSERT INTO `floodvictim` (`vic_id`, `vic_name`) VALUES
	(7mysql31212083178, 'Aminah'),
	(930303126789, 'Ahmad');
/*!40000 ALTER TABLE `floodvictim` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
