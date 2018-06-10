<?php
namespace Likha\Controllers
{
  use \Likha\Engine\View;

  class PageController
  {
    public function about()
    {
      return new View('about.twig');
    }

    public function projects()
    {
      return new View('projects.twig');
    }
  }
}