<?php

/**
 * Hostinger API PHP SDK
 *
 * API Version: 0.0.24
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
class VPSV1PublicKeyPublicKeyResource implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    protected static string $openAPIModelName = 'VPS.V1.PublicKey.PublicKeyResource';

    /**
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'id' => 'int',
        'name' => 'string',
        'key' => 'string'
    ];

    /**
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'id' => null,
        'name' => null,
        'key' => null
    ];

    /**
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'id' => false,
        'name' => false,
        'key' => false
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
        'id' => 'id',
        'name' => 'name',
        'key' => 'key'
    ];

    /**
     * @var array<string, string>
     */
    protected static array $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'key' => 'setKey'
    ];

    /**
     * @var array<string, string>
     */
    protected static array $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'key' => 'getKey'
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

    /**
     * @param array<string, mixed> $data Associated array of property values initializing the model
     */
    public function __construct(?array $data = [])
    {
        $this->setIfExists('id', $data, null);
        $this->setIfExists('name', $data, null);
        $this->setIfExists('key', $data, null);
    }

    /**
    * @param array<string, mixed> $fields
    */
    private function setIfExists(string $variableName, array $fields, mixed $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
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

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->container['id'];
    }

    /**
     * @param int|null $id Public key ID
     */
    public function setId(?int $id): static
    {
        $this->container['id'] = $id;

        return $this;
    }
    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->container['name'];
    }

    /**
     * @param string|null $name Public key name
     */
    public function setName(?string $name): static
    {
        $this->container['name'] = $name;

        return $this;
    }
    /**
     * @return string|null
     */
    public function getKey(): ?string
    {
        return $this->container['key'];
    }

    /**
     * @param string|null $key Public key content
     */
    public function setKey(?string $key): static
    {
        $this->container['key'] = $key;

        return $this;
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

