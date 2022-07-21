<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdatePlanPaymentType;
use App\Models\PlanPaymentType;
use Illuminate\Http\Request;

class PlanPaymentTypeController extends Controller
{
    private $repository;

    public function __construct(PlanPaymentType $planPaymentType)
    {
        $this->repository = $planPaymentType;
    }

    public function index()
    {
        $planPaymentTypes = $this->repository->latest()->paginate();

        return view('admin.pages.plan-payment-type.index', ['planPaymentTypes' => $planPaymentTypes]);
    }

    public function create()
    {
        return view('admin.pages.plan-payment-type.create');
    }

    public function store(StoreUpdatePlanPaymentType $request)
    {
        $this->repository->create($request->all());

        return redirect()->route('admin.plan-payment-type.index');
    }

    public function edit($id)
    {
        $planPaymentType = $this->repository->where('id', $id)->first();

        if(!$planPaymentType) {
            return redirect()->back();
        }

        return view('admin.pages.plan-payment-type.edit', ['planPaymentType' => $planPaymentType]);

    }

    public function update(StoreUpdatePlanPaymentType $request, $id)
    {
        $planPaymentType = $this->repository->where('id', $id)->first();

        if(!$planPaymentType) {
            return redirect()->back();
        }

        $planPaymentType->update($request->all());

        return redirect()->route('admin.plan-payment-type.index');
    }

    public function destroy($id)
    {
        $planPaymentType = $this->repository->where('id', $id)->first();

        if (!$planPaymentType) {
            return redirect()->back();
        }

        $planPaymentType->delete();

        return redirect()->route('admin.plan-payment-type.index');
    }
}
