title: Delete Article
---

To delete an existing article in YellowCube, create a new `Article` with a `ChangeFlag::DELETE`
and pass it to `YellowCube/Service::insertArticleMasterData()`.

Hint
:   Make sure to set the change flag to `ChangeFlag::DELETE`.

{{ d["article/35-delete-article.php|idio|t|pyg"]['create-article'] }}

Pass this article to the `insertArticleMasterData` method.

{{ d["article/35-delete-article.php|idio|t|pyg"]['insert-article'] }}

Running this code, a `GEN_Response` is returned.

{{ d["article/35-delete-article.php|php|idio"] }}

