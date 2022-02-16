<?php

namespace App\Entity;

use App\Repository\ListGroupRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ListGroupRepository::class)
 */
class ListGroup
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
    private $nameuser;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_group;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameuser(): ?string
    {
        return $this->nameuser;
    }

    public function setNameuser(string $nameuser): self
    {
        $this->nameuser = $nameuser;

        return $this;
    }

    public function getIdGroup(): ?int
    {
        return $this->id_group;
    }

    public function setIdGroup(int $id_group): self
    {
        $this->id_group = $id_group;

        return $this;
    }
}
