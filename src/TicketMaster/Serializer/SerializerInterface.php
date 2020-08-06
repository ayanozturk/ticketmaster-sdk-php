<?php

declare(strict_types=1);

namespace TicketMaster\Serializer;

interface SerializerInterface
{
    public function serialize(array $data, string $format): string;

    public function deserialize(string $data, string $type, string $format);
}
