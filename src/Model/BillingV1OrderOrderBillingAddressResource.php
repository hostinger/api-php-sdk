<?php

/**
 * Hostinger API PHP SDK
 *
 * API Version: 0.0.1-beta
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

    /**
      * The original name of the model.
      */
    protected static string $openAPIModelName = 'Billing.V1.Order.OrderBillingAddressResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'first_name' => 'string',
        'last_name' => 'string',
        'company' => 'string',
        'address_1' => 'string',
        'address_2' => 'string',
        'city' => 'string',
        'state' => 'string',
        'zip' => 'string',
        'country' => 'string',
        'phone' => 'string',
        'email' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'first_name' => null,
        'last_name' => null,
        'company' => null,
        'address_1' => null,
        'address_2' => null,
        'city' => null,
        'state' => null,
        'zip' => null,
        'country' => null,
        'phone' => null,
        'email' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'first_name' => false,
        'last_name' => false,
        'company' => true,
        'address_1' => true,
        'address_2' => true,
        'city' => true,
        'state' => true,
        'zip' => true,
        'country' => true,
        'phone' => true,
        'email' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var array<string, bool>
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array<string, string>
     */
    public static function openAPITypes(): array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array<string, string>
     */
    public static function openAPIFormats(): array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array<string, bool>
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return array<string, bool>
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param array<string, bool> $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var array<string, string>
     */
    protected static array $attributeMap = [
        'first_name' => 'first_name',
        'last_name' => 'last_name',
        'company' => 'company',
        'address_1' => 'address_1',
        'address_2' => 'address_2',
        'city' => 'city',
        'state' => 'state',
        'zip' => 'zip',
        'country' => 'country',
        'phone' => 'phone',
        'email' => 'email'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'company' => 'setCompany',
        'address_1' => 'setAddress1',
        'address_2' => 'setAddress2',
        'city' => 'setCity',
        'state' => 'setState',
        'zip' => 'setZip',
        'country' => 'setCountry',
        'phone' => 'setPhone',
        'email' => 'setEmail'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'company' => 'getCompany',
        'address_1' => 'getAddress1',
        'address_2' => 'getAddress2',
        'city' => 'getCity',
        'state' => 'getState',
        'zip' => 'getZip',
        'country' => 'getCountry',
        'phone' => 'getPhone',
        'email' => 'getEmail'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array<string, string>
     */
    public static function attributeMap(): array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array<string, string>
     */
    public static function setters(): array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array<string, string>
     */
    public static function getters(): array
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     */
    public function getModelName(): string
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var array<string, mixed>
     */
    protected array $container = [];

    /**
     * @param array<string, mixed> $data Associated array of property values initializing the model
     */
    public function __construct(?array $data = [])
    {
        $this->setIfExists('first_name', $data, null);
        $this->setIfExists('last_name', $data, null);
        $this->setIfExists('company', $data, null);
        $this->setIfExists('address_1', $data, null);
        $this->setIfExists('address_2', $data, null);
        $this->setIfExists('city', $data, null);
        $this->setIfExists('state', $data, null);
        $this->setIfExists('zip', $data, null);
        $this->setIfExists('country', $data, null);
        $this->setIfExists('phone', $data, null);
        $this->setIfExists('email', $data, null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
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

    /**
     * Validate all the properties in the model return true if all passed
     */
    public function valid(): bool
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->container['first_name'];
    }

    /**
     * @param string|null $first_name first_name
     */
    public function setFirstName(?string $first_name): static
    {
        if (is_null($first_name)) {
            throw new InvalidArgumentException('non-nullable first_name cannot be null');
        }
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->container['last_name'];
    }

    /**
     * @param string|null $last_name last_name
     */
    public function setLastName(?string $last_name): static
    {
        if (is_null($last_name)) {
            throw new InvalidArgumentException('non-nullable last_name cannot be null');
        }
        $this->container['last_name'] = $last_name;

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
            array_push($this->openAPINullablesSetToNull, 'company');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('company', $nullablesSetToNull);
            if ($index !== FALSE) {
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
        return $this->container['address_1'];
    }

    /**
     * @param string|null $address_1 address_1
     */
    public function setAddress1(?string $address_1): static
    {
        if (is_null($address_1)) {
            array_push($this->openAPINullablesSetToNull, 'address_1');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('address_1', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['address_1'] = $address_1;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAddress2(): ?string
    {
        return $this->container['address_2'];
    }

    /**
     * @param string|null $address_2 address_2
     */
    public function setAddress2(?string $address_2): static
    {
        if (is_null($address_2)) {
            array_push($this->openAPINullablesSetToNull, 'address_2');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('address_2', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['address_2'] = $address_2;

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
            array_push($this->openAPINullablesSetToNull, 'city');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('city', $nullablesSetToNull);
            if ($index !== FALSE) {
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
            array_push($this->openAPINullablesSetToNull, 'state');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('state', $nullablesSetToNull);
            if ($index !== FALSE) {
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
            array_push($this->openAPINullablesSetToNull, 'zip');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('zip', $nullablesSetToNull);
            if ($index !== FALSE) {
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
            array_push($this->openAPINullablesSetToNull, 'country');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('country', $nullablesSetToNull);
            if ($index !== FALSE) {
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
            array_push($this->openAPINullablesSetToNull, 'phone');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('phone', $nullablesSetToNull);
            if ($index !== FALSE) {
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
        if (is_null($email)) {
            throw new InvalidArgumentException('non-nullable email cannot be null');
        }
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

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[ReturnTypeWillChange]
    public function jsonSerialize(): mixed
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     */
    public function __toString(): string
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     */
    public function toHeaderValue(): string
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


