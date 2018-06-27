<?php
namespace Likha\Controllers
{
  use \Likha\Engine\View;
  use \Likha\Engine\Path;
  use \Likha\Models\Article;
  use \Mni\FrontYAML\Parser;
  use \FilesystemIterator;

  class IndexController
  {
    public function show() : View
    {
      $parser = new Parser();
      $iterator = new FilesystemIterator(Path::absolute('articles'));
      $articles = [];

      foreach($iterator as $item){
        if($item->isFile() && ($item->getExtension() === 'md'))
        {
          $document = $parser->parse(file_get_contents($item->__toString()));
          $articles[$item->getBasename('.md')] = new Article($document->getYAML(), $document->getContent());
        }
      }

      return new View('index.twig', ['articles' => $articles]);
    }
  }
}