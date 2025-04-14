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
class VPSV1VirtualMachineSetupRequest implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    protected static string $openAPIModelName = 'VPS.V1.VirtualMachine.SetupRequest';

    /**
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'templateId' => 'int',
        'dataCenterId' => 'int',
        'postInstallScriptId' => 'int',
        'password' => 'string',
        'hostname' => 'string',
        'installMonarx' => 'bool',
        'enableBackups' => 'bool',
        'ns1' => 'string',
        'ns2' => 'string',
        'publicKey' => '\Hostinger\Model\VPSV1VirtualMachineSetupRequestPublicKey'
    ];

    /**
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'templateId' => null,
        'dataCenterId' => null,
        'postInstallScriptId' => null,
        'password' => 'password',
        'hostname' => null,
        'installMonarx' => null,
        'enableBackups' => null,
        'ns1' => null,
        'ns2' => null,
        'publicKey' => null
    ];

    /**
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'templateId' => false,
        'dataCenterId' => false,
        'postInstallScriptId' => false,
        'password' => false,
        'hostname' => false,
        'installMonarx' => false,
        'enableBackups' => false,
        'ns1' => false,
        'ns2' => false,
        'publicKey' => false
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
        'templateId' => 'template_id',
        'dataCenterId' => 'data_center_id',
        'postInstallScriptId' => 'post_install_script_id',
        'password' => 'password',
        'hostname' => 'hostname',
        'installMonarx' => 'install_monarx',
        'enableBackups' => 'enable_backups',
        'ns1' => 'ns1',
        'ns2' => 'ns2',
        'publicKey' => 'public_key'
    ];

    /**
     * @var array<string, string>
     */
    protected static array $setters = [
        'templateId' => 'setTemplateId',
        'dataCenterId' => 'setDataCenterId',
        'postInstallScriptId' => 'setPostInstallScriptId',
        'password' => 'setPassword',
        'hostname' => 'setHostname',
        'installMonarx' => 'setInstallMonarx',
        'enableBackups' => 'setEnableBackups',
        'ns1' => 'setNs1',
        'ns2' => 'setNs2',
        'publicKey' => 'setPublicKey'
    ];

    /**
     * @var array<string, string>
     */
    protected static array $getters = [
        'templateId' => 'getTemplateId',
        'dataCenterId' => 'getDataCenterId',
        'postInstallScriptId' => 'getPostInstallScriptId',
        'password' => 'getPassword',
        'hostname' => 'getHostname',
        'installMonarx' => 'getInstallMonarx',
        'enableBackups' => 'getEnableBackups',
        'ns1' => 'getNs1',
        'ns2' => 'getNs2',
        'publicKey' => 'getPublicKey'
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
        $this->setIfExists('templateId', $data, null);
        $this->setIfExists('dataCenterId', $data, null);
        $this->setIfExists('postInstallScriptId', $data, null);
        $this->setIfExists('password', $data, null);
        $this->setIfExists('hostname', $data, null);
        $this->setIfExists('installMonarx', $data, false);
        $this->setIfExists('enableBackups', $data, true);
        $this->setIfExists('ns1', $data, null);
        $this->setIfExists('ns2', $data, null);
        $this->setIfExists('publicKey', $data, null);
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

        if ($this->container['templateId'] === null) {
            $invalidProperties[] = "'templateId' can't be null";
        }
        if ($this->container['dataCenterId'] === null) {
            $invalidProperties[] = "'dataCenterId' can't be null";
        }
        if (!is_null($this->container['password']) && (mb_strlen($this->container['password']) < 8)) {
            $invalidProperties[] = "invalid value for 'password', the character length must be bigger than or equal to 8.";
        }

        return $invalidProperties;
    }

    public function valid(): bool
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
     * @return int
     */
    public function getTemplateId(): int
    {
        return $this->container['templateId'];
    }

    /**
     * @param int $templateId Template ID
     */
    public function setTemplateId(int $templateId): static
    {
        $this->container['templateId'] = $templateId;

        return $this;
    }
    /**
     * @return int
     */
    public function getDataCenterId(): int
    {
        return $this->container['dataCenterId'];
    }

    /**
     * @param int $dataCenterId Data center ID
     */
    public function setDataCenterId(int $dataCenterId): static
    {
        $this->container['dataCenterId'] = $dataCenterId;

        return $this;
    }
    /**
     * @return int|null
     */
    public function getPostInstallScriptId(): ?int
    {
        return $this->container['postInstallScriptId'];
    }

    /**
     * @param int|null $postInstallScriptId Post-install script ID
     */
    public function setPostInstallScriptId(?int $postInstallScriptId): static
    {
        $this->container['postInstallScriptId'] = $postInstallScriptId;

        return $this;
    }
    /**
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->container['password'];
    }

    /**
     * @param string|null $password Password for the virtual machine. If not provided, random password will be generated. Password will not be shown in the response.
     */
    public function setPassword(?string $password): static
    {

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
        $this->container['hostname'] = $hostname;

        return $this;
    }
    /**
     * @return bool|null
     */
    public function getInstallMonarx(): ?bool
    {
        return $this->container['installMonarx'];
    }

    /**
     * @param bool|null $installMonarx Install Monarx malware scanner (if supported)
     */
    public function setInstallMonarx(?bool $installMonarx): static
    {
        $this->container['installMonarx'] = $installMonarx;

        return $this;
    }
    /**
     * @return bool|null
     */
    public function getEnableBackups(): ?bool
    {
        return $this->container['enableBackups'];
    }

    /**
     * @param bool|null $enableBackups Enable weekly backup schedule
     */
    public function setEnableBackups(?bool $enableBackups): static
    {
        $this->container['enableBackups'] = $enableBackups;

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
        $this->container['ns2'] = $ns2;

        return $this;
    }
    /**
     * @return \Hostinger\Model\VPSV1VirtualMachineSetupRequestPublicKey|null
     */
    public function getPublicKey(): ?\Hostinger\Model\VPSV1VirtualMachineSetupRequestPublicKey
    {
        return $this->container['publicKey'];
    }

    /**
     * @param \Hostinger\Model\VPSV1VirtualMachineSetupRequestPublicKey|null $publicKey publicKey
     */
    public function setPublicKey(?\Hostinger\Model\VPSV1VirtualMachineSetupRequestPublicKey $publicKey): static
    {
        $this->container['publicKey'] = $publicKey;

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

