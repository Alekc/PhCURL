<?php
namespace PhCURL;


class Client implements ClientInterface
{

    protected $url = "";

    /**
     * @var Options
     */
    protected $options;

    protected $_handle;

    protected $parameters = array();

    /**
     * @param Options $options
     */
    function __construct(Options $options = null)
    {
        if (!$options) {
            $options = new Options();
        }
        $this->options = $options;
    }

    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    public function get($url)
    {
        $this->setUrl($url);
        $this->getCurlHandler();
        curl_setopt($this->_handle, CURLOPT_HTTPGET, true);
        return $this->send();
    }

    protected function send()
    {
        $this->setOptions();
        return $this->execute();
    }

    protected function execute()
    {
        $output          = curl_exec($this->_handle);
        $responseFactory = new ResponseFactory();
        $responseFactory->setCurlHandle($this->_handle)
                        ->setRawResponse($output);

        return $responseFactory->generateResponse();

    }

    protected function setOptions()
    {
        //global timeout
        curl_setopt($this->_handle, CURLOPT_TIMEOUT, $this->options->getTimeout());

        //redirection
        curl_setopt($this->_handle, CURLOPT_FOLLOWLOCATION, $this->options->isAllowRedirects());

        //redirection - max redirects
        curl_setopt($this->_handle, CURLOPT_MAXREDIRS, $this->options->getMaxRedirects());

        //track output headers
        curl_setopt($this->_handle, CURLINFO_HEADER_OUT, $this->options->isTrackOutputHeaders());

        //user agent
        curl_setopt($this->_handle, CURLOPT_USERAGENT, $this->options->getUserAgent());

        //enable return transfer
        curl_setopt($this->_handle, CURLOPT_RETURNTRANSFER, $this->options->isEnableReturnTransfer());

        //enable headers in outputs
        curl_setopt($this->_handle, CURLOPT_HEADER, $this->options->isEnableHeadersinResult());
    }

    protected function getCurlHandler()
    {
        if (!is_resource($this->_handle)) {
            $this->_handle = curl_init();
        }
        return $this->_handle;
    }

    /**
     * @return array
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * @param array $parameters
     *
     * @return Client Instance
     */
    public function setParameters($parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }

    /**
     * @param $key
     * @param $value
     *
     * @return $this
     */
    public function addParameter($key, $value)
    {
        $this->parameters[$key] = $value;
        return $this;
    }


    public function __destruct()
    {
        if (is_resource($this->_handle)) {
            curl_close($this->_handle);
        }
    }


}