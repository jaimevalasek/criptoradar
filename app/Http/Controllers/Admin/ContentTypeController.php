<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateContentType;
use App\Models\ContentType;
use Illuminate\Http\Request;

class ContentTypeController extends Controller
{
    private $repository;

    public function __construct(ContentType $contentType)
    {
        $this->repository = $contentType;
    }

    public function index()
    {
        $contentTypes = $this->repository->latest()->paginate();

        //dd($contentTypes);

        return view('admin.pages.content-type.index', ['contentTypes' => $contentTypes]);
    }

    public function create()
    {
        return view('admin.pages.content-type.create');
    }

    public function store(StoreUpdateContentType $request)
    {
        $this->repository->create($request->all());

        return redirect()->route('admin.content-type.index');
    }

    public function edit($slug)
    {
        $contentType = $this->repository->where('slug', $slug)->first();

        if(!$contentType) {
            return redirect()->back();
        }

        return view('admin.pages.content-type.edit', ['contentType' => $contentType]);

    }

    public function update(StoreUpdateContentType $request, $slug)
    {
        $contentType = $this->repository->where('slug', $slug)->first();

        if(!$contentType) {
            return redirect()->back();
        }

        $contentType->update($request->all());

        return redirect()->route('admin.content-type.index');
    }

    public function destroy($slug)
    {
        $contentType = $this->repository->where('slug', $slug)->first();

        if (!$contentType) {
            return redirect()->back();
        }

        $contentType->delete();

        return redirect()->route('admin.content-type.index');
    }
}
