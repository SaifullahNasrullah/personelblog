<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\PersonelInformation;
use App\Education;
use App\Experiences;
use App\Skills;
use App\Projects;
use App\Applications;
use App\Contact;


class adminController extends Controller
{

     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.app');
    }

    public function login()
    {
        return view('admin/login');
    } 
    #region Personel Information 
    public function personelinformation(){ 
        $personelinfo = Personelinformation::first();
        return view('backend.personelinformation')->with('personelinfo', $personelinfo);
    }
    public function Addpersonelinformation(Request $request){  
        $personelinfo = PersonelInformation::find(1);
        $personelinfo->name = $request->name;
        $personelinfo->dob = $request->dob;
        $personelinfo->phone = $request->phone;
        $personelinfo->email = $request->email;
        $personelinfo->address = $request->address;
        $personelinfo->instagram = $request->instagram;
        $personelinfo->linkedin = $request->linkedin; 
        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();//getting image extension
            $filename = time() . '.' . $extension;
            $file->move('uploads/pictures/', $filename);
            $personelinfo->image = $filename;
        } 
        $personelinfo->save(); 
        return redirect(url()->previous().'#subscribes')->with('cevap','Ekleme işlemi Başarılı!')
        ->with('personelinfo', $personelinfo);
    } 
    #endregion
    #region Education 
    public function education(){ 
        $education = Education::get();
        return view('backend.education')->with('education', $education);
        
    }
    public function educationUpdate($id){ 
        $education = Education::find($id);
        return view('backend.educationupdate')->with('education', $education);
        
    }
    public function educationDelete($id){ 
        $educationdel = Education::find($id);
        $educationdel->delete();
        $education = Education::get();
        return view('backend.education')->with('education', $education);
    }
    public function addEduinformation(Request $request){
        $eduinfo = new Education();
        $eduinfo->year = $request->year;
        $eduinfo->school = $request->school;
        $eduinfo->explanation = $request->explanation;
        $eduinfo->title = $request->title;
        $eduinfo->save(); 
        return redirect()->back()->with('cevap','Ekleme işlemi Başarılı!');
    } 
    public function updateEduinformation($id,Request $request){
        $eduinfo = Education::find($id);
        $eduinfo->year = $request->year;
        $eduinfo->school = $request->school;
        $eduinfo->explanation = $request->explanation;
        $eduinfo->title = $request->title;
        $eduinfo->save(); 
        return redirect()->back()->with('cevap','Güncelleme işlemi Başarılı!');
    }
    #endregion
    #region Applications 
    public function application(){ 
        $projects = Projects::get();
        return view('backend.application')->with('projects', $projects);
    } 
    public function addApplications(Request $request){

        $app = new Applications(); 
        $app->name = $request->name;
        $app->explanation = $request->explanation;
        $app->projectId = $request->projectId;

        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();//getting image extension
            $filename = time() . '.' . $extension;
            $file->move('uploads/applications/', $filename);
            $app->image = $filename;
        }else {
            return $request;
            $app->image = '';
        } 
        $app->save(); 
        return redirect()->back()->with('cevap','Ekleme işlemi Başarılı!');
    }
    #endregion
    #region Experiences 
    public function experience(){ 
        $experiences = Experiences::get();
        return view('backend.experience')->with("experiences",$experiences);
    }
    public function experienceUpdate($id){ 
        $experiences = Experiences::find($id);
        return view('backend.experienceupdate')->with('experiences', $experiences);
        
    }
    public function updateExperiences($id,Request $request){
        $experiences = Experiences::find($id);
        $experiences->year = $request->year;
        $experiences->company = $request->company;
        $experiences->explanation = $request->explanation;
        $experiences->position = $request->position;
        $experiences->title = $request->title;
        $experiences->save(); 
        return redirect()->back()->with('cevap','Güncelleme işlemi Başarılı!');
    }
    public function experienceDelete($id){ 
        $experiencesdel = Experiences::find($id);
        $experiencesdel->delete();
        $experiences = Experiences::get();
        return view('backend.experience')->with('experiences', $experiences);
    }
    public function addExperiences(Request $request){
        $experiences = new Experiences();
        $experiences->year = $request->year;
        $experiences->company = $request->company;
        $experiences->explanation = $request->explanation;
        $experiences->position = $request->position;
        $experiences->title = $request->title;
        $experiences->save(); 
        return redirect()->back()->with('cevap','Ekleme işlemi Başarılı!');
    }

    #endregion
    #region Skills 
    public function skill(){ 
        $skills = Skills::get();
        return view('backend.skill')->with("skills", $skills);
    }
    public function addSkills(Request $request){

        $skills = new Skills(); 
        $skills->title = $request->title;
        $skills->point = $request->point;
        $skills->save(); 
        return redirect()->back()->with('cevap','Ekleme işlemi Başarılı!');
    }
    public function updateSkills($id){
        $skills = Skills::find($id); 
        return view('backend.skillupdate')->with('skills', $skills);
    }
    public function SaveUpdateSkills($id, Request $request){
        $skills = Skills::find($id); 
        $skills->title = $request->title;
        $skills->point = $request->point;
        $skills->save(); 
        return redirect()->back()->with('cevap','Güncelleme işlemi başarılı !');
    }
    public function SkillsDelete($id){ 
        $skill = Skills::find($id);
        $skill->delete();
        $skills = Skills::get();
        return redirect()->back()->with('cevap','Kayıt Silindi !');
    }
    #endregion
    #region Prpjects 
    public function project(){ 
        $projelist = Projects::get();
        return view('backend.project')->with("projelist", $projelist);
    }  
    public function addProjects(Request $request){ 
        $skills = new Projects(); 
        $skills->title = $request->title;
        $skills->count = $request->count;
        $skills->save(); 
        return redirect()->back()->with('cevap','Ekleme işlemi Başarılı!');
    }
    public function UpdateProject($id)
    {
        $project = Projects::find($id);
        return view('backend.updateproject')->with('project', $project);
    }
    public function SaveUpdateProject($id, Request $request)
    {
        $project = Projects::find($id);
        $project->count = $request->count;
        $project->title = $request->title;
        $project->save();
        return redirect()->back()->with('cevap','Ekleme işlemi Başarılı!');
    }
    public function ProjectDelete($id){ 
        $project = Projects::find($id);
        $project->delete();
        $projects = Projects::get();
        return redirect()->back()->with('cevap','Kayıt Silindi !');
    }
    #endregion
    public function contact(){ 
        $incomeMessages = Contact::get();
        return view('backend.contact')->with('Mesajlar', $incomeMessages);
    }

    public function DeleteMessages($id){
        $trashMessage = Contact::find($id);
        $trashMessage->delete();
        return redirect()->back()->with('cevap','Silme işlemi Başarılı!');
    }
}