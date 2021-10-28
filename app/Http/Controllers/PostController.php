<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\PostRepositoryInterface;

class PostController extends Controller
{
    
    protected $post;

    /**
     * PostController constructor
     * 
     * @param PostRepositoryInterface $post
     */
    public function __construct(PostRepositoryInterface $post)
    {
        $this->post = $post;
    }

    /**
     * List all posts
     * 
     * @return mixed
     */

     public function index()
     {
         $data = [
             'posts' => $this->post->all()
         ];

         return view('templates.posts',$data);
     }

    /**
     * Get Single Post
     * 
     * @param int id
     * 
     * 
     */
    public function find($post)
    {
        $this->post->get($post);
    }

    /**
     * Update Post
     * @param int
     * @param array
     */
    public function update($post,$data_array)
    {
        $this->post->update($post,$data_array);
    }

    /**
     * Delete Post
     * @param int
     */
    public function delete($post)
    {
        $this->post->delete();
    }
}
