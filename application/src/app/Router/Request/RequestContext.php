<?php declare(strict_types = 1);

namespace Finance\modules\Router\Request;

/**
 * Содержит контекст о текущем запросе.
 * Class RequestContext
 * @package Finance\CoreApi\Request
 */
class RequestContext
{

    private $baseUrl;
    private $pathInfo;
    private $method;
    private $host;
    private $scheme;
    private $httpPort;
    private $httpsPort;
    private $queryString;
    private $params = [];

    /**
     * RequestContext constructor.
     * @param string $baseUrl
     * @param string $method
     * @param string $host
     * @param string $scheme
     * @param int $httpPort
     * @param int $httpsPort
     * @param string $pathInfo
     * @param string $queryString
     */
    public function __construct(
        string $baseUrl = '',
        string $method = 'GET',
        string $host = 'localhost',
        string $scheme = 'http',
        int $httpPort = 80,
        int $httpsPort = 443,
        string $pathInfo = '/',
        string $queryString = ''
    )
    {
        $this->setBaseUrl($baseUrl);
        $this->setPathInfo($pathInfo);
        $this->setMethod($method);
        $this->setHost($host);
        $this->setScheme($scheme);
        $this->setHttpPort($httpPort);
        $this->setHttpsPort($httpsPort);
        $this->setPathInfo($pathInfo);
        $this->setQueryString($queryString);
    }

    /**
     * @param string $baseUrl
     */
    public function setBaseUrl(string $baseUrl)
    {
        $this->baseUrl = $baseUrl;
    }

    /**
     * @param string $pathInfo
     */
    public function setPathInfo(string $pathInfo = null)
    {
        if ($pathInfo == null) {
            return;
        }
        $this->pathInfo = $pathInfo;
    }

    /**
     * @param mixed $method
     */
    public function setMethod($method)
    {
        $this->method = $method;
    }

    /**
     * @param mixed $host
     */
    public function setHost($host)
    {
        $this->host = $host;
    }

    /**
     * @param mixed $scheme
     */
    public function setScheme($scheme)
    {
        $this->scheme = $scheme;
    }

    /**
     * @param mixed $httpPort
     */
    public function setHttpPort($httpPort)
    {
        $this->httpPort = $httpPort;
    }

    /**
     * @param mixed $httpsPort
     */
    public function setHttpsPort($httpsPort)
    {
        $this->httpsPort = $httpsPort;
    }

    /**
     * @param mixed $queryString
     */
    public function setQueryString($queryString)
    {
        $this->queryString = (string) $queryString;
    }

    /**
     * @param array $params
     */
    public function setParams(array $params)
    {
        $this->params = $params;
    }

    /**
     * @return mixed
     */
    public function getBaseUrl()
    {
        return $this->baseUrl;
    }

    /**
     * @return mixed
     */
    public function getUri()
    {
        return $this->pathInfo;
    }

    /**
     * @return mixed
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @return mixed
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * @return mixed
     */
    public function getScheme()
    {
        return $this->scheme;
    }

    /**
     * @return mixed
     */
    public function getHttpPort()
    {
        return $this->httpPort;
    }

    /**
     * @return mixed
     */
    public function getHttpsPort()
    {
        return $this->httpsPort;
    }

    /**
     * @return mixed
     */
    public function getQueryString()
    {
        return $this->queryString;
    }

    /**
     * @return array
     */
    public function getParams($name)
    {
        return $this->params[$name] ?? null ;
    }

    public function setParameter($name, $parameter)
    {
        $this->params[$name] = $parameter;
        return $this;
    }
}