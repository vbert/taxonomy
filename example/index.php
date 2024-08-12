<?php
/*
 * Project: public
 * File: /index.php
 * File Created: 2024-08-12, 21:40:41
 * Author: Wojciech Sobczak (wsobczak@gmail.com)
 * -----
 * Last Modified: 2024-08-12, 22:36:02
 * Modified By: Wojciech Sobczak (wsobczak@gmail.com)
 * -----
 * Copyright © 2021 - 2024 by vbert
 */

require __DIR__ . '/../vendor/autoload.php';

use Symfony\Component\String\Slugger\AsciiSlugger;

use Vbert\Taxonomy\Taxonomy;

$slugger = new AsciiSlugger();
$taxonomy = new Taxonomy($slugger);
$taxonomy->run();
