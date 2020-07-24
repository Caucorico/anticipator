<?php

namespace App\Entity;

use App\Repository\StepRepository;
use DateInterval;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=StepRepository::class)
 */
class Step
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private ?int $id;

    /**
     * @ORM\Column(type="integer")
     */
    private ?int $number;

    /**
     * @ORM\Column(type="dateinterval")
     */
    private ?DateInterval $start;

    /**
     * @ORM\ManyToMany(targetEntity=RequiredAmount::class)
     */
    private ?ArrayCollection $requiredAmounts;

    /**
     * @ORM\ManyToMany(targetEntity=ToolType::class)
     */
    private ?ArrayCollection $requiredTools;

    public function __construct()
    {
        $this->requiredAmounts = new ArrayCollection();
        $this->requiredTools = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumber(): ?int
    {
        return $this->number;
    }

    public function setNumber(int $number): self
    {
        $this->number = $number;

        return $this;
    }

    public function getStart(): ?DateInterval
    {
        return $this->start;
    }

    public function setStart(DateInterval $start): self
    {
        $this->start = $start;

        return $this;
    }

    /**
     * @return Collection|RequiredAmount[]
     */
    public function getRequiredAmounts(): Collection
    {
        return $this->requiredAmounts;
    }

    public function addRequiredAmount(RequiredAmount $requiredAmount): self
    {
        if (!$this->requiredAmounts->contains($requiredAmount)) {
            $this->requiredAmounts[] = $requiredAmount;
        }

        return $this;
    }

    public function removeRequiredAmount(RequiredAmount $requiredAmount): self
    {
        if ($this->requiredAmounts->contains($requiredAmount)) {
            $this->requiredAmounts->removeElement($requiredAmount);
        }

        return $this;
    }

    /**
     * @return Collection|ToolType[]
     */
    public function getRequiredTools(): Collection
    {
        return $this->requiredTools;
    }

    public function addRequiredTool(ToolType $requiredTool): self
    {
        if (!$this->requiredTools->contains($requiredTool)) {
            $this->requiredTools[] = $requiredTool;
        }

        return $this;
    }

    public function removeRequiredTool(ToolType $requiredTool): self
    {
        if ($this->requiredTools->contains($requiredTool)) {
            $this->requiredTools->removeElement($requiredTool);
        }

        return $this;
    }
}
