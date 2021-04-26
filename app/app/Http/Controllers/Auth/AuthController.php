<?php

namespace App\Http\Controllers\Auth;

use Emarref\Jwt\Jwt;
use Emarref\Jwt\Token;
use Emarref\Jwt\Claim;
use Emarref\Jwt\Algorithm\Hs256;
use Emarref\Jwt\Encryption\Factory;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class AuthController extends Controller
{

    public function login(Request $request) {
        $req = $request->json()->all();
        $user = DB::table('Users')
            ->where('email', $req['email'])
            ->where('password', md5($req['password']))
            ->first();


        if($user != null) {
            $jwt = new Jwt();
            $token = new Token();
            $payload = array('user_id' => $user->id, 'email' => $user->email);

            $token->addClaim(new Claim\Audience($payload));
            $token->addClaim(new Claim\Expiration(new \DateTime('30 minutes')));
            $token->addClaim(new Claim\NotBefore(new \DateTime('now')));
            $token->addClaim(new Claim\Subject('auth'));

            $algorithm = new Hs256(env('JWR_SECRET_KEY'));
            $encryption = Factory::create($algorithm);
            $serializedToken = $jwt->serialize($token, $encryption);

            $response = array('status_code' => 200, 'alert' => 'User success logged', 'jwt_key' => $serializedToken);
        }else {
            $response = array('status_code' => 401, 'alert' => 'User not found');
        }

        return response()->json($response,$response["status_code"]);

    }

}


