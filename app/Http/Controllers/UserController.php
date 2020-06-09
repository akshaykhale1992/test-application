<?php

namespace App\Http\Controllers;

use App\City;
use App\Http\Requests\EditUserRequest;
use App\Http\Requests\StoreUserRequest;
use App\State;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    const ALLOWED_SEARCH_FIELDS = ['email', 'mobile'];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate('10');
        return view('userviews.userslist', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user   = null;
        $states = State::pluck('state_name', 'id')->toArray();
        $cities = City::pluck('city_name', 'id')->toArray();
        return view('userviews.create', compact('user', 'states', 'cities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
        $requestData                     = request()->except('_token');
        $requestData['profile_picture']  = $this->uploadProfilePicture(request()->profile_picture, $requestData['email']);
        $requestData['certificate_file'] = $this->uploadCertificate(request()->certificate_file, $requestData['email']);
        User::create($requestData);
        return redirect(Route('users.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $states = State::pluck('state_name', 'id')->toArray();
        $cities = City::pluck('city_name', 'id')->toArray();
        return view('userviews.create', compact('user', 'states', 'cities'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(EditUserRequest $request, User $user)
    {
        $requestData = request()->except('_token');
        unset($requestData['profile_picture']);
        if ($request->hasFile('profile_picture')) {
            $requestData['profile_picture'] = $this->uploadProfilePicture(request()->profile_picture, $requestData['email']);
        }
        unset($requestData['certificate_file']);
        if ($request->hasFile('certificate_file')) {
            $requestData['certificate_files'] = $this->uploadCertificate(request()->certificate_file, $requestData['email']);
        }
        $user->update($requestData);
        Session::put('success', 'User details are saved successfully!');
        return redirect(Route('users.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        Session::put('success', 'User has beed Deleted successfully!');
        return redirect(Route('users.index'));
    }

    private function uploadProfilePicture($file, $email)
    {
        return $file->storeAs('profile_pictures', $email . '-' . time() . '.' . $file->extension());
    }

    private function uploadCertificate($file, $email)
    {
        return $file->storeAs('certificates', $email . '-' . time() . '.' . $file->extension());
    }

    public function findUser($searchField, $searchValue)
    {
        if (in_array($searchField, self::ALLOWED_SEARCH_FIELDS)) {
            return User::where($searchField, $searchValue)->first();
        }
        return abort(404);
    }
}
