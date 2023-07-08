<?php

use Mews\Pos\Gateways\AbstractGateway;

require '_config.php';
$templateTitle = 'Order Status';
require '../../_templates/_header.php';

$ord = $session->get('order');

$order = [
    'id' => $ord ? $ord['id'] : '2023070849CD',
    'currency' => $ord ? $ord['currency'] : 'TRY',
];
$transaction = AbstractGateway::TX_STATUS;
$pos->prepare($order, $transaction);

$pos->status();

$response = $pos->getResponse();
require '../../_templates/_simple_response_dump.php';
require '../../_templates/_footer.php';
