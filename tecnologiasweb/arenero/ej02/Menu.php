<?php
class Menu{
    private $enlaces = array();
    private $titulos =array();

    public function cargar_opcion($link, $title){
        $this->enlaces[] = $link;
        $this->titulos[] = $title;
    }

    public function mostrar(){
        for($i=0; $i<count($this->enlaces); $i++){
            echo '<a href="'. $this->enlaces[$i] .
            '">' . $this->titulos[$i] . '</a>';

            #Muestar en - mientra i sea menor al tamño del arreglo menos 1
            if($i < count($this->enlaces)-1){
                echo ' - ';
            }
        }

    }
}
?>