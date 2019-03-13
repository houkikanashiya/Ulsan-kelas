<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\ClassReview;
class ReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      if (\Auth::check()){
    
        $classreviews = ClassReview::paginate(25);
	     
        return view('reviews.index',[
            'reviews' => $classreviews,
        ]);}else{
            return view('welcome');
        }
       
    
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $classreview = new Classreview;

        return view('reviews.create', [
            'review' => $classreview,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
      $request->user()->reviews()->create([
        'lecturer' => $request->lecturer,
        'class_name' => $request->class_name,
        'rank' => $request->rank,
        'presentation' => $request->presentation,
        'test_review' => $request->test_review,
        'class_review' => $request->class_review,
        'user_id'=> $request->user()->id,
          ]);

        return redirect('/reviews');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
           $classreview = ClassReview::find($id);
       
        return view('reviews.show', [
            'review' => $classreview,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $classreview = ClassReview::find($id);
        
        if (\Auth::id() === $classreview->user_id) {
            
        return view('reviews.edit', [
            'review' => $classreview,
        ]);}else{
            
             return redirect('/reviews');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $classreview = ClassReview::find($id);
        
         $classreview ->lecturer = $request->lecturer;
         $classreview ->class_name = $request->class_name;
         $classreview ->rank = $request->rank;
         $classreview ->presentation = $request->presentation;
         $classreview ->test_review = $request->test_review;
         $classreview ->class_review = $request->class_review;
        $classreview->save();

        return redirect('/reviews');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $classreview = ClassReview::find($id);
        if (\Auth::id() === $classreview->user_id) {
            $classreview->delete();
        }

        return redirect('/reviews');
    }
    
    public function search(Request $request)
    {
    $query = $request->lecturer;
    if (\Auth::check()){
	 
	if ($query) {
		$classreviews = ClassReview::where('lecturer', 'LIKE', "%$query%")->paginate(25);
	}else{  
        $classreviews = ClassReview::paginate(25);
	     }
	return \View::make('reviews.index')->with('reviews', $classreviews);
   }else{
            return view('welcome');
        }
    }
}
