<?php

namespace App\Entity;

use App\Repository\BlogRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BlogRepository::class)
 */
class Blog
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
    private $photos;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $auteur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $date;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nombre_commentaire;

    /**
     * @ORM\Column(type="text")
     */
    private $texte;

    /**
     * @ORM\ManyToMany(targetEntity=blogreply::class, inversedBy="blogs")
     */
    private $relation;

    /**
     * @ORM\ManyToMany(targetEntity=blogcategory::class, inversedBy="blogs")
     */
    private $appartenir;

    public function __construct()
    {
        $this->relation = new ArrayCollection();
        $this->appartenir = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPhotos(): ?string
    {
        return $this->photos;
    }

    public function setPhotos(string $photos): self
    {
        $this->photos = $photos;

        return $this;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getAuteur(): ?string
    {
        return $this->auteur;
    }

    public function setAuteur(string $auteur): self
    {
        $this->auteur = $auteur;

        return $this;
    }

    public function getDate(): ?string
    {
        return $this->date;
    }

    public function setDate(string $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getNombreCommentaire(): ?string
    {
        return $this->nombre_commentaire;
    }

    public function setNombreCommentaire(string $nombre_commentaire): self
    {
        $this->nombre_commentaire = $nombre_commentaire;

        return $this;
    }

    public function getTexte(): ?string
    {
        return $this->texte;
    }

    public function setTexte(string $texte): self
    {
        $this->texte = $texte;

        return $this;
    }

    /**
     * @return Collection|blogreply[]
     */
    public function getRelation(): Collection
    {
        return $this->relation;
    }

    public function addRelation(blogreply $relation): self
    {
        if (!$this->relation->contains($relation)) {
            $this->relation[] = $relation;
        }

        return $this;
    }

    public function removeRelation(blogreply $relation): self
    {
        $this->relation->removeElement($relation);

        return $this;
    }

    /**
     * @return Collection|blogcategory[]
     */
    public function getAppartenir(): Collection
    {
        return $this->appartenir;
    }

    public function addAppartenir(blogcategory $appartenir): self
    {
        if (!$this->appartenir->contains($appartenir)) {
            $this->appartenir[] = $appartenir;
        }

        return $this;
    }

    public function removeAppartenir(blogcategory $appartenir): self
    {
        $this->appartenir->removeElement($appartenir);

        return $this;
    }
}
