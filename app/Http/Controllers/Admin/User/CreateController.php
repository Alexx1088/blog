<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
  public function __invoke()
  {
      // TODO: Implement __invoke() method.
   //   dd('hey!');
    return view(' admin.user.create');

  }
}
