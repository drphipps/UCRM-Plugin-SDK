<?php
/*
 * @copyright Copyright (c) 2018 Ubiquiti Networks, Inc.
 * @see https://www.ubnt.com/
 */

declare(strict_types=1);

namespace AppBundle\Form;

use AppBundle\Form\Data\VerifyTwoFactorAuthenticationData;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class VerifyTwoFactorAuthenticationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder->add(
            'code',
            TextType::class,
            [
                'label' => null,
                'attr' => [
                    'autocomplete' => 'off',
                    'placeholder' => '123456',
                ],
                'translation_domain' => false,
            ]
        );
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults(
            [
                'data_class' => VerifyTwoFactorAuthenticationData::class,
            ]
        );
    }
}
