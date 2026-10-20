<?php
namespace Neniu\Event;

use DateTime;

final class Event
{
    public function __construct(
        private string $name,
        private DateTime $startDateTime,
        private DateTime $endDateTime,
        private ?string $description = null,
        private ?string $content = null,
    ) {
    }

    public static function create(
        string $name,
        DateTime $startDateTime,
        DateTime $endDateTime,
        
    ): self {
        return new self(
            name: $name,
            startDateTime: $startDateTime,
            endDateTime: $endDateTime
        );
    }
}