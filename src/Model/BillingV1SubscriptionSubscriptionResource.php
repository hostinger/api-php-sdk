<?php

/**
 * Hostinger API PHP SDK
 *
 * API Version: 0.0.17
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
class BillingV1SubscriptionSubscriptionResource implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    protected static string $openAPIModelName = 'Billing.V1.Subscription.SubscriptionResource';

    /**
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'id' => 'string',
        'name' => 'string',
        'status' => 'string',
        'billingPeriod' => 'int',
        'billingPeriodUnit' => 'string',
        'currencyCode' => 'string',
        'totalPrice' => 'int',
        'renewalPrice' => 'int',
        'autoRenew' => 'bool',
        'createdAt' => '\DateTime',
        'expiresAt' => '\DateTime',
        'nextBillingAt' => '\DateTime',
        'canceledAt' => '\DateTime'
    ];

    /**
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'id' => null,
        'name' => null,
        'status' => null,
        'billingPeriod' => null,
        'billingPeriodUnit' => null,
        'currencyCode' => null,
        'totalPrice' => null,
        'renewalPrice' => null,
        'autoRenew' => null,
        'createdAt' => 'date-time',
        'expiresAt' => 'date-time',
        'nextBillingAt' => 'date-time',
        'canceledAt' => 'date-time'
    ];

    /**
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'id' => false,
        'name' => false,
        'status' => false,
        'billingPeriod' => false,
        'billingPeriodUnit' => false,
        'currencyCode' => false,
        'totalPrice' => false,
        'renewalPrice' => false,
        'autoRenew' => false,
        'createdAt' => false,
        'expiresAt' => false,
        'nextBillingAt' => true,
        'canceledAt' => true
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
        'status' => 'status',
        'billingPeriod' => 'billing_period',
        'billingPeriodUnit' => 'billing_period_unit',
        'currencyCode' => 'currency_code',
        'totalPrice' => 'total_price',
        'renewalPrice' => 'renewal_price',
        'autoRenew' => 'auto_renew',
        'createdAt' => 'created_at',
        'expiresAt' => 'expires_at',
        'nextBillingAt' => 'next_billing_at',
        'canceledAt' => 'canceled_at'
    ];

    /**
     * @var array<string, string>
     */
    protected static array $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'status' => 'setStatus',
        'billingPeriod' => 'setBillingPeriod',
        'billingPeriodUnit' => 'setBillingPeriodUnit',
        'currencyCode' => 'setCurrencyCode',
        'totalPrice' => 'setTotalPrice',
        'renewalPrice' => 'setRenewalPrice',
        'autoRenew' => 'setAutoRenew',
        'createdAt' => 'setCreatedAt',
        'expiresAt' => 'setExpiresAt',
        'nextBillingAt' => 'setNextBillingAt',
        'canceledAt' => 'setCanceledAt'
    ];

    /**
     * @var array<string, string>
     */
    protected static array $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'status' => 'getStatus',
        'billingPeriod' => 'getBillingPeriod',
        'billingPeriodUnit' => 'getBillingPeriodUnit',
        'currencyCode' => 'getCurrencyCode',
        'totalPrice' => 'getTotalPrice',
        'renewalPrice' => 'getRenewalPrice',
        'autoRenew' => 'getAutoRenew',
        'createdAt' => 'getCreatedAt',
        'expiresAt' => 'getExpiresAt',
        'nextBillingAt' => 'getNextBillingAt',
        'canceledAt' => 'getCanceledAt'
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

    public const STATUS_ACTIVE = 'active';
    public const STATUS_PAUSED = 'paused';
    public const STATUS_CANCELLED = 'cancelled';
    public const STATUS_NOT_RENEWING = 'not_renewing';
    public const STATUS_TRANSFERRED = 'transferred';
    public const STATUS_IN_TRIAL = 'in_trial';
    public const STATUS_FUTURE = 'future';

    /**
     * @return array<string>
     */
    public function getStatusAllowableValues(): array
    {
        return [
            self::STATUS_ACTIVE,
            self::STATUS_PAUSED,
            self::STATUS_CANCELLED,
            self::STATUS_NOT_RENEWING,
            self::STATUS_TRANSFERRED,
            self::STATUS_IN_TRIAL,
            self::STATUS_FUTURE,
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
        $this->setIfExists('name', $data, null);
        $this->setIfExists('status', $data, null);
        $this->setIfExists('billingPeriod', $data, null);
        $this->setIfExists('billingPeriodUnit', $data, null);
        $this->setIfExists('currencyCode', $data, null);
        $this->setIfExists('totalPrice', $data, null);
        $this->setIfExists('renewalPrice', $data, null);
        $this->setIfExists('autoRenew', $data, null);
        $this->setIfExists('createdAt', $data, null);
        $this->setIfExists('expiresAt', $data, null);
        $this->setIfExists('nextBillingAt', $data, null);
        $this->setIfExists('canceledAt', $data, null);
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
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->container['id'];
    }

    /**
     * @param string|null $id Subscription ID
     */
    public function setId(?string $id): static
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
     * @return int|null
     */
    public function getBillingPeriod(): ?int
    {
        return $this->container['billingPeriod'];
    }

    /**
     * @param int|null $billingPeriod billingPeriod
     */
    public function setBillingPeriod(?int $billingPeriod): static
    {
        $this->container['billingPeriod'] = $billingPeriod;

        return $this;
    }
    /**
     * @return string|null
     */
    public function getBillingPeriodUnit(): ?string
    {
        return $this->container['billingPeriodUnit'];
    }

    /**
     * @param string|null $billingPeriodUnit billingPeriodUnit
     */
    public function setBillingPeriodUnit(?string $billingPeriodUnit): static
    {
        $this->container['billingPeriodUnit'] = $billingPeriodUnit;

        return $this;
    }
    /**
     * @return string|null
     */
    public function getCurrencyCode(): ?string
    {
        return $this->container['currencyCode'];
    }

    /**
     * @param string|null $currencyCode currencyCode
     */
    public function setCurrencyCode(?string $currencyCode): static
    {
        $this->container['currencyCode'] = $currencyCode;

        return $this;
    }
    /**
     * @return int|null
     */
    public function getTotalPrice(): ?int
    {
        return $this->container['totalPrice'];
    }

    /**
     * @param int|null $totalPrice Total price in cents
     */
    public function setTotalPrice(?int $totalPrice): static
    {
        $this->container['totalPrice'] = $totalPrice;

        return $this;
    }
    /**
     * @return int|null
     */
    public function getRenewalPrice(): ?int
    {
        return $this->container['renewalPrice'];
    }

    /**
     * @param int|null $renewalPrice Renewal price in cents
     */
    public function setRenewalPrice(?int $renewalPrice): static
    {
        $this->container['renewalPrice'] = $renewalPrice;

        return $this;
    }
    /**
     * @return bool|null
     */
    public function getAutoRenew(): ?bool
    {
        return $this->container['autoRenew'];
    }

    /**
     * @param bool|null $autoRenew autoRenew
     */
    public function setAutoRenew(?bool $autoRenew): static
    {
        $this->container['autoRenew'] = $autoRenew;

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
    /**
     * @return \DateTime|null
     */
    public function getNextBillingAt(): ?\DateTime
    {
        return $this->container['nextBillingAt'];
    }

    /**
     * @param \DateTime|null $nextBillingAt nextBillingAt
     */
    public function setNextBillingAt(?\DateTime $nextBillingAt): static
    {
        if (is_null($nextBillingAt)) {
            $this->openAPINullablesSetToNull[] = 'nextBillingAt';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('nextBillingAt', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['nextBillingAt'] = $nextBillingAt;

        return $this;
    }
    /**
     * @return \DateTime|null
     */
    public function getCanceledAt(): ?\DateTime
    {
        return $this->container['canceledAt'];
    }

    /**
     * @param \DateTime|null $canceledAt canceledAt
     */
    public function setCanceledAt(?\DateTime $canceledAt): static
    {
        if (is_null($canceledAt)) {
            $this->openAPINullablesSetToNull[] = 'canceledAt';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('canceledAt', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['canceledAt'] = $canceledAt;

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

