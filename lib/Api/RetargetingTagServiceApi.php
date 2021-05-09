<?php
/**
 * RetargetingTagServiceApi
 * PHP version 7.2
 *
 * @category Class
 * @package  YahooAdsDisplayApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Yahoo!広告 ディスプレイ広告 API リファレンス / Yahoo! JAPAN Ads Display Ads API Reference
 *
 * <div lang=\"ja\">Yahoo!広告 ディスプレイ広告 APIのWebサービスについて説明します。</div> <div lang=\"en\">Display Ads API Web Services supported in Yahoo! JAPAN Ads API.</div> <div><a target=\"_blank\" href=\"https://github.com/yahoojp-marketing/ads-display-api-documents/blob/master/design/v4/Route.yaml\">OpenAPI Specification</a></div> <div lang=\"ja\"><a target=\"_blank\" href=\"https://github.com/yahoojp-marketing/ads-display-api-documents/blob/master/bestpractice/ja\">Best Practice</a></div> <div lang=\"en\"><a target=\"_blank\" href=\"https://github.com/yahoojp-marketing/ads-display-api-documents/blob/master/bestpractice/en\">Best Practice</a></div>
 *
 * The version of the OpenAPI document: v4
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace YahooAdsDisplayApi\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use YahooAdsDisplayApi\Client\ApiException;
use YahooAdsDisplayApi\Client\Configuration;
use YahooAdsDisplayApi\Client\HeaderSelector;
use YahooAdsDisplayApi\Client\ObjectSerializer;

/**
 * RetargetingTagServiceApi Class Doc Comment
 *
 * @category Class
 * @package  YahooAdsDisplayApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class RetargetingTagServiceApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex)
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation retargetingTagServiceAddPost
     *
     * @param  \YahooAdsDisplayApi\Client\Model\RetargetingTagServiceOperation $retargeting_tag_service_operation retargeting_tag_service_operation (optional)
     *
     * @throws \YahooAdsDisplayApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return |\YahooAdsDisplayApi\Client\Model\RetargetingTagServiceMutateResponse
     */
    public function retargetingTagServiceAddPost($retargeting_tag_service_operation = null)
    {
        list($response) = $this->retargetingTagServiceAddPostWithHttpInfo($retargeting_tag_service_operation);
        return $response;
    }

    /**
     * Operation retargetingTagServiceAddPostWithHttpInfo
     *
     * @param  \YahooAdsDisplayApi\Client\Model\RetargetingTagServiceOperation $retargeting_tag_service_operation (optional)
     *
     * @throws \YahooAdsDisplayApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of |\YahooAdsDisplayApi\Client\Model\RetargetingTagServiceMutateResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function retargetingTagServiceAddPostWithHttpInfo($retargeting_tag_service_operation = null)
    {
        $request = $this->retargetingTagServiceAddPostRequest($retargeting_tag_service_operation);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\YahooAdsDisplayApi\Client\Model\RetargetingTagServiceMutateResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\YahooAdsDisplayApi\Client\Model\RetargetingTagServiceMutateResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\YahooAdsDisplayApi\Client\Model\RetargetingTagServiceMutateResponse';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
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
                        '\YahooAdsDisplayApi\Client\Model\RetargetingTagServiceMutateResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation retargetingTagServiceAddPostAsync
     *
     * 
     *
     * @param  \YahooAdsDisplayApi\Client\Model\RetargetingTagServiceOperation $retargeting_tag_service_operation (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function retargetingTagServiceAddPostAsync($retargeting_tag_service_operation = null)
    {
        return $this->retargetingTagServiceAddPostAsyncWithHttpInfo($retargeting_tag_service_operation)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation retargetingTagServiceAddPostAsyncWithHttpInfo
     *
     * 
     *
     * @param  \YahooAdsDisplayApi\Client\Model\RetargetingTagServiceOperation $retargeting_tag_service_operation (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function retargetingTagServiceAddPostAsyncWithHttpInfo($retargeting_tag_service_operation = null)
    {
        $returnType = '\YahooAdsDisplayApi\Client\Model\RetargetingTagServiceMutateResponse';
        $request = $this->retargetingTagServiceAddPostRequest($retargeting_tag_service_operation);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'retargetingTagServiceAddPost'
     *
     * @param  \YahooAdsDisplayApi\Client\Model\RetargetingTagServiceOperation $retargeting_tag_service_operation (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function retargetingTagServiceAddPostRequest($retargeting_tag_service_operation = null)
    {

        $resourcePath = '/RetargetingTagService/add';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($retargeting_tag_service_operation)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($retargeting_tag_service_operation));
            } else {
                $httpBody = $retargeting_tag_service_operation;
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

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation retargetingTagServiceGetPost
     *
     * @param  \YahooAdsDisplayApi\Client\Model\RetargetingTagServiceSelector $retargeting_tag_service_selector retargeting_tag_service_selector (optional)
     *
     * @throws \YahooAdsDisplayApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return |\YahooAdsDisplayApi\Client\Model\RetargetingTagServiceGetResponse
     */
    public function retargetingTagServiceGetPost($retargeting_tag_service_selector = null)
    {
        list($response) = $this->retargetingTagServiceGetPostWithHttpInfo($retargeting_tag_service_selector);
        return $response;
    }

    /**
     * Operation retargetingTagServiceGetPostWithHttpInfo
     *
     * @param  \YahooAdsDisplayApi\Client\Model\RetargetingTagServiceSelector $retargeting_tag_service_selector (optional)
     *
     * @throws \YahooAdsDisplayApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of |\YahooAdsDisplayApi\Client\Model\RetargetingTagServiceGetResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function retargetingTagServiceGetPostWithHttpInfo($retargeting_tag_service_selector = null)
    {
        $request = $this->retargetingTagServiceGetPostRequest($retargeting_tag_service_selector);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\YahooAdsDisplayApi\Client\Model\RetargetingTagServiceGetResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\YahooAdsDisplayApi\Client\Model\RetargetingTagServiceGetResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\YahooAdsDisplayApi\Client\Model\RetargetingTagServiceGetResponse';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
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
                        '\YahooAdsDisplayApi\Client\Model\RetargetingTagServiceGetResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation retargetingTagServiceGetPostAsync
     *
     * 
     *
     * @param  \YahooAdsDisplayApi\Client\Model\RetargetingTagServiceSelector $retargeting_tag_service_selector (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function retargetingTagServiceGetPostAsync($retargeting_tag_service_selector = null)
    {
        return $this->retargetingTagServiceGetPostAsyncWithHttpInfo($retargeting_tag_service_selector)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation retargetingTagServiceGetPostAsyncWithHttpInfo
     *
     * 
     *
     * @param  \YahooAdsDisplayApi\Client\Model\RetargetingTagServiceSelector $retargeting_tag_service_selector (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function retargetingTagServiceGetPostAsyncWithHttpInfo($retargeting_tag_service_selector = null)
    {
        $returnType = '\YahooAdsDisplayApi\Client\Model\RetargetingTagServiceGetResponse';
        $request = $this->retargetingTagServiceGetPostRequest($retargeting_tag_service_selector);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'retargetingTagServiceGetPost'
     *
     * @param  \YahooAdsDisplayApi\Client\Model\RetargetingTagServiceSelector $retargeting_tag_service_selector (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function retargetingTagServiceGetPostRequest($retargeting_tag_service_selector = null)
    {

        $resourcePath = '/RetargetingTagService/get';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($retargeting_tag_service_selector)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($retargeting_tag_service_selector));
            } else {
                $httpBody = $retargeting_tag_service_selector;
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

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
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
