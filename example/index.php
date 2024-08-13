<?php
/*
 * Project: public
 * File: /index.php
 * File Created: 2024-08-12, 21:40:41
 * Author: Wojciech Sobczak (wsobczak@gmail.com)
 * -----
 * Last Modified: 2024-08-13, 15:37:46
 * Modified By: Wojciech Sobczak (wsobczak@gmail.com)
 * -----
 * Copyright © 2021 - 2024 by vbert
 */

require __DIR__ . '/../vendor/autoload.php';

use Symfony\Component\String\Slugger\AsciiSlugger;

use Vbert\Taxonomy\Models\Term;
use Vbert\Taxonomy\Adapters\ToTermFromDBAdapter;

$slugger = new AsciiSlugger();

$data = [];
$data['term_id'] = 12;
$data['name'] = 'Żółte\ liść /świecą @#% od zachodzącego słownika!';
$data['slug'] = strtolower($slugger->slug($data['name']));
$data['term_taxonomy_id'] = 13;
$data['taxonomy'] = 'category';
$data['description'] = '';
$data['parent'] = 0;
$data['count'] = 0;

$term = (new ToTermFromDBAdapter())->toTerm($data);

var_dump([
    'name' => 'Żółte\ liście /świecą @#% od zachodząceGo słońca!',
    'slug' => strtolower($slugger->slug('Żółte\ liście /świecą @#% od zachodząceGo słońca!')),
    'term' => $term,
]);

