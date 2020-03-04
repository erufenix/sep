<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RegistroRepository")
 */
class RegistroSEP
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nombre;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $correo;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $fecha_registro;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $folio;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $entrada;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(?string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getCorreo(): ?string
    {
        return $this->correo;
    }

    public function setCorreo(?string $correo): self
    {
        $this->correo = $correo;

        return $this;
    }

    public function getFechaRegistro(): ?\DateTimeInterface
    {
        return $this->fecha_registro;
    }

    public function setFechaRegistro(?\DateTimeInterface $fecha_registro): self
    {
        $this->fecha_registro = $fecha_registro;

        return $this;
    }

    public function getFolio(): ?string
    {
        return $this->folio;
    }

    public function setFolio(?string $folio): self
    {
        $this->folio = $folio;

        return $this;
    }

    public function getEntrada(): ?\DateTimeInterface
    {
        return $this->entrada;
    }

    public function setEntrada(?\DateTimeInterface $entrada): self
    {
        $this->entrada = $entrada;

        return $this;
    }
}
