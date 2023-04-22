<?php

namespace App\Entity;

use App\Repository\ProveedorRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProveedorRepository::class)]
class Proveedor
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $prov_nombre = null;

    #[ORM\Column(length: 255)]
    private ?string $prov_direccion = null;

    #[ORM\Column(length: 15)]
    private ?string $prov_telefono = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProvNombre(): ?string
    {
        return $this->prov_nombre;
    }

    public function setProvNombre(string $prov_nombre): self
    {
        $this->prov_nombre = $prov_nombre;

        return $this;
    }

    public function getProvDireccion(): ?string
    {
        return $this->prov_direccion;
    }

    public function setProvDireccion(string $prov_direccion): self
    {
        $this->prov_direccion = $prov_direccion;

        return $this;
    }

    public function getProvTelefono(): ?string
    {
        return $this->prov_telefono;
    }

    public function setProvTelefono(string $prov_telefono): self
    {
        $this->prov_telefono = $prov_telefono;

        return $this;
    }
}
