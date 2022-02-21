<?php

namespace App\Entity;

use App\Repository\ElegibleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ElegibleRepository::class)
 */
class Elegible
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
    private $nombre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adscripcion;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nombramiento;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $area;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $url;

    /**
     * @ORM\OneToMany(targetEntity=Consulta::class, mappedBy="voto")
     */
    private $votos;

    public function __construct()
    {
        $this->votos = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getAdscripcion(): ?string
    {
        return $this->adscripcion;
    }

    public function setAdscripcion(string $adscripcion): self
    {
        $this->adscripcion = $adscripcion;

        return $this;
    }

    public function getNombramiento(): ?string
    {
        return $this->nombramiento;
    }

    public function setNombramiento(string $nombramiento): self
    {
        $this->nombramiento = $nombramiento;

        return $this;
    }

    public function getArea(): ?string
    {
        return $this->area;
    }

    public function setArea(string $area): self
    {
        $this->area = $area;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function __toString(): ?string
    {
        return $this->getNombre();
    }

    /**
     * @return Collection<int, Consulta>
     */
    public function getVotos(): Collection
    {
        return $this->votos;
    }

    public function addVoto(Consulta $voto): self
    {
        if (!$this->votos->contains($voto)) {
            $this->votos[] = $voto;
            $voto->setVoto($this);
        }

        return $this;
    }

    public function removeVoto(Consulta $voto): self
    {
        if ($this->votos->removeElement($voto)) {
            // set the owning side to null (unless already changed)
            if ($voto->getVoto() === $this) {
                $voto->setVoto(null);
            }
        }

        return $this;
    }
}
