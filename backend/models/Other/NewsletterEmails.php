<?php namespace app\models\Other;
/**
 * Created by PhpStorm.
 * User: javier
 * Date: 8/19/17
 * Time: 3:40 PM
 */
use Yii;

/**
 * This is the model class for table "newsletter_emails".
 *
 * @property int $id
 * @property string $email
 * @property string $added_on
 */
class NewsletterEmails extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'newsletter_emails';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email'], 'required'],
            [['added_on'], 'safe'],
            [['email'], 'string', 'max' => 255],
            [['email'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'email' => 'Email',
            'added_on' => 'Agregado en',
        ];
    }
}