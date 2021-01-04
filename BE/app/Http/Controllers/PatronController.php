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
     * @response 200 [
     * {
     *    "id": 3,
     *    "last_name": "Gaylord",
     *    "first_name": "Tristian",
     *    "middle_name": "Berge",
     *    "email": "aleen54@gmail.com",
     *    "created_at": "2021-01-04T05:53:36.000000Z",
     *    "updated_at": "2021-01-04T05:53:36.000000Z"
     * },
     * {
     *    "id": 4,
     *    "last_name": "Dibbert",
     *    "first_name": "Trey",
     *    "middle_name": "Jerde",
     *    "email": "mae.grant@graham.com",
     *    "created_at": "2021-01-04T05:53:36.000000Z",
     *    "updated_at": "2021-01-04T05:53:36.000000Z"
     * },
     * {
     *    "id": 5,
     *    "last_name": "Green",
     *    "first_name": "Pasquale",
     *    "middle_name": "Dicki",
     *    "email": "skiles.jayme@yahoo.com",
     *    "created_at": "2021-01-04T05:53:36.000000Z",
     *    "updated_at": "2021-01-04T05:53:36.000000Z"
     * }
     * ]
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
     * @queryParam last_name required Last name of patron. Example: Sabay
     * @queryParam middle_name required Middle name of patron. Example: Caindoy
     * @queryParam first_name required First name of patron. Example: Yvan
     * @queryParam email required Email address of patron. Example: yvansabay61131@gmail.com
     * 
     * @response 200 {
     * {
     * "last_name": "Sabay",
     * "first_name": "Yvan",
     * "middle_name": "Caindoy",
     * "email": "yvansabay61131@gmail.com",
     * "updated_at": "2021-01-04T06:10:31.000000Z",
     * "created_at": "2021-01-04T06:10:31.000000Z",
     * "id": 16
     * }
     * }
     * 
     * @response 422 {
     *   "email": [
     *     "The email field is required."
     *   ]
     * }
     * 
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
     * @urlParam patron integer required ID of the patron to be retrieved. Example: 4
     * 
     * @response 200 {
     * "id": 4,
     * "last_name": "Dibbert",
     * "first_name": "Trey",
     * "middle_name": "Jerde",
     * "email": "mae.grant@graham.com",
     * "created_at": "2021-01-04T05:53:36.000000Z",
     * "updated_at": "2021-01-04T05:53:36.000000Z"
     * }
     * 
     * @response 404 {
     * "message": "Patron not found"
     * }
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
     * [PUT] Update the patron
     * 
     * @urlParam patron integer required ID of the patron to update
     * 
     * @queryParam last_name required Last name of patron. Example: Leannon
     * @queryParam middle_name required Middle name of patron. Example: Wendell
     * @queryParam first_name required First name of patron. Example: Lynch
     * @queryParam email required Email address of patron. Example: ttillman@hotmail.com
     * 
     * 
     * @response 200 {
     * "message": "Patron updated",
     * "patron": {
     *    "id": 10,
     *    "last_name": "Leannon",
     *    "first_name": "Wendell",
     *    "middle_name": "Lynch",
     *    "email": "ttillman@hotmail.com",
     *    "created_at": "2021-01-04T05:53:37.000000Z",
     *    "updated_at": "2021-01-04T05:53:37.000000Z"
     * }
     * }
     * 
     * @response 404 {
     *  "message": "Patron not found
     * }
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PatronRequest $request, $id)
    {
        try{
            $patron = Patron::findOrFail($id);
            $patron->update([$request->validated()]);

            return response()->json(['message' => 'Patron updated', 'patron' => $patron]);
        }catch(ModelNotFoundException $exception){
            return response()->json(['message' => 'Patron not found'],404);
        }
        
    }

    /**
     * [DELETE] Delete Patron
     *
     * @response 200 {
     *  "message": "Patron deleted successfully!
     * }
     * 
     * @response 404 {
     *  "message": "Patron not found"
     * }
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $patron = Patron::where('id', $id)->firstOrFail();
            $patron->delete();

            return response()->json(['message' => 'Patron deleted successfully!']);
        }
        catch (ModelNotFoundException $exception)
        {
            return response()->json(['message' => 'Patron not found'], 404);
        }
        
    }
}
