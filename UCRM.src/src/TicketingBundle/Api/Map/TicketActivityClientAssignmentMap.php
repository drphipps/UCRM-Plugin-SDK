<?php
/*
 * @copyright Copyright (c) 2018 Ubiquiti Networks, Inc.
 * @see https://www.ubnt.com/
 */

declare(strict_types=1);

namespace TicketingBundle\Api\Map;

use ApiBundle\Map\AbstractMap;
use JMS\Serializer\Annotation\Type;

final class TicketActivityClientAssignmentMap extends AbstractMap
{
    /**
     * @Type("integer")
     */
    public $assignedClientId;
}
