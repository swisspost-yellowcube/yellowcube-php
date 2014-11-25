title: Add Article
---

To add a new article to YellowCube, create a new `Article` and pass it to
`YellowCube/Service::insertArticleMasterData()`.

Warning
:   There is no exception, if an article already exists.

{{ d["article/15-add-article.php|idio|t|pyg"]['create-article'] }}

For a full description of all possible `Article` parameters please consult
the YellowCube SOAP Interface Manual.

Pass this article to the `insertArticleMasterData` method.

{{ d["article/15-add-article.php|idio|t|pyg"]['insert-article'] }}

Running this code, a `GEN_Response` is returned.

{{ d["article/15-add-article.php|php|idio"] }}

