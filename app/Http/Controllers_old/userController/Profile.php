<?php
namespace App\Http\Controllers\userController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\User;
use Auth;
use Session;

class Profile extends Controller
{
    public function index()
    {
        $user_id = Auth::user()->id;
        //  dd($user_id);
        $user = User::where('id', '=', $user_id)->get();
        // dd($user);
        return view('user.profile.index', [
            'user' => $user
        ]);
    }

    public function update(Request $request, $id)
    {
        $current_password = User::where('id', '=', $id)->value('password');
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' =>
                'required_with:email_confirm|same:email_confirm|email|max:255|unique:users,email,' .
                $id,
            'email_confirm' => 'string|email|max:255',
            //   'current_password' => ['required', function ($attribute, $value, $fail) use ($id) {
            //     $user =   User::where('id','=',$id)->get();
            //      dd($user);
            //     if (!\Hash::check($value, $user->password)) {
            //         return $fail(__('The current password is incorrect.'));
            //     }
            // }],
            'password' =>
                'required_with:password_confirm|same:password_confirm|string|min:8',
            'password_confirm' => 'string|min:8',
            'Country' => 'required|string|max:255',
            'Title' => 'required|string|max:255',
            'familyName' => 'required|string|max:255',
            'Affilation' => 'required|string|max:255'
        ]);
        // dd($request->password);

        User::where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'familyName' => $request->familyName,
            'Country' => $request->Country,
            'Title' => $request->Title,
            'Affilation' => $request->Affilation,
            'password' => Hash::make($request->password)
        ]);

        if (Hash::make($request->password) != $current_password) {
            Auth::logout();
            Session::flush();

            return redirect('/login');
        } else {
            return redirect()
                ->back()
                ->with('success', "Your Data Have Been Modified Successfully");
        }
    }
}
