<?php

use Payum\Core\PayumBuilder;
use Payum\Core\Payum;

/** @var Payum $payum */
$payum = (new PayumBuilder())
    ->addDefaultStorages()

    ->addGateway('paypal_express_checkout', [
        'factory' => 'paypal_express_checkout'
        'username'  => 'rafael.peralta.blanco@gmail.com',
        'password'  => 'rafaelpaypal96',
        'signature' => 'change it',
        'sandbox'   => true,
    ])

    ->getPayum()
;