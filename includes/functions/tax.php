<?php


class tax {
    
        private $tax_value;
            
            
    
    public function setTax($value){
         $this->tax_value=$value;
       }
    
   
    public function getTax(){
        echo $this->tax_value;
        }
    
    
    public function updateTax($newValue){
        $this->tax_value=$newValue;
        echo "updated succsesfuly";
    }
    
    public function deleteTax(){
        $this->tax_value=null;
        echo "deleted succsesfuly";
        
    }
    
    

}


  ?>
