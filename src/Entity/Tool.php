<?php

namespace App\Entity;

use App\Repository\ToolRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ToolRepository::class)
 */
class Tool
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private ?int $id;

    /**
     * @ORM\ManyToOne(targetEntity=ToolType::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private ?ToolType $toolType;

    /**
     * @ORM\Column(type="boolean")
     */
    private ?bool $borrowable;

    /**
     * @ORM\ManyToOne(targetEntity=Place::class, inversedBy="tools")
     * @ORM\JoinColumn(nullable=false)
     */
    private $place;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getToolType(): ?ToolType
    {
        return $this->toolType;
    }

    public function setToolType(?ToolType $toolType): self
    {
        $this->toolType = $toolType;

        return $this;
    }

    public function getBorrowable(): ?bool
    {
        return $this->borrowable;
    }

    public function setBorrowable(bool $borrowable): self
    {
        $this->borrowable = $borrowable;

        return $this;
    }

    public function getPlace(): ?Place
    {
        return $this->place;
    }

    public function setPlace(?Place $place): self
    {
        $this->place = $place;

        return $this;
    }
}
