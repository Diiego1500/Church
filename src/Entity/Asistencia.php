<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AsistenciaRepository")
 */
class Asistencia
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $Nro_mujeres;

    /**
     * @ORM\Column(type="integer")
     */
    private $Nro_hombres;

    /**
     * @ORM\Column(type="integer")
     */
    private $invitados;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Servicio", inversedBy="asistencia")
     * @ORM\JoinColumn(name="servicio_id", referencedColumnName="id")
     */
    protected $servicio;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNroMujeres(): ?int
    {
        return $this->Nro_mujeres;
    }

    public function setNroMujeres(int $Nro_mujeres): self
    {
        $this->Nro_mujeres = $Nro_mujeres;

        return $this;
    }

    public function getNroHombres(): ?int
    {
        return $this->Nro_hombres;
    }

    public function setNroHombres(int $Nro_hombres): self
    {
        $this->Nro_hombres = $Nro_hombres;

        return $this;
    }

    public function getInvitados(): ?int
    {
        return $this->invitados;
    }

    public function setInvitados(int $invitados): self
    {
        $this->invitados = $invitados;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getServicio()
    {
        return $this->servicio;
    }

    /**
     * @param mixed $servicio
     */
    public function setServicio($servicio): void
    {
        $this->servicio = $servicio;
    }


}
