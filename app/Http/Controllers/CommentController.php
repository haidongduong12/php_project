<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    // public function index($product_id)
    // {

    //     $comments = Comment::where('product_id', $product_id)->get();
    //     return view('productDetails', compact('comments'));
    // }
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'rating' => 'required|integer|min:1|max:5',
            'review' => 'required|string|max:1000',
        ]);

        // Get the currently authenticated user
        $user = Auth::user();

        // Check if the user has a completed order for the product
        $hasPurchased = Order::where('user_id', $user->id)
            ->where('status', 'Completed')
            ->whereHas('items', function ($query) use ($request) {
                $query->where('product_id', $request->product_id);
            })
            ->exists();

        if (!$hasPurchased) {
            return redirect()->back()->with('error', 'You can only review products you have purchased.');
        }

        // Check if the user has already commented on this product
        $hasCommented = Comment::where('user_id', $user->id)
            ->where('product_id', $request->product_id)
            ->exists();

        if ($hasCommented) {
            return redirect()->back()->with('error', 'You have already reviewed this product.');
        }

        // Create and save the comment
        Comment::create([
            'user_id' => $user->id,
            'product_id' => $request->product_id,
            'rating' => $request->rating,
            'review' => $request->review,
        ]);

        return redirect()->back()->with('success', 'Your review has been submitted successfully.');
    }
    public function show()
    {
        $comments = Comment::all();
        return view('dashboard.comment.comments', compact('comments'));
    }
    public function edit($id)
    {
        $comment = Comment::find($id);
        return view('dashboard.comment.edit', compact('comment'));
    }
    public function update(Request $request, $id)
    {

        // Find the comment by ID
        $comment = Comment::findOrFail($id);

        // Update the comment with new data
        $comment->status = $request->input('statusComment');

        // Save the updated comment to the database
        $comment->save();

        // Redirect back to the comments page with a success message
        return redirect()->route('comment.showDash')->with('success', 'Comment updated successfully.');
    }

    public function destroy($id)
    {
        $comment = Comment::findOrFail($id);
        if ($comment) {
            $comment->delete();
            return redirect()->route('comment.showDash')->with('success', 'Comment delete successfully.');
        } else {
            return redirect()->route('comment.showDash')->with('errors', 'Comment delete fails.');
        }
    }
}
