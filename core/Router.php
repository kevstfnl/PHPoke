<?php
class Router
{
    private array $controllers = [];

    public function register(Controller $controllers)
    {
        array_push($this->controllers, $controllers);
    }

    public function init()
    {
        $requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $requestMethod = $_SERVER['REQUEST_METHOD'];
        foreach ($this->controllers as $controller) {
            if ($controller instanceof Controller) {
                if ($controller->getPath() == $requestUri && $controller->getMethod() == $requestMethod) {
                    $controller->call();
                    return;
                }
            }
        }
        include_once("../views/404.php");
    }
}
