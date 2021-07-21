<?php

namespace App\Entity;

use App\Repository\CategoryProjectRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CategoryProjectRepository::class)
 */
class CategoryProject
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
    private $name;

    /**
     * @ORM\Column(type="string", length=500)
     */
    private $picture;

    /**
     * @ORM\ManyToMany(targetEntity=Project::class, mappedBy="category")
     */
    private $categoryProject;

    public function __construct()
    {
        $this->categoryProject = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

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
     * @return Collection|Project[]
     */
    public function getCategoryProject(): Collection
    {
        return $this->categoryProject;
    }

    public function addCategoryProject(Project $categoryProject): self
    {
        if (!$this->categoryProject->contains($categoryProject)) {
            $this->categoryProject[] = $categoryProject;
            $categoryProject->addCategory($this);
        }

        return $this;
    }

    public function removeCategoryProject(Project $categoryProject): self
    {
        if ($this->categoryProject->removeElement($categoryProject)) {
            $categoryProject->removeCategory($this);
        }

        return $this;
    }
}
