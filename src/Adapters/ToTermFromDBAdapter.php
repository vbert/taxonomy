<?php
/*
 * Project: Adapters
 * File: /ToTermFromDBAdapter.php
 * File Created: 2024-08-13, 15:17:10
 * Author: Wojciech Sobczak (wsobczak@gmail.com)
 * -----
 * Last Modified: 2024-08-13, 15:33:57
 * Modified By: Wojciech Sobczak (wsobczak@gmail.com)
 * -----
 * Copyright © 2021 - 2024 by vbert
 */
namespace Vbert\Taxonomy\Adapters;

use Vbert\Taxonomy\Models\Term;
use Vbert\Taxonomy\Adapters\ToTermAdapterInterface;

class ToTermFromDBAdapter implements ToTermAdapterInterface {

    /**
     * Mapping incoming data from DB to Term.
     * @param array|object $data
     * @return Term
     */
    public function toTerm($data) {
        $term = [
            'termId' => $data['term_id'],
            'name' => $data['name'],
            'slug' => $data['slug'],
            'termTaxonomyId' => $data['term_taxonomy_id'],
            'taxonomy' => $data['taxonomy'],
            'description' => $data['description'],
            'parent' => $data['parent'],
            'count' => $data['count']
        ];
        $term = (object) $term;

        return new Term($term);
    }
}
