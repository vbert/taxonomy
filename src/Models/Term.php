<?php
/*
 * Project: Models
 * File: /Term.php
 * File Created: 2024-08-13, 8:48:33
 * Author: Wojciech Sobczak (wsobczak@gmail.com)
 * -----
 * Last Modified: 2024-08-14, 14:46:26
 * Modified By: Wojciech Sobczak (wsobczak@gmail.com)
 * -----
 * Copyright © 2021 - 2024 by vbert
 */
namespace Vbert\Taxonomy\Models;

use Symfony\Component\String\Slugger\SluggerInterface;

final class Term {
    /**
     * Term ID.
     * 
     * @var int
     */
    private $termId;

    /**
     * Name of term.
     * 
     * @var string
     */
    private $name = '';

    /**
     * Slug of Term.
     * 
     * @var string
     */
    private $slug = '';

    /**
     * Term Taxonomy ID.
     * 
     * @var int
     */
    private $termTaxonomyId = 0;

    /**
     * The term's taxonomy name.
     * 
     * @var string
     */
    private $taxonomy = '';

    /**
     * Description of term.
     * 
     * @var string
     */
    private $description = '';

    /**
     * Parent term ID.
     * 
     * @var int
     */
    private $parent = 0;

    /**
     * Cached object count for this term.
     * @var int
     */
    private $count = 0;

    /**
     * Constructor.
     * 
     * @param Term|\stdClass|null $term
     */
    public function __construct($term=null) {

        if (!is_null($term)) {
            foreach (get_object_vars($term) as $key => $value) {
    
                if (property_exists($this, $key)) {
                    $this->$key = $value;
                }
            }
        }
    }
}
