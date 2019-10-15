<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use CakeDC\Users\Model\Entity\User;
use JeremyHarris\LazyLoad\ORM\LazyLoadEntityTrait;

class MyUser extends User
{
    use LazyLoadEntityTrait; 
}
