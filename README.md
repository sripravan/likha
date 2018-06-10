Likha
=====
Likha is a very simple PHP 7 based blogging system.

It uses [**Twig**](https://twig.symfony.com/) for templating. You can find these Twig templates at 'likha/views'. Add, edit or delete these templates to change the theme of your site.

It uses [**Markdown**](https://en.wikipedia.org/wiki/Markdown) for the blog articles. You can put all your aticles in the 'likha/articles' folder. The file name is important because you wil be able to access the article at **{base_url}/blog/{file_name}** by default.

It uses Jekyll inspired, [**YAML Front Matter**](https://jekyllrb.com/docs/frontmatter/) for meta data about your articles like title, date etc. which can be accessed in the twig template.

Tries following the [**MVC design pattern**](https://en.wikipedia.org/wiki/Model%E2%80%93view%E2%80%93controller).

It is a simple system that I have created for my personal website. (https://www.pravan.me). I have stripped this project from all the theme files and additional content that were present in the original project that powers my website.

I have intentionally not included categorizing articles to make it as simple as possible. To index articles that involves categories which may use sub directories in the articles folder you can use the [RecursiveDirectoryIterator Class](http://php.net/manual/en/class.recursivedirectoryiterator.php)

Learn more about Twig Templating [here](https://twig.symfony.com/doc/2.x/templates.html).

Learn more about Markdown [here](https://guides.github.com/features/mastering-markdown/)