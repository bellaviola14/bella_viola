<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//user
use Auth;
use Illuminate\Support\Str;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use App\Models\User;
use App\Models\cuti;
use App\Models\jabatan;
use App\Models\jenis_cuti;
use App\Models\feedback;
use DateTime;

use PDF;

class PegawaiController extends Controller
{
    //
	public function Home(){		
		$datauser_aktif = Auth::user()->id;
		$cutiselesai = cuti::where('id_user',$datauser_aktif)->where('status', 'diterima')->count();	
		$cutiditolak = cuti::where('id_user',$datauser_aktif)->where('status', 'ditolak')->count();		
		$totalcuti = cuti::where('id_user',$datauser_aktif)->count();		
		//$totalusers = user::count();		
		return view('layouts.pegawai.home', compact('cutiselesai','cutiditolak','totalcuti'));	
	} 	
	
    public function updateprofil (Request $request, $id)
    {
        $ubh = user::findorfail($id);
		
            $dt = [
                'password' =>Hash::make($request->input('password')),
            ];	
			
            $ubh->update($dt);
            return redirect()->route('pegawai.home')->with('success', 'Data Berhasil di ubah');				

    }		
	
	public function tampilpegawai_cuti(){
		$datauser_aktif = Auth::user()->id;
		$cuti = cuti::where('id_user',$datauser_aktif)->with('foreign_jeniscuti')->get();
		return view('layouts.pegawai.tampilcuti', compact('cuti'));
	}	
	
	public function tambahpegawai_cuti(){
		$jabatan = jabatan::all();
		$jenis_cuti = jenis_cuti::all();
		return view('layouts.pegawai.tambahcuti', compact('jabatan','jenis_cuti'));
	}	
	
	public function prosestambahcuti(Request $request){

			$datauser_aktif = Auth::user()->id;
		
			$request->validate([
				'berkas_permohonan_cuti' => 'mimes:jpeg,jpg,bmp,png,gif,svg,pdf|max:2048',
			]);		
			
			$nama_file_berkas_permohonan_cuti = $request->berkas_permohonan_cuti;			
			$filegambar_berkas_permohonan_cuti = time().rand(100,999).".".$nama_file_berkas_permohonan_cuti->getClientOriginalExtension();	

			$request->validate([
				'dokumen_kelengkapan' => 'mimes:jpeg,jpg,bmp,png,gif,svg,pdf|max:2048',
			]);		
			
			$dataakhir = $request->input('id_jeniscuti');
			$datafixcuti = $request->input('mulai_cuti');
			$datafix = new DateTime($datafixcuti);
			
			
			$nama_file_dokumen_kelengkapan = $request->dokumen_kelengkapan;			
			$filegambar_dokumen_kelengkapan = time().rand(100,999).".".$nama_file_dokumen_kelengkapan->getClientOriginalExtension();				
		
			$cuti = new cuti();
			$cuti->id_user = $datauser_aktif;
			$cuti->id_jabatan = $request->input('id_jabatan');
			$cuti->id_jeniscuti = $request->input('id_jeniscuti');
			$cuti->mulai_cuti = $request->input('mulai_cuti');
			if ($dataakhir = 2)
			{
				
			$cuti->akhir_cuti = $datafix->modify('+14 day')->format('Y-m-d');
			}
			else{
				$cuti->akhir_cuti = $request->input('akhir_cuti');
			}
			$cuti->keterangan = $request->input('keterangan');
			$cuti->keterangan = $request->input('keterangan');
			$cuti->berkas_permohonan_cuti = $filegambar_berkas_permohonan_cuti;
			$cuti->dokumen_kelengkapan = $filegambar_dokumen_kelengkapan;
			$cuti->status = 'diajukan ke pengadministrasi kepegawaian';
			$cuti->save();
			
			$feedback = new feedback();
			$feedback->id_cuti = $cuti->id;
			$feedback->save();			
			
			$nama_file_berkas_permohonan_cuti->move(public_path().'/doc/', $filegambar_berkas_permohonan_cuti);
			$nama_file_dokumen_kelengkapan->move(public_path().'/doc/', $filegambar_dokumen_kelengkapan);			

			return redirect()->route('pegawai_cuti.home')->with('success', 'Berhasil Menambah Data');				
		
	} 	
	
    public function detailpegawai($id)
    {
        //		
		//$cuti = cuti::all();        
		$cuti = cuti::with('foreign_users')->with('foreign_jabatan')->with('foreign_jeniscuti')->find($id);
		$feedback = feedback::where('id_cuti', $id)->first();
		return view('layouts.pegawai.detailcuti', compact('cuti','feedback'));						
    } 

    public function cetaksk($id)
    {
        //		
		//$cuti = cuti::all();        
	   $cuti = cuti::with('foreign_users')->with('foreign_jabatan')->with('foreign_jeniscuti')->find($id);
	   $pdf = PDF::loadview('layouts.skcuti.cetaksk', compact('cuti'))->setpaper('A4','potrait');
	   return $pdf->stream('SK-CUTI.pdf');						
    } 	
	
}
