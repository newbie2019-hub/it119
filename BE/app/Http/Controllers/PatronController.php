<?php

namespace App\Http\Controllers;

use App\Http\Requests\PatronRequest;
use App\Models\Patron;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

/**
 * @group Patron Controller
 */
class PatronController extends Controller
{
    /**
     * [GET] Retrieves all patron.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Patron::all());
    }

     /**
     * [POST] Stores a new patron
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PatronRequest $request)
    {
        return response()->json(Patron::create($request->validated()));
    }

    /**
     * [GET] Retrieve patron by id.
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
     * [PUT] Updates a patron
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
     * [DELETE] Delete Patron
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
