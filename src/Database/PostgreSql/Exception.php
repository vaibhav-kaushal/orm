<?php
/**
 *
 * Part of the QCubed PHP framework.
 *
 * @license MIT
 *
 */

namespace QCubed\Database\PostgreSql;

use QCubed\Database\AbstractException;


/**
 * Database exception class
 *
 * @was QPostgreSqlDatabaseException
 */
class Exception extends AbstractException {
	/**
	 * QPostgreSqlDatabaseException constructor.
	 *
	 * @param string $strMessage
	 * @param int    $intNumber
	 * @param string $strQuery
	 */
	public function __construct($strMessage, $intNumber, $strQuery) {
		parent::__construct(sprintf("PostgreSql Error: %s", $strMessage), 2);
		$this->intErrorNumber = $intNumber;
		$this->strQuery = $strQuery;
	}
}

