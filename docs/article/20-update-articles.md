title: Update Article
---

To update an existing article in YellowCube, create a new `Article` with a `ChangeFlag::UPDATE`
and pass it to `YellowCube/Service::insertArticleMasterData()`.

{{ d["article/25-update-article.php|idio|t|pyg"]['create-article'] }}

Hint
:   Make sure to set the change flag to `ChangeFlag::UPDATE`.

Pass this article to the `insertArticleMasterData` method.

{{ d["article/25-update-article.php|idio|t|pyg"]['insert-article'] }}

Running this code, a `GEN_Response` is returned.

{{ d["article/25-update-article.php|php|idio"] }}

