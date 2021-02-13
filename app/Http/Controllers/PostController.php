<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\Image;
use App\Category;
use App\Post;
class PostController extends Controller
{
    public function __construct(){
    	return $this->middleware('auth');
    }
    public function create(){
    	$categories = Category::pluck('category_name','id');
    	$countries=Country::pluck('name','id');
    	return view('front.addPost',compact('categories'),compact('countries'));
    }
     public function store(Request $req){
// to create new post: data is the infor from user plus user's id eno min zedo lal post
        // go to Post.php to make sure that columns are fillable.
        $post= Post::create($req->all() + ['user_id'=>$req->user()->id] );

        foreach($post->images as $img) {
        	$filename= $img->store('public/images');
        	$image= new Image();
        	$image->image= basename($filename);
        	$post->images()->save($image);
        	
        }

        return back()->with('Success','Post is added Successfully');

    }
}
