<?php

namespace App\Http\Controllers;

use App\Http\Requests\PatronRequest;
use App\Models\Patron;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class PatronController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Patron::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PatronRequest $request)
    {
        return response()->json(Patron::create($request->validated()));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try{
            return response()->json(Patron::findOrFail($id));
        }
        catch (ModelNotFoundException $exception)
        {
            return response()->json(['message' => 'Patron not found'], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PatronRequest $request, $id)
    {
        try {
            $patron = Patron::findOrFail($id);
            $patron->update($request->validated());

            return response()->json(['message' => 'Patron updated', 'patron' => $patron]);
        } catch (ModelNotFoundException $exception) {
            return response()->json(['message' => 'Patron not found'], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $patron = Patron::where('id', $id)->firstOrFail();
            $patron->delete();

            return response()->json(['message' => 'Patron deleted successfully!']);
        } catch (ModelNotFoundException $exception) {
            return response()->json(['message' => 'Patron not found'], 404);
        }
    }
}
