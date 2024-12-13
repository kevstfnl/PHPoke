<?php
abstract class Controller
{
    private string $method;
    private string $path;


    public function __construct(string $path, string $method = "GET")
    {
        $this->method = strtoupper($method);
        $this->path = $path;
    }

    public function getMethod()
    {
        return $this->method;
    }
    public function getPath()
    {
        return $this->path;
    }
    public abstract function call();
}
