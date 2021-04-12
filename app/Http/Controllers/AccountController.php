<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class AccountController extends Controller
{
    public function avatar(Request $request, $id)
    {
        if (!$request->file('file')->isValid())
        {
            return response()->json(['message' => 'Invalid Image']);
        }

        $user = User::find($id);
        $file_name = Str::of($user->nickname)->lower();
        $file_extension = $request->file->extension();
        $new_avatar = strval($file_name.'.'.$file_extension);
        $files = Storage::files('public/images/avatars');
        $flag  = false;

        /**
         * Delete the image if there is such a thing
         */

        if($user->avatar !== null)
        {
            foreach($files as $file)
            {
                if ($file == 'public/images/avatars/'.$user->avatar)
                {
                    Storage::delete('public/images/avatars/'.$user->avatar);
                }
            }
        }

        /**
         * Store new image
         */

        $request->file('file')->storeAs('public/images/avatars', $new_avatar);
        
        $user->avatar = $new_avatar;
        $user->save();

        return response()->json([
            'message' => 'Succes add new avatar',
            'flag' => $flag,
            'avatar' => $user->avatar
        ]);
    }
}
