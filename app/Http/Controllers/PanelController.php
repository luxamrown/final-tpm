<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\GroupData;
use Illuminate\Http\Request;
use Laravel\Prompts\Output\ConsoleOutput;

class PanelController extends Controller
{
    public function getListTeam(){
        $success = true;
        $responseMessage = "Berhasil Mendapatkan List Tim"; 
        $devMessage = "All Data Fetch Success";

        $groups = GroupData::all();

        return response([
            "success" => $success,
            "devMessage"=> $devMessage,
            "data" => $groups,
            "message" =>  $responseMessage
        ]);
    }

    public function getDetailTeam(Request $request){
        $success = true;
        $responseMessage = "Berhasil Mendapatkan Data Tim"; 
        $devMessage = "All Data Fetch Success";
        $group = null;

        try {
            $group = GroupData::findOrFail($request->id);
        } catch (\Throwable $th) {
            $success = false;
            $responseMessage = "Team Tidak Ditemukan";
            $devMessage = "Team by Id not found";
        }

        return response([
            "success" => $success,
            "devMessage"=> $devMessage,
            "data" => $group,
            "message" => $responseMessage
        ]);
    }

    public function updateTeam(Request $request){
        $success = true;
        $responseMessage = "Berhasil Update Data Tim"; 
        $devMessage = "Update Data Success";
        $group = null;

        try {
            $group = GroupData::findOrFail($request->id);
        } catch (\Throwable $th) {
            $success = false;
            $responseMessage = "Team Tidak Ditemukan";
            $devMessage = "Team by Id not found";
        }

        if($success){
            $group -> update([
                'fullname'=> $request->fullname,
                'email'=> $request->email,
                'whatsapp'=> $request->whatsapp,
                'line_id'=> $request->line_id,
                'github'=> $request->github,
                'birthplace'=> $request->birthplace,
                'birthdate'=> $request->birthdate,
            ]);
        }
        
        return response([
            "success" => $success,
            "devMessage"=> $devMessage,
            "data" => $group,
            "message" => $responseMessage 
        ]);
    }

    public function deleteTeam(Request $request){
        $success = true;
        $responseMessage = "Berhasil Menghapus Tim"; 
        $devMessage = "Delete Data Success";

        try {
            $groupdata = GroupData::findOrFail($request->id);
        } catch (\Throwable $th) {
            $success = false;
            $responseMessage = "Team Gagal Dihapus";
            $devMessage = "Delete Team Failed";
        }

        if($groupdata->group_id){
            try {
                Group::destroy($groupdata->group_id);
            } catch (\Throwable $th) {
                $success = false;
                $responseMessage = "Team Gagal Dihapus";
                $devMessage = "Delete Team Failed";
            }
        }

        return response([
            "success" => $success,
            "devMessage"=> $devMessage,
            "data" => null,
            "message" =>  $responseMessage
        ]);
     }

    // public function testing(Request $request){
    //     $output = new ConsoleOutput();
    //     $output->writeln($_FILES["awok"]);

    //     $targetpath = basename($_FILES["selectImage"]["name"]);
    //     move_uploaded_file($_FILES["selectImage"]["tmp_name"], $targetpath);
    // }
}
