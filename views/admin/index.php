<?php

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = "Jelentkezések";
?>
<h1><?= Html::encode($this->title) ?></h1>

<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Név</th>
            <th>Email cím</th>
            <th>Telefonszám</th>
            <th>Szak</th>
            <th>Póló méret</th>
            <th>Továbbiak</th>
            <th>Törlés</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($contacts as $index => $contact): ?>
            <tr>
                <td><?= Html::encode($count - $index) ?></td>
                <td><?= Html::encode($contact->nev) ?></td>
                <td><?= Html::encode($contact->email) ?></td>
                <td><?= Html::encode($contact->telefonszam) ?></td>
                <td><?= Html::encode($contact->szak) ?></td>
                <td><?= Html::encode($contact->polomeret) ?></td>
                <td>
                    <?= Html::a('Továbbiak', ['all', 'id' => $contact->id], ['class' => 'btn btn-primary']) ?>
                </td>
                <td>
                    <?= Html::a('Törlés', ['delete', 'id' => $contact->id], [
                        'class' => 'btn btn-danger',
                        'data' => [
                            'confirm' => 'Biztosan törölni szeretnéd ezt a rekordot?',
                            'method' => 'post',
                        ],
                    ]) ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
