<?php

namespace App\Services;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogService
{
    public function index()
{   
    try 
    {
        $blogs = Blog::all();
        if ($blogs->isEmpty()) 
        {
            throw new \Exception('Blogs not found', 404);
        }
        return $blogs;
    } catch (\Exception $e) {
        throw new \Exception('Error getting blogs: ' . $e->getMessage(), 500);
    }
}

public function search($criteria)
{   
    try 
    {
        $blogs = Blog::where('id', $criteria)->get();
        if ($blogs->isEmpty()) 
        {
            throw new \Exception('Blog not found', 404);
        }
        return $blogs;
    } catch (\Exception $e) {
        throw new \Exception('Error getting blogs: ' . $e->getMessage(), 500);
    }
}

    public function store(Request $request)
    {
        try
        {
            $blog = new Blog();
            $blog->title = $request->input('title'); 
            $blog->content = $request->input('content');
            $blog->author = $request->input('author');
            $blog->save();

            return $blog;
        } catch (\Exception $e) 
        {
            throw new \Exception('Error creating blog: ' . $e->getMessage(), 500);
        }
        
    }

    public function update(Request $request, $id)
    {
        $blog = Blog::find($id);

        if(!$blog)
        {
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
            throw new \Exception('Blog not found', 404);
        }

        $blogDeleted = $blog;
        $blog->delete();
        return $blogDeleted;
    }
}
