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

interface ModelInterface
{
    /**
     * The original name of the model.
     */
    public function getModelName(): string;

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array<string, string>
     */
    public static function openAPITypes(): array;

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array<string, string|null>
     */
    public static function openAPIFormats(): array;

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     *
     * @return array<string, string>
     */
    public static function attributeMap(): array;

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array<string, string>
     */
    public static function setters(): array;

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array<string, string>
     */
    public static function getters(): array;

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array<string>
     */
    public function listInvalidProperties(): array;

    /**
     * Validate all the properties in the model return true if all passed
     */
    public function valid(): bool;

    /**
     * Checks if a property is nullable
     */
    public static function isNullable(string $property): bool;

    /**
     * Checks if a nullable property is set to null.
     */
    public function isNullableSetToNull(string $property): bool;
}
