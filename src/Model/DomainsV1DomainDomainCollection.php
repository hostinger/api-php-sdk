<?php

/**
 * Hostinger API PHP SDK
 *
 * API Version: 0.0.7
 * @url https://github.com/hostinger/api-php-sdk
 *
 * NOTE: This file is auto-generated, DO NOT EDIT THIS FILE MANUALLY!
 * If you want to contribute or request a new feature, please create an issue or pull request on https://github.com/hostinger/api
 */

namespace Hostinger\Model;

use ArrayAccess;
use JsonSerializable;
use InvalidArgumentException;
use ReturnTypeWillChange;
use Hostinger\ObjectSerializer;

/**
 * @implements ArrayAccess<string, mixed>
 */
class DomainsV1DomainDomainCollection implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    protected static string $openAPIModelName = 'Domains.V1.Domain.DomainCollection';

    /**
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        
    ];

    /**
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        
    ];

    /**
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        
    ];

    /**
      * @var array<string>
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * @return array<string, string>
     */
    public static function openAPITypes(): array
    {
        return self::$openAPITypes;
    }

    /**
     * @return array<string, string>
     */
    public static function openAPIFormats(): array
    {
        return self::$openAPIFormats;
    }

    /**
     * @return array<string, bool>
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * @return array<string>
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * @param array<string> $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * @var array<string, string>
     */
    protected static array $attributeMap = [
        
    ];

    /**
     * @var array<string, string>
     */
    protected static array $setters = [
        
    ];

    /**
     * @var array<string, string>
     */
    protected static array $getters = [
        
    ];

    /**
     * @return array<string, string>
     */
    public static function attributeMap(): array
    {
        return self::$attributeMap;
    }

    /**
     * @return array<string, string>
     */
    public static function setters(): array
    {
        return self::$setters;
    }

    /**
     * @return array<string, string>
     */
    public static function getters(): array
    {
        return self::$getters;
    }

    public function getModelName(): string
    {
        return self::$openAPIModelName;
    }

    /**
     * @var array<string, mixed>
     */
    protected array $container = [];

    public function __construct()
    {
    }

    /**
     * @return array<string> invalid properties with reasons
     */
    public function listInvalidProperties(): array
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    public function valid(): bool
    {
        return count($this->listInvalidProperties()) === 0;
    }

    public function offsetExists(mixed $offset): bool
    {
        return isset($this->container[$offset]);
    }

    #[ReturnTypeWillChange]
    public function offsetGet(mixed $offset): mixed
    {
        return $this->container[$offset] ?? null;
    }

    public function offsetSet(mixed $offset, mixed $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    public function offsetUnset(mixed $offset): void
    {
        unset($this->container[$offset]);
    }

    #[ReturnTypeWillChange]
    public function jsonSerialize(): mixed
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    public function __toString(): string
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    public function toHeaderValue(): string
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

