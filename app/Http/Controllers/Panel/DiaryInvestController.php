<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\DiaryInvest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DiaryInvestController extends Controller
{
    private $repository;

    public function __construct(DiaryInvest $diaryInvest)
    {
        $this->repository = $diaryInvest;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $diaryInvests = $this->repository->latest('created_at')->get();

        return view('panel.pages.diary-invest.index', ['diaryInvests' => $diaryInvests]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('panel.pages.diary-invest.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $create = $this->repository->create([
            'description' => $request->description,
            'status' => 1,
            'public' => $request->public,
            'invest_value' => $request->invest_value,
            'users_id' => Auth::user()->id,
            'diary_invest_types_id' => 1,
            'diary_invest_coins_id' => $request->coin
        ]);

        if ($create) {
            return redirect()->route('diary-invest.index');
        }

//        $this->repository->create($request->all());
//
//        return redirect()->route('plans.index');
        //dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
