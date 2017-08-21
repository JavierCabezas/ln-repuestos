<?php namespace app\models\Other;
/**
 * Created by PhpStorm.
 * User: javier
 * Date: 8/20/17
 * Time: 8:50 PM
 */
use Yii;
use yii\base\Model;
/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public $name;
    public $email;
    public $subject;
    public $body;
    public $vin;
    public $telephone;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['name', 'email', 'subject', 'body'], 'required'],
            ['email', 'email'],
        ];
    }


    /**
     * Sends an email to the specified email address using the information collected by this model.
     * @param string $email the target email address
     * @return bool whether the model passes validation
     */
    public function contact($email)
    {
        if($this->vin){
            $this->body .= "\nEl usuario adjuntó su VIN: ".$this->vin;
        }
        if($this->telephone){
            $this->body .= "\nEl usuario adjuntó su teléfono: ".$this->telephone;
        }

        if ($this->validate()) {
            Yii::$app->mailer->compose()
                ->setTo($email)
                ->setFrom([$this->email => $this->name])
                ->setSubject($this->subject)
                ->setTextBody($this->body)
                ->send();
            return true;
        }
        return false;
    }
}
