<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    //
    protected $table = 'type';
    //插入板块
    public function typeStore($request)
    {
        $data = $request->except('_token');
        $row = $this->insertGetId($data);
        if($row>0){
            return $row;
        }else{
            return null;
        }



    }
    //删除板块
    public function typeDestroy($id)
    {
        return $this->where('id',$id)->delete();
    }

    public function typeUpdate($id,$request)
    {
        return $this->where('id',$id)->update($request);


    }
    //查询单条数据
    public function typeFirst($id)
    {
       $list = $this->where('id',$id)->first();
        if(empty($list)){
            return null;
        }
        $data['name'] = $list->name;
        if($list->type_id>0){
            $li = $this->where('id',$list->type_id)->first();
            $data['pname'] = $li->name;
        }
        $data['pname'] = "顶级板块";
        $num = substr_count($list->path,',');
        $data['path'] = $this->numChina($num).'级分类';
        return $data;
    }

    //查询所有数据
    public function typeGet()
    {
        $list = $this->get();
        if(empty($list)){
            return null;
        }
        //dd($list);
        $data = [];
        $i = 0;
        foreach ($list as $k=>$v){
            //dd($v->name);
            $data[$i]['id'] = $v->id;
            $data[$i]['name'] = $v->name;
            if($v->type_id>0){
                $li = $this->where('id',$v->type_id)->first();
                $data[$i]['pname'] = $li->name;
            }
            $data[$i]['pname'] = "顶级板块";
            $num = substr_count($v->path,',');
            $data[$i]['path'] = $this->numChina($num).'级分类';
            $i++;
        }
        return $data;
    }

    //将数字1,2,3变成汉字一二三
    public function numChina($num)
    {
        $chiNum = array('零', '一', '二', '三', '四', '五', '六', '七', '八', '九');
        $chiUni = array('','十', '百', '千', '万', '亿', '十', '百', '千');

        $chiStr = '';

        $num_str = (string)$num;

        $count = strlen($num_str);
        $last_flag = true; //上一个 是否为0
        $zero_flag = true; //是否第一个
        $temp_num = null; //临时数字

        $chiStr = '';//拼接结果
        if ($count == 2) {//两位数
            $temp_num = $num_str[0];
            $chiStr = $temp_num == 1 ? $chiUni[1] : $chiNum[$temp_num].$chiUni[1];
            $temp_num = $num_str[1];
            $chiStr .= $temp_num == 0 ? '' : $chiNum[$temp_num];
        }else if($count > 2){
            $index = 0;
            for ($i=$count-1; $i >= 0 ; $i--) {
                $temp_num = $num_str[$i];
                if ($temp_num == 0) {
                    if (!$zero_flag && !$last_flag ) {
                        $chiStr = $chiNum[$temp_num]. $chiStr;
                        $last_flag = true;
                    }
                }else{
                    $chiStr = $chiNum[$temp_num].$chiUni[$index%9] .$chiStr;

                    $zero_flag = false;
                    $last_flag = false;
                }
                $index ++;
            }
        }else{
            $chiStr = $chiNum[$num_str[0]];
        }
        return $chiStr;
    }



}
