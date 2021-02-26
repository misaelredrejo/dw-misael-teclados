<?php

namespace App\Entity\UserMgr;

use App\Repository\UsuarioRegistradoRepository;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\UserMgr\Usuario;

/**
 * @ORM\Entity(repositoryClass=UsuarioRegistradoRepository::class)
 */
class UsuarioRegistrado extends Usuario {

    public function __construct()
    {
        parent::__construct();
    }
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @return mixed
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @see Method to establish the Role to this type of user
     */
    public function getRoles() {
        return ['ROLE_NORMAL_USER'];
    }


    public function __toString(): string
    {
        return   $this->getEmail();
    }

}
