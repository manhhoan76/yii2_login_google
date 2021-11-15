<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

// use yii\web\IdentityInterface;

class User extends  ActiveRecord implements IdentityInterface
{
    public static function tableName()
    {
        return 'user';
    }

    public static function primaryKey()
    {
        return 'id';
    }

    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['username'], 'string'],
            [['auth_key'], 'string'],
            [['password_hash'], 'string'],
            [['password_reset_token'], 'string'],
            [['email'], 'string'],
            [['status'], 'integer'],
            [['created_at'], 'integer'],
            [['updated_at'], 'integer'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'auth_key' => 'AuthKey',
            'password_hash' => 'password_hash',
            'password_reset_token' => 'password_reset_token',
            'email' => 'email',
            'status' => 'status',
            'created_at' => 'created_at',
            'updated_at' => 'updated_at',
        ];
    }

    public static function findIdentity($id)
    {
        return static::findOne(['id' => $id]);
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['access_token' => $token]);
    }

    public function getId()
    {
        return $this->id;
    }

    public function getAuthKey()
    {
        return $this->auth_key;
    }

    public function validateAuthKey($authKey)
    {
        return $this->auth_key === $authKey;
    }
}
