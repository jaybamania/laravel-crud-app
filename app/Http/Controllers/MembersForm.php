<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Member;

class MembersForm extends Controller
{
    //
    function add(Request $req){
        $req->validate([
            'name'=>'required | max:5',
            'phone'=>'required | max:10 | min:10',
            'email'=>'required',
            'address' => 'required'
        ]);
        $data =  DB::table('members')
        ->insert(
            [
                'name'=>$req->name,
                'email'=>$req->email,
                'phone'=>$req->phone,
                'address'=>$req->address
            ]
        );
        $req->session()->flash('name',$req->name);
        return redirect('admin');
        // return $req->input();
    }

    function editData($id){
        // $new_id = intval($id);
        // $object = Model::find($id);
        
        // $data =
        //     DB::table('members')
        //      ->where('id',$id)
        //      ->get();
        $data = Member::firstOrNew(['id' => $id]);
        
        // return view("edit")->with('info',$data);
        return view('edit',['info'=>$data]);
    }

    function update(Request $req){
        $data_to_update = [
            'name'=> $req->name,
            'email'=> $req->email,
            'phone'=> $req->phone,
            'address'=> $req->address
        ];

        DB::table('members')
            ->where('id',$req->id)
            ->update($data_to_update);
        $req->session()->flash('id',$req->id);
        $req->session()->flash('updated_name',$req->name);
        return redirect('admin');
    }

    function deleteData($id){
        session('delete_id',$id);
        DB::delete('delete from members where id = ?',[$id]);
        return redirect('admin');
    }
}
