<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function saveFile($file) {
        $path = $file->store('public');

        return explode('/', $path)[1];
    }

    public function show (Request $request, Profile $profile) {
        return view('profile', compact('profile'));
    }

    public function setup (Request $request) {
        return view('setupForm');
    }

    public function setupPost (Request $request, Profile $profile) {
        $data = $request->validate([
            'id_1' => ['required', 'image'],
            'id_2' => ['required', 'image'],
            'salary' => ['required'],
            'educ_level' => ['required'],
            'current_address' => ['required'],
            'permanent_address' => ['required'],
            'mothers_name' => ['required'],
            'fathers_name' => ['required'],
            'birthday' => ['required'],
        ]);

        $data['id_1'] = $this->saveFile($data['id_1']);
        $data['id_2'] = $this->saveFile($data['id_2']);

        $data['user_id'] = auth()->id();

        Profile::updateOrCreate(['user_id' => auth()->id()], $data);

        alert()->success('Profile saved!');

        return back();
    }
}
