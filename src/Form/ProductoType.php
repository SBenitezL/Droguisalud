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
            ->add('prd_nombre', null,['label' => 'Nombre', ])
            ->add('prd_unidad', null, ['label' => 'Unidad', ])
            ->add('prd_precio', null, ['label' => 'Precio', ])
            ->add('prd_precio_unitario', null, ['label' => 'Precio Unitario', ])
            ->add('prd_costo', null, ['label' => 'Costo', ])
            ->add('prd_iva', null, ['label' => 'IVA %', ])
            ->add('prd_cantidad', null, ['label' => 'Cantidad', ])
            ->add('prov_codigo', EntityType::class, ['class' => Proveedor::class, 'choice_label' => 'prov_nombre', 'label'=>'Proveedor'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Producto::class,
        ]);
    }
}
