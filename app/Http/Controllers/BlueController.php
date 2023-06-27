<?php
namespace App\Http\Controllers;

use App\Models\Phone;
use App\Models\Phonez;
use Illuminate\Http\Request;

class BlueController extends Controller
{
    
    public function index()
    {
        $phones = Phone::all();
    
        return view('blue.index', [
            'phonez' => $phones
        ]);
    }
    
    public function show($id)
    {
        $phones = Phone::findOrFail($id);
        return view('blue.show', ['phonez' => $phones]);
    }
    
    public function create()
    {
        return view('blue.create');
    }
    
    public function store()
    {
        $phonez = new Phone();
        $phonez->name = request('name');
        $phonez->type = request('type');
        $phonez->base = request('base');
        
        $phonez->save();

        error_log($phonez);
       
        return redirect('/')->with('mssg','Thanks for you order');
    }
    public function destroy($id){
        $phonez=Phone::findorFail($id);
        $phonez->delete();
        return redirect('/blues');
    }
}
