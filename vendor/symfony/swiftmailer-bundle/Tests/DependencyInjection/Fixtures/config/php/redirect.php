<?php
<<<<<<< HEAD

$container->loadFromExtension('swiftmailer', array(
    'delivery_address' => 'single@host.com',
=======
$container->loadFromExtension('swiftmailer', array(
    'delivery_address'   => 'single@host.com',
>>>>>>> master
    'delivery_whitelist' => array('/foo@.*/', '/.*@bar.com$/'),
));
