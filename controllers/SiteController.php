<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            "access" => [
                "class" => AccessControl::class,
                "only" => ["logout"],
                "rules" => [
                    [
                        "actions" => ["logout"],
                        "allow" => true,
                        "roles" => ["@"],
                    ],
                ],
            ],
            "verbs" => [
                "class" => VerbFilter::class,
                "actions" => [
                    "logout" => ["post"],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            "error" => [
                "class" => "yii\web\ErrorAction",
            ],
            "captcha" => [
                "class" => "yii\captcha\CaptchaAction",
                "fixedVerifyCode" => YII_ENV_TEST ? "testme" : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $model = new ContactForm();
        $successMessage = null;
    
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            Yii::$app->db
                ->createCommand()
                ->insert("contact", [
                    "nev" => $model->nev,
                    "email" => $model->email,
                    "anyjaneve" => $model->anyjaneve,
                    "telefonszam" => $model->telefonszam,
                    "lakcim" => $model->lakcim,
                    "szulhely" => $model->szulhely,
                    "szulido" => $model->szulido,
                    "szigszam" => $model->szigszam,
                    "taj" => $model->taj,
                    "szak" => $model->szak,
                    "hozzatartozo_nev" => $model->hozzatartozo_nev,
                    "hozzatartozo_lakcim" => $model->hozzatartozo_lakcim,
                    "hozzatartozo_telefonszam" => $model->hozzatartozo_telefonszam,
                    "hozzatartozo_egyeb" => $model->hozzatartozo_egyeb,
                    "allergia" => $model->allergia,
                    "polomeret" => $model->polomeret,
                    "egyeb_nyilatkozatok" => $model->egyeb_nyilatkozatok,

                ])
                ->execute();
    
            Yii::$app->session->setFlash("success", "A jelentkezés sikeresen megtörtént! Hamarosan felvesszük veled a kapcsolatot.");
            return $this->redirect(["index"]);
        }
    
        return $this->render("index", [
            "model" => $model,
        ]);
    }
    

    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->redirect(["admin/index"]);
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->redirect(["admin/index"]);
        }

        return $this->render("login", [
            "model" => $model,
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
