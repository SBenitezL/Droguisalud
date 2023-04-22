<?php

namespace App\Entity;

use App\Repository\LoteRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LoteRepository::class)]
class Lote
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $lt_fecha_fabricacion = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $lt_fecha_vencimiento = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?Producto $prd_codigo = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLtFechaFabricacion(): ?\DateTimeInterface
    {
        return $this->lt_fecha_fabricacion;
    }

    public function setLtFechaFabricacion(\DateTimeInterface $lt_fecha_fabricacion): self
    {
        $this->lt_fecha_fabricacion = $lt_fecha_fabricacion;

        return $this;
    }

    public function getLtFechaVencimiento(): ?\DateTimeInterface
    {
        return $this->lt_fecha_vencimiento;
    }

    public function setLtFechaVencimiento(?\DateTimeInterface $lt_fecha_vencimiento): self
    {
        $this->lt_fecha_vencimiento = $lt_fecha_vencimiento;

        return $this;
    }

    public function getPrdCodigo(): ?Producto
    {
        return $this->prd_codigo;
    }

    public function setPrdCodigo(Producto $prd_codigo): self
    {
        $this->prd_codigo = $prd_codigo;

        return $this;
    }
}
