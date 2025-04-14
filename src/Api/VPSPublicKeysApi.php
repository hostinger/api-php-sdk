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

class VPSPublicKeysApi
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
     * Operation attachPublicKeyV1
     *
     * Attach public key
     *
     * @return \Hostinger\Model\VPSV1ActionActionResource|\Hostinger\Model\CommonSchemaUnprocessableContentResponseSchema|\Hostinger\Model\CommonSchemaUnauthorizedResponseSchema|\Hostinger\Model\CommonSchemaErrorResponseSchema
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @throws GuzzleException
     */
    public function attachPublicKeyV1(int $virtualMachineId, \Hostinger\Model\VPSV1PublicKeyAttachRequest $vPSV1PublicKeyAttachRequest, ): \Hostinger\Model\VPSV1ActionActionResource|\Hostinger\Model\CommonSchemaUnprocessableContentResponseSchema|\Hostinger\Model\CommonSchemaUnauthorizedResponseSchema|\Hostinger\Model\CommonSchemaErrorResponseSchema
    {
        $request = $this->attachPublicKeyV1Request($virtualMachineId, $vPSV1PublicKeyAttachRequest, );

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
                $returnType = '\Hostinger\Model\VPSV1ActionActionResource';
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
     * Create request for operation 'attachPublicKeyV1'
     *
     * @throws InvalidArgumentException
     */
    protected function attachPublicKeyV1Request(int $virtualMachineId,\Hostinger\Model\VPSV1PublicKeyAttachRequest $vPSV1PublicKeyAttachRequest,): Request
    {
        $resourcePath = '/api/vps/v1/public-keys/attach/{virtualMachineId}';
        $resourcePath = str_replace(
            '{' . 'virtualMachineId' . '}',
            ObjectSerializer::toPathValue((string) $virtualMachineId),
            $resourcePath
        );

        $body = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($vPSV1PublicKeyAttachRequest));
        $query = [];

        return $this->buildRequest('POST', $resourcePath, $body, $query);
    }

    /**
     * Operation createNewPublicKeyV1
     *
     * Create new public key
     *
     * @return \Hostinger\Model\VPSV1PublicKeyPublicKeyResource|\Hostinger\Model\CommonSchemaUnprocessableContentResponseSchema|\Hostinger\Model\CommonSchemaUnauthorizedResponseSchema|\Hostinger\Model\CommonSchemaErrorResponseSchema
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @throws GuzzleException
     */
    public function createNewPublicKeyV1(\Hostinger\Model\VPSV1PublicKeyStoreRequest $vPSV1PublicKeyStoreRequest, ): \Hostinger\Model\VPSV1PublicKeyPublicKeyResource|\Hostinger\Model\CommonSchemaUnprocessableContentResponseSchema|\Hostinger\Model\CommonSchemaUnauthorizedResponseSchema|\Hostinger\Model\CommonSchemaErrorResponseSchema
    {
        $request = $this->createNewPublicKeyV1Request($vPSV1PublicKeyStoreRequest, );

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
                $returnType = '\Hostinger\Model\VPSV1PublicKeyPublicKeyResource';
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
     * Create request for operation 'createNewPublicKeyV1'
     *
     * @throws InvalidArgumentException
     */
    protected function createNewPublicKeyV1Request(\Hostinger\Model\VPSV1PublicKeyStoreRequest $vPSV1PublicKeyStoreRequest,): Request
    {
        $resourcePath = '/api/vps/v1/public-keys';

        $body = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($vPSV1PublicKeyStoreRequest));
        $query = [];

        return $this->buildRequest('POST', $resourcePath, $body, $query);
    }

    /**
     * Operation deleteAPublicKeyV1
     *
     * Delete a public key
     *
     * @return \Hostinger\Model\CommonSuccessEmptyResource|\Hostinger\Model\CommonSchemaUnauthorizedResponseSchema|\Hostinger\Model\CommonSchemaErrorResponseSchema
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @throws GuzzleException
     */
    public function deleteAPublicKeyV1(int $publicKeyId, ): \Hostinger\Model\CommonSuccessEmptyResource|\Hostinger\Model\CommonSchemaUnauthorizedResponseSchema|\Hostinger\Model\CommonSchemaErrorResponseSchema
    {
        $request = $this->deleteAPublicKeyV1Request($publicKeyId, );

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
     * Create request for operation 'deleteAPublicKeyV1'
     *
     * @throws InvalidArgumentException
     */
    protected function deleteAPublicKeyV1Request(int $publicKeyId,): Request
    {
        $resourcePath = '/api/vps/v1/public-keys/{publicKeyId}';
        $resourcePath = str_replace(
            '{' . 'publicKeyId' . '}',
            ObjectSerializer::toPathValue((string) $publicKeyId),
            $resourcePath
        );

        $body = null;
        $query = [];

        return $this->buildRequest('DELETE', $resourcePath, $body, $query);
    }

    /**
     * Operation getPublicKeyListV1
     *
     * Get public key list
     *
     * @return \Hostinger\Model\VPSGetPublicKeyListV1200Response|\Hostinger\Model\CommonSchemaUnauthorizedResponseSchema|\Hostinger\Model\CommonSchemaErrorResponseSchema
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @throws GuzzleException
     */
    public function getPublicKeyListV1(?int $page = null, ): \Hostinger\Model\VPSGetPublicKeyListV1200Response|\Hostinger\Model\CommonSchemaUnauthorizedResponseSchema|\Hostinger\Model\CommonSchemaErrorResponseSchema
    {
        $request = $this->getPublicKeyListV1Request($page, );

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
                $returnType = '\Hostinger\Model\VPSGetPublicKeyListV1200Response';
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
     * Create request for operation 'getPublicKeyListV1'
     *
     * @throws InvalidArgumentException
     */
    protected function getPublicKeyListV1Request(?int $page = null,): Request
    {
        $resourcePath = '/api/vps/v1/public-keys';

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
