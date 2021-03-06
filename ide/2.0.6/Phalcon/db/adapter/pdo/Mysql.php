<?php

namespace Phalcon\Db\Adapter\Pdo;

/**
 * Phalcon\Db\Adapter\Pdo\Mysql
 * Specific functions for the Mysql database system
 * <code>
 * $config = array(
 * "host" => "192.168.0.11",
 * "dbname" => "blog",
 * "port" => 3306,
 * "username" => "sigma",
 * "password" => "secret"
 * );
 * $connection = new \Phalcon\Db\Adapter\Pdo\Mysql($config);
 * </code>
 */
class Mysql extends \Phalcon\Db\Adapter\Pdo implements \Phalcon\Db\AdapterInterface
{

    protected $_type = "mysql";


    protected $_dialectType = "mysql";


    /**
     * Escapes a column/table/schema name
     *
     * @param string|array $identifier 
     * @return string 
     */
    public function escapeIdentifier($identifier) {}

    /**
     * Returns an array of Phalcon\Db\Column objects describing a table
     * <code>
     * print_r($connection->describeColumns("posts"));
     * </code>
     *
     * @param string $table 
     * @param string $schema 
     * @return \Phalcon\Db\Column 
     */
    public function describeColumns($table, $schema = null) {}

}
