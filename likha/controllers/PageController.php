<?php
namespace Likha\Controllers
{
  use \Likha\Engine\View;

  class PageController
  {
    public function about() : View
    {
      return new View('about.twig');
    }

    public function projects() : View
    {
      return new View('projects.twig');
    }
  }
}