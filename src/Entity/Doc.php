<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DocRepository")
 */
class Doc
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $docDate;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $doc;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDoc(): ?string
    {
        return $this->doc;
    }

    public function setDoc(string $doc): self
    {
        $this->doc = $doc;

        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getDocDate(): ?\DateTimeInterface
    {
        return $this->docDate;
    }

    public function setDocDate (\DateTimeInterface $docDate): self
    {
        $this->docDate = $docDate;

        return $this;
    }

}
