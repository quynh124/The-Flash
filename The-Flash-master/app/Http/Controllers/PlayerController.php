<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Str;
class PlayerController extends Controller
{
    public function index(Request $request) {
        $player =\DB::connection()->getSchemaBuilder()->getColumnListing((new Player)->getTable());
        $data = Player::all();
        return view('admin-pages.player.index', [
            'title' => 'Players',
            'records'=>$data,
            'players'=>$player,
            'fileColumnsName' => [
                'Avatar'
            ],
            'imageColumns' => [
                'Avatar'
            ],
        ]);
    }
    public function detail($id) {
        $player = Player::find($id);

        return response()->json([
            'player' => $player
        ]);
    }
    public function store(Request $request):JsonResponse {

        $clubID = $request->input('ClubID');
        $avatar = $request->file('Avatar');
        $name = $request->input('Name');
        $birthdate = $request->input('Birthdate');
        $nationality = $request->input('Nationality');
        $position = $request->input('Position');
        $jerseyNumber = $request->input('JerseyNumber');
        $story = $request->input('Story');

        $player = new Player();

        // Image upload
        $imgName = 'img'.time().'-'.Str::slug($name).'.'.$avatar->extension();

        $avatar->move(public_path('images\file-uploads'), $imgName);

        $player->clubID = $clubID;
        $player->avatar = $imgName;
        $player->name = $name;
        $player->birthdate = $birthdate;
        $player->nationality = $nationality;
        $player->position = $position;
        $player->jerseyNumber = $jerseyNumber;
        $player->story = $story;

        $player->save();

        return response()->json(
            [
                'isSuccess' => true,
                'message' => 'Successfully creation',
                'data' => $player,
                'imageColumns' => [
                    'Avatar'
                ],
            ]
        );
    }

}
