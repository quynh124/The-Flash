<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;
use  App\Models\MyMatch;



class ClientPlayerController extends Controller
{
    public function index(Request $request)
    {
        $player = \DB::connection()->getSchemaBuilder()->getColumnListing((new Player)->getTable());
        $data = Player::all();
        return view('admin-pages.player.index', [
            'title' => 'Players',
            'records' => $data,
            'players' => $player,

        ]);
    }

    public function player()
{
    // Retrieve all players
    $players = Player::all();

    // Pass the players data to the player index view
    return view('client-pages.player.index', [
        'players' => $players
    ]);
}

public function player_client()
{
    // Lấy danh sách tất cả cầu thủ từ bảng players
    $players = Player::all();

    // Truyền dữ liệu cầu thủ tới view "client"
    return view('client', [
        'players' => $players,
    ]);
}

public function player_details($id)
{
    // Find the player by ID
    $player = Player::find($id);

    // Check if the player was found
    if (!$player) {
        // Handle the case when the player is not found
        return redirect()->route('player.index')->with('error', 'Player not found.');
    }

    // Pass the player data to the player details view
    return view('client-pages.player-details.index', [
        'player' => $player,
    ]);
}



    public function store(Request $request){
        $tournamentID = $request->input('TournamentID');
        $dateTimeStart = $request->input('DateTimeStart');
        $dateTimeEnd = $request->input('DateTimeEnd');
        $stadium = $request->input('Stadium');
        $teamAID = $request->input('TeamAID');
        $teamAFormation = $request->input('TeamAFormation');
        $teamBID = $request->input('TeamBID');
        $teamBFormation = $request->input('TeamBFormation');
        $score = $request->input('Score');
        $type = $request->input('Type');

        $match = new MyMatch();

        $match->tournamentID = $tournamentID;
        $match->dateTimeStart = $dateTimeStart;
        $match->dateTimeEnd = $dateTimeEnd;
        $match->stadium = $stadium;
        $match->teamAID = $teamAID;
        $match->teamAFormation = $teamAFormation;
        $match->teamBID = $teamBID;
        $match->teamBFormation = $teamBFormation;
        $match->score = $score;
        $match->type = $type;


        $match->save();

        return response()->json(
            [
                'isSuccess' => true,
                'message' => 'Successfully creation match',
                'data' => $match
            ]
        );

    }
    public function update(Request $request)
    {
        $id = $request->input('id');
        $scoringPlayerID = $request->input('ScoringPlayerID');
        $dateTimeStart = $request->input('DateTimeStart');
        $dateTimeEnd = $request->input('DateTimeEnd');
        $stadium = $request->input('Stadium');
        $teamAID = $request->input('TeamAID');
        $teamAFormation = $request->input('TeamAFormation');
        $teamBID = $request->input('TeamBID');
        $teamBFormation = $request->input('TeamBFormation');
        $score = $request->input('Score');
        $type = $request->input('Type');

        $match = MyMatch::find($id);


        $match->scoringPlayerID = $scoringPlayerID;
        $match->dateTimeStart = $dateTimeStart;
        $match->dateTimeEnd = $dateTimeEnd;
        $match->stadium = $stadium;
        $match->teamAID = $teamAID;
        $match->teamAFormation = $teamAFormation;
        $match->teamBID = $teamBID;
        $match->teamBFormation = $teamBFormation;
        $match->score = $score;
        $match->type = $type;

        $match->save();

        return response()->json(
            [
                'isSuccess' => true,
                'message' => 'Successfully uploaded match',
                'data' => $match
            ]
        );

    }
    public function delete($id){
        $match = MyMatch::find($id);
        $match->delete();

        return response()->json(
            [
                'isSuccess' => true,
                'message' => 'Successfully delete match',
                'data' => $match
            ]
        );
    }

    public function detail($id) {
        $myMatch = MyMatch::find($id);

        return response()->json([
            'myMatch' => $myMatch
        ]);
    }

    public function matches() {
        // Lấy tất cả dữ liệu -> trả về mảng các dữ liệu
        $matchList = MyMatch::all();

        // return response()->json($matchList);

        return view(
            'client-pages.index',
            [
                'matchList' => $matchList
            ]
        );
    }

}
