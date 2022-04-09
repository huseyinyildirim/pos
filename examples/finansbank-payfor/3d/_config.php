<?php

require '../_payment_config.php';

$baseUrl = $hostUrl.'/finansbank-payfor/3d/';

$account = \Mews\Pos\Factory\AccountFactory::createPayForAccount(
    'qnbfinansbank-payfor',
    '085300000009704',
    'QNB_API_KULLANICI_3DPAY',
    'UcBN0',
    \Mews\Pos\Gateways\AbstractGateway::MODEL_3D_SECURE,
    '12345678'
);

$pos = getGateway($account);

$transaction = \Mews\Pos\Gateways\AbstractGateway::TX_PAY;

$templateTitle = '3D Model Payment';
