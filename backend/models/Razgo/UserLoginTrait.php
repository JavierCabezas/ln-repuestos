<?php namespace app\models\Razgo;
use app\models\Login\User;

/**
 * Created by PhpStorm.
 * User: javier
 * Date: 7/30/17
 * Time: 4:01 PM
 */
trait UserLoginTrait{
    public static function findIdentity($id)
    {
        return static::find()->where(['id' => $id])->one();
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['token' => $token]);
    }

    public function getAuthKey()
    {
        return $this->authKey;
    }

    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return $this->password === $password;
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->id;
    }
}