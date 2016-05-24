<?php

/**
 * Created by PhpStorm.
 * User: dagre_000
 * Date: 5/23/2016
 * Time: 8:08 PM
 */
class ExtraLongClass {
    public $varOne;
    public $varTwo;
    public $varThree;
    private $notSoPublic;
    protected $aProtectedVar;
    public $justAnotherPublicVar;
    public $needToHaveMore;
    public $publicVarsAreGoodForTheEnvironment;
    public $oneMoreCantHurt;

    public function __construct($internal) {
        $this->notSoPublic = $internal;
    }

    /**
     * @return mixed
     */
    public function getVarOne() {
        return $this->varOne;
    }

    /**
     * @param mixed $varOne
     */
    public function setVarOne($varOne) {
        $this->varOne = $varOne;
    }

    /**
     * @return mixed
     */
    public function getVarTwo() {
        return $this->varTwo;
    }

    /**
     * @param mixed $varTwo
     */
    public function setVarTwo($varTwo) {
        $this->varTwo = $varTwo;
    }

    /**
     * @return mixed
     */
    public function getVarThree() {
        return $this->varThree;
    }

    /**
     * @param mixed $varThree
     */
    public function setVarThree($varThree) {
        $this->varThree = $varThree;
    }

    /**
     * @return mixed
     */
    public function getNotSoPublic() {
        return $this->notSoPublic;
    }

    /**
     * @param mixed $notSoPublic
     */
    public function setNotSoPublic($notSoPublic) {
        $this->notSoPublic = $notSoPublic;
    }

    /**
     * @return mixed
     */
    public function getAProtectedVar() {
        return $this->aProtectedVar;
    }

    /**
     * @param mixed $aProtectedVar
     */
    public function setAProtectedVar($aProtectedVar) {
        $this->aProtectedVar = $aProtectedVar;
    }

    /**
     * @return mixed
     */
    public function getJustAnotherPublicVar() {
        return $this->justAnotherPublicVar;
    }

    /**
     * @param mixed $justAnotherPublicVar
     */
    public function setJustAnotherPublicVar($justAnotherPublicVar) {
        $this->justAnotherPublicVar = $justAnotherPublicVar;
    }

    /**
     * @return mixed
     */
    public function getNeedToHaveMore() {
        return $this->needToHaveMore;
    }

    /**
     * @param mixed $needToHaveMore
     */
    public function setNeedToHaveMore($needToHaveMore) {
        $this->needToHaveMore = $needToHaveMore;
    }

    /**
     * @return mixed
     */
    public function getPublicVarsAreGoodForTheEnvironment() {
        return $this->publicVarsAreGoodForTheEnvironment;
    }

    /**
     * @param mixed $publicVarsAreGoodForTheEnvironment
     */
    public function setPublicVarsAreGoodForTheEnvironment($publicVarsAreGoodForTheEnvironment) {
        $this->publicVarsAreGoodForTheEnvironment = $publicVarsAreGoodForTheEnvironment;
    }

    /**
     * @return mixed
     */
    public function getOneMoreCantHurt() {
        return $this->oneMoreCantHurt;
    }

    /**
     * @param mixed $oneMoreCantHurt
     */
    public function setOneMoreCantHurt($oneMoreCantHurt) {
        $this->oneMoreCantHurt = $oneMoreCantHurt;
    }


}