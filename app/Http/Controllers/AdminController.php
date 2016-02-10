<?php

namespace HMS\Http\Controllers;

use HMS\Hostel;
use HMS\Room;
use Illuminate\Http\Request;

use HMS\Http\Requests;
use HMS\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class AdminController extends Controller
{
    public function __construct() {
        $this->middleware('admin');
    }

    public function index() {
        return view('dashboard');
    }

    public function newHostel(){
        return view('new');
    }

    public function rooms(){
        return view('rooms');
    }

    public function addHostel(Requests\HostelFormRequest $request, Hostel $hostel){
        if ($hostel->create($request->all())){
            return redirect('admin/new')->with('message', 'Hostel Added Successfully');
        }

        return redirect()->back()->withInput();
    }

    public function addRooms(Requests\RoomFormRequest $request, Room $room){
        if($request->counter){
            for ($i = 0; $i < $request->counter; $i++){
                if ($room->create($request->all())){
                    continue;
                }
            }
            return redirect('admin/rooms')->with('message', 'Room(s) added Successfully');
        }

        return redirect()->back()->withInput();
    }

    public function showPictures() {
        return view('pictures');
    }

    public function addPictures(){
//        Storage::disk('local')->makeDirectory(Input::get('hostel_id'));

        $folder = Input::get('hostel_id');
        $path = public_path().'/assets/img/hostels/'.$folder;
        if (!File::exists($path)){
            File::makeDirectory($path, $mode = 0777, true, true);
        }

        $files = Input::file('hostel_pix');
        $file_count = count($files);
        $uploadCount = 0;

        foreach ($files as $file) {
            $rules = array('hostel_pix' => 'required|mimes:png,gif,jpeg,jpg,bmp', 'hostel_id' => 'required');
            $validator = Validator::make(array('hostel_pix' => $file, 'hostel_id'=>$folder), $rules);
            if ($validator->passes()){
//                $destination = storage_path("/app/$folder");
                $filename = $file->getClientOriginalName();
                $upload_success = $file->move($path, $filename);
                $uploadCount++;
            }
        }
        if ($uploadCount == $file_count) {
            return redirect('admin/pictures')->with('message', 'Upload Successful');
        } else {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        /*if (is_array($request->hostel_pix)){
            foreach($request->hostel_pix as $pix){
                $files = new \Upload\File($pix, $storage);

                $files->addValidations(array(
                    new \Upload\Validation\Mimetype('image/png', 'image/jpg', 'image/jpeg', 'image/bmp'),
                    new \Upload\Validation\Size('2M')
                ));

                try {
                    $files->upload();
                } catch (\Exception $e){
                    redirect()->back()->with('message', $files->getErrors());
                }
            }
        }*/
    }
}
