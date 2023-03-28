<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;

use Illuminate\Http\Request;
use App\Models\investor_tables;

class InvestorController extends Controller
{
    //
    public function store_investor(Request $request){
        

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
            $investor = new investor_tables;
            $investor->nama_investor = $validate["Nama"];
            $investor->username_investor = $validate["username"];
            $investor->nama_organisasi_invs = $validate["nama_organisasi"];
            $investor->noTelp_investor = $validate["telp"];
            $investor->email_investor = $validate["email_organisasi"];
            $investor->password_investor = $validate["password"];

            if($investor->save()){
                return redirect("/logininvestor")->with("status","Register Berhasil");;
            }else{
                return redirect("/registinvestor")->with("errorStore","Please check persetujuan!");
            }
        }else{
            return redirect("/registinvestor")->with("error","Please check persetujuan!");
        }
        
    }

    public function login(Request $request){
        // retreiving all data
        $users = investor_tables::all();

        // checking authentication
        foreach ($users as $user) {
            if(Str::slug($user->username_investor) == Str::slug($request->user)){
                if($user->password_investor == $request->pass){
                    session()->put("user_login",$user);
                    return redirect("/dashboard");
                }
            }
        }

        return redirect("/logininvestor")->with("loginerror","incorrect username or password");
    }
}
