<?php
/*
 * @copyright Copyright (c) 2018 Ubiquiti Networks, Inc.
 * @see https://www.ubnt.com/
 */

namespace ApiBundle\Map;

use JMS\Serializer\Annotation\ReadOnly;
use JMS\Serializer\Annotation\Type;

final class QuoteMap extends AbstractMap
{
    /**
     * @Type("integer")
     * @ReadOnly()
     */
    public $id;

    /**
     * @Type("integer")
     * @ReadOnly()
     */
    public $clientId;

    /**
     * @Type("string")
     */
    public $number;

    /**
     * @Type("DateTime")
     */
    public $createdDate;

    /**
     * @Type("string")
     */
    public $notes;

    /**
     * @Type("string")
     */
    public $adminNotes;

    /**
     * @Type("array<ApiBundle\Map\FinancialItemMap>")
     */
    public $items = [];

    /**
     * @Type("double")
     * @ReadOnly()
     */
    public $subtotal;

    /**
     * @Type("double")
     * @ReadOnly()
     */
    public $discount;

    /**
     * @Type("string")
     * @ReadOnly()
     */
    public $discountLabel;

    /**
     * @Type("array<ApiBundle\Map\TotalTaxMap>")
     * @ReadOnly()
     */
    public $taxes = [];

    /**
     * @Type("double")
     * @ReadOnly()
     */
    public $total;

    /**
     * @Type("string")
     * @ReadOnly()
     */
    public $currencyCode;

    /**
     * @Type("integer")
     * @ReadOnly()
     */
    public $status;

    /**
     * @Type("integer")
     */
    public $quoteTemplateId;

    /**
     * @Type("string")
     */
    public $organizationName;

    /**
     * @Type("string")
     */
    public $organizationRegistrationNumber;

    /**
     * @Type("string")
     */
    public $organizationTaxId;

    /**
     * @Type("string")
     */
    public $organizationStreet1;

    /**
     * @Type("string")
     */
    public $organizationStreet2;

    /**
     * @Type("string")
     */
    public $organizationCity;

    /**
     * @Type("integer")
     */
    public $organizationStateId;

    /**
     * @Type("integer")
     */
    public $organizationCountryId;

    /**
     * @Type("string")
     */
    public $organizationZipCode;

    /**
     * @Type("string")
     */
    public $organizationBankAccountName;

    /**
     * @Type("string")
     */
    public $organizationBankAccountField1;

    /**
     * @Type("string")
     */
    public $organizationBankAccountField2;

    /**
     * @Type("string")
     */
    public $clientFirstName;

    /**
     * @Type("string")
     */
    public $clientLastName;

    /**
     * @Type("string")
     */
    public $clientCompanyName;

    /**
     * @Type("string")
     */
    public $clientCompanyRegistrationNumber;

    /**
     * @Type("string")
     */
    public $clientCompanyTaxId;

    /**
     * @Type("string")
     */
    public $clientStreet1;

    /**
     * @Type("string")
     */
    public $clientStreet2;

    /**
     * @Type("string")
     */
    public $clientCity;

    /**
     * @Type("integer")
     */
    public $clientCountryId;

    /**
     * @Type("integer")
     */
    public $clientStateId;

    /**
     * @Type("string")
     */
    public $clientZipCode;
}
