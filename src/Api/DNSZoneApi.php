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

class DNSZoneApi
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
     * Operation getRecordsV1
     *
     * Get records
     *
     * @return \Hostinger\Model\DNSV1ZoneNameResource[]|\Hostinger\Model\CommonSchemaUnauthorizedResponseSchema|\Hostinger\Model\CommonSchemaErrorResponseSchema
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @throws GuzzleException
     */
    public function getRecordsV1(string $domain, ): array|\Hostinger\Model\CommonSchemaUnauthorizedResponseSchema|\Hostinger\Model\CommonSchemaErrorResponseSchema
    {
        $request = $this->getRecordsV1Request($domain, );

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
                $returnType = '\Hostinger\Model\DNSV1ZoneNameResource[]';
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
     * Create request for operation 'getRecordsV1'
     *
     * @throws InvalidArgumentException
     */
    protected function getRecordsV1Request(string $domain,): Request
    {
        $resourcePath = '/api/dns/v1/zones/{domain}';
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
     * Operation resetZoneRecordsV1
     *
     * Reset zone records
     *
     * @return \Hostinger\Model\CommonSuccessEmptyResource|\Hostinger\Model\CommonSchemaUnprocessableContentResponseSchema|\Hostinger\Model\CommonSchemaUnauthorizedResponseSchema|\Hostinger\Model\CommonSchemaErrorResponseSchema
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @throws GuzzleException
     */
    public function resetZoneRecordsV1(string $domain, \Hostinger\Model\DNSV1ZoneResetRequest $dNSV1ZoneResetRequest, ): \Hostinger\Model\CommonSuccessEmptyResource|\Hostinger\Model\CommonSchemaUnprocessableContentResponseSchema|\Hostinger\Model\CommonSchemaUnauthorizedResponseSchema|\Hostinger\Model\CommonSchemaErrorResponseSchema
    {
        $request = $this->resetZoneRecordsV1Request($domain, $dNSV1ZoneResetRequest, );

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
            case 422:
                $returnType = '\Hostinger\Model\CommonSchemaUnprocessableContentResponseSchema';
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
     * Create request for operation 'resetZoneRecordsV1'
     *
     * @throws InvalidArgumentException
     */
    protected function resetZoneRecordsV1Request(string $domain,\Hostinger\Model\DNSV1ZoneResetRequest $dNSV1ZoneResetRequest,): Request
    {
        $resourcePath = '/api/dns/v1/zones/{domain}/reset';
        $resourcePath = str_replace(
            '{' . 'domain' . '}',
            ObjectSerializer::toPathValue((string) $domain),
            $resourcePath
        );

        $body = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($dNSV1ZoneResetRequest));
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
