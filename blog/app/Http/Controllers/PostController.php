<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\PostRequest;
use App\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{

     public function __construct() {
        $this->authorizeResource(Post::class, 'post' );
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(\App\Post $post)
    {
//        $posts = collect([
//
//            [
//
//                'title' => 'Šiandien sninga',
//                'time' => '2019-03-25',
//                'content' => 'Tesktas here',
//
//            ],
//            [
//
//                'title' => 'Saulė šviečia',
//                'time' => '2019-03-26',
//                'content' => 'Tesktas here',
//
//            ],
//            [
//
//                'title' => 'testas',
//                'time' => '2019-03-26',
//                'content' => 'Tekstas here',
//
//            ]
//
//        ]);
//        $posts = DB::table('posts')->get();
        $posts = Post::paginate(10);

        //$this->authorize('view', $post);
        $posts = Post::withCount('comments')->paginate(10);

        return view('posts.index', compact('posts'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()


    {


        $post = new Post();
        $categories = Category::all();

        return view('posts.create', compact('post', 'categories'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        //atlikti validacija
//        $request->validate([
//            'name' => 'required|min:5',
//            'content' => 'required|min:10'
//        ]);
        // jeigu validacija sėkminga, išsaugau įrašą
//        DB::table('posts')->insert([
//            'name' => $request->input('name'),
//            'content' => $request->input('content'),
//            'created_at' => Carbon::now()
//        ]);

        //dd(Auth::user());

        $post = new Post;
        $post->name = $request->input('name');
        $post->content = $request->input('content');


        Auth::user()->posts()->save($post);
        $post->save();

        $post->categories()->attach($request->categories);

        // darau redirectą po išsaugojimo
        $message = 'Post is created successfully';
        return redirect()->route('posts.index')->with('message', $message);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(\App\Post $post)
    {
        //$this->authorize('view', $post);
//        Iš DB pagauna
//        $post = DB::table('posts')->where('id', $id)->first();
//        Iš modelio pagauna
        //$post = \App\Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(\App\Post $post)
    {
//        $post = DB::table('posts')->where('id', $id)->first();


        //$post = \App\Post::find($id);

       // $this->authorize('update', $post);

        return view('posts.edit', compact('post'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(\App\Http\Requests\PostRequest $request, \App\Post $post)
    {
        //atlikti validacija
//        $request->validate([
//            'name' => 'required|min:5',
//            'content' => 'required|min:10'
//        ]);
        // jeigu validacija sėkminga, išsaugau įrašą
//        DB::table('posts')->where('id', $id)->update([
//            'name' => $request->input('name'),
//            'content' => $request->input('content'),
//            'updated_at' => Carbon::now()
//        ]);
       // $post = \App\Post::find($id);

       // $this->authorize('update', $post);

        $post->name = $request->input('name');
        $post->content = $request->input('content');
        $post->save();
        // darau redirectą po išsaugojimo
        $message = 'Post created successfully';
        return redirect()->route('posts.show', ['id' => $post->id])->with('message', $message);

        //cia vietoj id post
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //$post = Post::find($id);

       // $this->authorize('delete', $post);

       $post->delete();
        //Post::destroy(Post $post);
      // DB::table('posts')->delete($id);
        $message = 'Post was deleted successfully';
        return redirect()->route('posts.index')->with('message', $message);
    }
}
