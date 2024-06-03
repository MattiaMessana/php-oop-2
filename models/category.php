<?php 

class Category  {
    private string $class;

    /**
     * Set the value of class
     *
     * @return  self
     */ 
    public function setName($_class) {
        if ($_class !== "cane" && $_class !== "gatto"){
            throw new Exception("puoi scegliere una categoria fra cane o gatto");
        }
        $this->class = $_class;
    }

    /**
     * Get the value of class
     */ 
    public function getClass()
    {
        return $this->class;
    }

    public function __toString() 
    {
        return $this->class;
    }
}