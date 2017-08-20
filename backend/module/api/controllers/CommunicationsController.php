<?php namespace app\module\api\controllers;
/**
 * Created by PhpStorm.
 * User: javier
 * Date: 8/19/17
 * Time: 3:21 PM
 */
use app\models\Other\NewsletterEmails;
use yii\web\Response;
use yii\rest\Controller;
use Yii;

class CommunicationsController extends Controller
{
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
}