title: Order Reply (WAR)
---

Order replies are goods issue confirmations and can be retrieved for:

[TOC]

GoodsIssue
:   The goods issue confirmation is the answer to a order (WAB). The distance seller receives it after
    the goods have been picked and the goods have been shipped.


For a complete list of the response structure and formats please consult the YellowCube Interface Manual.

### A Specific Order

To check available replies for a specific customer order in YellowCube, a `CustomerOrderNo` is needed.

CustomerOrderNo
:   The `CustomerOrderNo` was set in the `OrderHeader` when creating an customer order.
    It is chosen by the distant seller (shop).

Pass the `CustomerOrderNo` to the method `YellowCube\Service::getYCCustomerOrderReply($customerOrderNo)` to retrieve a
list of `GoodsIssue` objects.

{{ d["order/35-get-order-reply.php|idio|t|pyg"]['order-reply'] }}

Example response:

{{ d["order/35-get-order-reply.php|php|idio"] }}

### All Orders

To retrieve a list of all replies simply omit the `CustomerOrderNo` when calling
`YellowCube\Service::getYCCustomerOrderReply($customerOrderNo)`.
