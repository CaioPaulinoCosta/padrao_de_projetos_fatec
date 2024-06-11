<?php
require_once 'Sensor.php';
require_once 'Alarm.php';
require_once 'SMSNotifier.php';

$sensor = new Sensor();
$alarm = new Alarm();
$smsNotifier = new SMSNotifier();

$sensor->addObserver($alarm);
$sensor->addObserver($smsNotifier);

$sensor->intrude();
