<?php 
    class product {
        private $productid;
        private $name;
        private $image;
        private $price;
        private $description;
        private $discount;
        private $subcategorieid;
        private $tags;
        

        function setProduct($id,$name,$image , $price , $description , $discount , $subcategorieid ,$tags){
                $productid = $id;
                $this->name = $name;
                $this->image = $image;
                $this->price = $price;
                $this->description = $description;
                $this->discount = $discount;
                $this->subcategorieid =$subcategorieid;
                $this->tags = $tags;                    
        }

        function setProductName($name){
            $this->name = $name;
        }
        function setProductImage($image){
            $this->image = $image;
        }
        function setProductPrice($price){
            $this->price = $price;
        }
        function setProductDescription($description){
            $this->description = $description;
        }
        function setProductDiscount($discount){
            $this->discount = $discount;
        }
        function setProductSubcategorieid($subcategorieid){
            $this->subcategorieid = $subcategorieid;
        }
        function setProductTag($tag){
            $tags[count($tags)] = $tag;
        }
        function getProductName(){
            return $this->name;
        }
        function getProductPrice(){
            return $this->price;
        }
        function getProductImage(){
            return $this->image;
        }

        function getProductDescription(){
            return $this->description;
        }

        function getProductdDiscount(){
            return $this->discount;
        }

        function getProductdSubcategorieid(){
            return $this->subcategorieid;
        }

        function getProductImage(){
            return $this->image;
        }
        
        function getProductTags(){
            return $this->tags;
        }
    }

    


?>