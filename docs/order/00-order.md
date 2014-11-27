title: Customer Orders
---

### Overview

The general workflow when creating customer orders is:

 1. Create a customer order.
 2. Check the customer order status if the order was received correctly.
 3. Check for replies from YellowCube containing Tracking-IDs etc.

 Timeout
 :   For all SOAP requests, a timeout can be set on the `Config`. When creating a customer order
     it can take from **20 sec to 2 hours for a response**. If the timeout expires or the connection
     breaks, poll the customer order status with the `Reference` got when creating the order.

