<?php

declare(strict_types=1);

namespace TicketMaster\Serializer;

use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\SerializerInterface as JMSSerializerInterface;

class Serializer implements SerializerInterface
{
    private JMSSerializerInterface $serializer;

    public function __construct()
    {
        $this->serializer = SerializerBuilder::create()
            ->addMetadataDir(__DIR__ . '/../Entity')
            ->build();
    }

    public function serialize(array $data, string $format = 'json'): string
    {
        return $this->serializer->serialize($data, $format);
    }

    /**
     * @return mixed
     */
    public function deserialize(string $data, string $type, string $format = 'json')
    {
        return $this->serializer->deserialize($data, $type, $format);
    }
}
