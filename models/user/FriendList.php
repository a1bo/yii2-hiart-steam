<?php

namespace a1bo\steam\models\user;


use hiqdev\hiart\ActiveRecord;

class FriendList extends ActiveRecord
{
    public $queryBuilderClass = QueryBuilder::class;

    private $version = 'v1';


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
            ['personastateflags', 'int']
        ];
    }


    public static function tableName()
    {
        // return Inflector::camel2id(StringHelper::basename(get_called_class()), '-');
        return "GetFriendList";
    }
}

