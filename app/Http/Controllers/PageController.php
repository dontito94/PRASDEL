<?php

namespace App\Http\Controllers;

use App\Job;
use App\JobCategory;
use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Profile;
use App\Education;
use App\Work;

class PageController extends Controller
{
   public function index(Request $request) {

       $categories = JobCategory::all();
       $cat = $request->input('cat');
       $search = $request->input('search');


       if($request->has('cat') && $cat != 'all') {
           if($request->has('search') && $search != null) {
               $jobs = Job::where('category_id', $cat)
                   ->where(function ($query) use ($search) {
                       $query->where('title', 'like', '%'.$search.'%')
                           ->orWhere('body', 'like', '%'.$search.'%');
                   })->orderBy('created_at', 'desc')
                   ->paginate(5)
                   ->appends([
                       'cat' => request('cat'),
                       'search' => request('search')
                   ]);
           } else {
               $jobs = Job::where('category_id', $cat)
                   ->orderBy('created_at', 'desc')
                   ->paginate(5)
                   ->appends([
                       'cat' => request('cat')
                   ]);
           }
       } else {
           $jobs = Job::where('title', 'like', '%'.$search.'%')
               ->orWhere('body', 'like', '%'.$search.'%')
               ->orderby('created_at', 'desc')
               ->paginate(5)
               ->appends([
                   'search' => request('search')
               ]);
       }

       return view('welcome',compact('categories', 'jobs', 'cat', 'search'));
	}



	public function aboutUs()
    {
        return view('pages.about_us');
    }

    //welcome company
    public function  welcomeCompany()
    {
        return view('client.company_welcome');
    }

    //welcome candidate
    public function welcomeCandidate()
    {
        return view('freelancer.candidate_welcome');
    }

}
