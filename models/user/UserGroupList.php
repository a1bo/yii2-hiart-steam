<?php

namespace a1bo\steam\models\user;


use hiqdev\hiart\ActiveRecord;

class UserGroupList extends ActiveRecord
{
    public $queryBuilderClass = QueryBuilder::class;


    private $version = 'v1';

//    public function rules()
//    {
//        return [
//            ['steamid', 'string'],
//            ['communityvisibilitystate', 'int'],
//            ['profilestate', 'int'],
//            ['personaname', 'string'],
//            ['lastlogoff', 'int'],
//            ['profileurl', 'string'],
//            ['avatar', 'string'],
//            ['avatarmedium', 'string'],
//            ['avatarfull', 'string'],
//            ['personastate', 'int'],
//            ['primaryclanid', 'string'],
//            ['timecreated', 'int'],
//            ['personastateflags', 'int'],
//            ['loccountrycode', 'string']
//        ];
//    }

    // public static function getDb()
    // {
    //     return \hiqdev\hiart\AbstractConnection::getDb();
    // }


    public static function tableName()
    {
        // return Inflector::camel2id(StringHelper::basename(get_called_class()), '-');
        return "GetUserGroupList";
    }
}

