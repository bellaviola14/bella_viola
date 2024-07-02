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

use PDF;

class PkController extends Controller
{
    //
	
	public function Home(){		
		$datauser_aktif = Auth::user()->id;
		$cutiselesai = cuti::where('status', 'diterima')->count();	
		$cutiditolak = cuti::where('status', 'ditolak')->count();		
		$totalcuti = cuti::count();		
		//$totalusers = user::count();		
		return view('layouts.pk.home', compact('cutiselesai','cutiditolak','totalcuti'));	
	} 	
	
    public function updateprofil (Request $request, $id)
    {
        $ubh = user::findorfail($id);
		
            $dt = [
                'password' =>Hash::make($request->input('password')),
            ];	
			
            $ubh->update($dt);
            return redirect()->route('pk.home')->with('success', 'Data Berhasil di ubah');				

    }		
		
	public function tampilpegawai_cuti(){
	//	$datauser_aktif = Auth::user()->id;
		$cuti = cuti::where('status', 'diajukan ke pengadministrasi kepegawaian')->orWhere('status', 'serahkan ke pengadministrasi kepegawaian')->with('foreign_jeniscuti')->get();
		return view('layouts.pk.tampilcuti', compact('cuti'));
	}		
	
    public function detailpegawai($id)
    {
        //		
		//$cuti = cuti::all();        
		$cuti = cuti::with('foreign_users')->with('foreign_jabatan')->with('foreign_jeniscuti')->find($id);
		$feedback = feedback::where('id_cuti', $id)->first();
		return view('layouts.pk.detailcuti', compact('cuti','feedback'));						
    } 	
	
    public function prosesteruskan (Request $request, $id)
    {
        $ubh = cuti::findorfail($id);
		
            $dt = [
                'status' => 'diajukan ke kasubbag umum',
            ];	
			
            $ubh->update($dt);
            return redirect()->route('pk_cuti.home')->with('success', 'Data Berhasil di diteruskan');				

    }	
	
    public function teruskanv2(Request $request, $id)
    {
        $ubh = cuti::findorfail($id);
		
            $dt = [
                'status' => 'proses ke bagian pengadministrasi umum',
            ];	
			
            $ubh->update($dt);
            return redirect()->route('pk_cuti.home')->with('success', 'Data Berhasil di diteruskan');				

    }		
    
    public function prosestolak(Request $request, $id)
    {

     //   $idfeedback = $request['idfeed'];
        $ubh = cuti::findorfail($id);
		
            $dt = [
                'status' => 'ditolak',
            ];	
			
            $ubh->update($dt);

           
            return redirect()->route('pk_cuti.home')->with('success', 'Data Berhasil di tolak');				

    }	    
	
}
