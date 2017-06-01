<?php


namespace a1bo\steam;


class ActiveRecord extends \hiqdev\hiart\ActiveRecord
{
    /**
     * @return \hiqdev\hiart\AbstractConnection|\hiqdev\hiart\ConnectionInterface
     */
    public static function getDb()
    {
        return Connection::getDb();
    }
}
