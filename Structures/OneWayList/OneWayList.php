<?php
namespace Structures\OneWayList;

use Structures\OneWayList\Element;

class OneWayList {
    /**
     * First element of list
     */
    public $first;
    
    /**
     * Last element of list
     */
    public $last;
    
    public function __construct() {
        $first = null;
        $last = null;
    }
    
    
    public function add(Element $ele){
        if($this->first){
            $this->last->next = $ele;
            $this->last = $ele;
        } else {
            $this->first = $ele;
            $this->last = $this->first;
        }
    }
    
    public function addSort(Element $ele){
        if($this->first){
            if($this->first->value >= $ele->value){
                $ele->next = $this->first;
                $this->first = $ele;
            }
            elseif($this->last->value <= $ele->value){
                $this->last->next = $ele;
                $this->last = $ele;
            } else {
                $current = $this->first->next;
                while ($current){
                    if($current->next->value > $ele->value){
                        $ele->next = $current->next;
                        $current->next = $ele;
                        break;
                    }
                    $current = $current->next;
                }
            }
        } else {
            $this->first = $ele;
            $this->last = $this->first;
        }
    }
    
    public function remove($elemNr){
        
    }
    
    public function search(){
        
    }
    
    public function sort(){
        
    }

    /**
     * Clear list
     */
    public function clear(){
        $this->first = $this->last = null;
    }
    /**
     * Show all elements of list
     */
    public function showAll(){
        if($this->first){
            $current = $this->first;
            
            while ($current){
                print_r($current->value);
                echo '<br/>';
                $current = $current->next;
            }
        }
        
    }
}
?>
