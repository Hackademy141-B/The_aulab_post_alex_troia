<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Mail\CareerRequestMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except('home');
    }
    public function home() {
        $articles = Article::where('is_accepted' , true)->orderBy('created_at', 'desc')->take(4)->get();
        return view('welcome' , compact('articles'));
    }
    public function careers(){
        return view ('careers');
    }

    public function careersSubmit(Request $request){
        $request->validate([
            'role' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $user = Auth::user();
        $role = $request->role;
        $email = $request->email;
        $message = $request->message;
        $info = compact('role', 'email', 'message');

        Mail::to('admin@theaulabpost.it')->send(new CareerRequestMail($info));
        switch ($role) {
            case 'admin':
                $user->is_admin = NULL;
                break;
    
            case 'revisor':
                $user->is_revisor = NULL;
                break;
    
        case 'writer':
                $user->is_writer = NULL;
                break;
                    
                
            }
            $user->update();
            return redirect(route('homePage'))->with('message', 'Grazie per averci contattato!,La tua richiesta di candidatura è stata inviata con successo.');



      
    
}

}