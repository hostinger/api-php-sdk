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
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use GuzzleHttp\Promise\PromiseInterface;
use Hostinger\ApiException;
use Hostinger\Configuration;
use Hostinger\HeaderSelector;
use Hostinger\ObjectSerializer;

class VPSOSTemplatesApi
{
    protected ClientInterface $client;

    protected Configuration $config;

    protected HeaderSelector $headerSelector;

    protected int $hostIndex;

    /**
     * @var array<string> $contentTypes
     */
    public const contentTypes = [
        'getTemplateListV1' => [
            'application/json',
        ],
        'getTemplateV1' => [
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
     * Operation getTemplateListV1
     *
     * Get template list
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getTemplateListV1'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return \Hostinger\Model\VPSV1TemplateTemplateResource[]|\Hostinger\Model\CommonSchemaUnauthorizedResponseSchema|\Hostinger\Model\CommonSchemaErrorResponseSchema
     */
    public function getTemplateListV1(
        string $contentType = self::contentTypes['getTemplateListV1'][0]
    ): array|\Hostinger\Model\CommonSchemaUnauthorizedResponseSchema|\Hostinger\Model\CommonSchemaErrorResponseSchema
    {
        list($response) = $this->getTemplateListV1WithHttpInfo($contentType);
        return $response;
    }

    /**
     * Operation getTemplateListV1WithHttpInfo
     *
     * Get template list
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getTemplateListV1'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of \Hostinger\Model\VPSV1TemplateTemplateResource[]|\Hostinger\Model\CommonSchemaUnauthorizedResponseSchema|\Hostinger\Model\CommonSchemaErrorResponseSchema, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTemplateListV1WithHttpInfo(
        string $contentType = self::contentTypes['getTemplateListV1'][0]
    ): array
    {
        $request = $this->getTemplateListV1Request($contentType);

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
                    if (in_array('\Hostinger\Model\VPSV1TemplateTemplateResource[]', ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Hostinger\Model\VPSV1TemplateTemplateResource[]' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Hostinger\Model\VPSV1TemplateTemplateResource[]', []),
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

            $returnType = '\Hostinger\Model\VPSV1TemplateTemplateResource[]';
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
                        '\Hostinger\Model\VPSV1TemplateTemplateResource[]',
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
     * Operation getTemplateListV1Async
     *
     * Get template list
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getTemplateListV1'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function getTemplateListV1Async(
        string $contentType = self::contentTypes['getTemplateListV1'][0]
    ): PromiseInterface
    {
        return $this->getTemplateListV1AsyncWithHttpInfo($contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getTemplateListV1AsyncWithHttpInfo
     *
     * Get template list
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getTemplateListV1'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function getTemplateListV1AsyncWithHttpInfo(
        string $contentType = self::contentTypes['getTemplateListV1'][0]
    ): PromiseInterface
    {
        $returnType = '\Hostinger\Model\VPSV1TemplateTemplateResource[]';
        $request = $this->getTemplateListV1Request($contentType);

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
     * Create request for operation 'getTemplateListV1'
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getTemplateListV1'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getTemplateListV1Request(
        string $contentType = self::contentTypes['getTemplateListV1'][0]
    ): Request
    {


        $resourcePath = '/api/vps/v1/templates';
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
        if (count($formParams) > 0) {
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
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getTemplateV1
     *
     * Get template
     *
     * @param  int $template_id Template ID (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getTemplateV1'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return \Hostinger\Model\VPSV1TemplateTemplateResource|\Hostinger\Model\CommonSchemaUnauthorizedResponseSchema|\Hostinger\Model\CommonSchemaErrorResponseSchema
     */
    public function getTemplateV1(
        int $template_id,
        string $contentType = self::contentTypes['getTemplateV1'][0]
    ): \Hostinger\Model\VPSV1TemplateTemplateResource|\Hostinger\Model\CommonSchemaUnauthorizedResponseSchema|\Hostinger\Model\CommonSchemaErrorResponseSchema
    {
        list($response) = $this->getTemplateV1WithHttpInfo($template_id, $contentType);
        return $response;
    }

    /**
     * Operation getTemplateV1WithHttpInfo
     *
     * Get template
     *
     * @param  int $template_id Template ID (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getTemplateV1'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of \Hostinger\Model\VPSV1TemplateTemplateResource|\Hostinger\Model\CommonSchemaUnauthorizedResponseSchema|\Hostinger\Model\CommonSchemaErrorResponseSchema, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTemplateV1WithHttpInfo(
        int $template_id,
        string $contentType = self::contentTypes['getTemplateV1'][0]
    ): array
    {
        $request = $this->getTemplateV1Request($template_id, $contentType);

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
                    if (in_array('\Hostinger\Model\VPSV1TemplateTemplateResource', ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Hostinger\Model\VPSV1TemplateTemplateResource' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Hostinger\Model\VPSV1TemplateTemplateResource', []),
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

            $returnType = '\Hostinger\Model\VPSV1TemplateTemplateResource';
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
                        '\Hostinger\Model\VPSV1TemplateTemplateResource',
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
     * Operation getTemplateV1Async
     *
     * Get template
     *
     * @param  int $template_id Template ID (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getTemplateV1'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function getTemplateV1Async(
        int $template_id,
        string $contentType = self::contentTypes['getTemplateV1'][0]
    ): PromiseInterface
    {
        return $this->getTemplateV1AsyncWithHttpInfo($template_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getTemplateV1AsyncWithHttpInfo
     *
     * Get template
     *
     * @param  int $template_id Template ID (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getTemplateV1'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function getTemplateV1AsyncWithHttpInfo(
        int $template_id,
        string $contentType = self::contentTypes['getTemplateV1'][0]
    ): PromiseInterface
    {
        $returnType = '\Hostinger\Model\VPSV1TemplateTemplateResource';
        $request = $this->getTemplateV1Request($template_id, $contentType);

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
     * Create request for operation 'getTemplateV1'
     *
     * @param  int $template_id Template ID (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getTemplateV1'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getTemplateV1Request(
        int $template_id,
        string $contentType = self::contentTypes['getTemplateV1'][0]
    ): Request
    {

        // verify the required parameter 'template_id' is set
        if ($template_id === null || (is_array($template_id) && count($template_id) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $template_id when calling getTemplateV1'
            );
        }


        $resourcePath = '/api/vps/v1/templates/{templateId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($template_id !== null) {
            $resourcePath = str_replace(
                '{' . 'templateId' . '}',
                ObjectSerializer::toPathValue($template_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
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
            'GET',
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
