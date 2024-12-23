<?php

namespace app\models;

use Flight;

class CadeauModel {

    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

}