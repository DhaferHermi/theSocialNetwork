<?php

namespace App\Entity;

use App\Repository\FriendStatusRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FriendStatusRepository::class)
 */
class FriendStatus
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180)
     */
    private $status;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="userA")
     * @ORM\JoinColumn(nullable=false)
     */
    private $UserA;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="UserB")
     * @ORM\JoinColumn(nullable=false)
     */
    private $UserB;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserA(): ?User
    {
        return $this->UserA;
    }

    public function setUserA(?User $UserA): self
    {
        $this->UserA = $UserA;

        return $this;
    }

    public function getUserB(): ?User
    {
        return $this->UserB;
    }

    public function setUserB(?User $UserB): self
    {
        $this->UserB = $UserB;

        return $this;
    }

    public function getStatus(): string
    {
         return (string) $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;
        return $this;
    }
}
