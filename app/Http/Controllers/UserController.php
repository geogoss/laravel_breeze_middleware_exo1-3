<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    

    public function destroy ($id, $users) {
        $this->authorize('admin', $users);
        $delete = User::find($id);
        $delete->delete();
        return redirect()->back();
    }
}



