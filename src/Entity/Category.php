<?php


namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
     * @ORM\Entity(repositoryClass="App\Repository\CategoryRepository")
     */
class Category

{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $label;


    /**
     * @ORM\Column(type="string", length=50)
     */
    private $fileName;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $title;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Doc", mappedBy="category")
     */
    private $document;

    public function __construct()
    {
        $this->document = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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


    public function getFileName(): ?string
    {
        return $this->fileName;
    }

    public function setFileName(string $fileName): self
    {
        $this->fileName = $fileName;

        return $this;
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

    public function getDoc(): Collection
    {
        return $this->document;
    }

    public function addDoc(Doc $document): self
    {
        if (!$this->document->contains($document)) {
            $this->document[] = $document;
            $document->setCategory($this);
        }

        return $this;
    }

    public function removeDoc(Doc $document): self
    {
        if ($this->document->contains($document)) {
            $this->document->removeElement($document);

            if ($document->getCategory() === $this) {
                $document->setCategory(null);
            }
        }

        return $this;
    }

}