<?php

declare(strict_types=1);

namespace Hostinger\Normalizers;

use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

class ArrayToObjectNormalizer implements DenormalizerInterface, DenormalizerAwareInterface
{
    use DenormalizerAwareTrait;

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (is_array($data) && $type === 'object') {
            return (object) $data;
        }

        if (class_exists($type)) {
            $reflection = new \ReflectionClass($type);

            foreach ($data as $key => $value) {
                if (is_array($value) && $this->shouldBeObject($reflection, $key)) {
                    $data[$key] = (object) $value;
                }
            }

            return $this->denormalizer->denormalize($data, $type, $format, $context + [__CLASS__ => true]);
        }

        return $data;
    }

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        if (isset($context[__CLASS__])) {
            return false;
        }

        if ($type === 'object' && is_array($data)) {
            return true;
        }

        if (class_exists($type) && is_array($data)) {
            $reflection = new \ReflectionClass($type);

            foreach ($data as $key => $value) {
                if (!is_string($key)) {
                    continue;
                }

                if (is_array($value) && $this->shouldBeObject($reflection, $key)) {
                    return true;
                }
            }
        }

        return false;
    }

    public function getSupportedTypes(?string $format): array
    {
        return [
            'object' => true,
            '*' => false, // Supports any class but with lower priority
        ];
    }

    private function shouldBeObject(\ReflectionClass $reflection, string $propertyName): bool
    {
        try {
            $property = $reflection->getProperty($propertyName);
            $type = $property->getType();

            if ($type instanceof \ReflectionNamedType) {
                return $type->getName() === 'object';
            }
        } catch (\ReflectionException $e) {
            // Property doesn't exist
            return false;
        }

        return false;
    }
}
