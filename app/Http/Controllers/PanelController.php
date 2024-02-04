<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\GroupData;
use Illuminate\Http\Request;
use Laravel\Prompts\Output\ConsoleOutput;

class PanelController extends Controller
{
    function parseUriFile($uri, $filename){
        $file = $uri;

        list($type, $file) = explode(';', $file);
        list(, $file)      = explode(',', $file);
        $fileType = explode("/", $type);

        $file = base64_decode($file);

        return array($file, $fileType[1], $filename);
    }

    public function getListTeam(){
        $success = true;
        $responseMessage = "Berhasil Mendapatkan List Tim"; 
        $devMessage = "All Data Fetch Success";

        $groupData = GroupData::all();

        $data = [];

        foreach($groupData as $group) {
            $groupNewData = Group::findOrFail($group->group_id);

            $merge_object = [
                "groupData" => $groupNewData,
                "groupDetails" => $group
            ];

            array_push($data, $merge_object);
        }

        return response([
            "success" => $success,
            "devMessage"=> $devMessage,
            "data" => $data,
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

        $groupData = Group::where('id', $group->group_id)->first();

        if($request->fileCv){
            list($fileCv, $typeFileCv, $fileNameCv) = PanelController::parseUriFile($request->fileCv, $groupData->name . "cv" . uniqid());
            try {
                file_put_contents('storage/file/'. $fileNameCv . "." . $typeFileCv, $fileCv);
            } catch (\Throwable $th) {
                $success = false;
                $responseMessage = "Error when save file";
            }
        }

        if($groupData->is_binusian){
            if($request->fileFlazz){
                list($fileFlazz, $typeFileFlazz, $fileNameFlazz) = PanelController::parseUriFile($request->fileFlazz, $groupData->name . "flazz" . uniqid());
                
                try {
                    file_put_contents('storage/file/'. $fileNameFlazz . "." . $typeFileFlazz, $fileFlazz);
                } catch (\Throwable $th) {
                    $success = false;
                    $responseMessage = "Error when save file";
                }
            }
        } else {
            if($request->fileId){
                list($fileId, $typeFileId, $fileNameId) = PanelController::parseUriFile($request->fileId, $groupData->name . "id" . uniqid());
    
                try {
                    file_put_contents('storage/file/'. $fileNameId . "." . $typeFileId, $fileId);
                } catch (\Throwable $th) {
                    $success = false;
                    $responseMessage = "Error when save file";
                }
            }
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
                'cv_file'=> $request->fileCv ? $fileNameCv . "." . $typeFileCv : $group->cv_file,
                'flazz_file' => $request->fileFlazz ? ($groupData->is_binusian ? $fileNameFlazz . "." . $typeFileFlazz : "") : $group->flazz_file,
                'idcard_file' => $request->fileId ? ($groupData->is_binusian ? "" : $fileNameId . "." . $typeFileId) : $group->idcard_file,
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
        if($success){
            if($groupdata->group_id){
                try {
                    Group::destroy($groupdata->group_id);
                } catch (\Throwable $th) {
                    $success = false;
                    $responseMessage = "Team Gagal Dihapus";
                    $devMessage = "Delete Team Failed";
                }
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
