<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Http\Controllers\Controller;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $members = Member::all();
        $result = $members->map(function ($member) {
            return $member->name;
        });
        return response()->json($members);

        // dd($result->all());
        // dd($members->pluck('email')->toArray());
        // $collection = collect([1, 2, 3]);
        // return $collection->map(function ($item) {
        //     return $item * 2;
        // });
        // Collection::macro('toUpper', function () {
        //     return $this->map(function (string $value) {
        //         return Str::upper($value);
        //     });
        // });
        // $collection = collect(['first', 'second']);
 
        // $upper = $collection->toUpper();
        // return $upper;

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Member $member)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Member $member)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Member $member)
    {
        //
    }
}
