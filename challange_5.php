<?php

$sql = "SELECT 
    Customers.*
FROM
    Customers
WHERE
    Customers.customer_id IN (SELECT DISTINCT
        Orders.customer_id
    FROM
        Orders
    WHERE
        Orders.product_name = 'A')
    AND Customers.customer_id IN (SELECT DISTINCT
        Orders.customer_id
    FROM
        Orders
    WHERE
        Orders.product_name = 'B')
    AND Customers.customer_id NOT IN (SELECT DISTINCT
        Orders.customer_id
    FROM
        Orders
    WHERE
        Orders.product_name = 'C')
ORDER BY Customers.customer_id";
