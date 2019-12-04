<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User implements UserInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=80)
     *  @Assert\NotBlank(message="Vous avez oublié votre nom.")
     */
    private $lastname;

    /**
     * @ORM\Column(type="string", length=80)
     * @Assert\NotBlank(message="Vous avez oublié votre prenom.")
     */
    private $firstname;

    /**
     * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank(message="Vous avez oublié votre email.")
     *  @Assert\Email(message="Veuillez vérifier le format.")
     */
    private $email;

    /**
     * @ORM\Column(type="date",nullable=false)
     */
    private $inscription_date;

    /**
     * @ORM\Column(type="datetime", nullable=false)
     */
    private $last_logged_date;


    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;

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

    public function getInscriptionDate(): ?\DateTimeInterface
    {
        return $this->inscription_date;
    }

    public function setInscriptionDate(\DateTimeInterface $inscription_date): self
    {
        $this->inscription_date = $inscription_date;

        return $this;
    }

    public function getLastLoggedDate(): ?\DateTimeInterface
    {
        return $this->last_logged_date;
    }

    public function setLastLoggedDate(?\DateTimeInterface $last_logged_date): self
    {
        $this->last_logged_date = $last_logged_date;

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

    public function getRoles()
    {

    }

    public function getSalt()
    {

    }
    public function getUsername()
    {
        return $this->email;
    }
    public function eraseCredentials()
    {
        // pour supprimer les données sensibles a conserver
    }


}
