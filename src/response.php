<?php

namespace IDCT\Networking\Soap;

/**
 * Description of response
 *
 * @author james
 */
class Response
{
    const STATUS_TIMEOUT = 'TIMEOUT';
    const STATUS_SUCCESS = 'SUCCESS';
    const STATUS_FAIL = 'FAIL';
    
    private $status;
    private $response;
    private $error;

    /**
     * @param mixed $response
     */
    public function setResponse($response)
    {
        $this->response = $response;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $error
     */
    public function setError($error)
    {
        $this->error = $error;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getError()
    {
        return $this->error;
    }
    
    /**
     * @return boolean
     */
    public function hasError()
    {
        return (is_null($this->error)) ? false : true;
    }
    
    /**
     * @return boolean
     */
    public function isValid()
    {
        return (is_a($this->response, 'stdClass')) ? true : false;
    }

}
