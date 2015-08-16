<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Jvb\Memories\MainBundle\Entity;

use FOS\UserBundle\Model\User as FOSUsr;

/**
 * Description of MUser
 *
 * @author jan van biervliet
 */
class MUser extends FOSUsr {

  protected $id;

  function __construct() {
    parent::__construct();
  }

  function getId() {
    return $this->id;
  }

  function setId($id) {
    $this->id = $id;
  }

}
