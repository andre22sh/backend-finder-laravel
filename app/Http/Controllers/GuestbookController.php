<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guestbook;

class GuestbookController extends Controller
{
    public function index() {
        $guestbooks = Guestbook::all();
        return view('guestbooks.index',compact(['guestbooks']));
    }
}
