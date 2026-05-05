<?php
declare(strict_types=1);
require __DIR__ . "/../src/Policy.php";

use Portfolio\Policy;
use Portfolio\Signal;

$signal_case_1 = new Signal(65, 83, 19, 20, 10);
assert(Policy::score($signal_case_1) === 57);
assert(Policy::classify($signal_case_1) === "review");
$signal_case_2 = new Signal(92, 96, 12, 11, 5);
assert(Policy::score($signal_case_2) === 187);
assert(Policy::classify($signal_case_2) === "accept");
$signal_case_3 = new Signal(92, 90, 19, 22, 11);
assert(Policy::score($signal_case_3) === 110);
assert(Policy::classify($signal_case_3) === "review");
