<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $table = 'district';

    public function dissel(Request $request)
    {
        $list = $this->where('upid',$request->input('upid'))->get();
        if($list){
            return $list;
        }else{
            return null;
        }
    }


}
