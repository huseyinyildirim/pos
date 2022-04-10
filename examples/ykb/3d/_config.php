<?php

use Mews\Pos\Factory\AccountFactory;
use Mews\Pos\Gateways\AbstractGateway;

require '../_payment_config.php';

$baseUrl = $hostUrl.'/ykb/3d/';

$account = AccountFactory::createPosNetAccount(
    'yapikredi',
    'XXXXXX',
    'XXXXXX',
    'XXXXXX',
    'XXXXXX',
    'XXXXXX',
    AbstractGateway::MODEL_3D_SECURE,
    '10,10,10,10,10,10,10,10'
);

$pos = getGateway($account);

$transaction = \Mews\Pos\Gateways\AbstractGateway::TX_PAY;

$templateTitle = '3D Model Payment';
