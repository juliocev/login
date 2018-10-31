<?php

namespace App\Http\Controllers;

use App\Song;
use Illuminate\Http\Request;
use \Firebase\JWT\JWT;

class SongController extends Controller
{
    const USER = 0;
    const PASSWORD = 1;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $headers = getallheaders();
        $token = $headers['Authorization'];

        $tokenDecoded = JWT::decode($token, '7kvP3yy3b4SGpVz6uSeSBhBEDtGzPb2n', array('HS256'));

        //var_dump($tokenDecoded); exit;

        $userDB = [
            self::USER => 'pepin', 
            self::PASSWORD => '1234'
        ];

        if ($userDB[self::USER] == $tokenDecoded->user and $userDB[self::PASSWORD] == $tokenDecoded->password)
        {
            return response()->json([
                'id' => 1,
                'title' => 'la macarena',
                'time' => '4.3'
            ]);

        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function edit(Song $song)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Song $song)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function destroy(Song $song)
    {
        //
    }
}
