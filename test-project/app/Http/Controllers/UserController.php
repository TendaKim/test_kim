<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;

use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function ban(User $user)
    {

        $user->ban_user = true; // Assuming you have a 'banned' boolean field
        $user->save();

        session()->flash('status', 'User banned successfully!');

        return redirect()->route('admin_page');
    }

    public function banban(User $user)
    {

        // Efficient user deletion using model
        $user->delete();

        return redirect()->route('admin_page')->with('status', 'User banned successfully!');
    }
}
