<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use App\Story;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use DB;

class StoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Factory|View
     */
    public function index()
    {
        if(Auth::check()) {
            $stories = Story::where('published', '1')->get();
            return view('stories.index', ['stories'=>$stories]);
        }
        return Redirect::to("/")->withErrors('Oops - You do not have access! To view this page please login or create an account.');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::check()) {
            return view('stories.create');
        }
        return Redirect::to("/")->withErrors('Oops - You do not have access! To view this page please login or create an account.');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'genre'=>'required',
            'blurb'=>'required',
            'cover_image'=>'image',
            'file_upload'=>'mimes:pdf',
            'published'=>'required'
        ]);

        $cover_image = $request->file('cover_image');
        if(!$cover_image == null) {
            $new_cover = rand().time() . '.' . $cover_image->getClientOriginalExtension();
            $cover_image->move(storage_path('app/public/cover_images'), $new_cover);
        }else{
            $new_cover = 'singingintrain.jpg';
        }

        $file_upload = $request->file('file_upload');
        if(!$file_upload == null) {
            $new_file_upload = rand() . time() . '.' . $file_upload->getClientOriginalExtension();
            $file_upload->move(storage_path('app/public/story_files'), $new_file_upload);
        }

        $story = new Story([
            'author_id'=>Auth()->user()->id ,
            'title'=>$request->get('title'),
            'genre'=>$request->get('genre'),
            'blurb'=>$request->get('blurb'),
            'cover_image'=>$new_cover,
            'content'=>$request->get('content'),
            'file_upload'=>$new_file_upload,
            'published'=>$request->get('published'),
        ]);
        $story->save();

        if($story->published == "0") {
            return redirect('/account')->with('success', 'Your story has been saved as a draft!');
        }else{
            return redirect('/account')->with('success', 'Yay! Your story has been published!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $story = Story::find($id);
        return view('stories.show', ['story'=>$story]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $story = Story::find($id);
        return view('stories.edit', compact('story'));
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
        $request->validate([
            'title'=>'required',
            'genre'=>'required',
            'blurb'=>'required',
            'content'=>'required',
            'published'=>'required'
        ]);
        $story = Story::find($id);
            $story->author_id = Auth()->user()->id;
            $story->title = $request->get('title');
            $story->genre = $request->get('genre');
            $story->blurb = $request->get('blurb');
            $story->content= $request->get('content');
            $story->published = $request->get('published');

            $story->save();
            if($story->published == "0") {
                return redirect('/account')->with('success', 'Your story has been saved as a draft!');
            }else{
                return redirect('/account')->with('success', 'Yay! Your story has been published!');
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $story = Story::find($id);
        $story->delete();
        return redirect('/account')->with('success', 'Your story has been deleted!');
    }


    /**
     * search function
     */

    public function search(Request $request){
        $search = $request->get('search');
        $stories = DB::table('stories')->where('title', 'like', '%'.$search.'%')
            ->get();

        return view('stories.index', ['stories'=>$stories]);
    }
}
