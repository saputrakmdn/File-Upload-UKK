<?php

namespace App\Http\Controllers;

use App\Jawaban;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class JawabanController extends Controller
{
    public function index(){
        $jawabans = Jawaban::get();
        $data = [
            'jawabans' => $jawabans
        ];
        return view('jawaban.index', $data);
    }

    public function upload(Request $request){
        $extention = $request->file->getClientOriginalExtension();
        $pathJawaban = "file/klaster-".$request->klaster."/".$request->nis."-".$request->nama."-jawaban-klaster-".$request->klaster.".".$extention;
        $path = Storage::disk('public_uploads')->put($pathJawaban, file_get_contents($request->file));
        $checkResult = Jawaban::query()->where('nis', '=', $request->nis)->where('cluster', '=',$request->klaster)->first();
        if(is_null($checkResult)) {
            $jawaban = new Jawaban;
            $jawaban->nis = $request->nis;
            $jawaban->nama_siswa = $request->nama;
            $jawaban->jawaban = $pathJawaban;
            $jawaban->cluster = $request->klaster;
            $jawaban->save();
        }

        return response()->json(["success"=> true, "message" => "Upload Jawaban Berhasil"],200);
    }
}
