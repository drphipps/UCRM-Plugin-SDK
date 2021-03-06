<?php
/*
 * @copyright Copyright (c) 2018 Ubiquiti Networks, Inc.
 * @see https://www.ubnt.com/
 */

declare(strict_types=1);

namespace AppBundle\Form;

use AppBundle\Entity\Financial\Quote;
use Symfony\Component\OptionsResolver\OptionsResolver;

class QuoteCommentType extends FinancialCommentType
{
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults(
            [
                'data_class' => Quote::class,
            ]
        );
    }
}
