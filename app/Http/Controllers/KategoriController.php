<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Kategori;
use Illuminate\Support\Facades\Input;
use Alert;
use Redirect;


class KategoriController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Kategori::orderBy('id','desc')->paginate(5);
        return view('Admin.Kategori.index',['kategori'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Admin.Kategori.Includes.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'kategori' => 'required|min:5|max:100',
        ]);

        $data = array(
                    'nama' => Input::get('kategori'),
               );
       $category = Kategori::create($data);

       Alert::success('Kategori Baru di buat','Create');
       return Redirect::route('admin.kategori.index');
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
        $kategori = Kategori::where('id',$id)->first();
        return view('Admin.Kategori.Includes.update')->with('kategori',$kategori);
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
        //
        $category = Kategori::find($id);

        $category->nama = Input::get('nama');

        $category->save();

        Alert::info('Kategori baru anda Ubah','Edit');
        return Redirect::route('admin.kategori.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $category = Kategori::find($id);
        $category->delete();
        Alert::info('Kategori baru sudah anda hapus','Delete');
        return Redirect::route('admin.kategori.index');
    }
}
