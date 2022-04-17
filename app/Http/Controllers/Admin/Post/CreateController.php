<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;

class CreateController extends Controller
{
  public function __invoke()
  {
      // TODO: Implement __invoke() method.

      $categories = Category::all();
 //dd($categories);
    return view(' admin.post.create', compact('categories'));

  }
}
