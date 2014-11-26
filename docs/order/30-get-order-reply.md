title: Order Reply (WAR)
---

### Replies for a specific order

To check available replies for an customer order in YellowCube a `CustomerOrderNo` is needed.

CustomerOrderNo
:   The `CustomerOrderNo` was set in the `OrderHeader` when creating an customer order.
    It is chosen by the distant seller (shop).

Pass the `CustomerOrderNo` to the method `YellowCube\Service::getYCCustomerOrderReply($customerOrderNo)` to retrieve a
list of replies (WAR).

{{ d["order/35-get-order-reply.php|idio|t|pyg"]['order-reply'] }}

Example response:

{{ d["order/35-get-order-reply.php|php|idio"] }}

### All replies

To retrieve a list of all replies simply omit the `CustomerOrderNo` when calling
`YellowCube\Service::getYCCustomerOrderReply($customerOrderNo)`.
