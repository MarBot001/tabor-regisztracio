<?php

namespace app\controllers;

use app\models\Contact;
use app\models\ContactForm;
use Yii;
use yii\web\Controller;
use yii\filters\AccessControl;

class AdminController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            "access" => [
                "class" => AccessControl::class,
                "rules" => [
                    [
                        "allow" => true,
                        "roles" => ["@"],
                    ],
                ],
            ],
        ];
    }

    public function actionIndex()
    {
        $this->view->title = "Contact Messages";
        $this->view->params["breadcrumbs"][] = $this->view->title;
    
        $contacts = Contact::find()->orderBy(['id' => SORT_DESC])->all();
        $count = Contact::find()->count();
    
        return $this->render("index", [
            "contacts" => $contacts,
            "count" => $count,
        ]);

        
    }
    public function actionAll($id)
    {
        $contact = Contact::findOne($id);
        
        if (!$contact) {
            Yii::$app->session->setFlash('error', 'A rekord nem található.');
            return $this->redirect(['index']);
        }
    
        return $this->render('all', [
            'contact' => $contact,
        ]);
    }

    public function actionDelete($id)
    {
        $contact = Contact::findOne($id);
        if ($contact) {
            $contact->delete();
            Yii::$app->session->setFlash('success', 'A rekord sikeresen törölve lett.');
        } else {
            Yii::$app->session->setFlash('error', 'A rekord nem található.');
        }
        
        return $this->redirect(['index']);
    }
}
