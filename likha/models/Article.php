<?php
namespace Likha\Models
{
  class Article
  {
    /**
     * @var array The meta data about the article extracted from the frontmatter.
     */
    public $meta;
    
    /**
     * @var string The content of the article in HTML extracted from the markdown.
     */
    public $content;

    public function __construct(array $meta, string $content)
    {
      $this->meta = $meta;
      $this->content = $content;
    }
  }
}