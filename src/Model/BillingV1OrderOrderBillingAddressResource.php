<?php

/**
 * Hostinger API PHP SDK
 *
 * API Version: 0.0.16
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
class BillingV1OrderOrderBillingAddressResource implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    protected static string $openAPIModelName = 'Billing.V1.Order.OrderBillingAddressResource';

    /**
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'firstName' => 'string',
        'lastName' => 'string',
        'company' => 'string',
        'address1' => 'string',
        'address2' => 'string',
        'city' => 'string',
        'state' => 'string',
        'zip' => 'string',
        'country' => 'string',
        'phone' => 'string',
        'email' => 'string'
    ];

    /**
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'firstName' => null,
        'lastName' => null,
        'company' => null,
        'address1' => null,
        'address2' => null,
        'city' => null,
        'state' => null,
        'zip' => null,
        'country' => null,
        'phone' => null,
        'email' => null
    ];

    /**
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'firstName' => false,
        'lastName' => false,
        'company' => true,
        'address1' => true,
        'address2' => true,
        'city' => true,
        'state' => true,
        'zip' => true,
        'country' => true,
        'phone' => true,
        'email' => false
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
        'firstName' => 'first_name',
        'lastName' => 'last_name',
        'company' => 'company',
        'address1' => 'address_1',
        'address2' => 'address_2',
        'city' => 'city',
        'state' => 'state',
        'zip' => 'zip',
        'country' => 'country',
        'phone' => 'phone',
        'email' => 'email'
    ];

    /**
     * @var array<string, string>
     */
    protected static array $setters = [
        'firstName' => 'setFirstName',
        'lastName' => 'setLastName',
        'company' => 'setCompany',
        'address1' => 'setAddress1',
        'address2' => 'setAddress2',
        'city' => 'setCity',
        'state' => 'setState',
        'zip' => 'setZip',
        'country' => 'setCountry',
        'phone' => 'setPhone',
        'email' => 'setEmail'
    ];

    /**
     * @var array<string, string>
     */
    protected static array $getters = [
        'firstName' => 'getFirstName',
        'lastName' => 'getLastName',
        'company' => 'getCompany',
        'address1' => 'getAddress1',
        'address2' => 'getAddress2',
        'city' => 'getCity',
        'state' => 'getState',
        'zip' => 'getZip',
        'country' => 'getCountry',
        'phone' => 'getPhone',
        'email' => 'getEmail'
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
        $this->setIfExists('firstName', $data, null);
        $this->setIfExists('lastName', $data, null);
        $this->setIfExists('company', $data, null);
        $this->setIfExists('address1', $data, null);
        $this->setIfExists('address2', $data, null);
        $this->setIfExists('city', $data, null);
        $this->setIfExists('state', $data, null);
        $this->setIfExists('zip', $data, null);
        $this->setIfExists('country', $data, null);
        $this->setIfExists('phone', $data, null);
        $this->setIfExists('email', $data, null);
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
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->container['firstName'];
    }

    /**
     * @param string|null $firstName firstName
     */
    public function setFirstName(?string $firstName): static
    {
        $this->container['firstName'] = $firstName;

        return $this;
    }
    /**
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->container['lastName'];
    }

    /**
     * @param string|null $lastName lastName
     */
    public function setLastName(?string $lastName): static
    {
        $this->container['lastName'] = $lastName;

        return $this;
    }
    /**
     * @return string|null
     */
    public function getCompany(): ?string
    {
        return $this->container['company'];
    }

    /**
     * @param string|null $company company
     */
    public function setCompany(?string $company): static
    {
        if (is_null($company)) {
            $this->openAPINullablesSetToNull[] = 'company';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('company', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['company'] = $company;

        return $this;
    }
    /**
     * @return string|null
     */
    public function getAddress1(): ?string
    {
        return $this->container['address1'];
    }

    /**
     * @param string|null $address1 address1
     */
    public function setAddress1(?string $address1): static
    {
        if (is_null($address1)) {
            $this->openAPINullablesSetToNull[] = 'address1';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('address1', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['address1'] = $address1;

        return $this;
    }
    /**
     * @return string|null
     */
    public function getAddress2(): ?string
    {
        return $this->container['address2'];
    }

    /**
     * @param string|null $address2 address2
     */
    public function setAddress2(?string $address2): static
    {
        if (is_null($address2)) {
            $this->openAPINullablesSetToNull[] = 'address2';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('address2', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['address2'] = $address2;

        return $this;
    }
    /**
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->container['city'];
    }

    /**
     * @param string|null $city city
     */
    public function setCity(?string $city): static
    {
        if (is_null($city)) {
            $this->openAPINullablesSetToNull[] = 'city';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('city', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['city'] = $city;

        return $this;
    }
    /**
     * @return string|null
     */
    public function getState(): ?string
    {
        return $this->container['state'];
    }

    /**
     * @param string|null $state state
     */
    public function setState(?string $state): static
    {
        if (is_null($state)) {
            $this->openAPINullablesSetToNull[] = 'state';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('state', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['state'] = $state;

        return $this;
    }
    /**
     * @return string|null
     */
    public function getZip(): ?string
    {
        return $this->container['zip'];
    }

    /**
     * @param string|null $zip zip
     */
    public function setZip(?string $zip): static
    {
        if (is_null($zip)) {
            $this->openAPINullablesSetToNull[] = 'zip';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('zip', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['zip'] = $zip;

        return $this;
    }
    /**
     * @return string|null
     */
    public function getCountry(): ?string
    {
        return $this->container['country'];
    }

    /**
     * @param string|null $country country
     */
    public function setCountry(?string $country): static
    {
        if (is_null($country)) {
            $this->openAPINullablesSetToNull[] = 'country';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('country', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['country'] = $country;

        return $this;
    }
    /**
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->container['phone'];
    }

    /**
     * @param string|null $phone phone
     */
    public function setPhone(?string $phone): static
    {
        if (is_null($phone)) {
            $this->openAPINullablesSetToNull[] = 'phone';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('phone', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['phone'] = $phone;

        return $this;
    }
    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->container['email'];
    }

    /**
     * @param string|null $email email
     */
    public function setEmail(?string $email): static
    {
        $this->container['email'] = $email;

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

