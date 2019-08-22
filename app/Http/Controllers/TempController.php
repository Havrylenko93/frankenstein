<?php

namespace App\Http\Controllers;

use App\Penguin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class TempController extends Controller
{
    public function index()
    {
        return URL::temporarySignedRoute('tmp', now()->addMinutes(3));
    }

    public function test(Request $request)
    {
        if (! $request->hasValidSignature()) {
            abort(401, 'Не в мою смену, щегол');
        }

        return 'дратути';
    }

    public function testDebugbar()
    {
        Penguin::all();
        \Debugbar::info('Punks not dead');
        
        return 'qwe';
    }
}
