title: GEN_Response
---

Most service methods respond with a `YellowCube\GEN_Response` object.
Use the following methods to get information about the response:

 * `$response->getReference()` returns a numeric ID which can be used for status requests.
 * `$response->isError()` can be used to check if an error occurred.
 * `$response->isPending()` returns `true`, if a request object is still processed.
 * `$response->isSuccess()` returns `true`, if a request was successful, `false` otherwise. Warning: This does not mean the requested object is processed, only that the request was successful.
 * `$response->getStatusCode()` Get numeric code for the status.
 * `$response->getStatusText()` Get a textual description of the requests status.

Status codes
:   The YellowCube SOAP Interface Manual contains a detailed list of possible status codes.
