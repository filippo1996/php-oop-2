<?php 

namespace App\Models;

class Model
{
    

    public function find( $id  )
    {
        include __DIR__.'/../../api/products/data-products.php';

        //SELECT FROM {$this->table} WHERE id = {$id}

        var_dump($this);

        foreach( $dataProducts[ $this->table ] as $product){
            if($product['id'] === $id)
            {   
                /*
                foreach( $product as $key => $value )
                {
                    if( property_exists( $this, $key ) )    $this->{ $key } = $value;
                }
                */

                return $product;
            }
        }
        return;
        
    }


    public function all()
    {
        include __DIR__.'/../../api/products/data-products.php';

        return $dataProducts[ $this->table ];
        
    }

}