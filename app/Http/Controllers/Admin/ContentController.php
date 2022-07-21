<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateContent;
use App\Models\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    private $repository;

    public function __construct(Content $content)
    {
        $this->repository = $content;
    }

    public function index()
    {
        $contents = $this->repository->latest()->paginate();

        return view('admin.pages.content.index', ['contents' => $contents]);
    }

    public function create()
    {
        return view('admin.pages.content.create');
    }

    public function store(StoreUpdateContent $request)
    {
        $this->repository->create($request->all());

        return redirect()->route('admin.content.index');
    }

    public function edit($slug)
    {
        $content = $this->repository->where('slug', $slug)->first();

        if(!$content) {
            return redirect()->back();
        }

        return view('admin.pages.content.edit', ['content' => $content]);

    }

    public function update(Request $request, $slug)
    {
        $content = $this->repository->where('slug', $slug)->first();

        if(!$content) {
            return redirect()->back();
        }

        $content->status = $request->status;
        $content->save();

        return redirect()->route('admin.content.index');
    }

    public function destroy($slug)
    {
        $content = $this->repository->where('slug', $slug)->first();

        if (!$content) {
            return redirect()->back();
        }

        $content->delete();

        return redirect()->route('admin.content.index');
    }
}
