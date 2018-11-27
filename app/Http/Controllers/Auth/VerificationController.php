<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Auth\VerifiesEmails;
use Illuminate\Support\Arr;
use Illuminate\Support\Carbon;

class VerificationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Email Verification Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling email verification for any
    | user that recently registered with the application. Emails may also
    | be resent if the user did not receive the original email message.
    |
    */

    use VerifiesEmails;

    /**
     * Where to redirect users after verification.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
//         $this->middleware('signed')->only('verify');
        $this->middleware('throttle:6,1')->only('verify', 'resend');
    }

    /**
     * Mark the authenticated user's email address as verified.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function verify(Request $request)
    {
        dump($request->hasValidSignature());



        $absolute = true;
        $url = $absolute ? $request->url() : '/'.$request->path();
        dump($url);

        $original = rtrim($url.'?'.Arr::query(
            Arr::except($request->query(), 'signature')
        ), '?');
        dump($original);

        $expires = Arr::get($request->query(), 'expires');
        dump(Carbon::createFromTimestamp($expires));

        $signature = hash_hmac('sha256', $original, config('app.key'));
        dump($signature);

        dump(hash_equals($signature, (string) $request->query('signature', '')));
        dump(! ($expires && Carbon::now()->getTimestamp() > $expires));

        dump(Carbon::now());

//         return  hash_equals($signature, (string) $request->query('signature', '')) &&
//                 ! ($expires && Carbon::now()->getTimestamp() > $expires);




        dd('fin.');
//         if ($request->route('id') != $request->user()->getKey()) {
//             throw new AuthorizationException;
//         }

//         if ($request->user()->markEmailAsVerified()) {
//             event(new Verified($request->user()));
//         }

//         return redirect($this->redirectPath())->with('verified', true);
    }
}
