<?php

namespace App\Entity;

use App\Repository\AmountRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * This class represent an amount of any kind (Mass, number, volume ...).
 *
 * @ORM\Entity(repositoryClass=AmountRepository::class)
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="discr", type="string")
 * @ORM\DiscriminatorMap({"number" = "NumberAmount", "quantity" = "QuantityAmount"})
 */
abstract class Amount
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private ?int $id;

    public function getId(): ?int
    {
        return $this->id;
    }
}
