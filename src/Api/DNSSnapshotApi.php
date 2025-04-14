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

class DNSSnapshotApi
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
     * Operation getSnapshotListV1
     *
     * Get snapshot list
     *
     * @return \Hostinger\Model\DNSV1SnapshotSnapshotResource[]|\Hostinger\Model\CommonSchemaUnauthorizedResponseSchema|\Hostinger\Model\CommonSchemaErrorResponseSchema
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @throws GuzzleException
     */
    public function getSnapshotListV1(string $domain, ): array|\Hostinger\Model\CommonSchemaUnauthorizedResponseSchema|\Hostinger\Model\CommonSchemaErrorResponseSchema
    {
        $request = $this->getSnapshotListV1Request($domain, );

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

        switch ($statusCode) {
            case 200:
                $returnType = '\Hostinger\Model\DNSV1SnapshotSnapshotResource[]';
                break;
            case 401:
                $returnType = '\Hostinger\Model\CommonSchemaUnauthorizedResponseSchema';
                break;
            case 500:
                $returnType = '\Hostinger\Model\CommonSchemaErrorResponseSchema';
                break;
        }

        return ObjectSerializer::deserialize($response->getBody()->getContents(), $returnType);
    }

    /**
     * Create request for operation 'getSnapshotListV1'
     *
     * @throws InvalidArgumentException
     */
    protected function getSnapshotListV1Request(string $domain,): Request
    {
        $resourcePath = '/api/dns/v1/snapshots/{domain}';
        $resourcePath = str_replace(
            '{' . 'domain' . '}',
            ObjectSerializer::toPathValue((string) $domain),
            $resourcePath
        );

        $body = null;
        $query = [];

        return $this->buildRequest('GET', $resourcePath, $body, $query);
    }

    /**
     * Operation getSnapshotV1
     *
     * Get snapshot
     *
     * @return \Hostinger\Model\DNSV1SnapshotSnapshotWithContentResource|\Hostinger\Model\CommonSchemaUnauthorizedResponseSchema|\Hostinger\Model\CommonSchemaErrorResponseSchema
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @throws GuzzleException
     */
    public function getSnapshotV1(string $domain, int $snapshotId, ): \Hostinger\Model\DNSV1SnapshotSnapshotWithContentResource|\Hostinger\Model\CommonSchemaUnauthorizedResponseSchema|\Hostinger\Model\CommonSchemaErrorResponseSchema
    {
        $request = $this->getSnapshotV1Request($domain, $snapshotId, );

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

        switch ($statusCode) {
            case 200:
                $returnType = '\Hostinger\Model\DNSV1SnapshotSnapshotWithContentResource';
                break;
            case 401:
                $returnType = '\Hostinger\Model\CommonSchemaUnauthorizedResponseSchema';
                break;
            case 500:
                $returnType = '\Hostinger\Model\CommonSchemaErrorResponseSchema';
                break;
        }

        return ObjectSerializer::deserialize($response->getBody()->getContents(), $returnType);
    }

    /**
     * Create request for operation 'getSnapshotV1'
     *
     * @throws InvalidArgumentException
     */
    protected function getSnapshotV1Request(string $domain,int $snapshotId,): Request
    {
        $resourcePath = '/api/dns/v1/snapshots/{domain}/{snapshotId}';
        $resourcePath = str_replace(
            '{' . 'domain' . '}',
            ObjectSerializer::toPathValue((string) $domain),
            $resourcePath
        );
        $resourcePath = str_replace(
            '{' . 'snapshotId' . '}',
            ObjectSerializer::toPathValue((string) $snapshotId),
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
     * @return \Hostinger\Model\CommonSuccessEmptyResource|\Hostinger\Model\CommonSchemaUnauthorizedResponseSchema|\Hostinger\Model\CommonSchemaErrorResponseSchema
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @throws GuzzleException
     */
    public function restoreSnapshotV1(string $domain, int $snapshotId, ): \Hostinger\Model\CommonSuccessEmptyResource|\Hostinger\Model\CommonSchemaUnauthorizedResponseSchema|\Hostinger\Model\CommonSchemaErrorResponseSchema
    {
        $request = $this->restoreSnapshotV1Request($domain, $snapshotId, );

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

        switch ($statusCode) {
            case 200:
                $returnType = '\Hostinger\Model\CommonSuccessEmptyResource';
                break;
            case 401:
                $returnType = '\Hostinger\Model\CommonSchemaUnauthorizedResponseSchema';
                break;
            case 500:
                $returnType = '\Hostinger\Model\CommonSchemaErrorResponseSchema';
                break;
        }

        return ObjectSerializer::deserialize($response->getBody()->getContents(), $returnType);
    }

    /**
     * Create request for operation 'restoreSnapshotV1'
     *
     * @throws InvalidArgumentException
     */
    protected function restoreSnapshotV1Request(string $domain,int $snapshotId,): Request
    {
        $resourcePath = '/api/dns/v1/snapshots/{domain}/{snapshotId}';
        $resourcePath = str_replace(
            '{' . 'domain' . '}',
            ObjectSerializer::toPathValue((string) $domain),
            $resourcePath
        );
        $resourcePath = str_replace(
            '{' . 'snapshotId' . '}',
            ObjectSerializer::toPathValue((string) $snapshotId),
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
        $headers['User-Agent'] = $this->config->getUserAgent();

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
