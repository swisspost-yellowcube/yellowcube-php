title: Order Status
---

To check the current status of an customer order in YellowCube a `Reference` is needed.

Reference
:   A `Reference` is included in the responses when creating an `Order`
    by calling

        $response->getReference()

The status of a customer order can be retrieved by calling
`YellowCube\Service::getYCCustomerOrderStatus($reference)` with the `Reference`.

Example order status for the reference `1054`.

{{ d["order/25-get-order-status.php|idio|t|pyg"]['order-status'] }}

A `GEN_Response` is returned which contains status and error or success messages.

{{ d["order/25-get-order-status.php|php|idio"] }}

