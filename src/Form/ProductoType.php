<?php

namespace App\Form;

use App\Entity\Producto;
use App\Entity\Proveedor;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('prd_nombre')
            ->add('prd_unidad')
            ->add('prd_precio')
            ->add('prd_precio_unitario')
            ->add('prd_costo')
            ->add('prd_iva')
            ->add('prd_cantidad')
            ->add('prov_codigo', EntityType::class, ['class' => Proveedor::class, 'choice_label' => 'prov_nombre',])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Producto::class,
        ]);
    }
}
