<?php
/**
 * GitHub API implementation for yii2-hiart.
 *
 * @link      https://github.com/hiqdev/yii2-hiart-github
 * @package   yii2-hiart-github
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2017, HiQDev (http://hiqdev.com/)
 */

namespace hiqdev\hiart\steam;


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
