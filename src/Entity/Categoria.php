<?php

namespace App\Entity;

use App\Repository\CategoriaRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CategoriaRepository::class)
 */
class Categoria
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
    private $nombre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $descripcion;

    /**
     * @ORM\OneToMany(targetEntity=Teclado::class, mappedBy="categoria")
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

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(string $descripcion): self
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * @return Collection|Teclado[]
     */
    public function getTeclados(): Collection
    {
        return $this->teclados;
    }

    public function addTeclado(Teclado $teclado): self
    {
        if (!$this->teclados->contains($teclado)) {
            $this->teclados[] = $teclado;
            $teclado->setCategoria($this);
        }

        return $this;
    }

    public function removeTeclado(Teclado $teclado): self
    {
        if ($this->teclados->removeElement($teclado)) {
            // set the owning side to null (unless already changed)
            if ($teclado->getCategoria() === $this) {
                $teclado->setCategoria(null);
            }
        }

        return $this;
    }
    public function __toString(){
    // to show the name of the Category in the select
    return $this->nombre;
  }
}
