<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
	public function index() {
		$posts = Post::all();
		return view('blog.index', compact('posts'));
	}

	// فرم ایجاد پست جدید
	public function create() {
		return view('blog.create');
	}

	// ذخیره پست
	public function store(Request $request) {
		$request->validate([
			'title' => 'required|max:255',
			'content' => 'required',
		]);

		Post::create($request->all());
		return redirect()->route('blog.index');
	}
}
