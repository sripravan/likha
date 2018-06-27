<?php
namespace Likha\Engine
{
  use \Twig_Environment;
  use \Twig_Loader_Filesystem;
  
  class View
  {
    /**
     * @var string The filename of the view to be displayed.
     */
    public $filename;
    
    /**
     * @var array Any variables you want to pass to the view template.
     */
    public $variables;

    /**
     * @var Twig_Environment A twig environment used to render thev views.
     */
    private $twig;

    public function __construct(string $filename, array $variables = [])
    {
      $this->filename = $filename;
      $this->variables = $variables;
      $this->twig = new Twig_Environment(new Twig_Loader_Filesystem(Path::absolute('views')));
    }

    public function __toString()
    {
      return $this->twig->render($this->filename, $this->variables);
    }
  }
}