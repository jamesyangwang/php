<?php

require_once "a.php";
require_once "b.php";
require_once "c.php";

use a\Apple;
use b\Apple as AppleB;

$a = new Apple();
$a->getInfo();

$b = new AppleB();
$b->getInfo();

$c = new \Apple();
$c->getInfo();

