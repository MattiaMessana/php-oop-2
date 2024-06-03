<?php 

class Category  {
    private string $class;

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($_class) {
        if ($_class !== "cane" && $_class !== "gatto"){
            throw new Exception("puoi scegliere una categoria fra cane o gatto");
        }
        $this->class = $_class;
    }
}