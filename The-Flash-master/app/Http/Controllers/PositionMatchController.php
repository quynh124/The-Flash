<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Position;
class PositionMatchController extends Controller
{
    public function index(Request $request) {
        $position =\DB::connection()->getSchemaBuilder()->getColumnListing((new Position)->getTable());
        $data = Position::all();
        return view('admin-pages.position.index', [
            'title' => 'Position',
            'records'=>$data,
            'position'=>$position,
        ]);

    }

    public function store(Request $request){
        $matchID = $request->input('MatchID');
        $playerID = $request->input('PlayerID');
        $positionInMatch = $request->input('PositionInMatch');
   
        $position = new Position();
        
        $position->matchID = $matchID;
        $position->playerID = $playerID;
        $position->positionInMatch = $positionInMatch;
 

        $position->save();

        return response()->json(
            [
                'isSuccess' => true,
                'message' => 'Successfully creation position',
                'data' => $position
            ]
        );
    
    }
    public function update(Request $request)
    {

        $id = $request->input('id');
        $matchID = $request->file('MatchID');
        $playerID = $request->input('PlayerID');
        $positionInMatch = $request->input('PositionInMatch');

        $position = Position::find($id);

       
        $position->MatchID = $matchID;
        $position->PlayerID = $playerID;
        $position->PositionInMatch = $positionInMatch;
        

        $position->save();
        
        return response()->json(
            [
                'isSuccess' => true,
                'message' => 'Successfully uploaded position',
                'data' => $position
            ]
        );

    }
    public function detail($id) {
        $position = Position::find($id);

        return response()->json([
            'position' => $position
        ]);
    }

    public function delete($id){
        $position = Position::find($id);
        $position->delete();

        return response()->json(
            [
                'isSuccess' => true,
                'message' => 'Successfully delete position',
                'data' => $position
            ]
        );
    }
}
