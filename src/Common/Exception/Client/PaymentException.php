<?php

namespace Webservicesnl\Common\Exception\Client;

use Webservicesnl\Common\Exception\ClientException;

/**
 * Class ClientPaymentException.
 */
class PaymentException extends ClientException
{
    protected $errorMessage = 'The request cannot be processed, due to sufficient balance/credits';
}
