<?php namespace app\models\Login;
/**
 * Created by PhpStorm.
 * User: javier
 * Date: 7/30/17
 * Time: 3:46 PM
 */
use Yii;
use app\models\Razgo\UserLoginTrait;
/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $token
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 */
class User extends \yii\db\ActiveRecord
{
    use UserLoginTrait;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email', 'auth_key', 'password_hash'], 'required'],
            [['name'], 'string', 'max' => 200],
            [['email', 'token', 'password_hash', 'password_reset_token'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['email'], 'unique'],
            [['password_reset_token'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'token' => 'Token',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
        ];
    }
}