<?php

/**
 * Hostinger API PHP SDK
 *
 * API Version: 0.0.24
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

class VPSFirewallApi
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
     * Operation activateFirewallV1
     *
     * Activate firewall
     *
     * @return \Hostinger\Model\VPSV1ActionActionResource|\Hostinger\Model\CommonSchemaUnprocessableContentResponseSchema|\Hostinger\Model\CommonSchemaUnauthorizedResponseSchema|\Hostinger\Model\CommonSchemaErrorResponseSchema
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @throws GuzzleException
     */
    public function activateFirewallV1(int $firewallId, int $virtualMachineId, ): \Hostinger\Model\VPSV1ActionActionResource|\Hostinger\Model\CommonSchemaUnprocessableContentResponseSchema|\Hostinger\Model\CommonSchemaUnauthorizedResponseSchema|\Hostinger\Model\CommonSchemaErrorResponseSchema
    {
        $request = $this->activateFirewallV1Request($firewallId, $virtualMachineId, );

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
     * Create request for operation 'activateFirewallV1'
     *
     * @throws InvalidArgumentException
     */
    protected function activateFirewallV1Request(int $firewallId,int $virtualMachineId,): Request
    {
        $resourcePath = '/api/vps/v1/firewall/{firewallId}/activate/{virtualMachineId}';
        $resourcePath = str_replace(
            '{' . 'firewallId' . '}',
            ObjectSerializer::toPathValue((string) $firewallId),
            $resourcePath
        );
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
     * Operation createFirewallRuleV1
     *
     * Create firewall rule
     *
     * @return \Hostinger\Model\VPSV1FirewallFirewallRuleResource|\Hostinger\Model\CommonSchemaUnprocessableContentResponseSchema|\Hostinger\Model\CommonSchemaUnauthorizedResponseSchema|\Hostinger\Model\CommonSchemaErrorResponseSchema
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @throws GuzzleException
     */
    public function createFirewallRuleV1(int $firewallId, \Hostinger\Model\VPSV1FirewallRulesStoreRequest $vPSV1FirewallRulesStoreRequest, ): \Hostinger\Model\VPSV1FirewallFirewallRuleResource|\Hostinger\Model\CommonSchemaUnprocessableContentResponseSchema|\Hostinger\Model\CommonSchemaUnauthorizedResponseSchema|\Hostinger\Model\CommonSchemaErrorResponseSchema
    {
        $request = $this->createFirewallRuleV1Request($firewallId, $vPSV1FirewallRulesStoreRequest, );

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
                $returnType = '\Hostinger\Model\VPSV1FirewallFirewallRuleResource';
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
     * Create request for operation 'createFirewallRuleV1'
     *
     * @throws InvalidArgumentException
     */
    protected function createFirewallRuleV1Request(int $firewallId,\Hostinger\Model\VPSV1FirewallRulesStoreRequest $vPSV1FirewallRulesStoreRequest,): Request
    {
        $resourcePath = '/api/vps/v1/firewall/{firewallId}/rules';
        $resourcePath = str_replace(
            '{' . 'firewallId' . '}',
            ObjectSerializer::toPathValue((string) $firewallId),
            $resourcePath
        );

        $body = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($vPSV1FirewallRulesStoreRequest));
        $query = [];

        return $this->buildRequest('POST', $resourcePath, $body, $query);
    }

    /**
     * Operation createNewFirewallV1
     *
     * Create new firewall
     *
     * @return \Hostinger\Model\VPSV1FirewallFirewallResource|\Hostinger\Model\CommonSchemaUnprocessableContentResponseSchema|\Hostinger\Model\CommonSchemaUnauthorizedResponseSchema|\Hostinger\Model\CommonSchemaErrorResponseSchema
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @throws GuzzleException
     */
    public function createNewFirewallV1(\Hostinger\Model\VPSV1FirewallStoreRequest $vPSV1FirewallStoreRequest, ): \Hostinger\Model\VPSV1FirewallFirewallResource|\Hostinger\Model\CommonSchemaUnprocessableContentResponseSchema|\Hostinger\Model\CommonSchemaUnauthorizedResponseSchema|\Hostinger\Model\CommonSchemaErrorResponseSchema
    {
        $request = $this->createNewFirewallV1Request($vPSV1FirewallStoreRequest, );

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
                $returnType = '\Hostinger\Model\VPSV1FirewallFirewallResource';
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
     * Create request for operation 'createNewFirewallV1'
     *
     * @throws InvalidArgumentException
     */
    protected function createNewFirewallV1Request(\Hostinger\Model\VPSV1FirewallStoreRequest $vPSV1FirewallStoreRequest,): Request
    {
        $resourcePath = '/api/vps/v1/firewall';

        $body = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($vPSV1FirewallStoreRequest));
        $query = [];

        return $this->buildRequest('POST', $resourcePath, $body, $query);
    }

    /**
     * Operation deactivateFirewallV1
     *
     * Deactivate firewall
     *
     * @return \Hostinger\Model\VPSV1ActionActionResource|\Hostinger\Model\CommonSchemaUnprocessableContentResponseSchema|\Hostinger\Model\CommonSchemaUnauthorizedResponseSchema|\Hostinger\Model\CommonSchemaErrorResponseSchema
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @throws GuzzleException
     */
    public function deactivateFirewallV1(int $firewallId, int $virtualMachineId, ): \Hostinger\Model\VPSV1ActionActionResource|\Hostinger\Model\CommonSchemaUnprocessableContentResponseSchema|\Hostinger\Model\CommonSchemaUnauthorizedResponseSchema|\Hostinger\Model\CommonSchemaErrorResponseSchema
    {
        $request = $this->deactivateFirewallV1Request($firewallId, $virtualMachineId, );

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
     * Create request for operation 'deactivateFirewallV1'
     *
     * @throws InvalidArgumentException
     */
    protected function deactivateFirewallV1Request(int $firewallId,int $virtualMachineId,): Request
    {
        $resourcePath = '/api/vps/v1/firewall/{firewallId}/deactivate/{virtualMachineId}';
        $resourcePath = str_replace(
            '{' . 'firewallId' . '}',
            ObjectSerializer::toPathValue((string) $firewallId),
            $resourcePath
        );
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
     * Operation deleteFirewallRuleV1
     *
     * Delete firewall rule
     *
     * @return \Hostinger\Model\CommonSuccessEmptyResource|\Hostinger\Model\CommonSchemaUnauthorizedResponseSchema|\Hostinger\Model\CommonSchemaErrorResponseSchema
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @throws GuzzleException
     */
    public function deleteFirewallRuleV1(int $firewallId, int $ruleId, ): \Hostinger\Model\CommonSuccessEmptyResource|\Hostinger\Model\CommonSchemaUnauthorizedResponseSchema|\Hostinger\Model\CommonSchemaErrorResponseSchema
    {
        $request = $this->deleteFirewallRuleV1Request($firewallId, $ruleId, );

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
     * Create request for operation 'deleteFirewallRuleV1'
     *
     * @throws InvalidArgumentException
     */
    protected function deleteFirewallRuleV1Request(int $firewallId,int $ruleId,): Request
    {
        $resourcePath = '/api/vps/v1/firewall/{firewallId}/rules/{ruleId}';
        $resourcePath = str_replace(
            '{' . 'firewallId' . '}',
            ObjectSerializer::toPathValue((string) $firewallId),
            $resourcePath
        );
        $resourcePath = str_replace(
            '{' . 'ruleId' . '}',
            ObjectSerializer::toPathValue((string) $ruleId),
            $resourcePath
        );

        $body = null;
        $query = [];

        return $this->buildRequest('DELETE', $resourcePath, $body, $query);
    }

    /**
     * Operation deleteFirewallV1
     *
     * Delete firewall
     *
     * @return \Hostinger\Model\CommonSuccessEmptyResource|\Hostinger\Model\CommonSchemaUnauthorizedResponseSchema|\Hostinger\Model\CommonSchemaErrorResponseSchema
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @throws GuzzleException
     */
    public function deleteFirewallV1(int $firewallId, ): \Hostinger\Model\CommonSuccessEmptyResource|\Hostinger\Model\CommonSchemaUnauthorizedResponseSchema|\Hostinger\Model\CommonSchemaErrorResponseSchema
    {
        $request = $this->deleteFirewallV1Request($firewallId, );

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
     * Create request for operation 'deleteFirewallV1'
     *
     * @throws InvalidArgumentException
     */
    protected function deleteFirewallV1Request(int $firewallId,): Request
    {
        $resourcePath = '/api/vps/v1/firewall/{firewallId}';
        $resourcePath = str_replace(
            '{' . 'firewallId' . '}',
            ObjectSerializer::toPathValue((string) $firewallId),
            $resourcePath
        );

        $body = null;
        $query = [];

        return $this->buildRequest('DELETE', $resourcePath, $body, $query);
    }

    /**
     * Operation getFirewallListV1
     *
     * Get firewall list
     *
     * @return \Hostinger\Model\VPSGetFirewallListV1200Response|\Hostinger\Model\CommonSchemaUnauthorizedResponseSchema|\Hostinger\Model\CommonSchemaErrorResponseSchema
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @throws GuzzleException
     */
    public function getFirewallListV1(?int $page = null, ): \Hostinger\Model\VPSGetFirewallListV1200Response|\Hostinger\Model\CommonSchemaUnauthorizedResponseSchema|\Hostinger\Model\CommonSchemaErrorResponseSchema
    {
        $request = $this->getFirewallListV1Request($page, );

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
                $returnType = '\Hostinger\Model\VPSGetFirewallListV1200Response';
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
     * Create request for operation 'getFirewallListV1'
     *
     * @throws InvalidArgumentException
     */
    protected function getFirewallListV1Request(?int $page = null,): Request
    {
        $resourcePath = '/api/vps/v1/firewall';

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
     * Operation getFirewallV1
     *
     * Get firewall
     *
     * @return \Hostinger\Model\VPSV1FirewallFirewallResource|\Hostinger\Model\CommonSchemaUnauthorizedResponseSchema|\Hostinger\Model\CommonSchemaErrorResponseSchema
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @throws GuzzleException
     */
    public function getFirewallV1(int $firewallId, ): \Hostinger\Model\VPSV1FirewallFirewallResource|\Hostinger\Model\CommonSchemaUnauthorizedResponseSchema|\Hostinger\Model\CommonSchemaErrorResponseSchema
    {
        $request = $this->getFirewallV1Request($firewallId, );

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
                $returnType = '\Hostinger\Model\VPSV1FirewallFirewallResource';
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
     * Create request for operation 'getFirewallV1'
     *
     * @throws InvalidArgumentException
     */
    protected function getFirewallV1Request(int $firewallId,): Request
    {
        $resourcePath = '/api/vps/v1/firewall/{firewallId}';
        $resourcePath = str_replace(
            '{' . 'firewallId' . '}',
            ObjectSerializer::toPathValue((string) $firewallId),
            $resourcePath
        );

        $body = null;
        $query = [];

        return $this->buildRequest('GET', $resourcePath, $body, $query);
    }

    /**
     * Operation syncFirewallV1
     *
     * Sync firewall
     *
     * @return \Hostinger\Model\VPSV1ActionActionResource|\Hostinger\Model\CommonSchemaUnprocessableContentResponseSchema|\Hostinger\Model\CommonSchemaUnauthorizedResponseSchema|\Hostinger\Model\CommonSchemaErrorResponseSchema
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @throws GuzzleException
     */
    public function syncFirewallV1(int $firewallId, int $virtualMachineId, ): \Hostinger\Model\VPSV1ActionActionResource|\Hostinger\Model\CommonSchemaUnprocessableContentResponseSchema|\Hostinger\Model\CommonSchemaUnauthorizedResponseSchema|\Hostinger\Model\CommonSchemaErrorResponseSchema
    {
        $request = $this->syncFirewallV1Request($firewallId, $virtualMachineId, );

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
     * Create request for operation 'syncFirewallV1'
     *
     * @throws InvalidArgumentException
     */
    protected function syncFirewallV1Request(int $firewallId,int $virtualMachineId,): Request
    {
        $resourcePath = '/api/vps/v1/firewall/{firewallId}/sync/{virtualMachineId}';
        $resourcePath = str_replace(
            '{' . 'firewallId' . '}',
            ObjectSerializer::toPathValue((string) $firewallId),
            $resourcePath
        );
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
     * Operation updateFirewallRuleV1
     *
     * Update firewall rule
     *
     * @return \Hostinger\Model\VPSV1FirewallFirewallRuleResource|\Hostinger\Model\CommonSchemaUnprocessableContentResponseSchema|\Hostinger\Model\CommonSchemaUnauthorizedResponseSchema|\Hostinger\Model\CommonSchemaErrorResponseSchema
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @throws GuzzleException
     */
    public function updateFirewallRuleV1(int $firewallId, int $ruleId, \Hostinger\Model\VPSV1FirewallRulesStoreRequest $vPSV1FirewallRulesStoreRequest, ): \Hostinger\Model\VPSV1FirewallFirewallRuleResource|\Hostinger\Model\CommonSchemaUnprocessableContentResponseSchema|\Hostinger\Model\CommonSchemaUnauthorizedResponseSchema|\Hostinger\Model\CommonSchemaErrorResponseSchema
    {
        $request = $this->updateFirewallRuleV1Request($firewallId, $ruleId, $vPSV1FirewallRulesStoreRequest, );

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
                $returnType = '\Hostinger\Model\VPSV1FirewallFirewallRuleResource';
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
     * Create request for operation 'updateFirewallRuleV1'
     *
     * @throws InvalidArgumentException
     */
    protected function updateFirewallRuleV1Request(int $firewallId,int $ruleId,\Hostinger\Model\VPSV1FirewallRulesStoreRequest $vPSV1FirewallRulesStoreRequest,): Request
    {
        $resourcePath = '/api/vps/v1/firewall/{firewallId}/rules/{ruleId}';
        $resourcePath = str_replace(
            '{' . 'firewallId' . '}',
            ObjectSerializer::toPathValue((string) $firewallId),
            $resourcePath
        );
        $resourcePath = str_replace(
            '{' . 'ruleId' . '}',
            ObjectSerializer::toPathValue((string) $ruleId),
            $resourcePath
        );

        $body = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($vPSV1FirewallRulesStoreRequest));
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
