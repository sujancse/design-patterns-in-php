<?php

require_once 'vendor/autoload.php';

use Creational\Prototype\Author;
use Creational\Prototype\Page;

$author = new Author("Sujan Mahmud");
$page = new Page("Tip of the", "Keep calm and quiet", $author);

$page->addComment("Nice tip, thanks.");

$draft = clone $page;
echo "Dump of the clone. Note that the author is now referencing two objects.\n\n";

print_r($draft);

