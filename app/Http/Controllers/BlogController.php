<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Services\BlogService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{
    protected $blogService;

    public function __construct(BlogService $blogService)
    {
        $this->blogService = $blogService;
    }

    public function index(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'criteria' => 'integer|gt:0', 
        ]);
    
        if ($validator->fails()) 
        {
            return response()->json(['error' => 'The id must be a number greater than 0'], 400);
        }

        $criteria = $request->query('criteria');

        try 
        {
            if ($criteria) 
            {
                $blogs = $this->blogService->search($criteria);
            } else 
            {
                $blogs = $this->blogService->index();
            }
            return response()->json($blogs, 200);
        } catch (\Exception $e) 
        {
            return response()->json(['error' => $e->getMessage()], $e->getCode());
        }        
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|min:1|max:20',
            'content' => 'required|string|min:1|max:50',
            'author' => 'required|string|min:1|max:20',
        ]);

        if ($validator->fails()) 
        {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        try
        {
            $blog = $this->blogService->store($request);
            return response()->json($blog, 201);
        }catch(\Exception $e)
        {
            return response()->json(['error' => $e->getMessage()], $e->getCode());
        }
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|min:1|max:20',
            'content' => 'required|string|min:1|max:50',
            'author' => 'required|string|min:1|max:20',
        ]);

        if ($validator->fails()) 
        {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        $validatorId = Validator::make([$id], [
            'id' => 'integer|gt:0',
        ]);

        if ($validatorId->fails()) 
        {
            return response()->json(['error' => 'The id parameter must be an integer greater than 0'], 400);
        }

        try
        {
            $blog = $this->blogService->update($request, $id);
            return response()->json($blog, 200);
        } catch (\Exception $e) 
        {
            return response()->json(['error' => $e->getMessage()], $e->getCode());
        }
    }

    public function destroy($id)
    {
        $validatorId = Validator::make([$id], [
            'id' => 'integer|gt:0',
        ]);

        if ($validatorId->fails()) 
        {
            return response()->json(['error' => 'The id parameter must be an integer greater than 0'], 400);
        }
        try
        {
            $blog = $this->blogService->destroy($id);
            return response()->json($blog, 200);
        }catch (\Exception $e)
        {
            return response()->json(['error' => $e->getMessage()], $e->getCode());
        }
    }
}
