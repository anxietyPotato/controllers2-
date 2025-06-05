<?php
//virtual pathway to controller itself
namespace App\Http\Controllers;

use App\Models\ContactModel;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view('contact');
    }
    public function AllContact(){
        $AllContact = ContactModel::all();

        return view('AllContact',compact('AllContact'));

    }
}
