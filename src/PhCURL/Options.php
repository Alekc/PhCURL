<?php

namespace PhCURL;


class Options {
    /**
     * Default user agent
     *
     * @var string
     */
    protected $userAgent = "PhCURL";

    /**
     * @var bool
     */
    protected $enableReturnTransfer = true;

    /**
     * The maximum number of seconds to allow
     * curl functions to execute.
     *
     * @var int
     */
    protected $timeout = 10;

    /**
     * If allow redirects
     *
     * @var bool
     */
    protected $allowRedirects = false;

    /**
     * Maximum redirects allowed
     *
     * @var int
     */
    protected $maxRedirects = 10;

    /**
     * True to track curl output headers.
     *
     * @var bool
     */
    protected $trackOutputHeaders = true;

    /**
     * True to be able to get headers data in response
     *
     * @var bool
     */
    protected $enableHeadersinResult = true;

    /**
     * @return int
     */
    public function getTimeout()
    {
        return $this->timeout;
    }

    /**
     * @param int $timeout
     *
     * @return Options Instance
     */
    public function setTimeout($timeout)
    {
        $this->timeout = $timeout;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserAgent()
    {
        return $this->userAgent;
    }

    /**
     * @param string $userAgent
     *
     * @return Options Instance
     */
    public function setUserAgent($userAgent)
    {
        $this->userAgent = $userAgent;
        return $this;
    }
    /**
     * @return boolean
     */
    public function isAllowRedirects()
    {
        return $this->allowRedirects;
    }

    /**
     * @param boolean $allowRedirects
     *
     * @return Options Instance
     */
    public function setAllowRedirects($allowRedirects)
    {
        $this->allowRedirects = $allowRedirects;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isEnableReturnTransfer()
    {
        return $this->enableReturnTransfer;
    }

    /**
     * @param boolean $enableReturnTransfer
     *
     * @return Options Instance
     */
    public function setEnableReturnTransfer($enableReturnTransfer)
    {
        $this->enableReturnTransfer = $enableReturnTransfer;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxRedirects()
    {
        return $this->maxRedirects;
    }

    /**
     * @param int $maxRedirects
     *
     * @return Options Instance
     */
    public function setMaxRedirects($maxRedirects)
    {
        $this->maxRedirects = $maxRedirects;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isTrackOutputHeaders()
    {
        return $this->trackOutputHeaders;
    }

    /**
     * @param boolean $trackOutputHeaders
     *
     * @return Options Instance
     */
    public function setTrackOutputHeaders($trackOutputHeaders)
    {
        $this->trackOutputHeaders = $trackOutputHeaders;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isEnableHeadersinResult()
    {
        return $this->enableHeadersinResult;
    }

    /**
     * @param boolean $enableHeadersinResult
     *
     * @return Options Instance
     */
    public function setEnableHeadersinResult($enableHeadersinResult)
    {
        $this->enableHeadersinResult = $enableHeadersinResult;
        return $this;
    }

}