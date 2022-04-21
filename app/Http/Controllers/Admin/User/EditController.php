<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;

class EditController extends Controller
{
  public function __invoke(User $user)
  {
      // TODO: Implement __invoke() method.
   //   dd('hey!');
    return view(' admin.user.edit', compact('user'));

  }
}
