<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Category;

class BlogController extends Controller
{
		 public function index(){
   		$data['article']=Article::all();
   		return view('articlelist',$data);
   } 


		public function article($id){
			$article=Article::findorFail($id);
			return view('article',['p'=> $article]);
		}

		public function articles($id=1){
			$article=Article::where('category_id',$id)
			->orderBy('created_at','desc')->paginate(5);

			return view('articles',['articles'=>$article]);
		}	

		public function categories(){
			$categories=Category::all();

			foreach($categories as $category){
				echo "<p> <a href='".route("category",['id'=> $category->id]). "'>" .$category->name."</a></p>";
			}

		}
			public function category($id){
		
		
			$categories=Category::find($id)->categories;
			
			echo $id;
			
		}

		
		public function author($id){
			echo "autori" .$id;

		}
		public function contact(){
			$data=date("d.m.Y");
			$ora=date("H:i:s");
			return view('contact',['data'=>$data,'ora'=>$ora]);
		}
		
}
