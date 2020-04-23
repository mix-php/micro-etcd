<?php

namespace Mix\Micro\Etcd\Service;

/**
 * Class Endpoint
 * @package Mix\Micro\Etcd\Service
 */
class Endpoint implements \JsonSerializable
{

    /**
     * @var string
     */
    protected $name;

    /**
     * @var Request
     */
    protected $request;

    /**
     * @var Response
     */
    protected $response;

    /**
     * @var string[]
     */
    protected $metadata;

    /**
     * Endpoint constructor.
     * @param string $name
     * @param Request|null $request
     * @param Response|null $response
     */
    public function __construct(string $name, Request $request = null, Response $response = null)
    {
        $this->name     = $name;
        $this->request  = $request;
        $this->response = $response;
    }

    /**
     * Get name
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }


    /**
     * Get request
     * @return Value
     */
    public function getRequest(): Value
    {
        return $this->request;
    }

    /**
     * Set request
     * @param Value $request
     */
    public function withRequest(Value $request)
    {
        $this->request = $request;
    }

    /**
     * Get request
     * @return Value
     */
    public function getResponse(): Value
    {
        return $this->response;
    }

    /**
     * Set response
     * @param Value $response
     */
    public function withResponse(Value $response)
    {
        $this->response = $response;
    }

    /**
     * Get metadata
     * @return []string
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * Add or update metadata
     * @param string $id
     * @param string $name
     */
    public function withMetadata(string $key, string $value)
    {
        $this->metadata[$key] = $value;
    }

    /**
     * Json serialize
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [];
        foreach ($this as $key => $val) {
            $data[$key] = $val;
        }
        return $data;
    }

}
