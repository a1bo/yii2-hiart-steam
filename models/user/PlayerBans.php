<?php

namespace a1bo\steam\models\user;


use hiqdev\hiart\ActiveRecord;

class PlayerBans extends ActiveRecord
{
    public $queryBuilderClass = QueryBuilder::class;

    private $version = 'v1';

    public function rules()
    {
        return [
            ['steamid', 'int'],
            ['communitybanned', 'int'],
            ['vacbanned', 'int'],
            ['numberofvacbans', 'int'],
            ['dayssincelastban', 'int'],
            ['economyban', 'string'],
        ];
    }

    // public static function getDb()
    // {
    //     return \hiqdev\hiart\AbstractConnection::getDb();
    // }


    public static function tableName()
    {
        // return Inflector::camel2id(StringHelper::basename(get_called_class()), '-');
        return "GetPlayerBans";
    }
}

