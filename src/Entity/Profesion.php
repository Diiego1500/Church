<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProfesionRepository")
 */
class Profesion
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nombre;

    /**
     * @ORM\Column(type="integer")
     */
    private $anios_experiencia;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $Fecha_graduacion;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Feligres", inversedBy="profesiones")
     */
    private $feligres;

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

    public function getAniosExperiencia(): ?int
    {
        return $this->anios_experiencia;
    }

    public function setAniosExperiencia(int $anios_experiencia): self
    {
        $this->anios_experiencia = $anios_experiencia;

        return $this;
    }

    public function getFechaGraduacion(): ?\DateTimeInterface
    {
        return $this->Fecha_graduacion;
    }

    public function setFechaGraduacion(?\DateTimeInterface $Fecha_graduacion): self
    {
        $this->Fecha_graduacion = $Fecha_graduacion;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFeligres()
    {
        return $this->feligres;
    }

    /**
     * @param mixed $feligres
     */
    public function setFeligres($feligres): void
    {
        $this->feligres = $feligres;
    }


}
