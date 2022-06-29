<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PersonelInformation;
use App\Contact;
use App\Experiences;
use App\Education;
use App\Projects;
use App\Applications;
use App\Skills;




class WebController extends Controller
{
    public function get_index(){
        $cevap = "";
        $bilgiPerson = PersonelInformation::get(); 
        $experiences = Experiences::get();
        $educations = Education::get();
        $projects = Projects::get();
        $applications = Applications::get();
        $skills = Skills::get();  

        return view('index')->with('bilgiPerson', $bilgiPerson)
        ->with('experiences', $experiences)->with('educations', $educations)->with('cevap', $cevap)
        ->with('projects', $projects)->with('applications', $applications)->with('skills', $skills);
    }

    public function contactMe(Request $request){
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->message = $request->message; 
        $contact->save(); 
        return redirect(url()->previous().'#subscribes')->with('cevap','Your Message is on its way, we will response you as soon as possible !'); 
    }
}
