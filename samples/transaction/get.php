<?php
include "../gateway.php";

$transaction = $gateway->transactions()->get('EX-1601-5255-5380');

var_dump($transaction->status->name);