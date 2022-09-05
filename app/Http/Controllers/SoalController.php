<?php

namespace App\Http\Controllers;

use App\Soal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SoalController extends Controller
{
    public function index(){
        $soals = Soal::get();
        $data = [
            'soals' => $soals
        ];
        return view('soal.index', $data);
    }

    public function store(Request $request){

        $extention = $request->file->getClientOriginalExtension();
        $pathSoal = "soal/".$request->nama.".".$extention;
        $path = Storage::disk('public_uploads')->put($pathSoal, file_get_contents($request->file));
        $soal = new Soal;
        $soal->nama_soal = $request->nama;
        $soal->file = $pathSoal;
        $soal->save();

        return redirect()->back()->with('status', 'Soal Berhasil Ditambah');
    }

    public function delete($id){
        Soal::query()->where('id', '=', $id)->delete();
        return redirect()->back()->with('status', 'Hapus Berhasil Ditambah');
    }
}
