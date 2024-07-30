<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class MessageController extends Controller {
    function index(): View {
        return view('message.index');
    }
}
