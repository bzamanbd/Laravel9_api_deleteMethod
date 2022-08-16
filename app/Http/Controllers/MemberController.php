<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    function delete (Request $req){
        $member = Member::find($req->id);
        $result=$member->delete();

        if ($result) {
            return 'one data deleted';
        } else {
            return 'error found';
        }

    }
}