<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=80)
     * @Assert\NotBlank(message="Veuillez renseigner votre nom")
     */
    private $lastname;

    /**
     * @ORM\Column(type="string", length=80)
     * @Assert\NotBlank(message="Veuillez renseigner votre prénom")
     */
    private $firstname;

    /**
     * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank(message="Veuillez entrer votre email")
     */
    private $email;

    /**
     * @ORM\Column(type="date")
     */
    private $inscription_date;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $last_logged_date;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Veuillez entrer un mot de passe")
     */
    private $password;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Files", mappedBy="user")
     * @Assert\NotBlank(message="Veuillez charger un fichier")
     */
    private $files;

    public function __construct()
    {
        $this->files = new ArrayCollection();
    }

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

    /**
     * @return Collection|Files[]
     */
    public function getFiles(): Collection
    {
        return $this->files;
    }

    public function addFile(Files $file): self
    {
        if (!$this->files->contains($file)) {
            $this->files[] = $file;
            $file->setUser($this);
        }

        return $this;
    }

    public function removeFile(Files $file): self
    {
        if ($this->files->contains($file)) {
            $this->files->removeElement($file);
            // set the owning side to null (unless already changed)
            if ($file->getUser() === $this) {
                $file->setUser(null);
            }
        }

        return $this;
    }
}
