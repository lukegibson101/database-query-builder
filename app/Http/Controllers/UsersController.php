<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;


class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
//        CREATE
//        DB::table('users')->insert([
//            'name' => 'John',
//            'email' => 'john@email.com',
//            'password' => Hash::make('secret123@@'),
//        ]);

//        READ
//        $users = DB::table('users')->get();
//        dd($users);

//        UPDATE
//        $result = DB::table('users')->where('id', 1)->update([
//            'created_at' => Carbon::now(),
//            'updated_at' => Carbon::now(),
//        ]);
//        dd($result);

//        DELETE
//        $result = DB::table('users')->where('id', 1)->delete();
//        $result = DB::table('users')->truncate();

        if (Storage::exists('users')) {
            $users = Storage::json('public/users.json');
        } else {
            return "File not found!";
        }

    dd($users);

    foreach($users as $user) {
        DB::table('users')->insert([
            'name' => $user['name'],
            'email' => $user['email'],
            'password' => Hash::make($user['password']),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }


        return redirect('/');
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
