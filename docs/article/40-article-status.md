title: Article Status
---

To check the current status of an `Article` in YellowCube the `Reference` is needed.

Reference
:   A `Reference` is included in the responses when adding, updating or deactivating an `Article`
    by calling

        $response->getReference()

When a reference is available, the status of an article can be retrieved by passing the reference to
`getInsertArticleMasterDataStatus()`.

Example article status for the reference `1098`:

{{ d["article/45-article-status.php|idio|t|pyg"]['article-status'] }}

{{ d["article/45-article-status.php|php|idio"] }}

