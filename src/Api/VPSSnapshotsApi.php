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

namespace Hostinger\Api;

use InvalidArgumentException;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Hostinger\ApiException;
use Hostinger\Configuration;
use Hostinger\HeaderSelector;
use Hostinger\ObjectSerializer;

class VPSSnapshotsApi
{
    protected ClientInterface $client;

    protected Configuration $config;

    protected HeaderSelector $headerSelector;

    public function __construct(
        ?ClientInterface $client = null,
        ?Configuration $config = null,
        ?HeaderSelector $selector = null,
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: Configuration::getDefaultConfiguration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    public function getConfig(): Configuration
    {
        return $this->config;
    }

    /**
     * Operation createSnapshotV1
     *
     * Create snapshot
     *
     * @return \Hostinger\Model\VPSV1ActionActionResource|\Hostinger\Model\CommonSchemaUnauthorizedResponseSchema|\Hostinger\Model\CommonSchemaErrorResponseSchema
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @throws GuzzleException
     */
    public function createSnapshotV1(int $virtualMachineId, ): \Hostinger\Model\VPSV1ActionActionResource|\Hostinger\Model\CommonSchemaUnauthorizedResponseSchema|\Hostinger\Model\CommonSchemaErrorResponseSchema
    {
        $request = $this->createSnapshotV1Request($virtualMachineId, );

        try {
            $response = $this->client->send($request, $this->createHttpClientOption());
        } catch (RequestException $e) {
            if ($this->config->shouldThrowException()) {
                throw ApiException::fromRequestException($e);
            } else {
                $response = $e->getResponse();
            }
        } catch (ConnectException $e) {
            throw ApiException::fromConnectException($e);
        }

        $statusCode = $response->getStatusCode();
        $returnType = null;
        $content = \GuzzleHttp\Utils::jsonDecode((string) $response->getBody(), false, 512, JSON_THROW_ON_ERROR);

        switch ($statusCode) {
            case 200:
                $returnType = '\Hostinger\Model\VPSV1ActionActionResource';
                break;
            case 401:
                $returnType = '\Hostinger\Model\CommonSchemaUnauthorizedResponseSchema';
                break;
            case 500:
                $returnType = '\Hostinger\Model\CommonSchemaErrorResponseSchema';
                break;
        }

        return ObjectSerializer::deserialize($content, $returnType);
    }

    /**
     * Create request for operation 'createSnapshotV1'
     *
     * @throws InvalidArgumentException
     */
    protected function createSnapshotV1Request(int $virtualMachineId,): Request
    {
        $resourcePath = '/api/vps/v1/virtual-machines/{virtualMachineId}/snapshot';
        $resourcePath = str_replace(
            '{' . 'virtualMachineId' . '}',
            ObjectSerializer::toPathValue((string) $virtualMachineId),
            $resourcePath
        );

        $body = null;
        $query = [];

        return $this->buildRequest('POST', $resourcePath, $body, $query);
    }

    /**
     * Operation deleteSnapshotV1
     *
     * Delete snapshot
     *
     * @return \Hostinger\Model\VPSV1ActionActionResource|\Hostinger\Model\CommonSchemaUnauthorizedResponseSchema|\Hostinger\Model\CommonSchemaErrorResponseSchema
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @throws GuzzleException
     */
    public function deleteSnapshotV1(int $virtualMachineId, ): \Hostinger\Model\VPSV1ActionActionResource|\Hostinger\Model\CommonSchemaUnauthorizedResponseSchema|\Hostinger\Model\CommonSchemaErrorResponseSchema
    {
        $request = $this->deleteSnapshotV1Request($virtualMachineId, );

        try {
            $response = $this->client->send($request, $this->createHttpClientOption());
        } catch (RequestException $e) {
            if ($this->config->shouldThrowException()) {
                throw ApiException::fromRequestException($e);
            } else {
                $response = $e->getResponse();
            }
        } catch (ConnectException $e) {
            throw ApiException::fromConnectException($e);
        }

        $statusCode = $response->getStatusCode();
        $returnType = null;
        $content = \GuzzleHttp\Utils::jsonDecode((string) $response->getBody(), false, 512, JSON_THROW_ON_ERROR);

        switch ($statusCode) {
            case 200:
                $returnType = '\Hostinger\Model\VPSV1ActionActionResource';
                break;
            case 401:
                $returnType = '\Hostinger\Model\CommonSchemaUnauthorizedResponseSchema';
                break;
            case 500:
                $returnType = '\Hostinger\Model\CommonSchemaErrorResponseSchema';
                break;
        }

        return ObjectSerializer::deserialize($content, $returnType);
    }

    /**
     * Create request for operation 'deleteSnapshotV1'
     *
     * @throws InvalidArgumentException
     */
    protected function deleteSnapshotV1Request(int $virtualMachineId,): Request
    {
        $resourcePath = '/api/vps/v1/virtual-machines/{virtualMachineId}/snapshot';
        $resourcePath = str_replace(
            '{' . 'virtualMachineId' . '}',
            ObjectSerializer::toPathValue((string) $virtualMachineId),
            $resourcePath
        );

        $body = null;
        $query = [];

        return $this->buildRequest('DELETE', $resourcePath, $body, $query);
    }

    /**
     * Operation getSnapshotV1
     *
     * Get snapshot
     *
     * @return \Hostinger\Model\VPSV1SnapshotSnapshotResource|\Hostinger\Model\CommonSchemaUnauthorizedResponseSchema|\Hostinger\Model\CommonSchemaErrorResponseSchema
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @throws GuzzleException
     */
    public function getSnapshotV1(int $virtualMachineId, ): \Hostinger\Model\VPSV1SnapshotSnapshotResource|\Hostinger\Model\CommonSchemaUnauthorizedResponseSchema|\Hostinger\Model\CommonSchemaErrorResponseSchema
    {
        $request = $this->getSnapshotV1Request($virtualMachineId, );

        try {
            $response = $this->client->send($request, $this->createHttpClientOption());
        } catch (RequestException $e) {
            if ($this->config->shouldThrowException()) {
                throw ApiException::fromRequestException($e);
            } else {
                $response = $e->getResponse();
            }
        } catch (ConnectException $e) {
            throw ApiException::fromConnectException($e);
        }

        $statusCode = $response->getStatusCode();
        $returnType = null;
        $content = \GuzzleHttp\Utils::jsonDecode((string) $response->getBody(), false, 512, JSON_THROW_ON_ERROR);

        switch ($statusCode) {
            case 200:
                $returnType = '\Hostinger\Model\VPSV1SnapshotSnapshotResource';
                break;
            case 401:
                $returnType = '\Hostinger\Model\CommonSchemaUnauthorizedResponseSchema';
                break;
            case 500:
                $returnType = '\Hostinger\Model\CommonSchemaErrorResponseSchema';
                break;
        }

        return ObjectSerializer::deserialize($content, $returnType);
    }

    /**
     * Create request for operation 'getSnapshotV1'
     *
     * @throws InvalidArgumentException
     */
    protected function getSnapshotV1Request(int $virtualMachineId,): Request
    {
        $resourcePath = '/api/vps/v1/virtual-machines/{virtualMachineId}/snapshot';
        $resourcePath = str_replace(
            '{' . 'virtualMachineId' . '}',
            ObjectSerializer::toPathValue((string) $virtualMachineId),
            $resourcePath
        );

        $body = null;
        $query = [];

        return $this->buildRequest('GET', $resourcePath, $body, $query);
    }

    /**
     * Operation restoreSnapshotV1
     *
     * Restore snapshot
     *
     * @return \Hostinger\Model\VPSV1ActionActionResource|\Hostinger\Model\CommonSchemaUnauthorizedResponseSchema|\Hostinger\Model\CommonSchemaErrorResponseSchema
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @throws GuzzleException
     */
    public function restoreSnapshotV1(int $virtualMachineId, ): \Hostinger\Model\VPSV1ActionActionResource|\Hostinger\Model\CommonSchemaUnauthorizedResponseSchema|\Hostinger\Model\CommonSchemaErrorResponseSchema
    {
        $request = $this->restoreSnapshotV1Request($virtualMachineId, );

        try {
            $response = $this->client->send($request, $this->createHttpClientOption());
        } catch (RequestException $e) {
            if ($this->config->shouldThrowException()) {
                throw ApiException::fromRequestException($e);
            } else {
                $response = $e->getResponse();
            }
        } catch (ConnectException $e) {
            throw ApiException::fromConnectException($e);
        }

        $statusCode = $response->getStatusCode();
        $returnType = null;
        $content = \GuzzleHttp\Utils::jsonDecode((string) $response->getBody(), false, 512, JSON_THROW_ON_ERROR);

        switch ($statusCode) {
            case 200:
                $returnType = '\Hostinger\Model\VPSV1ActionActionResource';
                break;
            case 401:
                $returnType = '\Hostinger\Model\CommonSchemaUnauthorizedResponseSchema';
                break;
            case 500:
                $returnType = '\Hostinger\Model\CommonSchemaErrorResponseSchema';
                break;
        }

        return ObjectSerializer::deserialize($content, $returnType);
    }

    /**
     * Create request for operation 'restoreSnapshotV1'
     *
     * @throws InvalidArgumentException
     */
    protected function restoreSnapshotV1Request(int $virtualMachineId,): Request
    {
        $resourcePath = '/api/vps/v1/virtual-machines/{virtualMachineId}/snapshot/restore';
        $resourcePath = str_replace(
            '{' . 'virtualMachineId' . '}',
            ObjectSerializer::toPathValue((string) $virtualMachineId),
            $resourcePath
        );

        $body = null;
        $query = [];

        return $this->buildRequest('POST', $resourcePath, $body, $query);
    }

    /**
     * @return array<string, mixed>
     */
    protected function createHttpClientOption(): array
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }

    /**
     * @param array<string, string> $query
     */
    protected function buildRequest(
        string $httpMethod,
        string $resourcePath,
        ?string $body = null,
        array $query = [],
        string $contentType = 'application/json',
    ): Request {
        $headers = $this->headerSelector->selectHeaders(
            accept: ['application/json'],
            contentType: $contentType,
            isMultipart: false
        );

        // this endpoint requires Bearer authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $query = ObjectSerializer::buildQuery($query);

        return new Request(
            $httpMethod,
            $this->config->getHost() . $resourcePath . ($query ? "?$query" : ''),
            $headers,
            $body
        );
    }
}
