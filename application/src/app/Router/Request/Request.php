<?php declare(strict_types=1);

namespace Finance\modules\Router\Request;

use Finance\modules\Router\Request\RequestContext;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\StreamInterface;
use Psr\Http\Message\UriInterface;

/**
 * Class Request
 * @package Finance\modules\Router\Request
 */
class Request extends RequestContext implements RequestInterface
{

    /**
     * Request constructor.
     * @param string $baseUrl
     * @param string $method
     * @param string $host
     * @param string $scheme
     * @param int $httpPort
     * @param int $httpsPort
     * @param string $pathInfo
     * @param string $queryString
     */
    public function __construct(string $baseUrl = '', string $method = 'GET',
                                string $host = 'localhost', string $scheme = 'http',
                                int $httpPort = 80, int $httpsPort = 443,
                                string $pathInfo = '/', string $queryString = '')
    {
        parent::__construct($baseUrl, $method, $host, $scheme, $httpPort, $httpsPort, $pathInfo, $queryString);
    }


    /**
     * @return string
     */
    public function getProtocolVersion()
    {
        return $_SERVER['SERVER_PROTOCOL'];
    }

    /**
     * @param string $version
     * @return RequestInterface|void
     */
    public function withProtocolVersion($version)
    {
        // TODO: Implement withProtocolVersion() method.
    }

    /**
     * @return \string[][]|void
     */
    public function getHeaders()
    {
        // TODO: Implement getHeaders() method.
    }

    /**
     * @param string $name
     * @return bool|void
     */
    public function hasHeader($name)
    {
        // TODO: Implement hasHeader() method.
    }

    /**
     * @param string $name
     * @return string[]|void
     */
    public function getHeader($name)
    {
        // TODO: Implement getHeader() method.
    }

    /**
     * @param string $name
     * @return string|void
     */
    public function getHeaderLine($name)
    {
        // TODO: Implement getHeaderLine() method.
    }

    /**
     * @param string $name
     * @param string|string[] $value
     * @return RequestInterface|void
     */
    public function withHeader($name, $value)
    {
        // TODO: Implement withHeader() method.
    }

    /**
     * @param string $name
     * @param string|string[] $value
     * @return RequestInterface|void
     */
    public function withAddedHeader($name, $value)
    {
        // TODO: Implement withAddedHeader() method.
    }

    /**
     * @param string $name
     * @return RequestInterface|void
     */
    public function withoutHeader($name)
    {
        // TODO: Implement withoutHeader() method.
    }

    /**
     * @return StreamInterface|void
     */
    public function getBody()
    {
        // TODO: Implement getBody() method.
    }

    /**
     * @param StreamInterface $body
     * @return RequestInterface|void
     */
    public function withBody(StreamInterface $body)
    {
        // TODO: Implement withBody() method.
    }

    /**
     * @return string|void
     */
    public function getRequestTarget()
    {
        // TODO: Implement getRequestTarget() method.
    }

    /**
     * @param mixed $requestTarget
     * @return RequestInterface|void
     */
    public function withRequestTarget($requestTarget)
    {
        // TODO: Implement withRequestTarget() method.
    }

    /**
     * @param string $method
     * @return RequestInterface|void
     */
    public function withMethod($method)
    {
        // TODO: Implement withMethod() method.
    }

    /**
     * @param UriInterface $uri
     * @param bool $preserveHost
     * @return RequestInterface|void
     */
    public function withUri(UriInterface $uri, $preserveHost = false)
    {
        // TODO: Implement withUri() method.
    }

    /**
     * @return Request
     */
    public function initRequest():Request
    {
        $this->setQueryString($_SERVER['QUERY_STRING']);
        $this->setMethod($_SERVER['REQUEST_METHOD']);
        $this->setPathInfo($_SERVER['PATH_INFO']);
        return $this;
    }

}