<?php

use Patterns\Observer\EventDispatcher;
use Patterns\Observer\UserRegisteredListener;

require_once __DIR__ . '/../../vendor/autoload.php';

$eventDispatcher = new EventDispatcher();
$userRegisteredListener = new UserRegisteredListener();
$eventDispatcher->addListener('user.registered', $userRegisteredListener);
$eventDispatcher->dispatch('user.registered', ['id' => 10, 'name' => 'John Doe']);