<?php 
namespace App\Repositories;

use App\Comment;

class CommentRepository implements CommentRepositoryInterface
{
    public function all()
    {
        return Comment::all();
    }
}
?>