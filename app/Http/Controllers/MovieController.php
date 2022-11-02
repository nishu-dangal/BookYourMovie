<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    public function savemovie(Request $request){
        $this->validate($request, [
                'title'=>'required',
                'genre'=>'required',
                'desc'=>'required',
                'status'=>'required',
                'image'=>'required',
            ]);
                  
        $movie=new Movie();
        
           $movie->Title=$request->input('title');
           $movie->Genre=$request->input('genre');
           $movie->Description=$request->input('desc');
           $movie->Status=$request->input('status');
           if($request->hasFile('image')){
               $file=$request->file('image');
               $extension=$file->getClientOriginalExtension();
               $filename=time().'.'.$extension;
               $file->move('uploads',$filename);
               $movie->Image=$filename;
    }
   
            $movie->save();
            return redirect('dashboard')->with('product-add','Product has been sucessfully added');
        }

        public function eachMovie($id){
            $movie= DB::table('movies')->where('id',$id)->get();
                 return view('eachmovie', compact('movie'));
         }

}
