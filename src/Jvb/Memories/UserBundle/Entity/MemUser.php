<?php

namespace Jvb\Memories\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * User
 */
class MemUser extends BaseUser {

  /**
   * @var integer
   */
  protected $id;

  public function __construct() {
    parent::__construct();
    // your own logic
  }

}
