<?php
/*
 * Project: Adapters
 * File: /ToTermFromDBAdapter.php
 * File Created: 2024-08-13, 15:17:10
 * Author: Wojciech Sobczak (wsobczak@gmail.com)
 * -----
 * Last Modified: 2024-08-14, 14:56:34
 * Modified By: Wojciech Sobczak (wsobczak@gmail.com)
 * -----
 * Copyright © 2021 - 2024 by vbert
 */
namespace Vbert\Taxonomy\Adapters;

use Symfony\Component\String\Slugger\AsciiSlugger;

use Vbert\Taxonomy\Adapters\DataFromAdapterInterface;

class DataFromDBAdapter implements DataFromAdapterInterface {

    /**
     * @var array|object|null
     */
    private $data;

    private $dataMap = [
        'termId' => 'term_id',
        'name' => 'name',
        'slug' => 'slug',
        'termTaxonomyId' => 'term_taxonomy_id',
        'taxonomy' => 'taxonomy',
        'description' => 'description',
        'parent' => 'parent',
        'count' => 'count'
    ];

    /**
     * Constructor.
     */
    public function __construct() {
        $this->data = $this->getData();
    }

    /**
     * Get data from database.
     * 
     * @return array|object|null
     */
    public function getData() {
        $slugger = new AsciiSlugger();

        // Example data
        $data = [];
        $data['term_id'] = 12;
        $data['name'] = 'Żółte\ liście /świecą @#% od zachodzącego słownika!';
        $data['slug'] = strtolower($slugger->slug($data['name']));
        $data['term_taxonomy_id'] = 13;
        $data['taxonomy'] = 'service';
        $data['description'] = '';
        $data['parent'] = 0;
        $data['count'] = 0;

        return $data;
    }

    /**
     * Mapping incoming data from DB to Term.
     * 
     * @return array|object|null
     */
    public function dataToTerm() {
        $data = is_object($this->data) ? (array) $this->data : $this->data;

        $term = [];
        foreach ($this->dataMap as $property => $key) {

            if (array_key_exists($key, $data)) {
                $term[$property] = $data[$key];
            }
        }

        return (object) $term;
    }
}
