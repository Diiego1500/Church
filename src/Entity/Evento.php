<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EventoRepository")
 */
class Evento
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=5000)
     */
    private $Descripcion;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lugar_realizacion;

    /**
     * @ORM\Column(type="datetime", length=255)
     */
    private $fecha_realizacion;

    /**
     * @ORM\Column(type="bigint", length=255)
     */
    private $costo;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Iglesia", inversedBy="eventos")
     */
    private $iglesia;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\AsistenciaEvento", mappedBy="evento")
     */
    private $asistencias;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescripcion(): ?string
    {
        return $this->Descripcion;
    }

    public function setDescripcion(string $Descripcion): self
    {
        $this->Descripcion = $Descripcion;

        return $this;
    }

    public function getLugarRealizacion(): ?string
    {
        return $this->lugar_realizacion;
    }

    public function setLugarRealizacion(string $lugar_realizacion): self
    {
        $this->lugar_realizacion = $lugar_realizacion;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFechaRealizacion()
    {
        return $this->fecha_realizacion;
    }

    /**
     * @param mixed $fecha_realizacion
     */
    public function setFechaRealizacion($fecha_realizacion): void
    {
        $this->fecha_realizacion = $fecha_realizacion;
    }

    /**
     * @return mixed
     */
    public function getCosto()
    {
        return $this->costo;
    }

    /**
     * @param mixed $costo
     */
    public function setCosto($costo): void
    {
        $this->costo = $costo;
    }

    /**
     * @return mixed
     */
    public function getIglesia()
    {
        return $this->iglesia;
    }

    /**
     * @param mixed $iglesia
     */
    public function setIglesia($iglesia): void
    {
        $this->iglesia = $iglesia;
    }

    /**
     * @return mixed
     */
    public function getAsistencias()
    {
        return $this->asistencias;
    }

    /**
     * @param mixed $asistencias
     */
    public function setAsistencias($asistencias): void
    {
        $this->asistencias = $asistencias;
    }




}
