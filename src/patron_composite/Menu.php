<?php

require_once('MenuComponent.php');

class Menu extends MenuComponent {
    private $p_listMenu;
    private $p_name ;
    private $p_description;

    public function __construct($name, $description){
        $this->p_name = $name;
        $this->p_description = $description;
        $this->p_listMenu = new ArrayObject(array());
    }

    public function getName(){
        return $this->p_name;
    }

    public function getDescription(){
        return $this->p_description;
    }

    public function addComponent($item=null){
        $this->p_listMenu->append($item);
    }

   public function getChild($idx){
       return $this->p_listMenu->offsetGet($idx);
   }

    public function print(){
        // https://www.php.net/manual/es/language.types.string.php para ver porque funciona el escapado de esta cadena
        // En este caso, usa sintaxis simple para analisis de variable
        $menu = "<h3>$this->p_name - $this->p_description</h3>";
        echo $menu;
        $iterator = $this->getIterator();
        echo '<ul>';
        while($iterator->valid()){
            $unMenu = $iterator->current();
            echo $unMenu->print();
            $iterator->next();
        }
        echo '</ul>';
        
    }

    public function getIterator(){
        return $this->p_listMenu->getIterator();
    }

    public function getCost(){
        $subtotal = 0;
        $iterator = $this->getIterator();
        while($iterator->valid()){
            $unMenu = $iterator->current();
            $subtotal += $unMenu->getCost();
            $iterator->next();
        }

        return $subtotal;
    }

}
?>