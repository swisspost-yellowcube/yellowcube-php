title: Order Reply (WAR)
---

Order replies are a list of goods issue confirmations.

GoodsIssue
:   The goods issue confirmation is the answer to a order (WAB). The distance seller receives it after
    the goods have been picked and the goods have been shipped.


For a complete list of the response structure and formats please consult the YellowCube Interface Manual.

### All Orders

To check for all available replies for orders in YellowCube call
`YellowCube\Service::getYCCustomerOrderReply()`.

{{ d["order/35-get-order-reply.php|idio|t|pyg"]['order-reply'] }}

Example response:

{{ d["order/35-get-order-reply.php|php|idio"] }}

An empty array means there are currently no new replies available.

