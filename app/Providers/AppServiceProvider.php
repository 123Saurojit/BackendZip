<?php

namespace App\Providers;

use App\Models\Author;
use App\Models\Category;
use App\Models\FirstPost;
use App\Models\Posts;use App\Models\StaticPage;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->share('allCategory', Category::with(['posts'])->get());

        view()->share('allAuthor', Author::all());

        view()->share('allStatic', StaticPage::all());


        view()->share('trendingPosts', Posts::where('trending',1)->limit(10)->get());

        view()->share('recentPosts', Posts::with('category')->latest()
                                                            ->limit(34)
                                                            ->get());


        view()->share('firstPost', FirstPost::with('post')->find(1)?->post);

        // view()->share('secondPost',FirstPost::with('post')->find(2)?->post ) ;

        view()->share('randomPosts',Posts::inRandomOrder() 
                                    ->limit(4)       
                                    ->get());


        // view()->share('beautyPosts', Posts::with('category')->whereHas('category', function ($query) {
        //                                                     $query->where('category', 'beauty');
        //                                                 })
        //                                                 ->latest()
        //                                                 ->limit(4)
        //                                                 ->get());


        shareCategoryPosts('fashionPosts', 'fashion', 1);
        shareCategoryPosts('ellePosts', 'elle brillante', 4);
        shareCategoryPosts('polPosts', 'news & politics', 1);
        shareCategoryPosts('horoPosts', 'horoscopes', 4);
        shareCategoryPosts('foodPosts', 'food', 4);
        shareCategoryPosts('travPosts', 'travel', 4);
        shareCategoryPosts('beautyPosts', 'beauty', 5);

        shareCategoryPosts('cultPosts', 'culture', 5);

        

        // shareCategoryPosts('fashionPosts', 'fashion', 1);







    }
}
