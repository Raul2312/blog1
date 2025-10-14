<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;




class PostsController extends Controller
{
     public function __construct(){  
        $this->middleware('auth');
    }
    public function index(){
        $posts=Post::all();
        return view('admin.posts')->with('posts',$posts);
    }
    public function showAdd(){
          $categories = Categoria::all();
        return view('admin.post_add')
        -> with('categories',$categories);
    }

    public function store(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string|max:255',
        'content'=>'required|string',
        'img' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:5120',
        'category_id' => 'required',
    ], [
        'title.required' => 'El título es obligatorio',
        'content.required' => 'El contenido es obligatorio',
        'img.image' => 'Debe de ser una imagen valida',
        'category_id.required' => 'Seleccione iuna categoria',
    ]);

    $file = $request->file('img');
    $filename = uniqid() . '.' . $file->getClientOriginalExtension();
    $file->move(public_path('posts/'), $filename);
    //debe mover la carpeta posts en public

    $post = new Post();
    $post->title = $request->title;
    $post->description = $request->description;
    $post->content = $request->content;
    $post->img = $filename;
    $post->categorias_id = $request->category_id;
    $post->likes = 0;
    $post->user_id=Auth::user()->id;
   
    $post->save();

    return redirect()
    ->back()
    ->with('success', 'Post insertado correctamente');
}





}
