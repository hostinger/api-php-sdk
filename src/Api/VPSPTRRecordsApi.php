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
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Hostinger\ApiException;
use Hostinger\Configuration;
use Hostinger\HeaderSelector;
use Hostinger\ObjectSerializer;

class VPSPTRRecordsApi
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
     * Operation createPTRRecordV1
     *
     * Create PTR record
     *
     * @param  int $virtualMachineId Virtual Machine ID (required)
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return \Hostinger\Model\VPSV1ActionActionResource|\Hostinger\Model\CommonSchemaUnauthorizedResponseSchema|\Hostinger\Model\CommonSchemaErrorResponseSchema
     */
    public function createPTRRecordV1(int $virtualMachineId, ): \Hostinger\Model\VPSV1ActionActionResource|\Hostinger\Model\CommonSchemaUnauthorizedResponseSchema|\Hostinger\Model\CommonSchemaErrorResponseSchema
    {
        $request = $this->createPTRRecordV1Request($virtualMachineId, );

        try {
            $response = $this->client->send($request, $this->createHttpClientOption());
        } catch (RequestException $e) {
            throw ApiException::fromRequestException($e);
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
     * Create request for operation 'createPTRRecordV1'
     *
     * @param  int $virtualMachineId Virtual Machine ID (required)
     * @throws InvalidArgumentException
     */
    protected function createPTRRecordV1Request(int $virtualMachineId,): Request
    {
        $resourcePath = '/api/vps/v1/virtual-machines/{virtualMachineId}/ptr';
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
     * Operation deletePTRRecordV1
     *
     * Delete PTR record
     *
     * @param  int $virtualMachineId Virtual Machine ID (required)
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return \Hostinger\Model\VPSV1ActionActionResource|\Hostinger\Model\CommonSchemaUnauthorizedResponseSchema|\Hostinger\Model\CommonSchemaErrorResponseSchema
     */
    public function deletePTRRecordV1(int $virtualMachineId, ): \Hostinger\Model\VPSV1ActionActionResource|\Hostinger\Model\CommonSchemaUnauthorizedResponseSchema|\Hostinger\Model\CommonSchemaErrorResponseSchema
    {
        $request = $this->deletePTRRecordV1Request($virtualMachineId, );

        try {
            $response = $this->client->send($request, $this->createHttpClientOption());
        } catch (RequestException $e) {
            throw ApiException::fromRequestException($e);
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
     * Create request for operation 'deletePTRRecordV1'
     *
     * @param  int $virtualMachineId Virtual Machine ID (required)
     * @throws InvalidArgumentException
     */
    protected function deletePTRRecordV1Request(int $virtualMachineId,): Request
    {
        $resourcePath = '/api/vps/v1/virtual-machines/{virtualMachineId}/ptr';
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
