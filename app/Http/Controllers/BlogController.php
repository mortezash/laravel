<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
	public function index() {
		$posts = Post::latest()->get();
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

		return redirect()->route('blog.index')
			->with('success', 'پست با موفقیت ایجاد شد');
	}

	public function show(Post $blog) {
		return view('blog.show', compact('blog'));
	}

	public function edit(Post $post) {
		return view('blog.edit', compact('post'));
	}

	public function update(Request $request, Post $post) {
		$request->validate([
			'title' => 'required|max:255',
			'content' => 'required',
		]);

		$post->update($request->all());

		return redirect()->route('blog.index')
			->with('success', 'پست ویرایش شد');
	}

	public function destroy(Post $post) {
		$post->delete();

		return redirect()->route('blog.index')
			->with('success', 'پست حذف شد');
	}
}
