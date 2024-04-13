<?php

namespace App\Services;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogService
{
    public function index()
    {   
        $blog =  Blog::all();
        return $blog;
    }

    public function show($id)
    {
        $blog = Blog::find($id);

        if(!$blog)
        {
            // $message = 'Blog not found';
            // return $message;
            throw new \Exception('Blog not found', 404);
        }

        return $blog;
    }

    public function store(Request $request)
    {
        $blog = new Blog();
        $blog->title = $request->input('title'); 
        $blog->content = $request->input('content');
        $blog->author = $request->input('author');
        $blog->save();

        return $blog;
    }

    public function update(Request $request, $id)
    {
        $blog = Blog::find($id);

        if(!$blog)
        {
            // $message = 'Blog not found';
            // return $message;
            throw new \Exception('Blog not found', 404);
        }

        $blog->title = $request->input('title');
        $blog->content = $request->input('content');
        $blog->author = $request->input('author');
        $blog->save();

        return $blog;
    }

    public function destroy($id)
    {
        $blog = Blog::find($id);

        if(!$blog)
        {
            // $message = 'Blog not found';
            // return $message;
            throw new \Exception('Blog not found', 404);
        }

        $blogDeleted = $blog;
        $blog->delete();
        return $blogDeleted;
    }
}
