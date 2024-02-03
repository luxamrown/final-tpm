<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\GroupData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    function parseUriFile($uri, $filename){
        $file = $uri;

        list($type, $file) = explode(';', $file);
        list(, $file)      = explode(',', $file);
        $fileType = explode("/", $type);

        $file = base64_decode($file);

        return array($file, $fileType[1], $filename);
    }

    function registerGroup($name, $password, $is_binusian){
        $data = Group::create([
            'name' => $name,
            'password' => Hash::make($password),
            'is_binusian' => $is_binusian,
            'is_admin' => false
        ]);

        return $data->id;
    }

    public function register(Request $request){
        $success = true;
        $responseMessage = "Berhasil Register Silahkan Login"; 
        $devMessage = "Register and Input Data Succes";

        $newGroup = RegisterController::registerGroup($request->name, $request->password, $request->is_binusian);
        
        list($fileCv, $typeFileCv, $fileNameCv) = RegisterController::parseUriFile($request->fileCv, $request->name . "cv");
        try {
            file_put_contents('storage/file/'. $fileNameCv . "." . $typeFileCv, $fileCv);
        } catch (\Throwable $th) {
            $success = false;
            $responseMessage = "Error when save file";
        }

        if($request->is_binusian){
            list($fileFlazz, $typeFileFlazz, $fileNameFlazz) = RegisterController::parseUriFile($request->fileFlazz, $request->name . "flazz");
            
            try {
                file_put_contents('storage/file/'. $fileNameFlazz . "." . $typeFileFlazz, $fileFlazz);
            } catch (\Throwable $th) {
                $success = false;
                $responseMessage = "Error when save file";
            }
        } else {
            list($fileId, $typeFileId, $fileNameId) = RegisterController::parseUriFile($request->fileId, $request->name . "id");

            try {
                file_put_contents('storage/file/'. $fileNameId . "." . $typeFileId, $fileId);
            } catch (\Throwable $th) {
                $success = false;
                $responseMessage = "Error when save file";
            }
        }

        $newGroupData = GroupData::create([
            'group_id'=> $newGroup,
            'fullname'=> $request->fullname,
            'email'=> $request->email,
            'whatsapp'=> $request->whatsapp,
            'line_id'=> $request->line_id,
            'github'=> $request->github,
            'birthplace'=> $request->birthplace,
            'birthdate'=> $request->birthdate,
            'cv_file'=> $fileNameCv . "." . $typeFileCv,
            'flazz_file' => $request->is_binusian ? $fileNameFlazz . "." . $typeFileFlazz : "",
            'idcard_file' => $request->is_binusian ? "" : $fileNameId . "." . $typeFileId,
            'regist_date'=> $request->regist_date
        ]);

        return response([
            "success" => $success,
            "devMessage"=> $devMessage,
            "data" => [
                "id" => $newGroup,
                "group_id"=> $newGroupData->id
            ],
            "message" =>  $responseMessage
        ]);
    }
}