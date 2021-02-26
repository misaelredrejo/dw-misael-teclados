<?php

namespace App\Entity\UserMgr;

use App\Repository\UsuarioRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Serializable;
use Symfony\Bridge\Doctrine\Security\User\UserLoaderInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;
use App\Entity\TecladoUsuario;

/**
 * @ORM\Entity(repositoryClass=UsuarioRepository::class)
 * @ORM\InheritanceType("JOINED")
 * @ORM\DiscriminatorColumn(name="roles", type="string")
 * @ORM\DiscriminatorMap({
 *     "usuarioregistrado" = "App\Entity\UserMgr\UsuarioRegistrado",
 *     "usuarioadministrador" = "App\Entity\UserMgr\UsuarioAdministrador",
 *     "usuario" = "App\Entity\UserMgr\Usuario"
 *
 * })
 */
class Usuario implements UserLoaderInterface, Serializable, UserInterface {

    /**
     * Loads the user for the given username.
     *
     * This method must return null if the user is not found.
     *
     * @param string $username The username
     *
     * @return UserInterface|null
     */
    public function loadUserByUsername($username) {
        return $this->getUsername() == $username ? $this : null;
    }

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
    private $roles = [];
    private $teclados;

    public function __construct() {
        $this->teclados = new ArrayCollection();
    }

    public function getId(): ?int {
        return $this->id;
    }

    public function getUsername(): ?string {
        return $this->username;
    }

    public function setUsername(string $username): self {
        $this->username = $username;

        return $this;
    }

    public function getPassword(): ?string {
        return $this->password;
    }

    public function setPassword(string $password): self {
        $this->password = $password;

        return $this;
    }

    public function getEmail(): ?string {
        return $this->email;
    }

    public function setEmail(string $email): self {
        $this->email = $email;

        return $this;
    }
    
  public function getPlainPassword() {
    return $this->password;
  }
  public function setPlainPassword($password) {
    $this->password = $password;
  }

    /**
     * @return Collection|TecladoUsuario[]
     */
    public function getTeclados(): Collection {
        return $this->teclados;
    }

    public function addTeclado(TecladoUsuario $teclado): self {
        if (!$this->teclados->contains($teclado)) {
            $this->teclados[] = $teclado;
            $teclado->setUsuario($this);
        }

        return $this;
    }

    public function removeTeclado(TecladoUsuario $teclado): self {
        if ($this->teclados->removeElement($teclado)) {
            // set the owning side to null (unless already changed)
            if ($teclado->getUsuario() === $this) {
                $teclado->setUsuario(null);
            }
        }

        return $this;
    }

    public function getSalt() {
        return NULL;
    }

    public function setRoles($role) {
        $this->roles[] = $role;
    }

    public function getRoles() {
        return $this->roles;
    }

    public function eraseCredentials() {
        
    }

    /**
     * @see Methods used by the login form
     */
    public function serialize() {
        return serialize([
            $this->id,
            $this->username,
            $this->email,
            $this->password,
            $this->roles
        ]);
    }

    public function unserialize($serialized) {
        list (
                $this->id,
                $this->username,
                $this->email,
                $this->password,
                $this->roles
                ) = unserialize($serialized, ['allowed_classes' => FALSE]);
    }

    public function __toString() {
        // to show the name of the Category in the select
        return $this->username;
    }

}
