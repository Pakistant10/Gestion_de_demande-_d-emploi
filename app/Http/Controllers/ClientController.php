<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\company;
use App\Models\Category;
use App\Models\vacancy;
use App\Models\client;
use App\Models\applicant;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class ClientController extends Controller
{
    public function home(){
        $companies=company::get();
        $categories=Category::get();
        return view('client.home')->with("companies",$companies)->with("categories",$categories);
    }
    public function advance(){
        return view('client.advanced');
    }
    
    public function jobcompany(){
        return view('client.jobcompany');
    }
    public function jobfunction(){
        return view('client.jobfunction');
    }
    public function jobtitle(){
        $titreemploi=Category::where('Category','LIKE','%id%')->get();
        return view('client.jobtitle')->with('TitreEmploi',$titreemploi);
    }

    public function jobcategorie($name){
        $vacanies=vacancy::where("Category", $name)->get();
        return view('client.jobcategorie')->with("vacancies",$vacanies)->with("name",$name);
    }
    public function company(){
        $companies=company::get();
        return view('client.company')->with("companies",$companies);
    }
    public function hiring(){
        $vacancies=vacancy::get();
        return view('client.hiring')->with("vacancies",$vacancies);
    }
    public function abouts(){
        return view('client.abouts');
    }
    public function contact(){
        return view('client.contact');
    }
    public function applynow($id){
        $vacancy=vacancy::find($id);
        if(Session::has("client")){
            return view('client.submitapp')->with("vacancy",$vacancy);
         } else{
            return redirect("/register");
         }

        }
    public function hiringcompany($name){
        $vacanies=vacancy::where("companyname",$name)->get();

        return view('client.hiringcompany')->with("vacancies",$vacanies)->with("name",$name);
    }
    public function jobdetails($id){
        $vacancy=vacancy::find($id);
        return view('client.jobdetails')->with("vacancy",$vacancy);
    }
    public function register(){
        return view('client.register');
    }
    public function profile(){
        $applicants= applicant::where("clientid", Session::get("client")->id)->get();
        $fileNameToStore = Storage::url('profiles/'.Session::get('client')['image']);

        return view('client.profile', compact('fileNameToStore'))->with("applicants",$applicants);
    }
    public function message(){
        $applicants= applicant::where("clientid", Session::get("client")->id)->get();
        $fileNameToStore = Storage::url('profiles/'.Session::get('client')['image']);
        
        return view('client.message', compact('fileNameToStore'))->with("applicants",$applicants);
    }
    public function readmessage(){
        $applicants= applicant::where("clientid", Session::get("client")->id)->get();
        $fileNameToStore = Storage::url('profiles/'.Session::get('client')['image']);
        return view('client.readmessage', compact('fileNameToStore'))->with("applicants",$applicants);
    }
    public function jobapplied(){
        return view('client.jobapplied');
    }
    public function createaccount(Request $request){
        $this->validate($request,['email' => 'required|email|unique:clients']);
         $client=new client();
         $client->firstname=$request->input('firstname');
         $client->lastname=$request->input('lastname');
         $client->middlename=$request->input('middlename');
         $client->address=$request->input('address');
         $client->gender=$request->input('gender');
         $client->dateofbirth=$request->input('dateofbirth');
         $client->birthplace=$request->input('birthplace');
         $client->phone=$request->input('phone');
         $client->civilstatus=$request->input('civilstatus');
         $client->email=$request->input('email');
         $client->username=$request->input('username');
         $client->password=$request->input('password');
         $client->image="noimage.jpg";
         $client->degree=$request->input('degree');
          
         $client->save();

         Session::put("client",$client);
         return back()->with("status","votre compte  a  ete cree  avec succes !!!!");

          
    }
//     public function logout(){
//         Session::forget("client");
//         return redirect("/");
//     }
//     public function login(Request $request)
// {
//     $clients = Client::get();
//     foreach ($clients as $client) {
//         if ($client->username == $request->username && $client->password == $request->password) {
//             // Les identifiants de connexion sont valides
//             // Vous pouvez ici créer une session pour l'utilisateur
//             Session::put("client", $client);

//             // Rediriger l'utilisateur vers une autre page
//             return redirect('/');
//         }
//     }

//     // Si les identifiants de connexion ne sont pas valides,
//     // rediriger l'utilisateur vers une page d'erreur ou une page de connexion
//     return redirect('/')->withErrors(['error' => 'Les identifiants de connexion sont invalides.']);
// }
  
    public function submit(Request $request){

        //telecharge le cv

        $this->validate($request,['resume' => 'max:1999']);
        $fileNameWithExt = $request->file("resume")->getClientOriginalName();
        $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME );
        $ext = $request->file("resume")->getClientOriginalExtension();
        $fileNameToStore = $fileName."_".time().".".$ext;
         
        print($fileNameToStore);


        $applicant=new applicant();
        $applicant->fullname = Session::get("client")->firstname . " " . Session::get("client")->midllename;
        $applicant->occuptitle=$request->input('occuptitle');
        $applicant->company=$request->input('companyname');
        $applicant->clientid=$request->input('clientid');
        $applicant->vacancyid=$request->input('vacancyid');
        $applicant->resume=$fileNameToStore;
        $applicant->status="Attent";

        $applicant->save();
         // telecharge le fichier dans laravel public
         $path= $request->file("resume")->storeAs("public/resumes", $fileNameToStore);
         return redirect('/succes')->with("status","votre candidature a ete envoye avec succes !!!");
       }

       public function succes(){
        return view('client.succes');
       }


       public function uploadimage(Request $request){
        $this->validate($request,['image' => 'image|max:1999']);
        $fileNameWithExt = $request->file("image")->getClientOriginalName();
        $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME );
        $ext = $request->file("image")->getClientOriginalExtension();
        $fileNameToStore = $fileName."_".time().".".$ext;
        $path= $request->file("image")->storeAs("public/profiles", $fileNameToStore);
        $client=client::where("id",Session::get("client")->id)->first();
        $client->image = $fileNameToStore;
        $client->save();
        
        return redirect('client.profile', compact('fileNameToStore'));

       }

    
}