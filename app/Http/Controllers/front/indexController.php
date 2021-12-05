<?php

namespace App\Http\Controllers\front;


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
        //data sorguları önce cacheten gelmeli, eğer cache içerisinde bulunmuyorsa veritabanı üzerinden gelmelidir.
            $kisiler = Cache::remember('kisilers',120,function() {
                return DB::table('kisilers')->select([ 'id','name', 'surname','phone'])->take(100000)->get();
            });
      
        //$kisiler = Kisiler::all();
        return view('front.index',['kisiler'=>$kisiler]); 
        
    }

    public function getdetay($id)
    {

        $c = Kisiler::where('id','=',$id)->count();
    if($c!=0){
        $data = Kisiler::where('id','=',$id)->first();
        $sehir = Sehir::all();
    return view('front.detay',['data'=>$data,'sehir'=>$sehir]);
    }
    else
    {
        return redirect('/');
    }
    }
    
}

