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
class VPSV1VirtualMachineVirtualMachineResource implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    protected static string $openAPIModelName = 'VPS.V1.VirtualMachine.VirtualMachineResource';

    /**
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'id' => 'int',
        'firewallGroupId' => 'int',
        'subscriptionId' => 'string',
        'plan' => 'string',
        'hostname' => 'string',
        'state' => 'string',
        'actionsLock' => 'string',
        'cpus' => 'int',
        'memory' => 'int',
        'disk' => 'int',
        'bandwidth' => 'int',
        'ns1' => 'string',
        'ns2' => 'string',
        'ipv4' => '\Hostinger\Model\VPSV1VirtualMachineVirtualMachineResourceIpv4',
        'ipv6' => '\Hostinger\Model\VPSV1VirtualMachineVirtualMachineResourceIpv6',
        'template' => '\Hostinger\Model\VPSV1VirtualMachineVirtualMachineResourceTemplate',
        'createdAt' => '\DateTime'
    ];

    /**
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'id' => null,
        'firewallGroupId' => null,
        'subscriptionId' => null,
        'plan' => null,
        'hostname' => null,
        'state' => null,
        'actionsLock' => null,
        'cpus' => null,
        'memory' => null,
        'disk' => null,
        'bandwidth' => null,
        'ns1' => null,
        'ns2' => null,
        'ipv4' => null,
        'ipv6' => null,
        'template' => null,
        'createdAt' => 'date-time'
    ];

    /**
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'id' => false,
        'firewallGroupId' => true,
        'subscriptionId' => true,
        'plan' => true,
        'hostname' => false,
        'state' => false,
        'actionsLock' => false,
        'cpus' => false,
        'memory' => false,
        'disk' => false,
        'bandwidth' => false,
        'ns1' => true,
        'ns2' => true,
        'ipv4' => true,
        'ipv6' => true,
        'template' => true,
        'createdAt' => false
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
        'firewallGroupId' => 'firewall_group_id',
        'subscriptionId' => 'subscription_id',
        'plan' => 'plan',
        'hostname' => 'hostname',
        'state' => 'state',
        'actionsLock' => 'actions_lock',
        'cpus' => 'cpus',
        'memory' => 'memory',
        'disk' => 'disk',
        'bandwidth' => 'bandwidth',
        'ns1' => 'ns1',
        'ns2' => 'ns2',
        'ipv4' => 'ipv4',
        'ipv6' => 'ipv6',
        'template' => 'template',
        'createdAt' => 'created_at'
    ];

    /**
     * @var array<string, string>
     */
    protected static array $setters = [
        'id' => 'setId',
        'firewallGroupId' => 'setFirewallGroupId',
        'subscriptionId' => 'setSubscriptionId',
        'plan' => 'setPlan',
        'hostname' => 'setHostname',
        'state' => 'setState',
        'actionsLock' => 'setActionsLock',
        'cpus' => 'setCpus',
        'memory' => 'setMemory',
        'disk' => 'setDisk',
        'bandwidth' => 'setBandwidth',
        'ns1' => 'setNs1',
        'ns2' => 'setNs2',
        'ipv4' => 'setIpv4',
        'ipv6' => 'setIpv6',
        'template' => 'setTemplate',
        'createdAt' => 'setCreatedAt'
    ];

    /**
     * @var array<string, string>
     */
    protected static array $getters = [
        'id' => 'getId',
        'firewallGroupId' => 'getFirewallGroupId',
        'subscriptionId' => 'getSubscriptionId',
        'plan' => 'getPlan',
        'hostname' => 'getHostname',
        'state' => 'getState',
        'actionsLock' => 'getActionsLock',
        'cpus' => 'getCpus',
        'memory' => 'getMemory',
        'disk' => 'getDisk',
        'bandwidth' => 'getBandwidth',
        'ns1' => 'getNs1',
        'ns2' => 'getNs2',
        'ipv4' => 'getIpv4',
        'ipv6' => 'getIpv6',
        'template' => 'getTemplate',
        'createdAt' => 'getCreatedAt'
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

    public const STATE_RUNNING = 'running';
    public const STATE_STOPPED = 'stopped';
    public const STATE_CREATING = 'creating';
    public const STATE_INITIAL = 'initial';
    public const ACTIONS_LOCK_UNLOCKED = 'unlocked';
    public const ACTIONS_LOCK_LOCKED = 'locked';

    /**
     * @return array<string>
     */
    public function getStateAllowableValues(): array
    {
        return [
            self::STATE_RUNNING,
            self::STATE_STOPPED,
            self::STATE_CREATING,
            self::STATE_INITIAL,
        ];
    }

    /**
     * @return array<string>
     */
    public function getActionsLockAllowableValues(): array
    {
        return [
            self::ACTIONS_LOCK_UNLOCKED,
            self::ACTIONS_LOCK_LOCKED,
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
        $this->setIfExists('firewallGroupId', $data, null);
        $this->setIfExists('subscriptionId', $data, null);
        $this->setIfExists('plan', $data, null);
        $this->setIfExists('hostname', $data, null);
        $this->setIfExists('state', $data, null);
        $this->setIfExists('actionsLock', $data, null);
        $this->setIfExists('cpus', $data, null);
        $this->setIfExists('memory', $data, null);
        $this->setIfExists('disk', $data, null);
        $this->setIfExists('bandwidth', $data, null);
        $this->setIfExists('ns1', $data, null);
        $this->setIfExists('ns2', $data, null);
        $this->setIfExists('ipv4', $data, null);
        $this->setIfExists('ipv6', $data, null);
        $this->setIfExists('template', $data, null);
        $this->setIfExists('createdAt', $data, null);
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

        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'state', must be one of '%s'",
                $this->container['state'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getActionsLockAllowableValues();
        if (!is_null($this->container['actionsLock']) && !in_array($this->container['actionsLock'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'actionsLock', must be one of '%s'",
                $this->container['actionsLock'],
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
     * @param int|null $id Virtual machine ID
     */
    public function setId(?int $id): static
    {
        $this->container['id'] = $id;

        return $this;
    }
    /**
     * @return int|null
     */
    public function getFirewallGroupId(): ?int
    {
        return $this->container['firewallGroupId'];
    }

    /**
     * @param int|null $firewallGroupId Active firewall ID, `null` if disabled
     */
    public function setFirewallGroupId(?int $firewallGroupId): static
    {
        if (is_null($firewallGroupId)) {
            $this->openAPINullablesSetToNull[] = 'firewallGroupId';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('firewallGroupId', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['firewallGroupId'] = $firewallGroupId;

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
        if (is_null($subscriptionId)) {
            $this->openAPINullablesSetToNull[] = 'subscriptionId';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('subscriptionId', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['subscriptionId'] = $subscriptionId;

        return $this;
    }
    /**
     * @return string|null
     */
    public function getPlan(): ?string
    {
        return $this->container['plan'];
    }

    /**
     * @param string|null $plan VPS plan name
     */
    public function setPlan(?string $plan): static
    {
        if (is_null($plan)) {
            $this->openAPINullablesSetToNull[] = 'plan';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('plan', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['plan'] = $plan;

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
     * @param string|null $hostname hostname
     */
    public function setHostname(?string $hostname): static
    {
        $this->container['hostname'] = $hostname;

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
        $allowedValues = $this->getStateAllowableValues();
        if (!in_array($state, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'state', must be one of '%s'",
                    $state,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['state'] = $state;

        return $this;
    }
    /**
     * @return string|null
     */
    public function getActionsLock(): ?string
    {
        return $this->container['actionsLock'];
    }

    /**
     * @param string|null $actionsLock actionsLock
     */
    public function setActionsLock(?string $actionsLock): static
    {
        $allowedValues = $this->getActionsLockAllowableValues();
        if (!in_array($actionsLock, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'actionsLock', must be one of '%s'",
                    $actionsLock,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['actionsLock'] = $actionsLock;

        return $this;
    }
    /**
     * @return int|null
     */
    public function getCpus(): ?int
    {
        return $this->container['cpus'];
    }

    /**
     * @param int|null $cpus CPUs count assigned to virtual machine
     */
    public function setCpus(?int $cpus): static
    {
        $this->container['cpus'] = $cpus;

        return $this;
    }
    /**
     * @return int|null
     */
    public function getMemory(): ?int
    {
        return $this->container['memory'];
    }

    /**
     * @param int|null $memory Memory available to virtual machine (in megabytes)
     */
    public function setMemory(?int $memory): static
    {
        $this->container['memory'] = $memory;

        return $this;
    }
    /**
     * @return int|null
     */
    public function getDisk(): ?int
    {
        return $this->container['disk'];
    }

    /**
     * @param int|null $disk Virtual machine disk size (in megabytes)
     */
    public function setDisk(?int $disk): static
    {
        $this->container['disk'] = $disk;

        return $this;
    }
    /**
     * @return int|null
     */
    public function getBandwidth(): ?int
    {
        return $this->container['bandwidth'];
    }

    /**
     * @param int|null $bandwidth Monthly internet traffic available to virtual machine (in megabytes)
     */
    public function setBandwidth(?int $bandwidth): static
    {
        $this->container['bandwidth'] = $bandwidth;

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
     * @param string|null $ns1 Primary DNS resolver
     */
    public function setNs1(?string $ns1): static
    {
        if (is_null($ns1)) {
            $this->openAPINullablesSetToNull[] = 'ns1';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ns1', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
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
     * @param string|null $ns2 Secondary DNS resolver
     */
    public function setNs2(?string $ns2): static
    {
        if (is_null($ns2)) {
            $this->openAPINullablesSetToNull[] = 'ns2';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ns2', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ns2'] = $ns2;

        return $this;
    }
    /**
     * @return \Hostinger\Model\VPSV1VirtualMachineVirtualMachineResourceIpv4|null
     */
    public function getIpv4(): ?\Hostinger\Model\VPSV1VirtualMachineVirtualMachineResourceIpv4
    {
        return $this->container['ipv4'];
    }

    /**
     * @param \Hostinger\Model\VPSV1VirtualMachineVirtualMachineResourceIpv4|null $ipv4 ipv4
     */
    public function setIpv4(?\Hostinger\Model\VPSV1VirtualMachineVirtualMachineResourceIpv4 $ipv4): static
    {
        if (is_null($ipv4)) {
            $this->openAPINullablesSetToNull[] = 'ipv4';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ipv4', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ipv4'] = $ipv4;

        return $this;
    }
    /**
     * @return \Hostinger\Model\VPSV1VirtualMachineVirtualMachineResourceIpv6|null
     */
    public function getIpv6(): ?\Hostinger\Model\VPSV1VirtualMachineVirtualMachineResourceIpv6
    {
        return $this->container['ipv6'];
    }

    /**
     * @param \Hostinger\Model\VPSV1VirtualMachineVirtualMachineResourceIpv6|null $ipv6 ipv6
     */
    public function setIpv6(?\Hostinger\Model\VPSV1VirtualMachineVirtualMachineResourceIpv6 $ipv6): static
    {
        if (is_null($ipv6)) {
            $this->openAPINullablesSetToNull[] = 'ipv6';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ipv6', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ipv6'] = $ipv6;

        return $this;
    }
    /**
     * @return \Hostinger\Model\VPSV1VirtualMachineVirtualMachineResourceTemplate|null
     */
    public function getTemplate(): ?\Hostinger\Model\VPSV1VirtualMachineVirtualMachineResourceTemplate
    {
        return $this->container['template'];
    }

    /**
     * @param \Hostinger\Model\VPSV1VirtualMachineVirtualMachineResourceTemplate|null $template template
     */
    public function setTemplate(?\Hostinger\Model\VPSV1VirtualMachineVirtualMachineResourceTemplate $template): static
    {
        if (is_null($template)) {
            $this->openAPINullablesSetToNull[] = 'template';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('template', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['template'] = $template;

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


