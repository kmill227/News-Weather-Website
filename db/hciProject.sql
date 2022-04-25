SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

DROP TABLE IF EXISTS `globaltrends`;
CREATE TABLE IF NOT EXISTS `globaltrends` (
  `GlobalTrend` text NOT NULL,
  `TotalSearches` int(11) DEFAULT NULL,
  'LatestTime' datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;