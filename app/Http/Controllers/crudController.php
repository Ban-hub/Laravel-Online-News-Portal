<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Request as Req;


class crudController extends Controller
{
    public function insert_data(){
        $data = Req::except('_token');
        // print_r($data);
        $tbl = decrypt($data['tbl']);
        unset($data['tbl']);
        $data['created_at'] = date('Y-m-d H:i:s');

        if(Req::has('social')){
            $data['social'] = implode(',',$data['social']);
        }
        if(Req::hasFile('image')){
            $data['image'] = $this->upload_image($tbl,$data['image']);
        }
        if(Req::has('category_id')){
            $data['category_id']= implode(',', $data['category_id']);
        }

        DB::table($tbl)->insert($data);
        session::flash('message', 'Data Inserted Successfully');
        return redirect()->back();
    }
    public function update_data(){
        $data = Req::except('_token');
        // print_r($data);
        $tbl = decrypt($data['tbl']);
        unset($data['tbl']);
        $data['updated_at'] = date('Y-m-d H:i:s');
        if(Req::has('social')){
            $data['social'] = implode(',',$data['social']);
        }
        if(Req::hasFile('image')){
            $data['image'] = $this->upload_image($tbl,$data['image']);
        }
        if(Req::has('category_id')){
            $data['category_id']= implode(',', $data['category_id']);
        }
        DB::table($tbl)->where(key($data), reset($data))->update($data);
        session::flash('message', 'Data Updated Successfully');
        return redirect()->back();
    }

    public function upload_image($location,$image_name){
        $name = $image_name->getClientOriginalName();
        $image_name->move(public_path().'/'.$location,date('ymdgis').$name);
        return date('ymdgis').$name;
    }
}
