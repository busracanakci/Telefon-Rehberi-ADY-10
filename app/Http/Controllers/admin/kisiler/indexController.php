<?php

namespace App\Http\Controllers\admin\kisiler;

use App\Helper\mHelper;
use App\Models\Kisiler;
use App\Models\Sehir;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class indexController extends Controller
{
    
    public function index()
    {
        $kisiler = Cache::remember('kisilers',600,function() {
            return DB::table('kisilers')->select([ 'id','name', 'surname','phone','email','sehirid'])->take(100000)->get();
        });
        
       // $kisiler = Kisiler::all();
       // $sehirler= Sehir::all();

    $sehirler = Cache::remember('sehirs',600,function() {
        return DB::table('sehirs')->select([ 'id','name'])->get();
    });

    return view('admin.kisiler.index',['kisiler'=>$kisiler,'sehirler'=>$sehirler]);
    }
    public function create()
    {
        
        $sehir = Sehir::all();
        return view('admin.kisiler.create',['sehir'=>$sehir]);
    }

    public function store(Request $request)
    {
        $all = $request->except('_token');

        $request->validate([
           'name' => 'required|max:255',
           'surname' => 'required|max:255',
           'phone' => 'required|regex:/[0-9]{11}/',
           'email' => 'required|email',
           'sehirid' => 'required'
        ]);

        $all['selflink'] = mHelper::permalink($all['name']);
    


        $insert = Kisiler::create($all);
        if($insert)
        {
         return redirect()->back()->with('status','Kişi Başarı ile Eklendi.');
        }
        else
        {
         return redirect()->back()->with('status','Kişi Eklenemedi');
        }
}
public function edit($id)
{

    $c = Kisiler::where('id','=',$id)->count();
    if($c!=0){
        $data = Kisiler::where('id','=',$id)->first();
        $sehir = Sehir::all();
    return view('admin.kisiler.edit',['data'=>$data,'sehir'=>$sehir]);
    }
    else
    {
        return redirect('/');
    }
}


public function update(Request $request)
{
    $id = $request->route('id');
    $c = Kisiler::where('id','=',$id)->count();
    if($c!=0)
    {
        $all = $request->except('_token');
        $all['selflink'] = mHelper::permalink($all['name']);
        $update = Kisiler::where('id','=',$id)->update($all);
        if($update)
        {
            return redirect()->back()->with('status','Kişi Düzenlendi');
        }
        else
        {
            return redirect()->back()->with('status','Kişi Düzenlenemedi');
        }
    }
    else
    {
        return redirect('/');
    }

}

public function delete($id)
{
    $c = Kisiler::where('id','=',$id)->count();
    if($c!=0)
    {
        $delete = Kisiler::where('id','=',$id)->delete();
        return redirect()->back();
    }
    else{
        return redirect('/');
    }
}

/**  */

}