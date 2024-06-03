<?php 

class Category  {
    private string $name;

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($_name) {
        // if ($_name !== "cane" || $_name !== "gatto"){
        //     throw new Exception("puoi scegliere una categoria fra cane o gatto");
        // }
        $this->name = $_name;
    }
}