<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Services\BlogService;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    protected $blogService;

    public function __construct(BlogService $blogService)
    {
        $this->blogService = $blogService;
    }

    public function index()
    {
            $blog = $this->blogService->index();
            return response()->json($blog);
    }

    public function show($id)
    {
        try
        {
            $blog = $this->blogService->show($id);
            return response()->json($blog);
        }catch(\Exception $e)
        {
            return response()->json(['error' => $e->getMessage()], $e->getCode());
        }
        
    }

    public function store(Request $request)
    {
        $blog = $this->blogService->store($request);
        return response()->json($blog);
    }

    public function update(Request $request, $id)
    {
        // return response()->json($this->blogService->update($request, $id));
        try
        {
            $blog = $this->blogService->update($request, $id);
            return response()->json($blog);
        } catch (\Exception $e) 
        {
            return response()->json(['error' => $e->getMessage()], $e->getCode());
        }
    }

    public function destroy($id)
    {
        try
        {
            $blog = $this->blogService->destroy($id);
            return response()->json($blog);
        }catch (\Exception $e)
        {
            return response()->json(['error' => $e->getMessage()], $e->getCode());
        }
        // return response()->json($this->blogService->destroy($id));
    }
}
