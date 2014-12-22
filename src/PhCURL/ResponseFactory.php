<?php

namespace PhCURL;


class ResponseFactory
{
    protected $rawResponse = "";
    protected $curlHandle  = '';


    public function generateResponse()
    {
        $response = new Response();
        //is it an error?
        if (curl_errno($this->curlHandle)) {
            $response->setCurlErrorMsg(curl_error($this->curlHandle))
                     ->setCurlErrorNo(curl_errno($this->curlHandle));
            return $response;
        }
        return $response;
    }

    /**
     * @return string
     */
    public function getRawResponse()
    {
        return $this->rawResponse;
    }

    /**
     * @param string $rawResponse
     *
     * @return ResponseFactory Instance
     */
    public function setRawResponse($rawResponse)
    {
        $this->rawResponse = $rawResponse;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurlHandle()
    {
        return $this->curlHandle;
    }

    /**
     * @param string $curlHandle
     *
     * @return ResponseFactory Instance
     */
    public function setCurlHandle($curlHandle)
    {
        $this->curlHandle = $curlHandle;
        return $this;
    }

}