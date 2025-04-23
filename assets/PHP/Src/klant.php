<?php 

Class Klant {

    private $adres;
    private $tel;
    private $email;
    private $oudeAdressen;

    function setAdres($adres) {
        array_push($this->oudeAdressen, $this->adres);
        $this->adres = $adres;
    }

    function getAdres() {
        return $this->adres;
    }

    function setTelefoonnummer($telefoonnummer) {
        $this->tel = $telefoonnummer;
    }

    function getTelefoonnummer() {
        return $this->tel;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function getEmail() {
        return $this->email;
    }

    function getOudeAdressen() {
        return $this->oudeAdressen;
    }
}