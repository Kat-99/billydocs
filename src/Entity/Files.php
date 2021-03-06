<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FilesRepository")
 */
class Files
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     * @Assert\NotBlank(message="Veuillez donner un titre à votre document")
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\File(
     *     maxSize = "2M",
     *     maxSizeMessage = "Votre fichier est trop lourd (maximum 2Mo)",
     *     mimeTypes = {"image/jpeg","image/png", "application/pdf", "application/x-pdf"},
     *     mimeTypesMessage = "Veuillez charger un fichier au format pdf, jpeg, ou png",
     *     uploadNoFileErrorMessage = "Veuillez charger un fichier",
     *     )
     */
    private $filename;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $fileType;

    /**
     * @ORM\Column(type="datetime")
     */
    private $added_date;

    /**
     * @ORM\Column(type="date")
     * @Assert\NotBlank(message="Veuillez choisir une date")
     * @var string A "d/m/Y" formatted value
     */
    private $docdate;

    /**
     * @ORM\Column(type="string", length=80)
     * @Assert\NotBlank(message="Veuillez attribuer un label à votre document")
     */
    private $label;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="files")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    public function __construct()
    {
        $this->added_date = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getFileName()
    {
        return $this->filename;
    }

    public function setFileName($filename)
    {
        $this->filename = $filename;

        return $this;
    }

    public function getAddedDate(): ?\DateTimeInterface
    {
        return $this->added_date;
    }

    public function setAddedDate(\DateTimeInterface $added_date): self
    {
        $this->added_date = $added_date;

        return $this;
    }

    public function getDocDate(): ?\DateTimeInterface
    {
        return $this->docdate;
    }

    public function setDocDate(\DateTimeInterface $docdate): self
    {
        $this->docdate = $docdate;

        return $this;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(string $label): self
    {
        $this->label = $label;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFileType()
    {
        return $this->fileType;
    }

    /**
     * @param mixed $fileType
     */
    public function setFileType($fileType): void
    {
        $this->fileType = $fileType;
    }

    public function isOwner(User $user)
    {
        return $user && $this->user->getId() == $user->getId();
    }

}
