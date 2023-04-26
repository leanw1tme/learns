<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/*
 * Learns
 * Copyright (C) 2007-2019 The Learns Project Team / Carsten Schmitz
 * All rights reserved.
 * License: GNU/GPL License v3 or later, see LICENSE.php
 * Learns is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See COPYRIGHT.php for copyright notices and details.
 */

/* 
WARNING!!!
ONCE SET, ENCRYPTION KEYS SHOULD NEVER BE CHANGED, OTHERWISE ALL ENCRYPTED DATA COULD BE LOST !!!

*/

$config = array();
$config['encryptionnonce'] = 'b4cfdaad83dc448ec52b376f6d99771079017ed1e302b07d';
$config['encryptionsecretboxkey'] = 'ae52132825d55ac1c36856f76e13991f8373a1fd649bc0de8fcc940a6fc2cf20';
return $config;