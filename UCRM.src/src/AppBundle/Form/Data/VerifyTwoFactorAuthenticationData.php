<?php
/*
 * @copyright Copyright (c) 2018 Ubiquiti Networks, Inc.
 * @see https://www.ubnt.com/
 */

declare(strict_types=1);

namespace AppBundle\Form\Data;

use Symfony\Component\Validator\Constraints as Assert;

class VerifyTwoFactorAuthenticationData
{
    /**
     * @var string
     *
     * @Assert\NotBlank()
     * @Assert\Regex(pattern="~^[0-9]+$~")
     */
    public $code;
}
