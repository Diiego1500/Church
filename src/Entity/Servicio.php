<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ServicioRepository")
 */
class Servicio
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
    private $TipoServicio;

    /**
     * @ORM\Column(type="datetime")
     */
    private $FechaRealizacion;

    /**
     * @ORM\Column(type="bigint")
     */
    private $Monto_ofrenda;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Iglesia", inversedBy="servicios")
     */
    private $iglesia;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTipoServicio(): ?string
    {
        return $this->TipoServicio;
    }

    public function setTipoServicio(string $TipoServicio): self
    {
        $this->TipoServicio = $TipoServicio;

        return $this;
    }

    public function getFechaRealizacion(): ?\DateTimeInterface
    {
        return $this->FechaRealizacion;
    }

    public function setFechaRealizacion(\DateTimeInterface $FechaRealizacion): self
    {
        $this->FechaRealizacion = $FechaRealizacion;

        return $this;
    }

    public function getMontoOfrenda(): ?string
    {
        return $this->Monto_ofrenda;
    }

    public function setMontoOfrenda(string $Monto_ofrenda): self
    {
        $this->Monto_ofrenda = $Monto_ofrenda;

        return $this;
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


}
