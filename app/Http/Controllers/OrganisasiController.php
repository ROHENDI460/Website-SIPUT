<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;

use Illuminate\Http\Request;
use App\Models\organisasi_tables;

class OrganisasiController extends Controller
{
    //
    public function store_acara(Request $request){
        

        if(isset($request->setuju)){
            $validate = $request->validate([
                "Nama"=>"required|max:255",
                "telp"=>"required|max:255",
                "nama_organisasi"=>"required|max:255",
                "email_organisasi"=>"required|max:255",
                "username"=>"required|max:255",
                "password"=>"required|max:255",
            ]);

            //storing data
            $organisasi = new organisasi_tables;
            $organisasi->nama_pj = $validate["Nama"];
            $organisasi->username_organisasi = $validate["username"];
            $organisasi->nama_organisasi = $validate["nama_organisasi"];
            $organisasi->noTelp_organisasi = $validate["telp"];
            $organisasi->email_organisasi = $validate["email_organisasi"];
            $organisasi->password_organisasi = $validate["password"];

            if($organisasi->save()){
                return redirect("/loginorganisasi")->with("status","Register Berhasil");;
            }else{
                return redirect("/registorganisasi")->with("errorStore","Please check persetujuan!");
            }
        }else{
            return redirect("/registorganisasi")->with("error","Please check persetujuan!");
        }
        
    }

    public function login(Request $request){
        // retreiving all data
        $users = organisasi_tables::all();

        // checking authentication
        foreach ($users as $user) {
            if(Str::slug($user->username_organisasi) == Str::slug($request->user)){
                if($user->password_organisasi == $request->pass){
                    session()->put("user_login",$user);
                    return redirect("/dashboard");
                }
            }
        }

        return redirect("/loginorganisasi")->with("loginerror","incorrect username or password");
    }
}
