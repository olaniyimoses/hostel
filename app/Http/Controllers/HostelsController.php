<?php

namespace HMS\Http\Controllers;

use HMS\Hostel;
use HMS\Room;
use Illuminate\Http\Request;

use HMS\Http\Requests;
use HMS\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class HostelsController extends Controller
{
    public function index() {
        return view('index')->with('all_hostels', Hostel::paginate(8));
    }

    public function showHostel($slug){
//        return Hostel::whereSlug($slug);
//        $hostel->rooms();

        $hostel = DB::table('hostels')
            ->leftJoin('rooms','hostels.id', '=', 'rooms.hostel_id')
                    ->where('rooms.occupied', '=', 0)
                    ->where('hostels.slug', '=', $slug)->limit(1)->get();

        $remains = DB::table('hostels')
            ->leftJoin('rooms', 'hostels.id', '=', 'rooms.hostel_id')
            ->where('occupied', '=', 0)
            ->where('slug', '=', $slug)
            ->count();

        $types = DB::table('hostels')
            ->leftJoin('rooms', 'hostels.id', '=', 'rooms.hostel_id')
            ->select('rooms.room_type', 'rooms.price')
            ->where('hostels.slug', '=', $slug)->distinct()->get();

//        return $type;
        return view('hostel', compact('hostel', 'remains', 'types'));

    }
}
