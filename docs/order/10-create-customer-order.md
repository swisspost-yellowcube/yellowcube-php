title: Create Customer Order (WAB)
---

For each customer order, the distance seller will send a purchase order to YellowCube.
For all ordered articles, a corresponding article must be submitted to the master data and
physically transferred to the warehouse.

In addition, the available stock (YAFS stock) must be sufficient. Otherwise, the order is rejected.
The distance seller receives a goods issue confirmation (WAR) from YellowCube whenever a WAB is issued.

-----------------------------


An order contains the following information:

[TOC]

Parameter formats
:   For a comprehensive documentation of parameters and formats, please consult the
    YellowCube SOAP Interface manual.

#### Order Header

The `OrderHeader` is mandatory and contains identifiers for the depositor and the customer order.
{{ d["order/15-create-customer-order.php|idio|t|pyg"]['order-header'] }}

#### Partner Address

{{ d["order/15-create-customer-order.php|idio|t|pyg"]['partner-address'] }}

#### Order Position

The `PosNo` is a incrementing integer like 10, 20, 30.

{{ d["order/15-create-customer-order.php|idio|t|pyg"]['order-position'] }}

#### Additional Services

For a complete list of additional services, please consult the YellowCube Interface Manual.

{{ d["order/15-create-customer-order.php|idio|t|pyg"]['additional-services'] }}

#### Order Documents

You can add documents to your order by using the `addOrderDocument()` method.
It is advised to use the `Doc::fromFile()` factory method which reads the provided file
and base64-encodes it.

{{ d["order/15-create-customer-order.php|idio|t|pyg"]['order-document'] }}

-----------------------------

To create a customer order, create an `Order` object and pass it to
`YellowCube\Service::createYCCustomerOrder($order)`.

{{ d["order/15-create-customer-order.php|idio|t|pyg"]['create-order'] }}

When running this code a `GEN_Response` is returned.

{{ d["order/15-create-customer-order.php|php|idio"] }}

The reference can be used to receive a customer order status.
