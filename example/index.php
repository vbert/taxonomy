<?php
/*
 * Project: public
 * File: /index.php
 * File Created: 2024-08-12, 21:40:41
 * Author: Wojciech Sobczak (wsobczak@gmail.com)
 * -----
 * Last Modified: 2024-08-14, 14:33:08
 * Modified By: Wojciech Sobczak (wsobczak@gmail.com)
 * -----
 * Copyright © 2021 - 2024 by vbert
 */

require __DIR__ . '/../vendor/autoload.php';

use Vbert\Taxonomy\Models\Term;
use Vbert\Taxonomy\Adapters\DataFromDBAdapter;

$dataFromDB = new DataFromDBAdapter();
$term = new Term($dataFromDB->dataToTerm());

var_dump([
    'term' => $term,
]);

