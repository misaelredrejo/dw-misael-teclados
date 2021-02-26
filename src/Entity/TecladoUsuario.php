<?php

namespace App\Entity;

use App\Repository\TecladoUsuarioRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TecladoUsuarioRepository::class)
 */
class TecladoUsuario
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Teclado::class, inversedBy="usuarios")
     */
    private $teclado;

    /**
     * @ORM\ManyToOne(targetEntity=Usuario::class, inversedBy="teclados")
     */
    private $usuario;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTeclado(): ?Teclado
    {
        return $this->teclado;
    }

    public function setTeclado(?Teclado $teclado): self
    {
        $this->teclado = $teclado;

        return $this;
    }

    public function getUsuario(): ?Usuario
    {
        return $this->usuario;
    }

    public function setUsuario(?Usuario $usuario): self
    {
        $this->usuario = $usuario;

        return $this;
    }
    public function __toString(){
    // to show the name of the Category in the select
    return strval($this->id);
  }
}
