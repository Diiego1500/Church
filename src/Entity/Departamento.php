<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DepartamentoRepository")
 */
class Departamento
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Ciudad", mappedBy="departamento")
     */
    private $ciudades;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Nombre;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->Nombre;
    }

    public function setNombre(string $Nombre): self
    {
        $this->Nombre = $Nombre;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCiudades()
    {
        return $this->ciudades;
    }

    /**
     * @param mixed $ciudades
     */
    public function setCiudades($ciudades): void
    {
        $this->ciudades = $ciudades;
    }


}
