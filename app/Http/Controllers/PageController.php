<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\FirstPost;
use App\Models\Posts;
use App\Models\StaticPage;
use Illuminate\Http\Request;



class PageController extends Controller
{
    public function home(Request $request)
    {
        $trendingPosts = Posts::where('trending',1)->get();

        $firstPost = FirstPost::with('post')->find(1)?->post ;


        $newsSectionPosts = Posts::with(['category'])
                ->whereHas('category', function ($query) {
                    // $query->whereIn('category', ['government', 'start up', 'innovation' , 'tax & law']);
                    $query->whereIn('category', ['ceo insider','world']);

                })
                ->latest()
                ->limit(5)
                ->get();


        $justNowPosts = Posts::with(['category'])->whereHas('category', function ($query) {
            $query->whereIn('category', ['listicle', 'ai', 'crypto']);
        })
        ->latest()
        ->limit(5)
        ->get();         

        
        $luxurySectionPosts = Posts::with(['category'])->whereHas('category', function ($query) {
            $query->whereIn('category', [ 'featured']);
        })
        ->latest()
        ->limit(6)
        ->get();


        return view('pages.home',compact( 'trendingPosts'  , 'firstPost' , 'newsSectionPosts' , 'justNowPosts' , 'luxurySectionPosts'));
  
    }

    public function search(Request $request)
    {
        $search = $request['search'];

        if (!$search) {

            $posts = Posts::limit(28)->get();

        } else {

            $posts = Posts::where('title', 'like', '%' . $search . '%')
                ->orWhere('description', 'like', '%' . $search . '%')
                ->with('category')
                ->latest()
                ->get();
        }

        $count = $posts->count();

        return view('pages.search', compact('posts', 'search' , 'count'));
    }

    public function blog($slug)
    {

        $post = Posts::where('slug', $slug)->with('category')->firstOrFail();

        $categoryName = $post->category->category ; 

        $categoryId = $post->category->id ;

        $relatedPosts= Posts::where('category_id' , $categoryId )->where('id' , '!=' , $post->id )->limit(4)->get()  ;

        return view('pages.blog', compact('post',  'categoryName', 'relatedPosts'));
    }

    public function category($category)
    {

        $cat_not_exist = false ;

        $category = strtolower( implode(" ", explode('-', $category) ));

        $posts = Category::where('category' , $category)->with(['posts'=> function($query){
                                                                    $query->latest();
                                                                }])->first();
                                                    
        if ( $posts )
        {
            $cat_not_exist = true ;
        } 

        return view('pages.category', compact('category' ,  'cat_not_exist' , 'posts'));
    }

    public function staticPage($slug)
    {

        $page = StaticPage::where('slug',$slug)->firstOrFail() ;
    
        return view('static',compact('page')) ;
    
    }
    
}
