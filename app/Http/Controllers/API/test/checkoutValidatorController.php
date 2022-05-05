<?php

namespace App\Http\Controllers\api\test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class checkoutValidatorController extends Controller
{
    public static function validateArray($array){
        if(!is_array($array))
        return errors(300,5100,'invalid products array format');

    }
    public function errors($response_code,$code,$message){
        return response()->json(array('code'=>$code,'message'=>$message),$response_code);
    }
/*


        $products_ids=array_column($products,'id');
        $products_names=array_column($products,'product_name');
        $products_quantity=array_column($products,'quantity');
        $products_unit_amounts=array_column($products,'unit_amount');

       
        $product_model_obj=new Products();

        for($i=0;$i<count($products_ids);$i++){

            $productsArr[] = [
                'product_id' =>$products_ids[$i],
                'product_name'=> $products_names[$i],
                'quantity'=> $products_quantity[$i],
                'unit_amount'=> $products_unit_amounts[$i],
            ];

   

        }
        Products::insert($productsArr);
        
        
//    return  response()->json
//    (array('name'=>$products_names,'quantity'=>$products_quantity,'unit_amounts'=>$products_unit_amounts
//    ,'ids'=>$products_ids,

// ));

*/
    
}
