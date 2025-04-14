<?php

/**
 * Hostinger API PHP SDK
 *
 * API Version: 0.0.20
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

class VPSPostInstallScriptsApi
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
     * Operation createPostInstallScriptV1
     *
     * Create post-install script
     *
     * @return \Hostinger\Model\VPSV1PostInstallScriptPostInstallScriptResource|\Hostinger\Model\CommonSchemaUnprocessableContentResponseSchema|\Hostinger\Model\CommonSchemaUnauthorizedResponseSchema|\Hostinger\Model\CommonSchemaErrorResponseSchema
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @throws GuzzleException
     */
    public function createPostInstallScriptV1(\Hostinger\Model\VPSV1PostInstallScriptStoreRequest $vPSV1PostInstallScriptStoreRequest, ): \Hostinger\Model\VPSV1PostInstallScriptPostInstallScriptResource|\Hostinger\Model\CommonSchemaUnprocessableContentResponseSchema|\Hostinger\Model\CommonSchemaUnauthorizedResponseSchema|\Hostinger\Model\CommonSchemaErrorResponseSchema
    {
        $request = $this->createPostInstallScriptV1Request($vPSV1PostInstallScriptStoreRequest, );

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
                $returnType = '\Hostinger\Model\VPSV1PostInstallScriptPostInstallScriptResource';
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
     * Create request for operation 'createPostInstallScriptV1'
     *
     * @throws InvalidArgumentException
     */
    protected function createPostInstallScriptV1Request(\Hostinger\Model\VPSV1PostInstallScriptStoreRequest $vPSV1PostInstallScriptStoreRequest,): Request
    {
        $resourcePath = '/api/vps/v1/post-install-scripts';

        $body = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($vPSV1PostInstallScriptStoreRequest));
        $query = [];

        return $this->buildRequest('POST', $resourcePath, $body, $query);
    }

    /**
     * Operation deleteAPostInstallScriptV1
     *
     * Delete a post-install script
     *
     * @return \Hostinger\Model\CommonSuccessEmptyResource|\Hostinger\Model\CommonSchemaUnauthorizedResponseSchema|\Hostinger\Model\CommonSchemaErrorResponseSchema
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @throws GuzzleException
     */
    public function deleteAPostInstallScriptV1(int $postInstallScriptId, ): \Hostinger\Model\CommonSuccessEmptyResource|\Hostinger\Model\CommonSchemaUnauthorizedResponseSchema|\Hostinger\Model\CommonSchemaErrorResponseSchema
    {
        $request = $this->deleteAPostInstallScriptV1Request($postInstallScriptId, );

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
     * Create request for operation 'deleteAPostInstallScriptV1'
     *
     * @throws InvalidArgumentException
     */
    protected function deleteAPostInstallScriptV1Request(int $postInstallScriptId,): Request
    {
        $resourcePath = '/api/vps/v1/post-install-scripts/{postInstallScriptId}';
        $resourcePath = str_replace(
            '{' . 'postInstallScriptId' . '}',
            ObjectSerializer::toPathValue((string) $postInstallScriptId),
            $resourcePath
        );

        $body = null;
        $query = [];

        return $this->buildRequest('DELETE', $resourcePath, $body, $query);
    }

    /**
     * Operation getPostInstallScriptListV1
     *
     * Get post-install script list
     *
     * @return \Hostinger\Model\VPSGetPostInstallScriptListV1200Response|\Hostinger\Model\CommonSchemaUnauthorizedResponseSchema|\Hostinger\Model\CommonSchemaErrorResponseSchema
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @throws GuzzleException
     */
    public function getPostInstallScriptListV1(?int $page = null, ): \Hostinger\Model\VPSGetPostInstallScriptListV1200Response|\Hostinger\Model\CommonSchemaUnauthorizedResponseSchema|\Hostinger\Model\CommonSchemaErrorResponseSchema
    {
        $request = $this->getPostInstallScriptListV1Request($page, );

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
                $returnType = '\Hostinger\Model\VPSGetPostInstallScriptListV1200Response';
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
     * Create request for operation 'getPostInstallScriptListV1'
     *
     * @throws InvalidArgumentException
     */
    protected function getPostInstallScriptListV1Request(?int $page = null,): Request
    {
        $resourcePath = '/api/vps/v1/post-install-scripts';

        $body = null;
        $query = ObjectSerializer::toQueryValue(
            $page,
            'page', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        );

        return $this->buildRequest('GET', $resourcePath, $body, $query);
    }

    /**
     * Operation getPostInstallScriptV1
     *
     * Get post-install script
     *
     * @return \Hostinger\Model\VPSV1PostInstallScriptPostInstallScriptResource|\Hostinger\Model\CommonSchemaUnauthorizedResponseSchema|\Hostinger\Model\CommonSchemaErrorResponseSchema
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @throws GuzzleException
     */
    public function getPostInstallScriptV1(int $postInstallScriptId, ): \Hostinger\Model\VPSV1PostInstallScriptPostInstallScriptResource|\Hostinger\Model\CommonSchemaUnauthorizedResponseSchema|\Hostinger\Model\CommonSchemaErrorResponseSchema
    {
        $request = $this->getPostInstallScriptV1Request($postInstallScriptId, );

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
                $returnType = '\Hostinger\Model\VPSV1PostInstallScriptPostInstallScriptResource';
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
     * Create request for operation 'getPostInstallScriptV1'
     *
     * @throws InvalidArgumentException
     */
    protected function getPostInstallScriptV1Request(int $postInstallScriptId,): Request
    {
        $resourcePath = '/api/vps/v1/post-install-scripts/{postInstallScriptId}';
        $resourcePath = str_replace(
            '{' . 'postInstallScriptId' . '}',
            ObjectSerializer::toPathValue((string) $postInstallScriptId),
            $resourcePath
        );

        $body = null;
        $query = [];

        return $this->buildRequest('GET', $resourcePath, $body, $query);
    }

    /**
     * Operation updatePostInstallScriptV1
     *
     * Update post-install script
     *
     * @return \Hostinger\Model\VPSV1PostInstallScriptPostInstallScriptResource|\Hostinger\Model\CommonSchemaUnprocessableContentResponseSchema|\Hostinger\Model\CommonSchemaUnauthorizedResponseSchema|\Hostinger\Model\CommonSchemaErrorResponseSchema
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @throws GuzzleException
     */
    public function updatePostInstallScriptV1(int $postInstallScriptId, \Hostinger\Model\VPSV1PostInstallScriptStoreRequest $vPSV1PostInstallScriptStoreRequest, ): \Hostinger\Model\VPSV1PostInstallScriptPostInstallScriptResource|\Hostinger\Model\CommonSchemaUnprocessableContentResponseSchema|\Hostinger\Model\CommonSchemaUnauthorizedResponseSchema|\Hostinger\Model\CommonSchemaErrorResponseSchema
    {
        $request = $this->updatePostInstallScriptV1Request($postInstallScriptId, $vPSV1PostInstallScriptStoreRequest, );

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
                $returnType = '\Hostinger\Model\VPSV1PostInstallScriptPostInstallScriptResource';
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
     * Create request for operation 'updatePostInstallScriptV1'
     *
     * @throws InvalidArgumentException
     */
    protected function updatePostInstallScriptV1Request(int $postInstallScriptId,\Hostinger\Model\VPSV1PostInstallScriptStoreRequest $vPSV1PostInstallScriptStoreRequest,): Request
    {
        $resourcePath = '/api/vps/v1/post-install-scripts/{postInstallScriptId}';
        $resourcePath = str_replace(
            '{' . 'postInstallScriptId' . '}',
            ObjectSerializer::toPathValue((string) $postInstallScriptId),
            $resourcePath
        );

        $body = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($vPSV1PostInstallScriptStoreRequest));
        $query = [];

        return $this->buildRequest('PUT', $resourcePath, $body, $query);
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
