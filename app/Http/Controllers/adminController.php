<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Request as Req;

class adminController extends Controller
{
    //
    public function index(){
        return view ('backend.index');
    }

    public function view_category(){
        $data = DB::table('categories')->get();
        return view ('backend.categories.category', ['data'=>$data]);
    }

    public function edit_category($id){
        $singleData = DB::table('categories')->where('cid',$id)->first();
        if($singleData == NULL){
            return redirect('view-category');
        }
        $data = DB::table('categories')->get();
        return view('backend.categories.edit-category', ['data'=>$data, 'singleData'=>$singleData]);
    }

    public function multiple_delete(){
        $data =  Req::except('_token');
        if($data['bulk-action']==0){
            session::flash('message','Please select the action you want to perform');
            return redirect()->back();
        }
        $tbl = decrypt($data['tbl']);
        $tblid = decrypt($data['tblid']);
        if(empty($data['select-data'])){
            session::flash('message','Please select the data you want to delete');
            return redirect()->back();
        }
        $ids = $data['select-data'];
        foreach($ids as $id){
            DB::table($tbl)->where($tblid,$id)->delete();
        }
        session::flash('message','Data deleted successfully');
        return redirect()->back();
    }

    public function settings(){
        $data = DB::table('settings')->first();
        if($data){
            $data->social = explode(',', $data->social);
        }
        // $data = (array)$data;
        // print_r($data);
        // exit();
        return view('backend.settings', ['data' => $data]);
    }

    public function add_post(){
        $categories = DB::table('categories')->get();
        return view('backend.posts.add-post',['categories'=>$categories]);
    }

    public function all_posts(){
        $posts = DB::table('posts')->orderby('pid','DESC')->paginate(8);
        foreach($posts as $post){
            $categories = explode(',', $post->category_id);
            foreach ($categories as $cat){
                $post_cat = DB::table('categories')->where('cid',$cat)->value('title');
                $post_categories[] = $post_cat;
                $post_cat = implode(', ',$post_categories);
            }
            $post->category_id = $post_cat;
            $post_categories = [];
        }
        $published = DB::table('posts')->where('status','publish')->count();
        $all_posts = DB::table('posts')->count();
        return view('backend.posts.all-posts',['posts'=>$posts,'published'=>$published,'all_posts'=>$all_posts]);
    }

    public function edit_post($id){
        $categories = DB::table('categories')->get();
        $data = DB::table('posts')->where('pid',$id)->first();
        $postCat = explode(',',$data->category_id);
        return view('backend.posts.edit',['data'=>$data, 'categories'=>$categories, 'postCat'=>$postCat]);
    }

    public function add_page(){
        return view('backend.pages.add-page');
    }

    public function all_pages(){
        $posts = DB::table('pages')->get();
        $published = DB::table('pages')->where('status','publish')->count();
        $all_posts = DB::table('pages')->count();
        return view('backend.pages.all-pages',['posts'=>$posts,'published'=>$published,'all_posts'=>$all_posts]);
    }

    public function edit_page($id){
        $data = DB::table('pages')->where('page_id',$id)->first();
        return view('backend.pages.edit',['data'=>$data]);
    }
    public function messages(){
        $data = DB::table('messages')->orderby('mid','DESC')->paginate(20);
        return view('backend.messages',['data'=>$data]);
    }
    public function add_adv(){
        return view('backend.advertisement.add-adv');
    }
    public function all_advs(){
        $data = DB::table('advertisements')->orderby('aid','DESC')->get();
        return view('backend.advertisement.all-advs',['data'=>$data]);
    }
    public function edit_adv($id){
        $data = DB::table('advertisements')->where('aid',$id)->first();
        return view('backend.advertisement.edit-adv',['data'=>$data]);
    }
}
