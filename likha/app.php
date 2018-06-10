<?php
namespace Likha
{
  use \Phroute\Phroute\RouteCollector;
  use \Phroute\Phroute\Dispatcher;
  use \Phroute\Phroute\Exception\HttpRouteNotFoundException;
  use \Likha\Engine\View;

  class App
  {
    private $router;

    public function __construct()
    {
      $this->router = new RouteCollector();
    }

    public function addControllers()
    {
      $this->router->get('/', ['Likha\Controllers\IndexController', 'show']);
      
      $this->router-> get('/blog/{slug:c}', ['Likha\Controllers\ArticleController', 'show']);

      $this->router->get('/about', ['Likha\Controllers\PageController', 'about']);

      $this->router->get('/projects', ['Likha\Controllers\PageController', 'projects']);
    }

    public function start()
    {
      $dispatcher = new Dispatcher($this->router->getData());
      try
      {
        $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
      }
      catch(HttpRouteNotFoundException $e)
      {
        $response = new View('404.twig');
      }
      finally
      {
        echo $response;
      } 
    }
    
  }
}



