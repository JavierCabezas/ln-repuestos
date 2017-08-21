<?php namespace app\module\api\controllers;
/**
 * Created by PhpStorm.
 * User: javier
 * Date: 8/19/17
 * Time: 3:21 PM
 */
use app\models\Other\{ NewsletterEmails,  ContactForm };
use yii\web\Response;
use yii\rest\Controller;
use Yii;

class CommunicationsController extends Controller
{

    /**
     * Adds a new user to the contacts database
     * @return bool
     */
    public function actionAdd(){
        Yii::$app->response->format = Response::FORMAT_JSON;
        if(isset($_POST['client_email'])){
            $c_email = $_POST['client_email'];
            $nm = new NewsletterEmails();
            $nm->email = $c_email;
            $nm->added_on = date("Y-m-d H:i:s");
            return $nm->save();
        }
    }

    public function actionContact()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
        $model = new ContactForm();
        $model->subject     = "Contacto desde el sitio web ".date('d-m-Y h:i:s');
        $model->name        = $_POST['contact_form']['name'];
        $model->email       = $_POST['contact_form']['email'];
        $model->body        = $_POST['contact_form']['message'];
        $model->vin         = $_POST['contact_form']['vin'];
        $model->telephone   = $_POST['contact_form']['telephone'];

        return $model->contact('contacto@lnrepuestos.cl');
    }
}