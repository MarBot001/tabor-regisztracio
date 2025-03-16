<?php
use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
use yii\captcha\Captcha;

$this->title = 'Jelentkezés';
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1><br><br>

    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

        <div class="alert alert-success">
            Köszönjük hogy felvetted velünk a kapcsolatot! Hamarosan válaszolunk.
        </div>

    <?php else: ?>


        <div class="row">
            <div class="col-lg-5">

            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

            <h3>Saját adatok, elérhetőségek</h3>
            <?= $form->field($model, 'nev')->textInput(['autofocus' => true]) ?>

            <?= $form->field($model, 'email') ->textInput(['placeholder' => 'pelda@email.hu']) ?>

            <?= $form->field($model, 'telefonszam') ->textInput(['placeholder' => '+36123456789']) ?>
            
            <?= $form->field($model, 'anyjaneve') ?>
            
            <?= $form->field($model, 'lakcim') ->textInput(['placeholder' => '0000, Példaváros, Példa utca, 2']) ?>

            <?= $form->field($model, 'szulhely') ?>

            <div class="form-group field-contactform-szulido">
                <label class="control-label" for="contactform-szulido">Születési idő</label>
                <input type="date" id="contactform-szulido" class="form-control" name="ContactForm[szulido]" value="<?= $model->szulido ?>">
            </div>
            
            <?= $form->field($model, 'szak') ?>

            <br><h3>Szükséges igazolványok adatai:</h3>
            <?= $form->field($model, 'szigszam') ->textInput(['placeholder' => '123456AB']) ?>


            <?= $form->field($model, 'taj') ->textInput(['placeholder' => '123 456 789']) ?>

            <br><h3>Egészségügyi adatok</h3>
            <?= $form->field($model, 'allergia') ->textarea(['rows' => 6]) ?>


            <br><h3>Közeli hozzátartozó adatai</h3>
            <?= $form->field($model, 'hozzatartozo_egyeb') ->textInput(['placeholder' => 'pl. szülő / gyám / gondviselő ']) ?>

            <?= $form->field($model, 'hozzatartozo_nev') ?>

            <?= $form->field($model, 'hozzatartozo_lakcim') ?>

            <?= $form->field($model, 'hozzatartozo_telefonszam') ?>


            <br><h3>Egyéb</h3>
            <?= $form->field($model, 'polomeret')->dropDownList([
                    'S' => 'S',
                    'M' => 'M',
                    'L' => 'L',
                    'XL' => 'XL',
                    'XXL' => 'XXL',
                    'XXXL' => 'XXXL',
                    'XXXXL' => 'XXXXL',
                ], ['prompt' => 'Válassz méretet...']) ?>

            <?= $form->field($model, 'egyeb_nyilatkozatok') ->textarea(['rows' => 6]) ?>
            
            <p>A "Jelentkezés leadása!" gombra kattintva elfogadom az <a href="#">Adatkezelési nyilatkozatot</a> és a <a href="#">Felelősségvállalási nyilatkozatot.</a></p>
            <div class="form-group">
                <?= Html::submitButton('Jelentkezés leadása!', ['class' => 'btn btn-success', 'name' => 'contact-button']) ?>
            </div>

            <?php ActiveForm::end(); ?>


            </div>
        </div>

    <?php endif; ?>
</div>
