<?php
namespace App\Http\Traits;
trait general_trait{
    public function getCurrentLang(){
        return app()->getLocale();
    }
    public function returnError($errNum,$msg){

        return response()->json([
            'status'=>false,
            'errNum'=>$errNum,
            'msg'=>$msg,
        ]);
    }
    public function returnSuccess($msg='',$errNum='S000'){

        return response()->json([
            'status'=>true,
            'errNum'=>$errNum,
            'msg'=>$msg,
        ]);
    }
    public function returnData($key,$value,$msg=''){

        return response()->json([
            'status'=>true,
            'errNum'=>'S000',
            'msg'=>$msg,
            $key=>$value
        ]);
    }
    public function returnValidationError($code='E001',$validator){

        return $this->returnError($code,$validator->errors()->first());
    }
    public function returnCodeAccordingToInput($validator){

        $inputs=array_keys($validator->errors()->toArray());
        $code=$this->getErrorCode($inputs[0]);
        return $code;
    }
    public function getErrorCode($input){

        if($input == "name"){
            return 'E001';
        }
        elseif($input == 'password')
        {
            return 'E002';
        }
        elseif($input == 'mobile')
        {
            return 'E003';
        }
        elseif($input == 'id_number')
        {
            return 'E004';
        }
        elseif($input == 'birth_date')
        {
            return 'E005';
        }
        elseif($input == 'agreement')
        {
            return 'E006';
        }
        elseif($input == 'email')
        {
            return 'E007';
        }
        elseif($input == 'city_id')
        {
            return 'E008';
        }

    }
}
?>