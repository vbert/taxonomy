<?php
/*
 * Project: taxonomy
 * File: /Taxonomy.php
 * File Created: 2024-08-12, 15:18:40
 * Author: Wojciech Sobczak (wsobczak@gmail.com)
 * -----
 * Last Modified: 2024-08-12, 22:38:20
 * Modified By: Wojciech Sobczak (wsobczak@gmail.com)
 * -----
 * Copyright © 2021 - 2024 by vbert
 */

namespace Vbert\Taxonomy;

class Taxonomy {

    private $slugger;

    /**
     * @param mixed $slugger
     */
    public function __construct($slugger) {
        $this->slugger = $slugger;
    }

    public function run() {
        echo strtolower($this->slugger->slug('Żółte liście świecą od słońca!'));
    }
}