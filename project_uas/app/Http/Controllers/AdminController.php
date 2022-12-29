<?php

namespace App\Http\Controllers;

use App\Models\Lokers;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Backpage';
        $loker = new Lokers;
        if (isset($_GET['s'])) {
            $s=$_GET['s'];

            $loker=$loker->where('nama_perusahaan','like',"%$s%");
        }if (isset($_GET['id_category'])&&$_GET['id_category']!='') {
            $loker=$loker->where('id_category',$_GET['id_category']);
        }
        $loker=$loker->get();
        $category=Category::all();
        return view('backpage.daftarpackage', compact('title','loker','category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create Page';
        $category = Category::all();
        // dd($post);
        return view('backpage.inputpackage', compact('title','category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message =[
            'required' => 'kolom : atribut harus lengkap',
        ];
        $validasi=$request->validate([
            'nama_perusahaan'=>'required',
            'pendidikan'=>'required',
            'alamat_perusahaan'=>'required',
            'desc_perusahaan'=>'',
            'id_category' => 'required',
            'penanggung_jawab' => 'required',
            'email_perusahaan' => 'required'
        ], $message);
        try {
            $response = Lokers::create($validasi);
            return redirect('admin');
        } catch (\Throwable $e) {
            echo $e->getMessage();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = 'Edit Page';
        $category = Category::all();
        $loker = Lokers::where('id_locers', $id)->first();
        //dd($post);
        return view('backpage.inputpackage', compact('title','loker','category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $message =[
            'required' => 'kolom : atribut harus lengkap',
        ];
        $validasi=$request->validate([
            'nama_perusahaan'=>'required',
            'pendidikan'=>'required',
            'alamat_perusahaan'=>'required',
            'desc_perusahaan'=>'',
            'id_category' => 'required',
            'penanggung_jawab' => 'required',
            'email_perusahaan' => 'required'
        ], $message);
        try {
            $response = Lokers::find($id)->update($validasi);
            return redirect('admin');
        } catch (\Throwable $e) {
            echo $e->getMessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $loker=Lokers::find($id)->delete();
            return redirect('admin');
        } catch (\Throwable $e) {
            echo $e->getMessage();
        }
    }
}
