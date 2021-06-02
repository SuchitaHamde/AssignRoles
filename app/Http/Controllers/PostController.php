<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Role;
use App\Models\User;
use Gate;
use Auth;



class PostController extends Controller
{
    public function index(User $user)
    {
        
        $posts = Post::where('published', true)->paginate(20);
        return view('posts.index', compact('posts'));
        
    }

    public function create()
    {
        return view('posts.create');
    }

    public function read($id)
     {
        $post = Post::findOrFail($id);
        return view('posts.read', compact('post'));
     }

    public function store(Request $request)
    {
        
        $data = $request->only('title', 'body');
        $data['slug'] =str_slug($data['title']);
       
        $data['user_id'] = auth()->user()->id;
        $post = Post::create($data);
        
        return back();

    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }
   

    public function update(Post $post, Request $request)
    {
        $data = $request->only('title', 'body');
        $data['slug'] = str_slug($data['title']);
        $post->fill($data)->save();
        return redirect()->route('list_drafts');
    }

    public function drafts(User $user)
    {
        $draftsQuery = Post::where('published', false);
            if(Gate::denies('see-all-drafts')){
                 $draftsQuery = $draftsQuery->where('user_id', auth()->user()->id);
             }
        $posts = $draftsQuery->get();
        return view('posts.drafts', compact('posts'));
        

    }

    public function publish(Post $post)
    {
        $post->published = true;
        $post->save();
        return back();
    }

    

    public function roles(User $user)
    {
        $users = User::all();
        return view('posts.admin.role', with([
            'users' => $users
               
        ]));

    }

    public function assign(User $user)
    {

        // dd($user);
        $roles = Role::all();
        return view('posts.admin.assign', with([
            'user' => $user,
            'roles' => $roles
        ]));
    }
    public function StoreRole(Request $request, User $user)
    {
       
        $user->roles()->sync($request->role);
        return redirect()->route('assign_roles');
       
    }


}