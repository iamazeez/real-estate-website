<?php

namespace App\Http\Controllers\Listing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Listing;

class AuthListingController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index(){
       return view('create-listing');
    }

    public function createListing(Request $request){

        return response()->json($request);

        $request->validate([
            'title' => 'required',
            'descreption' => 'required',
            'bedrooms' => 'required|integer',
            'asking_price' => 'required|integer',
            'bathroom' => 'required|integer',
            'garage' => 'required|integer',
            'squarefeet' => 'required|integer',
            'lot_size' => 'required|integer',
            'image' => 'required',
            'image.*' => 'image|mimes:jpeg,png,jpg',
        ]);

        $images = [];

        if ($request->file('profile_image')) {
            foreach($request->file('image') as $imagePath){
                $fileName = time().rand(1,100) . '.' . $imagePath->extension();
                $imagePath->move(public_path('images/homes'), $fileName);
                array_push($images, $fileName);
            }
        }

       $data = $request->user()->listing()->create([
            'title' => $request->title,
            'descreption' => $request->descreption,
            'bedrooms' => $request->bedrooms,
            'asking_price' =>$request->asking_price,
            'bathroom' => $request->bathroom,
            'garage' => $request->garage,
            'squarefeet' => $request->squarefeet,
            'lot_size' => $request->lot_size,
            'image' => json_encode($images),
        ]);

        return response()->json($data);
    }

}
