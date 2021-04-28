<?php


class User
{
    private $fnev;
    private $jelszo;
    private $nev;
    private $szuldatum;
    private $nem;
    private $tel;
    private $email;
    private $edu;
    private $technologiak;
    private $fajl;
    private $kep;
    private $jelentkezes_datuma;

    /**
     * User constructor.
     * @param $fnev
     * @param $jelszo
     * @param $nev
     * @param $szuldatum
     * @param $nem
     * @param $tel
     * @param $email
     * @param $edu
     * @param $technologiak
     * @param $fajl
     * @param $kep
     * @param $jelentkezes_datuma
     */
    public function __construct($fnev, $jelszo, $nev, $szuldatum, $nem, $tel, $email, $edu, $technologiak, $fajl, $kep, $jelentkezes_datuma)
    {
        $this->fnev = $fnev;
        $this->jelszo = $jelszo;
        $this->nev = $nev;
        $this->szuldatum = $szuldatum;
        $this->nem = $nem;
        $this->tel = $tel;
        $this->email = $email;
        $this->edu = $edu;
        $this->technologiak = $technologiak;
        $this->fajl = $fajl;
        $this->kep = $kep;
        $this->jelentkezes_datuma = $jelentkezes_datuma;
    }

    /**
     * @return mixed
     */
    public function getFnev()
    {
        return $this->fnev;
    }

    /**
     * @param mixed $fnev
     */
    public function setFnev($fnev)
    {
        $this->fnev = $fnev;
    }

    /**
     * @return mixed
     */
    public function getJelszo()
    {
        return $this->jelszo;
    }

    /**
     * @param mixed $jelszo
     */
    public function setJelszo($jelszo)
    {
        $this->jelszo = $jelszo;
    }

    /**
     * @return mixed
     */
    public function getNev()
    {
        return $this->nev;
    }

    /**
     * @param mixed $nev
     */
    public function setNev($nev)
    {
        $this->nev = $nev;
    }

    /**
     * @return mixed
     */
    public function getSzuldatum()
    {
        return $this->szuldatum;
    }

    /**
     * @param mixed $szuldatum
     */
    public function setSzuldatum($szuldatum)
    {
        $this->szuldatum = $szuldatum;
    }

    /**
     * @return mixed
     */
    public function getNem()
    {
        return $this->nem;
    }

    /**
     * @param mixed $nem
     */
    public function setNem($nem)
    {
        $this->nem = $nem;
    }

    /**
     * @return mixed
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * @param mixed $tel
     */
    public function setTel($tel)
    {
        $this->tel = $tel;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getEdu()
    {
        return $this->edu;
    }

    /**
     * @param mixed $edu
     */
    public function setEdu($edu)
    {
        $this->edu = $edu;
    }

    /**
     * @return mixed
     */
    public function getTechnologiak()
    {
        return $this->technologiak;
    }

    /**
     * @param mixed $technologiak
     */
    public function setTechnologiak($technologiak)
    {
        $this->technologiak = $technologiak;
    }

    /**
     * @return mixed
     */
    public function getFajl()
    {
        return $this->fajl;
    }

    /**
     * @param mixed $fajl
     */
    public function setFajl($fajl)
    {
        $this->fajl = $fajl;
    }

    /**
     * @return mixed
     */
    public function getKep()
    {
        return $this->kep;
    }

    /**
     * @param mixed $kep
     */
    public function setKep($kep)
    {
        $this->kep = $kep;
    }

    /**
     * @return mixed
     */
    public function getJelentkezesDatuma()
    {
        return $this->jelentkezes_datuma;
    }

    /**
     * @param mixed $jelentkezes_datuma
     */
    public function setJelentkezesDatuma($jelentkezes_datuma)
    {
        $this->jelentkezes_datuma = $jelentkezes_datuma;
    }

    /**
     * User constructor.
     * @param $fnev
     * @param $jelszo
     * @param $nev
     * @param $szuldatum
     * @param $nem
     * @param $tel
     * @param $email
     * @param $edu
     * @param $technologiak
     * @param $fajl
     * @param $kep
     */



    public function kiir(){
        $user = [
            "nev" => $this->nev,
            "fnev" => $this->fnev,
            "jelszo" => $this->jelszo,
            "szuldatum" => $this->szuldatum,
            "nem" => $this->nem,
            "tel" => $this->tel,
            "email" => $this->email,
            "edu" => $this->edu,
            "technologiak" => $this->technologiak,
            "fajl" => $this->fajl,
            "kep" => $this->kep,
            "jelentkezes_datuma" => $this->jelentkezes_datuma
        ];
        $file = fopen("users.txt", "a");
        fwrite($file, serialize($user) . "\n");
        fclose($file);
    }


}