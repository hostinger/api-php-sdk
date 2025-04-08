<?php

/**
 * Hostinger API PHP SDK
 *
 * @version 0.0.1-beta
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
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use GuzzleHttp\Promise\PromiseInterface;
use Hostinger\ApiException;
use Hostinger\Configuration;
use Hostinger\HeaderSelector;
use Hostinger\ObjectSerializer;

class BillingOrdersApi
{
    protected ClientInterface $client;

    protected Configuration $config;

    protected HeaderSelector $headerSelector;

    protected int $hostIndex;

    /**
     * @var array<string> $contentTypes
     */
    public const contentTypes = [
        'createNewServiceOrderV1' => [
            'application/json',
        ],
    ];

    public function __construct(
        ?ClientInterface $client = null,
        ?Configuration $config = null,
        ?HeaderSelector $selector = null,
        int $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: Configuration::getDefaultConfiguration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    public function setHostIndex(int $hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    public function getHostIndex(): int
    {
        return $this->hostIndex;
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
     * @param  \Hostinger\Model\BillingV1OrderStoreRequest $billing_v1_order_store_request billing_v1_order_store_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createNewServiceOrderV1'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return \Hostinger\Model\BillingV1OrderOrderResource|\Hostinger\Model\CommonSchemaUnprocessableContentResponseSchema|\Hostinger\Model\CommonSchemaUnauthorizedResponseSchema|\Hostinger\Model\CommonSchemaErrorResponseSchema
     */
    public function createNewServiceOrderV1(
        \Hostinger\Model\BillingV1OrderStoreRequest $billing_v1_order_store_request,
        string $contentType = self::contentTypes['createNewServiceOrderV1'][0]
    ): \Hostinger\Model\BillingV1OrderOrderResource|\Hostinger\Model\CommonSchemaUnprocessableContentResponseSchema|\Hostinger\Model\CommonSchemaUnauthorizedResponseSchema|\Hostinger\Model\CommonSchemaErrorResponseSchema
    {
        list($response) = $this->createNewServiceOrderV1WithHttpInfo($billing_v1_order_store_request, $contentType);
        return $response;
    }

    /**
     * Operation createNewServiceOrderV1WithHttpInfo
     *
     * Create new service order
     *
     * @param  \Hostinger\Model\BillingV1OrderStoreRequest $billing_v1_order_store_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createNewServiceOrderV1'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of \Hostinger\Model\BillingV1OrderOrderResource|\Hostinger\Model\CommonSchemaUnprocessableContentResponseSchema|\Hostinger\Model\CommonSchemaUnauthorizedResponseSchema|\Hostinger\Model\CommonSchemaErrorResponseSchema, HTTP status code, HTTP response headers (array of strings)
     */
    public function createNewServiceOrderV1WithHttpInfo(
        \Hostinger\Model\BillingV1OrderStoreRequest $billing_v1_order_store_request,
        string $contentType = self::contentTypes['createNewServiceOrderV1'][0]
    ): array
    {
        $request = $this->createNewServiceOrderV1Request($billing_v1_order_store_request, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            switch ($statusCode) {
                case 200:
                    if (in_array('\Hostinger\Model\BillingV1OrderOrderResource', ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Hostinger\Model\BillingV1OrderOrderResource' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Hostinger\Model\BillingV1OrderOrderResource', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 422:
                    if (in_array('\Hostinger\Model\CommonSchemaUnprocessableContentResponseSchema', ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Hostinger\Model\CommonSchemaUnprocessableContentResponseSchema' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Hostinger\Model\CommonSchemaUnprocessableContentResponseSchema', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if (in_array('\Hostinger\Model\CommonSchemaUnauthorizedResponseSchema', ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Hostinger\Model\CommonSchemaUnauthorizedResponseSchema' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Hostinger\Model\CommonSchemaUnauthorizedResponseSchema', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if (in_array('\Hostinger\Model\CommonSchemaErrorResponseSchema', ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Hostinger\Model\CommonSchemaErrorResponseSchema' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Hostinger\Model\CommonSchemaErrorResponseSchema', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            $returnType = '\Hostinger\Model\BillingV1OrderOrderResource';
            if (in_array($returnType, ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Hostinger\Model\BillingV1OrderOrderResource',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Hostinger\Model\CommonSchemaUnprocessableContentResponseSchema',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Hostinger\Model\CommonSchemaUnauthorizedResponseSchema',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Hostinger\Model\CommonSchemaErrorResponseSchema',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation createNewServiceOrderV1Async
     *
     * Create new service order
     *
     * @param  \Hostinger\Model\BillingV1OrderStoreRequest $billing_v1_order_store_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createNewServiceOrderV1'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function createNewServiceOrderV1Async(
        \Hostinger\Model\BillingV1OrderStoreRequest $billing_v1_order_store_request,
        string $contentType = self::contentTypes['createNewServiceOrderV1'][0]
    ): PromiseInterface
    {
        return $this->createNewServiceOrderV1AsyncWithHttpInfo($billing_v1_order_store_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createNewServiceOrderV1AsyncWithHttpInfo
     *
     * Create new service order
     *
     * @param  \Hostinger\Model\BillingV1OrderStoreRequest $billing_v1_order_store_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createNewServiceOrderV1'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function createNewServiceOrderV1AsyncWithHttpInfo(
        \Hostinger\Model\BillingV1OrderStoreRequest $billing_v1_order_store_request,
        string $contentType = self::contentTypes['createNewServiceOrderV1'][0]
    ): PromiseInterface
    {
        $returnType = '\Hostinger\Model\BillingV1OrderOrderResource';
        $request = $this->createNewServiceOrderV1Request($billing_v1_order_store_request, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if (in_array($returnType, ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'createNewServiceOrderV1'
     *
     * @param  \Hostinger\Model\BillingV1OrderStoreRequest $billing_v1_order_store_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createNewServiceOrderV1'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function createNewServiceOrderV1Request(
        \Hostinger\Model\BillingV1OrderStoreRequest $billing_v1_order_store_request,
        string $contentType = self::contentTypes['createNewServiceOrderV1'][0]
    ): Request
    {

        // verify the required parameter 'billing_v1_order_store_request' is set
        if ($billing_v1_order_store_request === null || (is_array($billing_v1_order_store_request) && count($billing_v1_order_store_request) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $billing_v1_order_store_request when calling createNewServiceOrderV1'
            );
        }


        $resourcePath = '/api/billing/v1/orders';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($billing_v1_order_store_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($billing_v1_order_store_request));
            } else {
                $httpBody = $billing_v1_order_store_request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires Bearer authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }


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
}
