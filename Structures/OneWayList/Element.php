<?php
namespace Structures\OneWayList;


/**
 * Element of list
 *
 * @author rogal
 */
class Element {
    /**
     * Element value
     */
    public $value;
    
    /**
     * Next element
     */
    public $next;
    
    /**
     * 
     * @param type $val value
     * @param type $next next element
     */
    public function __construct($val, $next = null) {
        $this->value = $val;
        $this->next = $next;
    }
    
}
