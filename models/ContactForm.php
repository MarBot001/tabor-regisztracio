<?php

namespace app\models;

use Symfony\Component\String\CodePointString;
use yii\base\Model;

class ContactForm extends Model
{
    public $nev;
    public $email;
    public $anyjaneve;
    public $telefonszam;
    public $lakcim;
    public $szulhely;
    public $szulido;
    public $szigszam;
    public $taj;
    public $szak;
    public $hozzatartozo_nev;
    public $hozzatartozo_lakcim;
    public $hozzatartozo_telefonszam;
    public $hozzatartozo_egyeb;
    public $allergia;
    public $polomeret;
    public $egyeb_nyilatkozatok;
    public function rules()
    {
        return [
            [["nev", "email", "anyjaneve", "telefonszam", "lakcim", "szulhely", "szulido", "szigszam", "taj", "szak", "hozzatartozo_nev", "hozzatartozo_lakcim", "hozzatartozo_telefonszam", "hozzatartozo_egyeb", "polomeret"], "required"],
            [["allergia", "egyeb_nyilatkozatok"], "safe"],
        ];
    }
    public function attributeLabels()
    {
        return [
            "nev" => "Név",
            "email" => "E-mail",
            "anyjaneve" => "Anyja neve",
            "telefonszam" => "Telefonszám",
            "lakcim" => "Lakcím",
            "szulhely" => "Születési hely",
            "szulido" => "Születési idő",
            "szigszam" => "Személyi igazolvány száma",
            "taj" => "TAJ szám",
            "szak" => "Szak",
            "hozzatartozo_egyeb" => "Közeli hozzátartozó, szükség esetén értesítendő személy",
            "hozzatartozo_nev" => "Hozzátartozó neve",
            "hozzatartozo_lakcim" => "Hozzátartozó lakcíme",
            "hozzatartozo_telefonszam" => "Hozzátartozó telefonszáma",
            "allergia" => "Allergia, vagy betegség - amennyiben nincs, vagy nem tartod fontosnak annak megosztását velünk, hagyd üresen!",
            "polomeret" => "Póló méret",
            "egyeb_nyilatkozatok" => "Egyéb megjegyzések, nyilatkozatok - amennyiben nincs, hagyd üresen!"
        ];
    }
}
