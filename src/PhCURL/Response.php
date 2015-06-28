<?php
namespace PhCURL;


class Response
{
    protected $curlPointer;
    protected $headers;
    protected $body;

    function __construct($response, $headers, $curlPointer)
    {
        $this->body    = $response;
        $this->headers = $headers; //todo: check if headers are transmitted
        $this->curlPointer = $curlPointer;
    }

    public function getBody()
    {
        return $this->body;
    }

    public function getAllHeaders()
    {
        return $this->headers;
    }

    public function getAllLastHeaders()
    {
        return $this->getLatestHeaders();
    }

    protected function getLatestHeaders()
    {
        return $this->headers[count($this->headers) - 1];
    }

    /**
     * Returns Last effective URL
     *
     * @return mixed
     */
    public function getLastEffectiveUrl()
    {
        return curl_getinfo($this->curlPointer, CURLINFO_EFFECTIVE_URL);
    }

    public function getHttpCode()
    {
        return curl_getinfo($this->curlPointer, CURLINFO_HTTP_CODE);
    }

    /**
     * Remote time of retrieved document.
     * If unknown -1 is returned.
     *
     * @return mixed
     */
    public function getFileTime()
    {
        return curl_getinfo($this->curlPointer, CURLINFO_FILETIME);
    }

    /**
     * Total transaction time
     *
     * @return mixed
     */
    public function getTotalTime()
    {
        return curl_getinfo($this->curlPointer, CURLINFO_TOTAL_TIME);
    }

    public function getNameLookupTime()
    {
        return curl_getinfo($this->curlPointer, CURLINFO_NAMELOOKUP_TIME);
    }

    public function getConnectTime()
    {
        return curl_getinfo($this->curlPointer, CURLINFO_CONNECT_TIME);
    }

    public function getPreTransferTime()
    {
        return curl_getinfo($this->curlPointer, CURLINFO_PRETRANSFER_TIME);
    }

    public function getStartTransferTime()
    {
        return curl_getinfo($this->curlPointer, CURLINFO_STARTTRANSFER_TIME);
    }

    public function getRedirectCount()
    {
        return curl_getinfo($this->curlPointer, CURLINFO_REDIRECT_COUNT);
    }

    public function getRedirectTime()
    {
        return curl_getinfo($this->curlPointer, CURLINFO_REDIRECT_TIME);
    }

    public function getRedirectUrl()
    {
        return curl_getinfo($this->curlPointer, CURLINFO_REDIRECT_URL);
    }

    public function getPrimaryIp()
    {
        return curl_getinfo($this->curlPointer, CURLINFO_PRIMARY_IP);
    }

    public function getPrimaryPort()
    {
        return curl_getinfo($this->curlPointer, CURLINFO_PRIMARY_PORT);
    }

    public function getLocalIp()
    {
        return curl_getinfo($this->curlPointer, CURLINFO_LOCAL_IP);
    }

    public function getLocalPort()
    {
        return curl_getinfo($this->curlPointer, CURLINFO_LOCAL_PORT);
    }

    public function getTotalBytesUploaded()
    {
        return curl_getinfo($this->curlPointer, CURLINFO_SIZE_UPLOAD);
    }

    public function getTotalSizeDownload()
    {
        return curl_getinfo($this->curlPointer, CURLINFO_SIZE_DOWNLOAD);
    }

    public function getAvgDownloadSpeed()
    {
        return curl_getinfo($this->curlPointer, CURLINFO_SPEED_DOWNLOAD);
    }
    public function getAvgDownloadSpeedInKBytes(){
        return round($this->getAvgDownloadSpeed()/1024);
    }

    public function getAvgUploadSpeed()
    {
        return curl_getinfo($this->curlPointer, CURLINFO_SPEED_UPLOAD);
    }

    public function getHeaderSize()
    {
        return curl_getinfo($this->curlPointer, CURLINFO_HEADER_SIZE);
    }

    public function getSentHeaders()
    {
        return curl_getinfo($this->curlPointer, CURLINFO_HEADER_OUT);
    }

    public function getTotalSizeOfIssuedRequests()
    {
        return curl_getinfo($this->curlPointer, CURLINFO_REQUEST_SIZE);
    }

    public function getSslVerificationResult()
    {
        return curl_getinfo($this->curlPointer, CURLINFO_SSL_VERIFYRESULT);
    }

    public function getDownloadLength()
    {
        return curl_getinfo($this->curlPointer, CURLINFO_CONTENT_LENGTH_DOWNLOAD);
    }

    public function getUploadLength()
    {
        return curl_getinfo($this->curlPointer, CURLINFO_CONTENT_LENGTH_UPLOAD);
    }

    public function getContentType()
    {
        return curl_getinfo($this->curlPointer, CURLINFO_LOCAL_IP);
    }

    public function getPrivateData()
    {
        return curl_getinfo($this->curlPointer, CURLINFO_PRIVATE);
    }
}