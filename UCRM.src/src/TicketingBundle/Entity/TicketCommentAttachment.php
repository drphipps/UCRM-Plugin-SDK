<?php
/*
 * @copyright Copyright (c) 2018 Ubiquiti Networks, Inc.
 * @see https://www.ubnt.com/
 */

declare(strict_types=1);

namespace TicketingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 */
class TicketCommentAttachment implements TicketCommentAttachmentInterface
{
    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(type="text")
     */
    private $filename;

    /**
     * @var string
     *
     * @ORM\Column(type="text")
     */
    private $originalFilename;

    /**
     * @var string|null
     *
     * @ORM\Column(type="text", nullable=true)
     */
    private $mimeType;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $size;

    /**
     * ID of the header part with the attachment. Only used in case of IMAP import.
     *
     * @var string|null
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $partId;

    /**
     * @var TicketComment
     *
     * @ORM\ManyToOne(targetEntity="TicketingBundle\Entity\TicketComment", inversedBy="attachments")
     * @ORM\JoinColumn(name="ticket_comment_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $ticketComment;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getFilename(): string
    {
        return $this->filename;
    }

    public function setFilename(string $filename): void
    {
        $this->filename = $filename;
    }

    public function getOriginalFilename(): string
    {
        return $this->originalFilename;
    }

    public function setOriginalFilename(string $originalFilename): void
    {
        $this->originalFilename = $originalFilename;
    }

    public function getMimeType(): ?string
    {
        return $this->mimeType;
    }

    public function setMimeType(?string $mimeType): void
    {
        $this->mimeType = $mimeType;
    }

    public function getSize(): int
    {
        return $this->size;
    }

    public function setSize(int $size): void
    {
        $this->size = $size;
    }

    public function getPartId(): ?string
    {
        return $this->partId;
    }

    public function setPartId(?string $partId): void
    {
        $this->partId = $partId;
    }

    public function getTicketComment(): TicketComment
    {
        return $this->ticketComment;
    }

    public function setTicketComment($ticketComment): void
    {
        $this->ticketComment = $ticketComment;
    }
}
