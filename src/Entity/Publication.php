<?php

namespace App\Entity;

use App\Repository\PublicationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PublicationRepository::class)
 */
class Publication
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
    private $publication;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $photo_url;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="publications")
     * @ORM\JoinColumn(nullable=false, )
     */
    private $usr_Id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_Creation;

    /**
     * @ORM\OneToMany(targetEntity=Commentaire::class, mappedBy="publication")
     */
    private $Commentaires;

    public function __construct()
    {
        $this->Commentaires = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPublication(): ?string
    {
        return $this->publication;
    }

    public function setPublication(string $publication): self
    {
        $this->publication = $publication;

        return $this;
    }

    public function getPhotoUrl(): ?string
    {
        return $this->photo_url;
    }

    public function setPhotoUrl(?string $photo_url): self
    {
        $this->photo_url = $photo_url;

        return $this;
    }

    public function getUsrId(): ?User
    {
        return $this->usr_Id;
    }

    public function setUsrId(?User $usr_Id): self
    {
        $this->usr_Id = $usr_Id;

        return $this;
    }

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->date_Creation;
    }

    public function setDateCreation(\DateTimeInterface $date_Creation): self
    {
        $this->date_Creation = $date_Creation;

        return $this;
    }

    /**
     * @return Collection|Commentaire[]
     */
    public function getCommentaires(): Collection
    {
        return $this->Commentaires;
    }

    public function addCommentaire(Commentaire $commentaire): self
    {
        if (!$this->Commentaires->contains($commentaire)) {
            $this->Commentaires[] = $commentaire;
            $commentaire->setPublication($this);
        }

        return $this;
    }

    public function removeCommentaire(Commentaire $commentaire): self
    {
        if ($this->Commentaires->removeElement($commentaire)) {
            // set the owning side to null (unless already changed)
            if ($commentaire->getPublication() === $this) {
                $commentaire->setPublication(null);
            }
        }

        return $this;
    }
}
