<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FeligresRepository")
 */
class Feligres
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
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="bigint", nullable=true)
     */
    private $num_tel;

    /**
     * @ORM\Column(type="boolean")
     */
    private $bautizado;

    /**
     * @ORM\Column(type="boolean")
     */
    private $promesado;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Iglesia", inversedBy="feligreses")
     */
    private $iglesia;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Profesion", mappedBy="feligres")
     */
    private $profesiones;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\AsistenciaEvento", mappedBy="feligres")
     */
    private $eventoAsistido;

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

    public function getNumTel(): ?string
    {
        return $this->num_tel;
    }

    public function setNumTel(?string $num_tel): self
    {
        $this->num_tel = $num_tel;

        return $this;
    }

    public function getBautizado(): ?bool
    {
        return $this->bautizado;
    }

    public function setBautizado(bool $bautizado): self
    {
        $this->bautizado = $bautizado;

        return $this;
    }

    public function getPromesado(): ?bool
    {
        return $this->promesado;
    }

    public function setPromesado(bool $promesado): self
    {
        $this->promesado = $promesado;

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

    /**
     * @return mixed
     */
    public function getProfesiones()
    {
        return $this->profesiones;
    }

    /**
     * @param mixed $profesiones
     */
    public function setProfesiones($profesiones): void
    {
        $this->profesiones = $profesiones;
    }

    /**
     * @return mixed
     */
    public function getEventoAsistido()
    {
        return $this->eventoAsistido;
    }

    /**
     * @param mixed $eventoAsistido
     */
    public function setEventoAsistido($eventoAsistido): void
    {
        $this->eventoAsistido = $eventoAsistido;
    }


}
