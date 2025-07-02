<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\BlogService;

class BlogController extends Controller
{
    protected $blogService;

    public function __construct(BlogService $blogService)
    {
        $this->blogService = $blogService;
    }

    /**
     * Display a listing of blog posts.
     */
    public function index()
    {
        $posts = $this->blogService->getAllPosts();
        $categories = $this->blogService->getCategories();
        $tags = $this->blogService->getAllTags();

        return view('blog.index', compact('posts', 'categories', 'tags'));
    }

    /**
     * Display the specified blog post.
     */
    public function show($id)
    {
        $post = $this->blogService->getPostById((int) $id);
        
        if (!$post) {
            abort(404, 'Blog post not found');
        }

        $relatedPosts = $this->blogService->getPostsByCategory($post['category']);
        $relatedPosts = array_filter($relatedPosts, function($relatedPost) use ($id) {
            return $relatedPost['id'] != $id;
        });

        return view('blog.show', compact('post', 'relatedPosts'));
    }

    /**
     * Display posts by category.
     */
    public function category($category)
    {
        $posts = $this->blogService->getPostsByCategory($category);
        $categories = $this->blogService->getCategories();
        $tags = $this->blogService->getAllTags();

        if (empty($posts)) {
            abort(404, 'Category not found');
        }

        return view('blog.category', compact('posts', 'categories', 'tags', 'category'));
    }
} 