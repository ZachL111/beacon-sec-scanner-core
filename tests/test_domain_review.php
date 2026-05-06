<?php
declare(strict_types=1);
require __DIR__ . "/../src/DomainReview.php";

use Portfolio\DomainReview;
use Portfolio\DomainReviewLens;

$item = new DomainReview(63, 50, 12, 57);
assert(DomainReviewLens::score($item) === 197);
assert(DomainReviewLens::lane($item) === "ship");
