<?php
/*
 * @copyright Copyright (c) 2018 Ubiquiti Networks, Inc.
 * @see https://www.ubnt.com/
 */

declare(strict_types=1);

namespace TicketingBundle\Api\Map;

use ApiBundle\Map\AbstractMap;
use JMS\Serializer\Annotation\ReadOnly;
use JMS\Serializer\Annotation\Type;

final class TicketMap extends AbstractMap
{
    /**
     * @Type("integer")
     * @ReadOnly()
     */
    public $id;

    /**
     * @Type("string")
     */
    public $subject;

    /**
     * @Type("integer")
     */
    public $clientId;

    /**
     * @Type("integer")
     */
    public $assignedGroupId;

    /**
     * @Type("integer")
     */
    public $assignedUserId;

    /**
     * @Type("DateTime")
     */
    public $createdAt;

    /**
     * @Type("string")
     */
    public $emailFromAddress;

    /**
     * @Type("string")
     */
    public $emailFromName;

    /**
     * @Type("integer")
     */
    public $status;

    /**
     * @Type("boolean")
     */
    public $public;

    /**
     * @Type("DateTime")
     * @ReadOnly()
     */
    public $lastActivity;

    /**
     * @Type("DateTime")
     * @ReadOnly()
     */
    public $lastCommentAt;

    /**
     * @Type("boolean")
     * @ReadOnly()
     */
    public $isLastActivityByClient;

    /**
     * @Type("array<TicketingBundle\Api\Map\TicketActivityMap>")
     */
    public $activity = [];

    /**
     * @Type("array<integer>")
     */
    public $assignedJobIds = [];
}
