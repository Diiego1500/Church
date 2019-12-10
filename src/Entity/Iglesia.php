<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\IglesiaRepository")
 */
class Iglesia
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $nombre;

    /**
     * @ORM\Column(type="string")
     */
    private $direccion;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Servicio", mappedBy="iglesia")
     */
    private $servicios;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Evento", mappedBy="iglesia")
     */
    private $eventos;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Feligres", mappedBy="iglesia")
     */
    private $feligreses;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Ciudad", inversedBy="iglesias")
     */
    private $ciudad;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre): void
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * @param mixed $direccion
     */
    public function setDireccion($direccion): void
    {
        $this->direccion = $direccion;
    }

    /**
     * @return mixed
     */
    public function getServicios()
    {
        return $this->servicios;
    }

    /**
     * @param mixed $servicios
     */
    public function setServicios($servicios): void
    {
        $this->servicios = $servicios;
    }

    /**
     * @return mixed
     */
    public function getEventos()
    {
        return $this->eventos;
    }

    /**
     * @param mixed $eventos
     */
    public function setEventos($eventos): void
    {
        $this->eventos = $eventos;
    }

    /**
     * @return mixed
     */
    public function getFeligreses()
    {
        return $this->feligreses;
    }

    /**
     * @param mixed $feligreses
     */
    public function setFeligreses($feligreses): void
    {
        $this->feligreses = $feligreses;
    }

    /**
     * @return mixed
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
     * @param mixed $ciudad
     */
    public function setCiudad($ciudad): void
    {
        $this->ciudad = $ciudad;
    }




}
