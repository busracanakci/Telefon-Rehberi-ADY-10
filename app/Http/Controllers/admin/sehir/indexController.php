<?php

namespace App\Http\Controllers\admin\sehir;

use App\Helper\mHelper;
use App\Models\Kisiler;
use App\Models\Sehir;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index()
    {
        $data = Sehir::paginate(10);
        
        return view('admin.sehir.index',['data'=>$data]);
    }
    
    public function create()
    {
        return view('admin.sehir.create');
    }
    public function store(Request $request)
    {
        $all = $request->except('_token');
        $all['selflink'] = mHelper::permalink($all['name']);

        $insert = Sehir::create($all);
        if($insert)
        {
            return redirect()->back()->with('status','Şehir Başarı ile Eklendi');
        }
        else
        {
            return redirect()->back()->with('status','Şehir Eklenemedi');
        }

    }

    public function edit($id)
    {
        $c = Sehir::where('id','=',$id)->count();
        if($c!=0){
        $data = Sehir::where('id','=',$id)->get();
        return view('admin.sehir.edit',['data'=>$data]);
       }
       else{
           return redirect('/');
       }
    }
    public function update(Request $request)
    {
        $id = $request->route('id');
        $c = Sehir::where('id','=',$id)->count();
        if($c!=0)
        {
            $all = $request->except('_token');
            $all['selflink'] = mHelper::permalink($all['name']);
            $update = Sehir::where('id','=',$id)->update($all);
            if($update)
            {
                return redirect()->back()->with('status','Şehir başarı ile güncellenmiştir.');
            }
            else
            {
                return redirect()->back()->with('status','Şehir Güncellenememiştir.');
            }
        }
       else{
           return redirect('/');
       }

    }
    public function delete($id)
    {
        $c = Sehir::where('id','=',$id)->count();
        if($c!=0)
        {
$delete = Sehir::where('id','=',$id)->delete();
return redirect()->back();
        }
        else{
            return redirect('/');
        }
    }
    public function getData(Request $request)
    {
        return DataTables::of(Sehir::query())
        ->addColumn('edit',function($x)
        {
            return '<a href="'.route('admin.sehir.edit',['id'=>$x->id]).'">Düzenle</a>';
        })
        ->addColumn('delete',function($x)
        {
            return '<a href="'.route('admin.sehir.delete',['id'=>$x->id]).'">Sil</a>';
        })
        ->rawColumns(['edit','delete'])
        ->make(true);
        return $x;
    }



}

