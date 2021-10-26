<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;
use App\Models\Safari;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function createSafari(Request $request)
    {
        $safari = new Safari;
        $safari->country = request()->country;
        $safari->title = request()->title;
        $safari->body = request()->body;
        $safari->overview = request()->overview;
        $safari->itenerary = request()->itenerary;
        $safari->terms = request()->terms;

        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
            $safari->image = $name;

            $safari->save();
        }

        session()->flash('message', 'New Safari published successfully! ✅');

        return redirect('/create-safari');
    }

    public function createDestination(Request $request)
    {
        $destination = new Destination;
        $destination->country = request()->country;
        $destination->title = request()->title;
        $destination->body = request()->body;
        // $destination->overview = request()->overview;
        // $destination->itenerary = request()->itenerary;
        // $destination->terms = request()->terms;


        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
            $destination->image = $name;

            $destination->save();
        }

        session()->flash('message', 'New destination published successfully! ✅');

        return redirect('/create-destination');
    }
    public function deleteDestination($id)
    {
        Destination::destroy($id);

        session()->flash('message', 'Destination deleted successfully! ✅ ');

        return redirect('/create-destination');
    }
    public function deleteSafari($id)
    {
        Safari::destroy($id);

        session()->flash('message', 'Safari deleted successfully! ✅ ');

        return redirect('/create-safari');
    }

    public function editSafari(Request $request, $id)
    {
        $safaris = Safari::find($id);

        Safari::where('id', $id)
      ->update([
                'title' => request()->title,
                'body' => request()->body,
                'overview' => request()->overview,
                'itenerary' => request()->itenerary,
                'terms' => request()->terms,
                ]);


        session()->flash('message', 'Safari Updated Successfully! ✅');

        return redirect('/create-safari');
    }
    public function editDestination(Request $request, $id)
    {
        $destination = Safari::find($id);

        Destination::where('id', $id)
      ->update([
                'title' => request()->title,
                'body' => request()->body,
                //'overview' => request()->overview,
                //'itenerary' => request()->itenerary,
                //'terms' => request()->terms,
                ]);


        session()->flash('message', 'Safari Updated Successfully! ✅');

        return redirect('/create-destination');
    }
}
