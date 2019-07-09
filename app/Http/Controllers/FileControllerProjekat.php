<?php

namespace App\Http\Controllers;

use App\Projekti;
use Illuminate\Http\Request;


class FileControllerProjekat extends Controller
{

    public function showUploadForm(){
        return view('upload');
        //return $request->all();
    }
        //Za peti razred
        public function storeProjekti(request $request){

            $file = new Projekti;
        
            $file -> name = $request->file->getClientOriginalName();
            $file -> size = $request ->file->getClientSize();
            $file -> text = $request ->input('text');
            
            
    
            //Sacuvajmo poruku
            $file -> save();
            
            if($request->hasFile('file')){
    
                $filename = $request->file->getClientOriginalName();
                $filesize = $request->file->getClientSize();
                $filetext = $request->input('text');
                
                $request->file->storeAs('public/upload', $filename);
    
                $file = new Projekti;
                $file->name= $filename;
                $file->size= $filesize;
                $file->text= $filetext;
                
                $file->save();
                return 'Uspješno dodat projekat.';
            }
            return $request->all();
        }
    
        
        public function showProjekti(){
            
            $file = Projekti::all();
            return view('index', compact('file'));
        }

       
}
