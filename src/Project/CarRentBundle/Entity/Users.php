<?php

namespace Project\CarRentBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
* @ORM\Entity
* @ORM\Table(name="fos_user")
*/
class Users extends BaseUser implements UserInterface
{
/**
* @ORM\Id
* @ORM\Column(type="integer")
* @ORM\GeneratedValue(strategy="AUTO")
*/
protected $id;
 
public function __construct()
{
parent::__construct();
// your own logic
}
}