<?php

/**
 * Hostinger API PHP SDK
 *
 * API Version: 0.0.20
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
class BillingV1PaymentMethodPaymentMethodResource implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    protected static string $openAPIModelName = 'Billing.V1.PaymentMethod.PaymentMethodResource';

    /**
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'id' => 'int',
        'name' => 'string',
        'identifier' => 'string',
        'paymentMethod' => 'string',
        'isDefault' => 'bool',
        'isExpired' => 'bool',
        'isSuspended' => 'bool',
        'createdAt' => '\DateTime',
        'expiresAt' => '\DateTime'
    ];

    /**
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'id' => null,
        'name' => null,
        'identifier' => null,
        'paymentMethod' => null,
        'isDefault' => null,
        'isExpired' => null,
        'isSuspended' => null,
        'createdAt' => 'date-time',
        'expiresAt' => 'date-time'
    ];

    /**
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'id' => false,
        'name' => false,
        'identifier' => false,
        'paymentMethod' => false,
        'isDefault' => false,
        'isExpired' => false,
        'isSuspended' => false,
        'createdAt' => false,
        'expiresAt' => false
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
        'identifier' => 'identifier',
        'paymentMethod' => 'payment_method',
        'isDefault' => 'is_default',
        'isExpired' => 'is_expired',
        'isSuspended' => 'is_suspended',
        'createdAt' => 'created_at',
        'expiresAt' => 'expires_at'
    ];

    /**
     * @var array<string, string>
     */
    protected static array $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'identifier' => 'setIdentifier',
        'paymentMethod' => 'setPaymentMethod',
        'isDefault' => 'setIsDefault',
        'isExpired' => 'setIsExpired',
        'isSuspended' => 'setIsSuspended',
        'createdAt' => 'setCreatedAt',
        'expiresAt' => 'setExpiresAt'
    ];

    /**
     * @var array<string, string>
     */
    protected static array $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'identifier' => 'getIdentifier',
        'paymentMethod' => 'getPaymentMethod',
        'isDefault' => 'getIsDefault',
        'isExpired' => 'getIsExpired',
        'isSuspended' => 'getIsSuspended',
        'createdAt' => 'getCreatedAt',
        'expiresAt' => 'getExpiresAt'
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
        $this->setIfExists('identifier', $data, null);
        $this->setIfExists('paymentMethod', $data, null);
        $this->setIfExists('isDefault', $data, null);
        $this->setIfExists('isExpired', $data, null);
        $this->setIfExists('isSuspended', $data, null);
        $this->setIfExists('createdAt', $data, null);
        $this->setIfExists('expiresAt', $data, null);
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
     * @param int|null $id Payment method ID
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
     * @param string|null $name name
     */
    public function setName(?string $name): static
    {
        $this->container['name'] = $name;

        return $this;
    }
    /**
     * @return string|null
     */
    public function getIdentifier(): ?string
    {
        return $this->container['identifier'];
    }

    /**
     * @param string|null $identifier identifier
     */
    public function setIdentifier(?string $identifier): static
    {
        $this->container['identifier'] = $identifier;

        return $this;
    }
    /**
     * @return string|null
     */
    public function getPaymentMethod(): ?string
    {
        return $this->container['paymentMethod'];
    }

    /**
     * @param string|null $paymentMethod paymentMethod
     */
    public function setPaymentMethod(?string $paymentMethod): static
    {
        $this->container['paymentMethod'] = $paymentMethod;

        return $this;
    }
    /**
     * @return bool|null
     */
    public function getIsDefault(): ?bool
    {
        return $this->container['isDefault'];
    }

    /**
     * @param bool|null $isDefault isDefault
     */
    public function setIsDefault(?bool $isDefault): static
    {
        $this->container['isDefault'] = $isDefault;

        return $this;
    }
    /**
     * @return bool|null
     */
    public function getIsExpired(): ?bool
    {
        return $this->container['isExpired'];
    }

    /**
     * @param bool|null $isExpired isExpired
     */
    public function setIsExpired(?bool $isExpired): static
    {
        $this->container['isExpired'] = $isExpired;

        return $this;
    }
    /**
     * @return bool|null
     */
    public function getIsSuspended(): ?bool
    {
        return $this->container['isSuspended'];
    }

    /**
     * @param bool|null $isSuspended isSuspended
     */
    public function setIsSuspended(?bool $isSuspended): static
    {
        $this->container['isSuspended'] = $isSuspended;

        return $this;
    }
    /**
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->container['createdAt'];
    }

    /**
     * @param \DateTime|null $createdAt createdAt
     */
    public function setCreatedAt(?\DateTime $createdAt): static
    {
        $this->container['createdAt'] = $createdAt;

        return $this;
    }
    /**
     * @return \DateTime|null
     */
    public function getExpiresAt(): ?\DateTime
    {
        return $this->container['expiresAt'];
    }

    /**
     * @param \DateTime|null $expiresAt expiresAt
     */
    public function setExpiresAt(?\DateTime $expiresAt): static
    {
        $this->container['expiresAt'] = $expiresAt;

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

