<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateProductType;
use App\Models\ProductType;
use Illuminate\Http\Request;

class ProductTypeController extends Controller
{
    private $repository;

    public function __construct(ProductType $productType)
    {
        $this->repository = $productType;
    }

    public function index()
    {
        $productTypes = $this->repository->latest()->paginate();

        return view('admin.pages.product-type.index', ['productTypes' => $productTypes]);
    }

    public function create()
    {
        return view('admin.pages.product-type.create');
    }

    public function store(StoreUpdateProductType $request)
    {
        $this->repository->create($request->all());

        return redirect()->route('admin.product-type.index');
    }

    public function edit($slug)
    {
        $productType = $this->repository->where('slug', $slug)->first();

        if(!$productType) {
            return redirect()->back();
        }

        return view('admin.pages.product-type.edit', ['productType' => $productType]);

    }

    public function update(StoreUpdateProductType $request, $slug)
    {
        $productType = $this->repository->where('slug', $slug)->first();

        if(!$productType) {
            return redirect()->back();
        }

        $productType->update($request->all());

        return redirect()->route('admin.product-type.index');
    }

    public function destroy($slug)
    {
        $productType = $this->repository->where('slug', $slug)->first();

        if (!$productType) {
            return redirect()->back();
        }

        $productType->delete();

        return redirect()->route('admin.product-type.index');
    }
}
