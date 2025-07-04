<?php

/**
 * Hostinger API PHP SDK
 *
 * API Version: 0.0.73
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

class BillingOrdersApi
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
     * Operation createNewServiceOrderV1
     *
     * Create new service order
     *
     * @return \Hostinger\Model\BillingV1OrderOrderResource|\Hostinger\Model\BillingCreateNewServiceOrderV1422Response|\Hostinger\Model\BillingGetCatalogItemListV1401Response|\Hostinger\Model\BillingGetCatalogItemListV1500Response
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @throws GuzzleException
     * @deprecated
     */
    public function createNewServiceOrderV1(\Hostinger\Model\BillingV1OrderStoreRequest $billingV1OrderStoreRequest, ): \Hostinger\Model\BillingV1OrderOrderResource|\Hostinger\Model\BillingCreateNewServiceOrderV1422Response|\Hostinger\Model\BillingGetCatalogItemListV1401Response|\Hostinger\Model\BillingGetCatalogItemListV1500Response
    {
        $request = $this->createNewServiceOrderV1Request($billingV1OrderStoreRequest, );

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
                $returnType = '\Hostinger\Model\BillingV1OrderOrderResource';
                break;
            case 422:
                $returnType = '\Hostinger\Model\BillingCreateNewServiceOrderV1422Response';
                break;
            case 401:
                $returnType = '\Hostinger\Model\BillingGetCatalogItemListV1401Response';
                break;
            case 500:
                $returnType = '\Hostinger\Model\BillingGetCatalogItemListV1500Response';
                break;
        }

        return ObjectSerializer::deserialize($response->getBody()->getContents(), $returnType);
    }

    /**
     * Create request for operation 'createNewServiceOrderV1'
     *
     * @throws InvalidArgumentException
     * @deprecated
     */
    protected function createNewServiceOrderV1Request(\Hostinger\Model\BillingV1OrderStoreRequest $billingV1OrderStoreRequest,): Request
    {
        $resourcePath = '/api/billing/v1/orders';

        $body = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($billingV1OrderStoreRequest));
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
