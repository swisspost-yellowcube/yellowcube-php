<?php
require __DIR__ . '/../../vendor/autoload.php';

use YellowCube\ART\Article;
use YellowCube\ART\ChangeFlag;

$article = new Article();

#  Use ChangeFlag::INSERT, ChangeFlag::UPDATE or ChangeFlag::DELETE.
$article->setChangeFlag(ChangeFlag::INSERT);

