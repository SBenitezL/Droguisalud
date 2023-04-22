<?php

namespace App\Entity;

use App\Repository\ProductoRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProductoRepository::class)]
class Producto
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $prd_nombre = null;

    #[ORM\Column(length: 255)]
    private ?string $prd_unidad = null;

    #[ORM\Column]
    private ?float $prd_precio = null;

    #[ORM\Column(nullable: true)]
    private ?float $prd_precio_unitario = null;

    #[ORM\Column]
    private ?float $prd_costo = null;

    #[ORM\Column]
    private ?float $prd_iva = null;

    #[ORM\Column]
    private ?int $prd_cantidad = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?Proveedor $prov_codigo = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrdNombre(): ?string
    {
        return $this->prd_nombre;
    }

    public function setPrdNombre(string $prd_nombre): self
    {
        $this->prd_nombre = $prd_nombre;

        return $this;
    }

    public function getPrdUnidad(): ?string
    {
        return $this->prd_unidad;
    }

    public function setPrdUnidad(string $prd_unidad): self
    {
        $this->prd_unidad = $prd_unidad;

        return $this;
    }

    public function getPrdPrecio(): ?float
    {
        return $this->prd_precio;
    }

    public function setPrdPrecio(float $prd_precio): self
    {
        $this->prd_precio = $prd_precio;

        return $this;
    }

    public function getPrdPrecioUnitario(): ?float
    {
        return $this->prd_precio_unitario;
    }

    public function setPrdPrecioUnitario(?float $prd_precio_unitario): self
    {
        $this->prd_precio_unitario = $prd_precio_unitario;

        return $this;
    }

    public function getPrdCosto(): ?float
    {
        return $this->prd_costo;
    }

    public function setPrdCosto(float $prd_costo): self
    {
        $this->prd_costo = $prd_costo;

        return $this;
    }

    public function getPrdIva(): ?float
    {
        return $this->prd_iva;
    }

    public function setPrdIva(float $prd_iva): self
    {
        $this->prd_iva = $prd_iva;

        return $this;
    }

    public function getPrdCantidad(): ?int
    {
        return $this->prd_cantidad;
    }

    public function setPrdCantidad(int $prd_cantidad): self
    {
        $this->prd_cantidad = $prd_cantidad;

        return $this;
    }

    public function getProvCodigo(): ?Proveedor
    {
        return $this->prov_codigo;
    }

    public function setProvCodigo(Proveedor $prov_codigo): self
    {
        $this->prov_codigo = $prov_codigo;

        return $this;
    }
}
