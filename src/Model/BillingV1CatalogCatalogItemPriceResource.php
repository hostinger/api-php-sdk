<?php

/**
 * Hostinger API PHP SDK
 *
 * API Version: 0.0.14
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
class BillingV1CatalogCatalogItemPriceResource implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    protected static string $openAPIModelName = 'Billing.V1.Catalog.CatalogItemPriceResource';

    /**
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'id' => 'string',
        'name' => 'string',
        'currency' => 'string',
        'price' => 'int',
        'firstPeriodPrice' => 'int',
        'period' => 'int',
        'periodUnit' => 'string'
    ];

    /**
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'id' => null,
        'name' => null,
        'currency' => null,
        'price' => null,
        'firstPeriodPrice' => null,
        'period' => null,
        'periodUnit' => null
    ];

    /**
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'id' => false,
        'name' => false,
        'currency' => false,
        'price' => false,
        'firstPeriodPrice' => false,
        'period' => false,
        'periodUnit' => false
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
        'currency' => 'currency',
        'price' => 'price',
        'firstPeriodPrice' => 'first_period_price',
        'period' => 'period',
        'periodUnit' => 'period_unit'
    ];

    /**
     * @var array<string, string>
     */
    protected static array $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'currency' => 'setCurrency',
        'price' => 'setPrice',
        'firstPeriodPrice' => 'setFirstPeriodPrice',
        'period' => 'setPeriod',
        'periodUnit' => 'setPeriodUnit'
    ];

    /**
     * @var array<string, string>
     */
    protected static array $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'currency' => 'getCurrency',
        'price' => 'getPrice',
        'firstPeriodPrice' => 'getFirstPeriodPrice',
        'period' => 'getPeriod',
        'periodUnit' => 'getPeriodUnit'
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

    public const PERIOD_UNIT_DAY = 'day';
    public const PERIOD_UNIT_WEEK = 'week';
    public const PERIOD_UNIT_MONTH = 'month';
    public const PERIOD_UNIT_YEAR = 'year';
    public const PERIOD_UNIT_NONE = 'none';

    /**
     * @return array<string>
     */
    public function getPeriodUnitAllowableValues(): array
    {
        return [
            self::PERIOD_UNIT_DAY,
            self::PERIOD_UNIT_WEEK,
            self::PERIOD_UNIT_MONTH,
            self::PERIOD_UNIT_YEAR,
            self::PERIOD_UNIT_NONE,
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
        $this->setIfExists('currency', $data, null);
        $this->setIfExists('price', $data, null);
        $this->setIfExists('firstPeriodPrice', $data, null);
        $this->setIfExists('period', $data, null);
        $this->setIfExists('periodUnit', $data, null);
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

        $allowedValues = $this->getPeriodUnitAllowableValues();
        if (!is_null($this->container['periodUnit']) && !in_array($this->container['periodUnit'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'periodUnit', must be one of '%s'",
                $this->container['periodUnit'],
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
     * @param string|null $id Price item ID
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
     * @param string|null $name Price item name
     */
    public function setName(?string $name): static
    {
        $this->container['name'] = $name;

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
    public function getPrice(): ?int
    {
        return $this->container['price'];
    }

    /**
     * @param int|null $price Price in cents
     */
    public function setPrice(?int $price): static
    {
        $this->container['price'] = $price;

        return $this;
    }
    /**
     * @return int|null
     */
    public function getFirstPeriodPrice(): ?int
    {
        return $this->container['firstPeriodPrice'];
    }

    /**
     * @param int|null $firstPeriodPrice First period price in cents
     */
    public function setFirstPeriodPrice(?int $firstPeriodPrice): static
    {
        $this->container['firstPeriodPrice'] = $firstPeriodPrice;

        return $this;
    }
    /**
     * @return int|null
     */
    public function getPeriod(): ?int
    {
        return $this->container['period'];
    }

    /**
     * @param int|null $period Period
     */
    public function setPeriod(?int $period): static
    {
        $this->container['period'] = $period;

        return $this;
    }
    /**
     * @return string|null
     */
    public function getPeriodUnit(): ?string
    {
        return $this->container['periodUnit'];
    }

    /**
     * @param string|null $periodUnit Period unit
     */
    public function setPeriodUnit(?string $periodUnit): static
    {
        $allowedValues = $this->getPeriodUnitAllowableValues();
        if (!in_array($periodUnit, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'periodUnit', must be one of '%s'",
                    $periodUnit,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['periodUnit'] = $periodUnit;

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

