<?php

namespace App\Http\Controllers\admin\kurumlar;

use App\helper\mHelper;
use App\Http\Controllers\Controller;
use App\Models\Kurumlar;
use App\Models\User;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index()
    {
        $data = Kurumlar::paginate(10);
        return view('admin.kurumlar.index', ['data' => $data]);
    }
    public function create()
    {
        return view('admin.kurumlar.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kurum_user_name' => 'required',
            'kurum_user_surname' => 'required',
            'kurum_adi' => 'required',
            'kurum_email' => 'required|email|unique:kurumlars',
            'kurum_phonenumber' => 'required',
            'kurum_password' => 'required|min:6',
            'kurum_hakkinda' => 'required|max:255',
            
        ]);

        $kurum = new Kurumlar();
        $kurum->kurum_user_name = $validatedData['kurum_user_name'];
        $kurum->kurum_user_surname = $validatedData['kurum_user_surname'];
        $kurum->kurum_adi = $validatedData['kurum_adi'];
        $kurum->kurum_email = $validatedData['kurum_email'];
        $kurum->kurum_phonenumber = $validatedData['kurum_phonenumber'];
        $kurum->kurum_password = bcrypt($validatedData['kurum_password']);
        $kurum->kurum_hakkinda = $validatedData['kurum_hakkinda'];
        

        // Diğer kurum bilgilerini ekleme

        $kurum->save();

        // Kurumu aynı zamanda kullanıcılar listesine ekleyebilirsiniz
        $user = new User();
        $user->name = $validatedData['kurum_user_name'];
        $user->surname = $validatedData['kurum_user_surname'];
        $user->username = $validatedData['kurum_adi'];
        $user->email = $validatedData['kurum_email'];
        $user->password = bcrypt($validatedData['kurum_password']);
        $user->phonenumber = $validatedData['kurum_phonenumber'];
        $user->hakkinda = $validatedData['kurum_hakkinda'];
        
        $user->permission = 1;

        // Diğer kullanıcı bilgilerini ekleme

        $user->save();
        return redirect()->back()->with('status', 'Kurum oluşturuldu');
    }

    public function detay()
    {
        $c = Kurumlar::where('id',request('id'))->count();
        if($c!=0){
            $data = Kurumlar::where('id',request('id'))->get();
            return view('admin.kurumlar.detay',['data'=>$data]);
        }
        else{
            return redirect()->back();
        }
        return view('admin.kurumlar.detay');
    }
    public function icerikler(){
        return view('admin.kurumlar.icerik');
    }
}
