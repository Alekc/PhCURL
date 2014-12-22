<?php
namespace PhCURL;


class Response
{
    protected $curlErrorMsg = '';
    protected $curlErrorNo  = 0;

    /**
     * @return string
     */
    public function getCurlErrorMsg()
    {
        return $this->curlErrorMsg;
    }

    /**
     * @param string $curlErrorMsg
     *
     * @return Response Instance
     */
    public function setCurlErrorMsg($curlErrorMsg)
    {
        $this->curlErrorMsg = $curlErrorMsg;
        return $this;
    }

    /**
     * @return int
     */
    public function getCurlErrorNo()
    {
        return $this->curlErrorNo;
    }

    /**
     * @param int $curlErrorNo
     *
     * @return Response Instance
     */
    public function setCurlErrorNo($curlErrorNo)
    {
        $this->curlErrorNo = $curlErrorNo;
        return $this;
    }


}