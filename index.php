<?php

namespace App;

use App\controllers\PaymentController;
use App\requests\WithdrawOperationRequest;

require "controllers/PaymentController.php";
require "requests/WithdrawOperationRequest.php";

$paymentController = new PaymentController();

// api/v1/withdrawal
$paymentController->withdraw(new WithdrawOperationRequest(300));


// api/v1/balance
// api/v1/transfer

