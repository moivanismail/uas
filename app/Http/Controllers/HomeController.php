<?php

namespace App\Http\Controllers;

use App\Models\Example;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.layout.home-content');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     * 
     * 
     */
    public function dashboard()
    {
        $data = [];
        $data['example'] = Example::all();
        return view('admin.layout.dashboard-layout', $data);
    }

    public function myProfile()
    {
        //
        return view('admin.layout.admin-profil');
    }

    public function create()
    {
        //
        return view('admin.layout.insert-data');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('avatar');
        // tampilkan nama file
        $namaFile = time() . "_" . $file->getClientOriginalName();
        //
        $example = new Example(); // buat variable
        $example->email = $request->get('email'); // menginsert data
        $example->password = $request->get('password'); // menginsert data
        $example->nama = $request->get('nama'); // menginsert data
        $example->namabelakang = $request->get('namabelakang'); // menginsert data
        $example->alamat = $request->get('alamat'); // menginsert data
        $example->telepon = $request->get('telepon'); // menginsert data
        $example->avatar = $namaFile; // menginsert data

        $tujuan_upload = 'avatar';
        $file->move($tujuan_upload, $namaFile);


        $example->save();

        if ($example) {
            return redirect()->route('example.data')->with(['success' => 'data anda tersimpan']);
        } else {
            return redirect()->route('example.data')->with(['error' => 'data gagal tersimpan']);
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
    public function edit(Request $request, $id)
    {
        $example = Example::where('id', $request->id)->first();
        // cari berdasarkan id
        return view('admin.layout.edit-data', compact('example'));
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
        //validasi data
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'kota' => 'required',
            'provinsi' => 'required',
            'lamakerja' => 'required',
            'kantor' => 'required',
            'departemen' => 'required',
            'jabatan' => 'required',
        ]);
        example::find($id)->update($request->all());
        if ($request) {
            return redirect()->route('example.data')->with(['success' => 'Data anda berhasil diubah']);
        } else {
            return redirect()->route('example.data')->with(['error' => 'Data gagal diubah']);
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
        $data = [];
        $data = Example::where('id', $id)->delete();
        if ($data) {
            return redirect()->route('example.data')->with(['success' => 'Data anda tersimpan']);
        } else {
            return redirect()->route('example.data')->with(['error' => 'Data gagal tersimpan']);
        }
    }
}
