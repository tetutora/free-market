<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function show()
    {
        // ログインしたユーザーのプロフィール情報を取得
        $user = auth()->user();
        return view('profile.show', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $user = auth()->user();
        $user->update($request->all()); // ユーザー情報を更新
        return redirect()->route('mypage')->with('status', 'プロフィールが更新されました');
    }

    // public function profile()
    // {
    //     // ユーザーがプロフィールを登録しているかチェック
    //     $profile = Auth::user()->profile;

    //     // 既存のプロフィールがある場合は、その情報を表示
    //     return view('profile');
    // }

    // public function storeProfile(Request $request)
    // {
    //     $user = Auth::user();

    //     // プロフィールの新規作成
    //     $profile = new Profile;
    //     $profile->user_id = $user->id;
    //     $profile->name = $request->input('name');
    //     $profile->zipcode = $request->input('zipcode');
    //     $profile->address = $request->input('address');
    //     $profile->building = $request->input('building');

    //     if ($request->hasFile('profile_picture')) {
    //         $path = $request->file('profile_picture')->store('profile_pictures');
    //         $profile->profile_picture = $path;
    //     }

    //     $profile->save();

    //     // プロフィール保存後、リダイレクト
    //     return redirect()->route('profile');
    // }

    // public function updateProfile(Request $request)
    // {
    //     $user = Auth::user();
    //     $profile = $user->profile;

    //     $profile->name = $request->input('name');
    //     $profile->zipcode = $request->input('zipcode');
    //     $profile->address = $request->input('address');
    //     $profile->building = $request->input('building');

    //     if ($request->hasFile('profile_picture')) {
    //         if ($profile->profile_picture) {
    //             // 既存の画像を削除
    //             Storage::delete($profile->profile_picture);
    //         }
    //         $path = $request->file('profile_picture')->store('profile_pictures');
    //         $profile->profile_picture = $path;
    //     }

    //     $profile->save();

    //     return redirect()->route('profile');
    // }
}
