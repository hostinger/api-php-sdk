<?php

/**
 * Hostinger API PHP SDK
 *
 * API Version: 0.0.5
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
class BillingV1OrderOrderResource implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    protected static string $openAPIModelName = 'Billing.V1.Order.OrderResource';

    /**
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'id' => 'int',
        'subscriptionId' => 'string',
        'status' => 'string',
        'currency' => 'string',
        'subtotal' => 'int',
        'total' => 'int',
        'billingAddress' => '\Hostinger\Model\BillingV1OrderOrderBillingAddressResource',
        'createdAt' => '\DateTime',
        'updatedAt' => '\DateTime'
    ];

    /**
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'id' => null,
        'subscriptionId' => null,
        'status' => null,
        'currency' => null,
        'subtotal' => null,
        'total' => null,
        'billingAddress' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time'
    ];

    /**
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'id' => false,
        'subscriptionId' => false,
        'status' => false,
        'currency' => false,
        'subtotal' => false,
        'total' => false,
        'billingAddress' => false,
        'createdAt' => false,
        'updatedAt' => false
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
        'subscriptionId' => 'subscription_id',
        'status' => 'status',
        'currency' => 'currency',
        'subtotal' => 'subtotal',
        'total' => 'total',
        'billingAddress' => 'billing_address',
        'createdAt' => 'created_at',
        'updatedAt' => 'updated_at'
    ];

    /**
     * @var array<string, string>
     */
    protected static array $setters = [
        'id' => 'setId',
        'subscriptionId' => 'setSubscriptionId',
        'status' => 'setStatus',
        'currency' => 'setCurrency',
        'subtotal' => 'setSubtotal',
        'total' => 'setTotal',
        'billingAddress' => 'setBillingAddress',
        'createdAt' => 'setCreatedAt',
        'updatedAt' => 'setUpdatedAt'
    ];

    /**
     * @var array<string, string>
     */
    protected static array $getters = [
        'id' => 'getId',
        'subscriptionId' => 'getSubscriptionId',
        'status' => 'getStatus',
        'currency' => 'getCurrency',
        'subtotal' => 'getSubtotal',
        'total' => 'getTotal',
        'billingAddress' => 'getBillingAddress',
        'createdAt' => 'getCreatedAt',
        'updatedAt' => 'getUpdatedAt'
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

    public const STATUS_COMPLETED = 'completed';
    public const STATUS_PENDING = 'pending';
    public const STATUS_PROCESSING = 'processing';
    public const STATUS_FAILED = 'failed';
    public const STATUS_REFUNDED = 'refunded';
    public const STATUS_CANCELLED = 'cancelled';
    public const STATUS_AWAITING_PAYMENT = 'awaiting_payment';
    public const STATUS_PAYMENT_INITIATED = 'payment_initiated';
    public const STATUS_FRAUD_REFUND = 'fraud_refund';

    /**
     * @return array<string>
     */
    public function getStatusAllowableValues(): array
    {
        return [
            self::STATUS_COMPLETED,
            self::STATUS_PENDING,
            self::STATUS_PROCESSING,
            self::STATUS_FAILED,
            self::STATUS_REFUNDED,
            self::STATUS_CANCELLED,
            self::STATUS_AWAITING_PAYMENT,
            self::STATUS_PAYMENT_INITIATED,
            self::STATUS_FRAUD_REFUND,
        ];
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
        $this->setIfExists('subscriptionId', $data, null);
        $this->setIfExists('status', $data, null);
        $this->setIfExists('currency', $data, null);
        $this->setIfExists('subtotal', $data, null);
        $this->setIfExists('total', $data, null);
        $this->setIfExists('billingAddress', $data, null);
        $this->setIfExists('createdAt', $data, null);
        $this->setIfExists('updatedAt', $data, null);
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

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

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
     * @param int|null $id Order ID
     */
    public function setId(?int $id): static
    {
        $this->container['id'] = $id;

        return $this;
    }
    /**
     * @return string|null
     */
    public function getSubscriptionId(): ?string
    {
        return $this->container['subscriptionId'];
    }

    /**
     * @param string|null $subscriptionId Subscription ID
     */
    public function setSubscriptionId(?string $subscriptionId): static
    {
        $this->container['subscriptionId'] = $subscriptionId;

        return $this;
    }
    /**
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->container['status'];
    }

    /**
     * @param string|null $status status
     */
    public function setStatus(?string $status): static
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }
    /**
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return $this->container['currency'];
    }

    /**
     * @param string|null $currency Currency code
     */
    public function setCurrency(?string $currency): static
    {
        $this->container['currency'] = $currency;

        return $this;
    }
    /**
     * @return int|null
     */
    public function getSubtotal(): ?int
    {
        return $this->container['subtotal'];
    }

    /**
     * @param int|null $subtotal Subtotal price (exc. VAT) in cents
     */
    public function setSubtotal(?int $subtotal): static
    {
        $this->container['subtotal'] = $subtotal;

        return $this;
    }
    /**
     * @return int|null
     */
    public function getTotal(): ?int
    {
        return $this->container['total'];
    }

    /**
     * @param int|null $total Total price (inc. VAT) in cents
     */
    public function setTotal(?int $total): static
    {
        $this->container['total'] = $total;

        return $this;
    }
    /**
     * @return \Hostinger\Model\BillingV1OrderOrderBillingAddressResource|null
     */
    public function getBillingAddress(): ?\Hostinger\Model\BillingV1OrderOrderBillingAddressResource
    {
        return $this->container['billingAddress'];
    }

    /**
     * @param \Hostinger\Model\BillingV1OrderOrderBillingAddressResource|null $billingAddress billingAddress
     */
    public function setBillingAddress(?\Hostinger\Model\BillingV1OrderOrderBillingAddressResource $billingAddress): static
    {
        $this->container['billingAddress'] = $billingAddress;

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
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->container['updatedAt'];
    }

    /**
     * @param \DateTime|null $updatedAt updatedAt
     */
    public function setUpdatedAt(?\DateTime $updatedAt): static
    {
        $this->container['updatedAt'] = $updatedAt;

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

