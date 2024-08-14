<?php
/*
 * Project: Adapters
 * File: /DataFromAdapterInterface.php
 * File Created: 2024-08-13, 14:50:32
 * Author: Wojciech Sobczak (wsobczak@gmail.com)
 * -----
 * Last Modified: 2024-08-14, 14:43:36
 * Modified By: Wojciech Sobczak (wsobczak@gmail.com)
 * -----
 * Copyright © 2021 - 2024 by vbert
 */
namespace Vbert\Taxonomy\Adapters;

interface DataFromAdapterInterface {
    /**
     * Get data from an external source.
     * 
     * @return array|object|null
     */
    public function getData();

    /**
     * Mapping incoming data to Term.
     * 
     * @return array|object|null
     */
    public function dataToTerm();
}
