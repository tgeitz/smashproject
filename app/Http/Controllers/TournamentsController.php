<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\TournamentRequest;
use App\Tournament;
use Auth;

class TournamentsController extends Controller {

    /**
     * Create a new tournaments controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth', ['only' => 'create']);
    }

    public function index()
    {
        $tournaments = Tournament::latest('created_at')->get();
        return view('tournaments.index', compact('tournaments'));
    }

    public function show($id)
    {
        $tournament = Tournament::findOrFail($id);
        return view('tournaments.show', compact('tournament'));
    }

    public function create()
    {
        return view('tournaments.create');
    }

    public function store(TournamentRequest $request)
    {
        $tournament = Auth::user()->tournaments()->create($request->all());
        return redirect('tournaments/'.$tournament->id);
    }
}