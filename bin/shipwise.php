<?php
/**
 * shipwise.php
 *
 * User: Philip G
 * Date: 10/20/15
 */

set_time_limit(0);
require __DIR__.'/../vendor/autoload.php';

$p = new Pimple\Container(require(__DIR__ . '/../gp/shipwise/config/app.php'));
$p['application']->run();
