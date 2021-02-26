<?php

namespace App\Entity;

use App\Repository\UsuarioRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UsuarioRepository::class)
 */
class Usuario
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\OneToMany(targetEntity=TecladoUsuario::class, mappedBy="usuario")
     */
    private $teclados;

    public function __construct()
    {
        $this->teclados = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return Collection|TecladoUsuario[]
     */
    public function getTeclados(): Collection
    {
        return $this->teclados;
    }

    public function addTeclado(TecladoUsuario $teclado): self
    {
        if (!$this->teclados->contains($teclado)) {
            $this->teclados[] = $teclado;
            $teclado->setUsuario($this);
        }

        return $this;
    }

    public function removeTeclado(TecladoUsuario $teclado): self
    {
        if ($this->teclados->removeElement($teclado)) {
            // set the owning side to null (unless already changed)
            if ($teclado->getUsuario() === $this) {
                $teclado->setUsuario(null);
            }
        }

        return $this;
    }
    public function __toString(){
    // to show the name of the Category in the select
    return $this->username;
  }
}
