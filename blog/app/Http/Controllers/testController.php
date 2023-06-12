<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class testController extends Controller
{
    function demoAction(){

//        //Ans.02
//        $posts = DB::table('posts')
//            ->select('excerpt', 'description')
//            ->get();
//
//        dd($posts);



//        //Ans.03
//        $uniqueTitles = DB::table('posts')
//            ->select('title')
//            ->distinct()
//            ->get();
//
//        dd($uniqueTitles);




//        //Ans.04
//        $posts = DB::table('posts')
//            ->where('id', 2)
//            ->first();
//
//        dd($posts->description);



//        //Ans.05
//        $posts = DB::table('posts')
//            ->where('id', 2)
//            ->value('description');
//
//        dd($posts);



//        //Ans.06, Example of first()
//        $post = DB::table('posts')
//            ->where('is_published', true)
//            ->orderBy('created_at')
//            ->first();
//
//        dd($post);



//        //Ans.06, Example of find()
//        $post = DB::table('posts')->find(2);
//
//        dd($post);



//        //Ans.07
//        $posts = DB::table('posts')
//            ->pluck('title');
//
//        dd($posts);



//        //Ans.08
//        $result = DB::table('posts')->insert([
//            'title' => 'X',
//            'slug' => 'X',
//            'excerpt' => 'excerpt',
//            'description' => 'description',
//            'is_published' => true,
//            'min_to_read' => 2
//        ]);
//
//        dd($result);



//        //Ans.09
//        $affectedRows = DB::table('posts')
//            ->where('id', 2)
//            ->update([
//                'excerpt' => 'Laravel 10',
//                'description' => 'Laravel 10'
//            ]);
//
//        dd($affectedRows);



//        //Ans.10
//        $affectedRows = DB::table('posts')
//            ->where('id', 3)
//            ->delete();
//
//        dd($affectedRows);



//        //Ans.11, Example of count()
//        $totalPosts = DB::table('posts')->count();
//
//        dd($totalPosts);



//        //Ans.11, Example of sum()
//        $totalViews = DB::table('posts')->sum('views');
//
//        dd($totalViews);



//        //Ans.11, Example of avg()
//        $averageRating = DB::table('reviews')->avg('rating');
//
//        dd($averageRating);



//        //Ans.11, Example of max()
//        $highestPrice = DB::table('products')->max('price');
//
//        dd($highestPrice);



//        //Ans.11, Example of min()
//        $lowestStock = DB::table('products')->min('stock');
//
//        dd($lowestStock);



//        //Ans.12
//        $users = DB::table('users')
//            ->whereNot('status', 'active')
//            ->get();
//
//        dd($users);



//        //Ans.13, Example of exists()
//        $exists = DB::table('users')
//            ->where('email', 'rafiqulislam474@gmail.com')
//            ->exists();
//
//        dd($exists);



//        //Ans.13, Example of doesntExist()
//        $doesntExist = DB::table('users')
//            ->where('email', 'rafiqulislam474@gmail.com')
//            ->doesntExist();
//
//        dd($doesntExist);



//        //Ans.14
//        $posts = DB::table('posts')
//            ->whereBetween('min_to_read', [1, 5])
//            ->get();
//
//        dd($posts);



//        //Ans.15
//        $affectedRows = DB::table('posts')
//            ->where('id', 3)
//            ->increment('min_to_read');
//
//        dd($affectedRows);
        
    }
}
