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
class VPSV1FirewallFirewallRuleResource implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      */
    protected static string $openAPIModelName = 'VPS.V1.Firewall.FirewallRuleResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'id' => 'int',
        'action' => 'string',
        'protocol' => 'string',
        'port' => 'string',
        'source' => 'string',
        'source_detail' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'id' => null,
        'action' => null,
        'protocol' => null,
        'port' => null,
        'source' => null,
        'source_detail' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'id' => false,
        'action' => false,
        'protocol' => false,
        'port' => false,
        'source' => false,
        'source_detail' => false
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
        'id' => 'id',
        'action' => 'action',
        'protocol' => 'protocol',
        'port' => 'port',
        'source' => 'source',
        'source_detail' => 'source_detail'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'id' => 'setId',
        'action' => 'setAction',
        'protocol' => 'setProtocol',
        'port' => 'setPort',
        'source' => 'setSource',
        'source_detail' => 'setSourceDetail'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'id' => 'getId',
        'action' => 'getAction',
        'protocol' => 'getProtocol',
        'port' => 'getPort',
        'source' => 'getSource',
        'source_detail' => 'getSourceDetail'
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

    public const ACTION_ACCEPT = 'accept';
    public const ACTION_DROP = 'drop';
    public const PROTOCOL_TCP = 'TCP';
    public const PROTOCOL_UDP = 'UDP';
    public const PROTOCOL_ICMP = 'ICMP';
    public const PROTOCOL_GRE = 'GRE';
    public const PROTOCOL_ANY = 'any';
    public const PROTOCOL_ESP = 'ESP';
    public const PROTOCOL_AH = 'AH';
    public const PROTOCOL_ICMPV6 = 'ICMPv6';
    public const PROTOCOL_SSH = 'SSH';
    public const PROTOCOL_HTTP = 'HTTP';
    public const PROTOCOL_HTTPS = 'HTTPS';
    public const PROTOCOL_MY_SQL = 'MySQL';
    public const PROTOCOL_POSTGRE_SQL = 'PostgreSQL';

    /**
     * @return array<string>
     */
    public function getActionAllowableValues()
    {
        return [
            self::ACTION_ACCEPT,
            self::ACTION_DROP,
        ];
    }

    /**
     * @return array<string>
     */
    public function getProtocolAllowableValues()
    {
        return [
            self::PROTOCOL_TCP,
            self::PROTOCOL_UDP,
            self::PROTOCOL_ICMP,
            self::PROTOCOL_GRE,
            self::PROTOCOL_ANY,
            self::PROTOCOL_ESP,
            self::PROTOCOL_AH,
            self::PROTOCOL_ICMPV6,
            self::PROTOCOL_SSH,
            self::PROTOCOL_HTTP,
            self::PROTOCOL_HTTPS,
            self::PROTOCOL_MY_SQL,
            self::PROTOCOL_POSTGRE_SQL,
        ];
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
        $this->setIfExists('id', $data, null);
        $this->setIfExists('action', $data, null);
        $this->setIfExists('protocol', $data, null);
        $this->setIfExists('port', $data, null);
        $this->setIfExists('source', $data, null);
        $this->setIfExists('source_detail', $data, null);
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

        $allowedValues = $this->getActionAllowableValues();
        if (!is_null($this->container['action']) && !in_array($this->container['action'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'action', must be one of '%s'",
                $this->container['action'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getProtocolAllowableValues();
        if (!is_null($this->container['protocol']) && !in_array($this->container['protocol'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'protocol', must be one of '%s'",
                $this->container['protocol'],
                implode("', '", $allowedValues)
            );
        }

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
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->container['id'];
    }

    /**
     * @param int|null $id Firewall rule ID
     */
    public function setId(?int $id): static
    {
        if (is_null($id)) {
            throw new InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAction(): ?string
    {
        return $this->container['action'];
    }

    /**
     * @param string|null $action Firewall rule action
     */
    public function setAction(?string $action): static
    {
        if (is_null($action)) {
            throw new InvalidArgumentException('non-nullable action cannot be null');
        }
        $allowedValues = $this->getActionAllowableValues();
        if (!in_array($action, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'action', must be one of '%s'",
                    $action,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['action'] = $action;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getProtocol(): ?string
    {
        return $this->container['protocol'];
    }

    /**
     * @param string|null $protocol Firewall rule protocol
     */
    public function setProtocol(?string $protocol): static
    {
        if (is_null($protocol)) {
            throw new InvalidArgumentException('non-nullable protocol cannot be null');
        }
        $allowedValues = $this->getProtocolAllowableValues();
        if (!in_array($protocol, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'protocol', must be one of '%s'",
                    $protocol,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['protocol'] = $protocol;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPort(): ?string
    {
        return $this->container['port'];
    }

    /**
     * @param string|null $port Firewall rule destination port: single or port range
     */
    public function setPort(?string $port): static
    {
        if (is_null($port)) {
            throw new InvalidArgumentException('non-nullable port cannot be null');
        }
        $this->container['port'] = $port;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getSource(): ?string
    {
        return $this->container['source'];
    }

    /**
     * @param string|null $source Firewall rule source. Can be `any` or `custom`
     */
    public function setSource(?string $source): static
    {
        if (is_null($source)) {
            throw new InvalidArgumentException('non-nullable source cannot be null');
        }
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getSourceDetail(): ?string
    {
        return $this->container['source_detail'];
    }

    /**
     * @param string|null $source_detail Firewall rule source detail. Can be `any` or IP address, CIDR or range
     */
    public function setSourceDetail(?string $source_detail): static
    {
        if (is_null($source_detail)) {
            throw new InvalidArgumentException('non-nullable source_detail cannot be null');
        }
        $this->container['source_detail'] = $source_detail;

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


