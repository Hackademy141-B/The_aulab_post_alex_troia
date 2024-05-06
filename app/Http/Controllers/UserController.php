<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Mail\WelcomeWriterEmail;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function updateToWriter($id)
    {
       
        $user = User::findOrFail($id);
    
       
        $user->is_writer = true;
        $user->save();
    
       
        Mail::to($user->email)->send(new WelcomeWriterEmail());
    
        
        return redirect()->route('writerDashboard')->with('success', 'Utente aggiornato a redattore con successo!');
    }
}
