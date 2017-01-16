# Shipwire Demo App

This is a demo application for Shipwire to handle rudimentary management of warehouses, products, orders, and auto-determination of most efficient warehouse to ship.

Limitations:

 * Does not support too complex of orders
 * Does not support editing or deletion of products, warehouses, and orders
 * Does not much error checking or exception handling

This demo was built in a rush, with limited time (only ~1day). Please be gental.

To run this:

 * Download the repo.
 * run ```composer update``` within the root directory.
 * Use the following command to list avaliable options:

```sh
    php bin/shipwire.php
```

This application was build as an interactive command line tool. Quick and dirty, enter values as you go for each individual item.

Example command for listing warehouses:

```sh
    php bin/shipwire.php warehouse:list
```

Output:

```
+------+-------------+-------------------------------------------+
| UUID | Name        | Address                                   |
+------+-------------+-------------------------------------------+
| b750 | San Jose    | 95 Holger Way, San Jose, CA 95134         |
| aaeb | Dallas TX   | 2417 N Haskell Ave, Dallas, TX 75204      |
| 839d | Portland    | 939 SW Morrison St, Portland, OR 97205    |
| 91fc | Kansas City | 9040 N Skyview Ave, Kansas City, MO 64154 |
| ad6d | Miami       | 3401 N Miami Ave, Miami, FL 33127         |
+------+-------------+-------------------------------------------+
```