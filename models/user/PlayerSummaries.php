<?php

namespace a1bor\steam\models\user;


use hiqdev\hiart\ActiveRecord;

class PlayerSummaries extends ActiveRecord
{
    public $queryBuilderClass = QueryBuilder::class;

    private $version = 'v2';

    public function rules()
    {
        return [
            ['steamid', 'int'],
            ['communityvisibilitystate', 'int'],
            ['profilestate', 'int'],
            ['personaname', 'string'],
            ['lastlogoff', 'int'],
            ['profileurl', 'string'],
            ['avatar', 'string'],
            ['avatarmedium', 'string'],
            ['avatarfull', 'string'],
            ['personastate', 'string'],
            ['primaryclanid', 'int'],
            ['timecreated', 'int'],
            ['personastateflags', 'int'],
            ['loccountrycode', 'string']
        ];
    }

    // public static function getDb()
    // {
    //     return \hiqdev\hiart\AbstractConnection::getDb();
    // }


    public static function tableName()
    {
        // return Inflector::camel2id(StringHelper::basename(get_called_class()), '-');
        return "GetPlayerSummaries";
    }
}

