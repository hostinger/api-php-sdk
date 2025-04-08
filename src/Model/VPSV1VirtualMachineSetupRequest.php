<?php

/**
 * Hostinger API PHP SDK
 *
 * @version 0.0.1-beta
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
class VPSV1VirtualMachineSetupRequest implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      */
    protected static string $openAPIModelName = 'VPS.V1.VirtualMachine.SetupRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'template_id' => 'int',
        'data_center_id' => 'int',
        'post_install_script_id' => 'int',
        'password' => 'string',
        'hostname' => 'string',
        'install_monarx' => 'bool',
        'enable_backups' => 'bool',
        'ns1' => 'string',
        'ns2' => 'string',
        'public_key' => '\Hostinger\Model\VPSV1VirtualMachineSetupRequestPublicKey'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'template_id' => null,
        'data_center_id' => null,
        'post_install_script_id' => null,
        'password' => 'password',
        'hostname' => null,
        'install_monarx' => null,
        'enable_backups' => null,
        'ns1' => null,
        'ns2' => null,
        'public_key' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'template_id' => false,
        'data_center_id' => false,
        'post_install_script_id' => false,
        'password' => false,
        'hostname' => false,
        'install_monarx' => false,
        'enable_backups' => false,
        'ns1' => false,
        'ns2' => false,
        'public_key' => false
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
        'template_id' => 'template_id',
        'data_center_id' => 'data_center_id',
        'post_install_script_id' => 'post_install_script_id',
        'password' => 'password',
        'hostname' => 'hostname',
        'install_monarx' => 'install_monarx',
        'enable_backups' => 'enable_backups',
        'ns1' => 'ns1',
        'ns2' => 'ns2',
        'public_key' => 'public_key'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'template_id' => 'setTemplateId',
        'data_center_id' => 'setDataCenterId',
        'post_install_script_id' => 'setPostInstallScriptId',
        'password' => 'setPassword',
        'hostname' => 'setHostname',
        'install_monarx' => 'setInstallMonarx',
        'enable_backups' => 'setEnableBackups',
        'ns1' => 'setNs1',
        'ns2' => 'setNs2',
        'public_key' => 'setPublicKey'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'template_id' => 'getTemplateId',
        'data_center_id' => 'getDataCenterId',
        'post_install_script_id' => 'getPostInstallScriptId',
        'password' => 'getPassword',
        'hostname' => 'getHostname',
        'install_monarx' => 'getInstallMonarx',
        'enable_backups' => 'getEnableBackups',
        'ns1' => 'getNs1',
        'ns2' => 'getNs2',
        'public_key' => 'getPublicKey'
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
        $this->setIfExists('template_id', $data, null);
        $this->setIfExists('data_center_id', $data, null);
        $this->setIfExists('post_install_script_id', $data, null);
        $this->setIfExists('password', $data, null);
        $this->setIfExists('hostname', $data, null);
        $this->setIfExists('install_monarx', $data, false);
        $this->setIfExists('enable_backups', $data, true);
        $this->setIfExists('ns1', $data, null);
        $this->setIfExists('ns2', $data, null);
        $this->setIfExists('public_key', $data, null);
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

        if ($this->container['template_id'] === null) {
            $invalidProperties[] = "'template_id' can't be null";
        }
        if ($this->container['data_center_id'] === null) {
            $invalidProperties[] = "'data_center_id' can't be null";
        }
        if ($this->container['password'] === null) {
            $invalidProperties[] = "'password' can't be null";
        }
        if ((mb_strlen($this->container['password']) < 8)) {
            $invalidProperties[] = "invalid value for 'password', the character length must be bigger than or equal to 8.";
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
     * @return int
     */
    public function getTemplateId(): int
    {
        return $this->container['template_id'];
    }

    /**
     * @param int $template_id Template ID
     */
    public function setTemplateId(int $template_id): static
    {
        if (is_null($template_id)) {
            throw new InvalidArgumentException('non-nullable template_id cannot be null');
        }
        $this->container['template_id'] = $template_id;

        return $this;
    }

    /**
     * @return int
     */
    public function getDataCenterId(): int
    {
        return $this->container['data_center_id'];
    }

    /**
     * @param int $data_center_id Data center ID
     */
    public function setDataCenterId(int $data_center_id): static
    {
        if (is_null($data_center_id)) {
            throw new InvalidArgumentException('non-nullable data_center_id cannot be null');
        }
        $this->container['data_center_id'] = $data_center_id;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getPostInstallScriptId(): ?int
    {
        return $this->container['post_install_script_id'];
    }

    /**
     * @param int|null $post_install_script_id Post-install script ID
     */
    public function setPostInstallScriptId(?int $post_install_script_id): static
    {
        if (is_null($post_install_script_id)) {
            throw new InvalidArgumentException('non-nullable post_install_script_id cannot be null');
        }
        $this->container['post_install_script_id'] = $post_install_script_id;

        return $this;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->container['password'];
    }

    /**
     * @param string $password password
     */
    public function setPassword(string $password): static
    {
        if (is_null($password)) {
            throw new InvalidArgumentException('non-nullable password cannot be null');
        }

        if ((mb_strlen($password) < 8)) {
            throw new InvalidArgumentException('invalid length for $password when calling VPSV1VirtualMachineSetupRequest., must be bigger than or equal to 8.');
        }

        $this->container['password'] = $password;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getHostname(): ?string
    {
        return $this->container['hostname'];
    }

    /**
     * @param string|null $hostname Override default hostname of the virtual machine
     */
    public function setHostname(?string $hostname): static
    {
        if (is_null($hostname)) {
            throw new InvalidArgumentException('non-nullable hostname cannot be null');
        }
        $this->container['hostname'] = $hostname;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getInstallMonarx(): ?bool
    {
        return $this->container['install_monarx'];
    }

    /**
     * @param bool|null $install_monarx Install Monarx malware scanner (if supported)
     */
    public function setInstallMonarx(?bool $install_monarx): static
    {
        if (is_null($install_monarx)) {
            throw new InvalidArgumentException('non-nullable install_monarx cannot be null');
        }
        $this->container['install_monarx'] = $install_monarx;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getEnableBackups(): ?bool
    {
        return $this->container['enable_backups'];
    }

    /**
     * @param bool|null $enable_backups Enable weekly backup schedule
     */
    public function setEnableBackups(?bool $enable_backups): static
    {
        if (is_null($enable_backups)) {
            throw new InvalidArgumentException('non-nullable enable_backups cannot be null');
        }
        $this->container['enable_backups'] = $enable_backups;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getNs1(): ?string
    {
        return $this->container['ns1'];
    }

    /**
     * @param string|null $ns1 ns1
     */
    public function setNs1(?string $ns1): static
    {
        if (is_null($ns1)) {
            throw new InvalidArgumentException('non-nullable ns1 cannot be null');
        }
        $this->container['ns1'] = $ns1;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getNs2(): ?string
    {
        return $this->container['ns2'];
    }

    /**
     * @param string|null $ns2 ns2
     */
    public function setNs2(?string $ns2): static
    {
        if (is_null($ns2)) {
            throw new InvalidArgumentException('non-nullable ns2 cannot be null');
        }
        $this->container['ns2'] = $ns2;

        return $this;
    }

    /**
     * @return \Hostinger\Model\VPSV1VirtualMachineSetupRequestPublicKey|null
     */
    public function getPublicKey(): ?\Hostinger\Model\VPSV1VirtualMachineSetupRequestPublicKey
    {
        return $this->container['public_key'];
    }

    /**
     * @param \Hostinger\Model\VPSV1VirtualMachineSetupRequestPublicKey|null $public_key public_key
     */
    public function setPublicKey(?\Hostinger\Model\VPSV1VirtualMachineSetupRequestPublicKey $public_key): static
    {
        if (is_null($public_key)) {
            throw new InvalidArgumentException('non-nullable public_key cannot be null');
        }
        $this->container['public_key'] = $public_key;

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


