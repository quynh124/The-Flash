<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tournament;
use Illuminate\Support\Str;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Storage;

class TournamentController extends Controller
{
    //

    public function index(Request $request) {
        $tournament =\DB::connection()->getSchemaBuilder()->getColumnListing((new Tournament)->getTable());
        $data =Tournament::all();
        return view('admin-pages.tournaments.index', [
            'title' => 'Tournament',
            'records'=>$data,
            'tournaments'=>$tournament,
            'fileColumnsName' => [
                'Logo'
            ],
            'imageColumns' => [
                'Logo'
            ],
        ]);
    }

    // POST: api/tournament/store
    public function store(Request $request) : JsonResponse {
        $logo = $request->file('Logo');
        $tournamentName = $request->input('TournamentName');
        $description = $request->input('Description');
        $matchCount = $request->input('MatchCount');
        $yearHeld = $request->input('YearHeld');
        $organizingCountry = $request->input('OrganizingCountry');

        $tournament = new Tournament();

        $imgName = 'img'.time().'-'.Str::slug($tournamentName).'.'.$logo->extension();

        $logo->move(public_path('images\file-uploads'), $imgName);

        $tournament->logo = $imgName;
        $tournament->tournamentName = $tournamentName;
        $tournament->description = $description;
        $tournament->matchCount = $matchCount;
        $tournament->yearHeld = $yearHeld;
        $tournament->organizingCountry = $organizingCountry;

        $tournament->save();

        return response()->json(
            [
                'isSuccess' => true,
                'message' => 'Successfully creation',
                'data' => $tournament,
                'imageColumns' => [
                    'Logo'
                ]
            ]
        );
    }

    // PUT: api/tournament/update
    public function update(Request $request) : JsonResponse {
        $id = $request->input('id');
        $logo = $request->file('Logo');
        $tournamentName = $request->input('TournamentName');
        $description = $request->input('Description');
        $matchCount = $request->input('MatchCount');
        $yearHeld = $request->input('YearHeld');
        $organizingCountry = $request->input('OrganizingCountry');

        $tournament = Tournament::find($id);

        Storage::delete(public_path('images\file-uploads') + $tournament->logo);

        $imgName = 'img'.time().'-'.Str::slug($tournamentName).'.'.$logo->extension();

        $logo->move(public_path('images\file-uploads'), $imgName);

        $tournament->logo = $imgName;
        $tournament->tournamentName = $tournamentName;
        $tournament->description = $description;
        $tournament->matchCount = $matchCount;
        $tournament->yearHeld = $yearHeld;
        $tournament->organizingCountry = $organizingCountry;

        $tournament->save();

        return response()->json(
            [
                'isSuccess' => true,
                'message' => 'Successfully creation',
                'data' => $tournament,
                'imageColumns' => [
                    'Logo'
                ]
            ]
        );
    }

    public function detail($id) {
        $tournament = Tournament::find($id);

        return response()->json([
            'tournament' => $tournament
        ]);
    }

    public function delete($id) {
        $tournament = Tournament::find($id);
        $tournament->delete();

        return response()->json(
            [
                'isSuccess' => true,
                'message' => 'Successfully delete user account',
                'data' => $tournament
            ]
        );
    }
}
