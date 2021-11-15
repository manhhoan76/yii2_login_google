<?php

namespace app\models;

use yii\db\ActiveRecord;

class Profile extends ActiveRecord
{
    public static function tableName()
    {
        return 'profile';
    }

    public static function primaryKey()
    {
        return 'id';
    }

    public function rules()
    {
        return [
            [['id'], 'string'],
            [['user_id'], 'string'],
            [['name'], 'string'],
            [['email'], 'string'],
            [['avatar'], 'string'],
            [['birth_day'], 'string'],
            [['locale'], 'string'],
            [['address'], 'string'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'UserId',
            'name' => 'Name',
            'email' => 'Email',
            'avatar' => 'Avatar',
            'birth_day' => 'BirthDay',
            'locale' => 'Locale',
            'address' => 'Address',
        ];
    }
}
