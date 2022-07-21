<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $repository;

    public function __construct(User $user)
    {
        $this->repository = $user;
    }

    public function index()
    {
        $users = $this->repository->latest()->paginate();

        return view('admin.pages.user.index', ['users' => $users]);
    }
}
