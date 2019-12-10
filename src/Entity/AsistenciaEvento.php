<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AsistenciaEventoRepository")
 */
class AsistenciaEvento
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Feligres", inversedBy="eventoAsistido")
     */
    private $feligres;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Evento", inversedBy="asistencias")
     */
    private $evento;


    public function getId(): ?int
    {
        return $this->id;
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

    /**
     * @return mixed
     */
    public function getEvento()
    {
        return $this->evento;
    }

    /**
     * @param mixed $evento
     */
    public function setEvento($evento): void
    {
        $this->evento = $evento;
    }




}
