<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\event_tables;

class UploadController extends Controller
{
    //
    public function store_upload(Request $request){
        if(isset($request->setuju)){
            $validate = $request->validate([
                "pilih_paket"=>"required|max:255",
                "proposal"=>"required",
                "bukti_bayar"=>"required",
            ]);

           
            // array old request
            $old_request = session("request_old");
            $path_pamflet = session("path_pamflet");
            // $old_request = session()->pull("request_old");

            //storing data
            $upload = new event_tables;
            $upload->judul_event = $old_request["judul"];
            $upload->tanggal_pelaksanaan = $old_request["tanggal"];
            $upload->tempat_pelaksanaan = $old_request["tempat"];
            $upload->guest_star = $old_request["gueststar"];
            $upload->fee_event = $old_request["fee"] == null ? 0:$old_request["fee"];
            $upload->pamflet_event = $path_pamflet;
            $upload->kategori_event = $old_request["kategori"];
            $upload->paket_event = $validate["pilih_paket"];
            $upload->proposal_event = $request->proposal->store('proposal');
            $upload->bukti_pembayaran = $request->bukti_bayar->store('bukti_pembayaran');
            $upload->organisasi_tables_id = session("user_login")->id;
            session()->pull("request_old");
            session()->pull("path_pamflet");

            if($upload->save()){
                return redirect("/dashboard")->with("status","Upload Event Berhasil");;
            }
        }else{
            return redirect("/nextupload")->with("error","Please check persetujuan!");
        }
        
    }

   
}
