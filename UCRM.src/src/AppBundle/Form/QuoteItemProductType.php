<?php
/*
 * @copyright Copyright (c) 2018 Ubiquiti Networks, Inc.
 * @see https://www.ubnt.com/
 */

declare(strict_types=1);

namespace AppBundle\Form;

use AppBundle\Entity\Financial\QuoteItemProduct;
use Symfony\Component\OptionsResolver\OptionsResolver;

class QuoteItemProductType extends FinancialItemProductType
{
    public function configureOptions(OptionsResolver $resolver): void
    {
        parent::configureOptions($resolver);

        $resolver->setDefaults(
            [
                'data_class' => QuoteItemProduct::class,
            ]
        );
    }
}
