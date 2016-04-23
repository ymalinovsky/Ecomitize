<?php
/**
 * EcomitizeFaq related module
 *
 * @category    YanMalinovsky
 * @package     YanMalinovsky_EcomitizeFaq
 * @copyright   Copyright (c) 2016 Yan Malinovsky
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

$installer = $this;

$installer->startSetup();

$table = 'yanmalinovsky_ecomitizefaq';

$installer->run("
	DROP TABLE IF EXISTS {$this->getTable($table)};
	CREATE TABLE {$this->getTable($table)} (
	  `id` int(10) NOT NULL AUTO_INCREMENT,
	  `question` varchar(250) NOT NULL,
	  `answer` text NOT NULL,
	  `is_active` boolean NOT NULL,
	  PRIMARY KEY (`id`)
	) ENGINE=InnoDB DEFAULT CHARSET=utf8;
");

$installer->endSetup();