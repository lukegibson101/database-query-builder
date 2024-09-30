<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsersStoreRequest;
use App\Http\Requests\UsersUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Faker\Factory;
use Illuminate\Support\Str;


class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
//        $users = DB::table('users')->get();

//        Offset Pagination
//        $users = DB::select('select * from users order by id asc limit 10 offset 10');

//        Cursor pagination
//        $users = DB::select('select * from users where id > 10 order by id asc limit 10');

        $users = DB::table('users')->paginate(10);
//        dd($users);
        return view('users/index', compact('users'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UsersStoreRequest $request)
    {
        $inputs = $request->all();
        $now = Carbon::now();

        $all_data = $request->safe()
            ->merge($inputs)
            ->merge(['created_at' => $now, 'updated_at' => $now])
            ->except(['_token', '_method', 'password_confirmation']);

        DB::table('users')
            ->insert($all_data);

        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = DB::table('users')->find($id);

        return view('users/show', compact('user'));
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
    public function update(UsersUpdateRequest $request, string $id)
    {
        $inputs = $request->all();

        $all_data = $request->safe()
            ->merge($inputs)
            ->except(['_token', '_method', 'password_confirmation']);

        DB::table('users')
            ->where('id', $id)
            ->update($all_data);

        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = DB::table('users')
            ->where('id', $id)
            ->delete();


        return redirect()->back();
    }

    public function created_dummy_users(Request $request){
//        $users = Storage::json('users.json');
//        $time = Carbon::now();
//        foreach ($users as $user){
//            DB::table('users')->insertOrIgnore([
//                'name'=> $user['name'],
//                'email'=> $user['email'],
//                'password'=> Hash::make($user['email']),
//                'created_at'=> $time->addHour(),
//                'updated_at'=> $time->addHour(),
//            ]);
//        }

        $faker = Factory::create();

        for ($i = 0; $i < 100; $i++) {
            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => Hash::make($faker->password(8)),
                'email_verified_at' => now(),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
        return redirect()->back();
    }

    public function delete_dummy_users() {
        DB::table('users')->truncate();
        return redirect()->back();
    }


}
