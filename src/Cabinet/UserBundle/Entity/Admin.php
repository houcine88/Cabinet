<?php

namespace Cabinet\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use PUGX\MultiUserBundle\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity
 * @ORM\Table(name="admin")
 * @UniqueEntity(fields = "username", targetClass = "Cabinet\UserBundle\Entity\User", message="fos_user.username.already_used")
 * @UniqueEntity(fields = "email", targetClass = "Cabinet\UserBundle\Entity\User", message="fos_user.email.already_used")
 */
class Admin extends User
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
}