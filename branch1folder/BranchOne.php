<?php

class BranchOne {
    protected $myvar;

    public function __construct($myvar) {
        $this->myvar = $myvar;
    }

    /**
     * @return mixed
     */
    public function getMyvar() {
        return $this->myvar;
    }

    /**
     * @param mixed $myvar
     */
    public function setMyvar($myvar) {
        $this->myvar = $myvar;
    }
}