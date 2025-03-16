<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = "Részletek: " . $contact->nev;
$this->params["breadcrumbs"][] = ['label' => 'Kapcsolatok', 'url' => ['index']];
$this->params["breadcrumbs"][] = $this->title;
?>

<h1><?= Html::encode($this->title) ?></h1>

<div>
<table class="table">
    <tr>
        <th>Regisztráció dátuma</th>
        <td><?= Html::encode($contact->bekuldve) ?></td>
    </tr>
    <tr>
        <th>Név</th>
        <td><?= Html::encode($contact->nev) ?></td>
    </tr>
    <tr>
        <th>Email cím</th>
        <td><?= Html::encode($contact->email) ?></td>
    </tr>
    <tr>
        <th>Telefonszám</th>
        <td><?= Html::encode($contact->telefonszam) ?></td>
    </tr>
    <tr>
        <th>Anyja neve</th>
        <td><?= Html::encode($contact->anyjaneve) ?></td>
    </tr>
    <tr>
        <th>Lakcím</th>
        <td><?= Html::encode($contact->lakcim) ?></td> 
    </tr>
    <tr>
        <th>Születési hely</th>
        <td><?= Html::encode($contact->szulhely) ?></td>
    </tr>
    <tr>
        <th>Születési idő</th>
        <td><?= Html::encode($contact->szulido) ?></td>
    </tr>
    <tr>
        <th>Személyi igazolvány száma</th>
        <td><?= Html::encode($contact->szigszam) ?></td>
    </tr>
    <tr>
        <th>Taj szám</th>
        <td><?= Html::encode($contact->taj) ?></td>
    </tr>
    <tr>
        <th>Szak</th>
        <td><?= Html::encode($contact->szak) ?></td>
    </tr>
    <tr>
        <th>Allergia, betegség</th>
        <td><?= Html::encode($contact->allergia) ?></td>
    </tr>
    <tr>
        <th>Póló méret</th>
        <td><?= Html::encode($contact->polomeret) ?></td>
    </tr>
    <tr>
        <th>Hozzátartozó, értesítendő személy</th>
        <td><?= Html::encode($contact->hozzatartozo_egyeb) ?></td>
    </tr>
    <tr>
        <th>Hozzátartozó neve</th>
        <td><?= Html::encode($contact->hozzatartozo_nev) ?></td>
    </tr>
    <tr>
        <th>Hozzátartozó lakcíme</th>
        <td><?= Html::encode($contact->hozzatartozo_lakcim) ?></td>
    </tr>
    <tr>
        <th>Hozzátartozó telefonszáma</th>
        <td><?= Html::encode($contact->hozzatartozo_telefonszam) ?></td>
    </tr>
    <tr>
        <th>Egyéb megjegyzések, nyilatkozatok</th>
        <td><?= Html::encode($contact->egyeb_nyilatkozatok) ?></td>
    </tr>

</table>
</div>