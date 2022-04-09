<?php

require '../_payment_config.php';

$baseUrl = $hostUrl.'/finansbank-payfor/regular/';

$account = \Mews\Pos\Factory\AccountFactory::createPayForAccount(
    'qnbfinansbank-payfor',
    '085300000009704',
    'QNB_API_KULLANICI_3DPAY',
    'UcBN0'
);

$pos = getGateway($account);

$templateTitle = 'Regular Payment';
