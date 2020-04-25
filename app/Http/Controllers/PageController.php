<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class PageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    // public function upload()
    // {
    //     return view('upload');
    // }

    // public function checkInput($value){
    //     if($value==""){
    //         return 0;
    //     }
    //     return (int)$value;

    // }

    // public function saveGenderCsv(Request $request){
    //     if ($request['gendercsv']!= null ){

    //         $file =$request['gendercsv'];
      
    //         // File Details 
    //         $filename = $file->getClientOriginalName();
    //         $extension = $file->getClientOriginalExtension();
    //         $tempPath = $file->getRealPath();
    //         $fileSize = $file->getSize();
    //         $mimeType = $file->getMimeType();
      
    //         // Valid File Extensions
    //         $valid_extension = array("csv");
      
    //         // 2MB in Bytes
    //         $maxFileSize = 2097152; 
      
    //         // Check file extension
    //         if(in_array(strtolower($extension),$valid_extension)){
      
    //           // Check file size
    //           if($fileSize <= $maxFileSize){
      
    //             // File upload location
    //             $location = 'resources/csv';
      
    //             // Upload file
    //             $file->move($location,$filename);
      
    //             // Import CSV to Database
    //             $filepath = public_path($location."/".$filename);
      
    //             // Reading file
    //             $file = fopen($filepath,"r");
      
    //             $importData_arr = array();
    //             $i = 0;
      
    //             while (($filedata = fgetcsv($file, 1000, ",")) !== FALSE) {
    //                $num = count($filedata );
                   
    //                for ($c=0; $c < $num; $c++) {
    //                   $importData_arr[$i][] = $filedata [$c];
    //                }
    //                $i++;
    //             }
    //             fclose($file);
                
      
    //             //Insert to MySQL database
    //             foreach($importData_arr as $importData){
      
    //               $insertData[] = array(
    //                  "confirmed"=>$this->checkInput($importData[0]),
    //                  "recovered"=>$this->checkInput($importData[1]),
    //                  "deaths"=>$this->checkInput($importData[2]),
    //                  "id"=>$this->checkInput($importData[3]));
    //             }
    //             //remove first line
    //             $data = array_slice($insertData, 1);
    //             return json_encode($data);
      
    //             //Session::flash('message','Import Successful.');
    //           }else{
    //             return "file too big";
    //           }
      
    //         }else{
    //             return "invalid file";
    //         }
      
    //       }
      
    //       // Redirect to index
    //       return "file not uploaded";
    //     }

  
}
