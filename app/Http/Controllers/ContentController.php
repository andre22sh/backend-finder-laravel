<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Content;

class ContentController extends Controller
{
    public function index() {
        $contents = Content::paginate(5);
        return view('content.index',compact(['contents']));
    }

    public function create() {
        return view('content.create');
    }

    public function store(Request $request) {
        $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'shortdesc' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $request->validate([
            'image' => 'mimes:jpeg,png,jpg,gif,svg',
        ]);     
        $imgName = $request->image->getClientOriginalName();
        $request->image->move(public_path('img'), $imgName);
        
        Content::create([
            'title' => $request->title,
            'slug' => $request->slug,
            'shortdesc' => $request->shortdesc,
            'description' => $request->description,
            'image' => $imgName,
        ]);

        
        return redirect('/content')->with('success', 'Task Created Successfully!');
        }

        public function update(Request $request,$id) {
            $request->validate([
                'title' => 'required',
                'slug' => 'required',
                'shortdesc' => 'required',
                'description' => 'required',
                
            ]);
     
            
            $imgName = null;

            if($request->image){

                $imgName = $request->image->getClientOriginalName();
                $request->image->move(public_path('img'), $imgName);
            }
            Content::find($id)->update([
                'title' => $request->title,
                'slug' => $request->slug,
                'shortdesc' => $request->shortdesc,
                'description' => $request->description,
                'image' => $imgName,
            ]);

        return redirect('/content');
        }

        public function edit($id) {
            $contents = Content::find($id);
            return view('content.edit',compact(['contents']));
        }

        public function hapus($id) {
            $contents = Content::find($id);
            return view('content.delete',compact(['contents']));
        }

        public function destroy($id) {
            $contents = Content::find($id);
            $contents->delete();
            return redirect('/content');
        }


    }
