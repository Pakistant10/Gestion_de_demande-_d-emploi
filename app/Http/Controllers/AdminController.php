<?php

namespace App\Http\Controllers;

use App\Models\applicant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

use App\Models\company;
use App\Models\employee;
use App\Models\Category;
use App\Models\vacancy;
use App\Models\client;
use App\Models\usersAdmin;

use Illuminate\Validation\NestedRules;

class AdminController extends Controller
{
    public function dashboard(){
        $company = company::count();
        $vacancy = vacancy::count();
        $applicant = applicant::count();
        $usersAdmin=Session('usersAdmin');
    return view('Admin.dashboard', compact('company'),compact('vacancy'),compact('applicant'))->with('usersAdmin',$usersAdmin);
       
    }
    public function company(){
        $companies= Company::get();
        return view('Admin.company')->with("companies",$companies);

    }
    public function vacancy(){
        $vacancies=vacancy::get();
        return view('Admin.vacancy')->with("vacancies",$vacancies);
    }
    public function employe(){
        $employees= employee::get();
        return view('Admin.employe')->with("employees",$employees);
    }
    public function applicants(){
           $applicants=applicant::get();
        return view('Admin.applicants')->with("applicants",$applicants);
    }
      public function viewapplicant($clientid,$vacancyid,$resume){
        $client=Client::find($clientid);
        $vacancy=vacancy::find($vacancyid);
        $applicant=applicant::where("clientid",$clientid)->first();

        return view('Admin.viewapplicant')->with("client",$client)->with("vacancy",$vacancy)->with("resume",$resume)->with("applicant",$applicant);

      }

      public function sendfeedback(Request $request){
        $applicant=applicant::find($request->input("id"));
        $applicant->status=$request->input("feedback");
        $applicant->update();
        return back();


      }
      
      public function deleteapplicant($id){
        $applicant= applicant::find($id);
        $applicant->delete();
        Storage::delete('public/resumes/'.$applicant->resume);
        return back()->with("status","Le candidats a  ete supprime  avec succes!!!");





      }





        
    public function categorie(){
        $categories=Category::get();
        return view('Admin.categorie')->with("categories",$categories);
    }
    public function users(){
        $usersAdmin= usersAdmin::get();
        return view('Admin.users')->with("usersAdmin",$usersAdmin);
    }
    public function addcompany(){
        return view('Admin.addcompany');
    }
    public function addvacancy(){
        $companies=company::get();
        $categories=Category::get();
        return view('Admin.addvacancy')->with("companies",$companies)->with("categories",$categories);
    }
    public function addemploye(){
        $companies= company::get();
        return view('Admin.addemploye')->with("companies",$companies );;
    }
    public function addcategorie(){
        return view('Admin.addcategorie');
    }
    public function addusers(){
        

        return view('admin.addusers');
    }
    public function saveusers(Request $request){
        $usersAdmin=new usersAdmin();
        $usersAdmin->fullname=$request->input('fullname');
        $usersAdmin->username=$request->input('username');
        $usersAdmin->password=$request->input('password');
        $usersAdmin->role=$request->input('role');
        $usersAdmin->save();
        return back()->with("status","L'utilisateur  a  ete ajouter avec succes");

    }




    public function userprofile(){
        return view('Admin/userprofile');
    }
    public function savecompany(Request $request){
        $company=new Company();
        $company->name= $request->input('name');
        $company->address= $request->input('address');
        $company->contact= $request->input('contact');

        $company->save();
        return back()->with("status","L'entreprise a  ete ajouter avec succes");
    }
    public function deletecompany($id){
        $company= Company::find($id);
        $company->delete();
        return back()->with("status","L'entreprise a  ete supprime  avec succes");


    }
    public function editecompany($id){
        $company= Company::find($id);

        return view('admin.editcompany')->with('company',$company);

    }
    public function updatecompany(Request $request ){
        $company = company::find($request->input('id'));
        $company-> name = $request -> input('name');
        $company-> address= $request -> input('address');
        $company-> contact = $request -> input('contact');
         
        $company->update();

        return redirect("/admin/company")->with("status","L'entreprise a  ete modifier  avec succes");



    }
    public function saveemployee(Request $request){
        $employee=new employee();
        $employee->empid= $request->input('empid');
        $employee->firstname= $request->input('firstname');
        $employee->lastname= $request->input('lastname');
        $employee->middlename= $request->input('middlename');
        $employee->address= $request->input('address');
        $employee->gender= $request->input('gender');
        $employee->birthday= $request->input('birthday');
        $employee->birthplace= $request->input('birthplace');
        $employee->phone= $request->input(' phone');
        $employee->civilstatus= $request->input('civilstatus');
        $employee->position= $request->input('position');
        $employee->hireddate= $request->input('hireddate');
        $employee->email= $request->input('email');
        $employee->companyname= $request->input('companyname');

        $employee->save();
        return back()->with("status","L'employe a  ete ajouter avec succes !!!!");

    }
    public function deleteemployee($id){
        $employee=employee::find($id);
        $employee->delete();
        return back()->with("status","L'employe a  ete supprime  avec succes !!!!");
    }
    public function editemployee($id){
        $employee=employee::find($id);
        $companies=company::where("name","!=", $employee->companyname)->get();
        return view('Admin.editemployee')->with('employee',$employee)->with("companies", $companies);
    }
    public function updateemployee(Request $request){
        $employee=employee::find($request->input('id'));
        $employee->empid= $request->input('empid');
        $employee->firstname= $request->input('firstname');
        $employee->lastname= $request->input('lastname');
        $employee->middlename= $request->input('middlename');
        $employee->address= $request->input('address');
        $employee->gender= $request->input('gender');
        $employee->birthday= $request->input('birthday');
        $employee->birthplace= $request->input('birthplace');
        $employee->phone= $request->input('phone');
        $employee->civilstatus= $request->input('civilstatus');
        $employee->position= $request->input('position');
        $employee->hireddate= $request->input('hireddate');
        $employee->email= $request->input('email');
        $employee->companyname= $request->input('companyname');

        $employee->update();
         return back()->with("status","L'employe a  ete modifier avec succes !!!!");
    }
    public function savecategory(Request $request){
        $category=new category();
        $category->category=$request->input('category');
        $category->save();
        return back()->with("status","la categorie  ete ajouter avec succes !!!!");

    }
    public function deletecategory($id){
        $category= category::find($id);
        $category->delete();
        return back()->with("status","La categorie  a  ete supprime  avec succes !!!!");
    }
    public function editcategory($id){
        $category=category::find($id);
        return view('admin.editcategory')->with("category",$category);
    }
    public function updatecategory(Request $request){
        $category=category::find($request->input('id'));
        $category->category=$request->input('category');
        $category->update();
        return back()->with("status","La categorie a  ete modifier avec succes !!!!");
    }
    public function createvacancy(Request $request){
        $vacancy=new vacancy();
        $company=company::where("name", $request->input('companyname'))->first();
        $vacancy->companyname=$request->input('companyname');
        $vacancy->category=$request->input('category');
        $vacancy->address=$company->address;
        $vacancy->occuptitle=$request->input('occuptitle');
        $vacancy->salary=$request->input('salary');
        $vacancy->numofemp=$request->input('numofemp');
        $vacancy->duration=$request->input('duration');
        $vacancy->experience=$request->input('experience');
        $vacancy->description=$request->input('description');
        $vacancy->prefsex=$request->input('prefsex');
        $vacancy->sector=$request->input('sector');
         $vacancy->save();
         return back()->with("status","Le poste  a  ete ajouter avec succes !!!!");
    }
    public function deletevacancy($id){
        $vacancies=vacancy::find($id);
        $vacancies->delete();
        return back()->with("status","Le poset a  ete supprime  avec succes !!!!");
    }
    public function editvacancy($id){

        $vacancy=vacancy::find($id);
        $companies=company::where("name", "!=",$vacancy->companyname)->get();
        $categories=Category::where("category", "!=", $vacancy->category)->get();
        return view('Admin.editvacancy')->with("companies",$companies)->with("categories", $categories)->with("vacancy",$vacancy);
    }
    public function updatevacancy(Request $request){
        $vacancy=vacancy::find($request->input('id'));
        $company=company::where("name", $request->input('companyname'))->first();
        $vacancy->companyname=$request->input('companyname');
        $vacancy->category=$request->input('category');
        $vacancy->address=$company->address;
        $vacancy->occuptitle=$request->input('occuptitle');
        $vacancy->salary=$request->input('salary');
        $vacancy->numofemp=$request->input('numofemp');
        $vacancy->duration=$request->input('duration');
        $vacancy->experience=$request->input('experience');
        $vacancy->description=$request->input('description');
        $vacancy->prefsex=$request->input('prefsex');
        $vacancy->sector=$request->input('sector');
         $vacancy->update();
         return back()->with("status","Le poste  a  ete modfier avec succes !!!!");


    }
    public function logout(){
        Session::forget("userAdmin");
        return redirect("/");
    }
    public function login(Request $request)
{
    $usersAdmin=usersAdmin::get();
    // var_dump($usersAdmin);
    foreach ($usersAdmin as $user) {
        if ($user->username == $request->username && $user->password == $request->password) {
            // Les identifiants de connexion sont valides
            // Vous pouvez ici créer une session pour l'utilisateur
            // var_dump($user);
            Session::put("usersAdmin", $user);

            // Rediriger l'utilisateur vers une autre page
            return redirect('/admin/dashboard');
        }
    }

    // Si les identifiants de connexion ne sont pas valides,
    // rediriger l'utilisateur vers une page d'erreur ou une page de connexion
    return redirect('/')->withErrors(['error' => 'Les identifiants de connexion sont invalides.']);
}
}
