<?php
/*
 * Project: Adapters
 * File: /ToTermAdapterInterface.php
 * File Created: 2024-08-13, 14:50:32
 * Author: Wojciech Sobczak (wsobczak@gmail.com)
 * -----
 * Last Modified: 2024-08-13, 15:25:11
 * Modified By: Wojciech Sobczak (wsobczak@gmail.com)
 * -----
 * Copyright © 2021 - 2024 by vbert
 */
namespace Vbert\Taxonomy\Adapters;

use Vbert\Taxonomy\Models\Term;

interface ToTermAdapterInterface {
    /**
     * Mapping incoming data to Term.
     * 
     * @param array|object $data
     * @return Term
     */
    public function toTerm($data);
}
