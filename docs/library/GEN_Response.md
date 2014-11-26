title: GEN_Response
---

Most service methods respond with a `YellowCube\GEN_Response` object.
Use the following methods to get information about the response:

 * `$response->getReference()` returns a numeric ID which can be used for status requests.
 * `$response->isSuccess()` returns `true`, if a request was successful, `false` otherwise.
 * `$response->isError()` can be used to check if an error occurred.
 * `$response->getStatusCode()` Get numeric code for the status.
 * `$response->getStatusText()` Get a textual description of the requests status.

Status codes
:   The YellowCube SOAP Interface Manual contains a detailed list of possible status codes.
