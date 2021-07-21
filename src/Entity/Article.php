<?php

namespace App\Entity;

use App\Repository\ArticleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ArticleRepository::class)
 */
class Article
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
    private $Title;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="text")
     */
    private $Contenu;

    /**
     * @ORM\Column(type="string", length=500)
     */
    private $picture;

    /**
     * @ORM\ManyToMany(targetEntity=CategoryArticle::class, inversedBy="article")
     */
    private $categoryArticle;

    public function __construct()
    {
        $this->categoryArticle = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->Title;
    }

    public function setTitle(string $Title): self
    {
        $this->Title = $Title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getContenu(): ?string
    {
        return $this->Contenu;
    }

    public function setContenu(string $Contenu): self
    {
        $this->Contenu = $Contenu;

        return $this;
    }

    public function getPicture(): ?string
    {
        return $this->picture;
    }

    public function setPicture(string $picture): self
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * @return Collection|CategoryArticle[]
     */
    public function getCategoryArticle(): Collection
    {
        return $this->categoryArticle;
    }

    public function addCategoryArticle(CategoryArticle $categoryArticle): self
    {
        if (!$this->categoryArticle->contains($categoryArticle)) {
            $this->categoryArticle[] = $categoryArticle;
        }

        return $this;
    }

    public function removeCategoryArticle(CategoryArticle $categoryArticle): self
    {
        $this->categoryArticle->removeElement($categoryArticle);

        return $this;
    }
}
