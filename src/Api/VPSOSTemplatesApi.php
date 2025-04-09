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

class VPSOSTemplatesApi
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
     * Operation getTemplateListV1
     *
     * Get template list
     *
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return \Hostinger\Model\VPSV1TemplateTemplateResource[]|\Hostinger\Model\CommonSchemaUnauthorizedResponseSchema|\Hostinger\Model\CommonSchemaErrorResponseSchema
     */
    public function getTemplateListV1(): array|\Hostinger\Model\CommonSchemaUnauthorizedResponseSchema|\Hostinger\Model\CommonSchemaErrorResponseSchema
    {
        $request = $this->getTemplateListV1Request();

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
                $returnType = '\Hostinger\Model\VPSV1TemplateTemplateResource[]';
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
     * Create request for operation 'getTemplateListV1'
     *
     * @throws InvalidArgumentException
     */
    protected function getTemplateListV1Request(): Request
    {
        $resourcePath = '/api/vps/v1/templates';

        $body = null;
        $query = [];

        return $this->buildRequest('GET', $resourcePath, $body, $query);
    }

    /**
     * Operation getTemplateV1
     *
     * Get template
     *
     * @param  int $templateId Template ID (required)
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return \Hostinger\Model\VPSV1TemplateTemplateResource|\Hostinger\Model\CommonSchemaUnauthorizedResponseSchema|\Hostinger\Model\CommonSchemaErrorResponseSchema
     */
    public function getTemplateV1(int $templateId, ): \Hostinger\Model\VPSV1TemplateTemplateResource|\Hostinger\Model\CommonSchemaUnauthorizedResponseSchema|\Hostinger\Model\CommonSchemaErrorResponseSchema
    {
        $request = $this->getTemplateV1Request($templateId, );

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
                $returnType = '\Hostinger\Model\VPSV1TemplateTemplateResource';
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
     * Create request for operation 'getTemplateV1'
     *
     * @param  int $templateId Template ID (required)
     * @throws InvalidArgumentException
     */
    protected function getTemplateV1Request(int $templateId,): Request
    {
        $resourcePath = '/api/vps/v1/templates/{templateId}';
        $resourcePath = str_replace(
            '{' . 'templateId' . '}',
            ObjectSerializer::toPathValue((string) $templateId),
            $resourcePath
        );



        $body = null;
        $query = [];

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
