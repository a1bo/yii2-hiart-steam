<?php

namespace a1bors\steam;


class Connection extends \hiqdev\hiart\rest\Connection implements ConnectionInterface
{
    public $queryBuilderClass = QueryBuilder::class;

    public $baseUri = 'http://api.steampowered.com/';

    public static $dbname = 'github';

    public $name = 'github';

    public static function getDb($name = null, $class = ConnectionInterface::class)
    {
        return parent::getDb($name, $class);
    }
}
