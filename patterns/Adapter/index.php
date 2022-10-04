<?php

use Patterns\Adapter\EmailMessage;
use Patterns\Adapter\LogMessage;
use Patterns\Adapter\LogMessageAdapter;
use Patterns\Adapter\Notifier;

require_once __DIR__ . '/../../vendor/autoload.php';

$emailMessage = new EmailMessage();
$logMessage = new LogMessage();
$notifier = new Notifier();
$notifier->notify(new LogMessageAdapter($logMessage));
