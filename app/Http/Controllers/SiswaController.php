<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Models\Siswa;
use PDF;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswaList = DB::table('siswa')->get();
        return view('siswa.index', compact('siswaList'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Mengarahkan kehalaman form
        return view('siswa.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
                // proses input foto
                if(!empty($request->foto)){
                    $request->validate(
                        ['foto_siswa'=>'image|mimes:png,jpg|max:5120']
                    );
                    $fileName = $request->nama.'.'.$request->foto->extension();
                    $request->foto->move(public_path('img'),$fileName);
                }else{
                    $fileName ='';
                }
                // proses input foto
                if(!empty($request->akte)){
                    $request->validate(
                        ['foto_akte_kelahiran'=>'image|mimes:png,jpg|max:5120']
                    );
                    $fileAkte = $request->nama.'.'.$request->akte->extension();
                    $request->akte->move(public_path('img'),$fileAkte);
                }else{
                    $fileAkte ='';
                }
        // Proses input data
        DB::table('siswa')->insert(
            [
                'nama_siswa'=>$request->nama,
                'alamat_siswa'=>$request->alamat,
                'tempat_lahir'=>$request->tempat,
                'tanggal_lahir'=>$request->tanggal,
                'jenis_kelamin'=>$request->jenis_kelamin,
                'agama'=>$request->agama,
                'foto_siswa'=>$fileName,
                'foto_akte_kelahiran'=>$fileAkte,
                'nama_orang_tua'=>$request->nama_orang_tua,
                'alamat_orang_tua'=>$request->alamat_orang_tua,
            ]
        );
        return redirect('/Dashboard-user');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // menampilkan details pengarang
        $siswaList = DB::table('siswa')
                    ->where('id_siswa','=',$id)->get();
        return view('siswa.show', compact('siswaList'));
    }

    public function profile($id)
    {
        // Ambil data siswa dari database berdasarkan ID
        $siswa = DB::table('siswa')->where('id_siswa', $id)->get();

        // Jika data siswa ditemukan, tampilkan halaman profile
        if ($siswa) {
            return view('userDashboard.profile', compact('siswa'));
        }

        // Jika data siswa tidak ditemukan, tampilkan halaman error atau penanganan lainnya
        return view('errors.404'); // Contoh: Tampilkan halaman 404 Not Found
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // diarahkan ke halaman edit data
        $data = DB::table('siswa')
        ->where('id','=',$id)->get();
        return view('siswa.form_edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // proses ubah data
        DB::table('siswa')->where('id','=',$id)->update(
            [
                'nama_siswa'=>$request->nama,
                'alamat_siswa'=>$request->alamat,
                'tempat_lahir'=>$request->tempat,
                'tanggal_lahir'=>$request->tanggal,
                'jenis_kelamin'=>$request->jenis_kelamin,
                'agama'=>$request->agama,
                'foto_siswa'=>$request->foto,
                'foto_akte_kelahiran'=>$request->akte,
                'nama_orang_tua'=>$request->nama_orang_tua,
                'alamat_orang_tua'=>$request->alamat_orang_tua,
                'no_telp_orang_tua'=>$request->no_telp,
            ]
        );
        return redirect('/Siswa'.'/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // menghapus data
        DB::table('siswa')->where('id',$id)->delete();
        return redirect('/Siswa');
    }

    public function siswaPDF()
    {

        $siswaList = DB::table('siswa')->get();

        $pdf = PDF::loadView('siswa.myPDF', ['siswaList'=>$siswaList]);
        return $pdf->download('DataSiswa.pdf');
    }

    public function progSem1()
    {

        $data = [
            'title' => 'download sedang di proses',
            'date' => date('mm/dd/yy')
        ];

        $pdf = PDF::loadView('userDashboard.program-semester', $data);
        return $pdf->download('Program Semester 1.pdf');
    }

    public function progSem2()
    {

        $data = [
            'title' => 'download sedang di proses',
            'date' => date('mm/dd/yy')
        ];

        $pdf = PDF::loadView('userDashboard.program-semester-2', $data);
        return $pdf->download('Program Semester 2.pdf');
    }
}
