@extends('client_layouts.master')
@section('title')
Submit app
@endsection

@section('content')

            <!-- start conent -->
            <section id="inner-headline">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="pageTitle">Présenter Une Demande</h2>
                        </div>
                    </div>
                </div>
            </section>

            <section id="content">
                <div class="container content">     
                    <p> </p>     
                    <form class="form-horizontal span6  wow fadeInDown" action="{{url('/submit')}} " method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="col-sm-8"> 
                            <div class="row">
                                <h2 class=" ">Information personnel</h2>          
                                <div class="form-group">
                                    <div class="col-md-11">
                                    <label class="col-md-4 control-label" for="FNAME">Nom:</label>
                                
                                        <div class="col-md-8">
                                            <input class="form-control input-sm" id="FNAME" name="firstname" placeholder="Firstname" type="text" value="{{Session::get("client")->firstname}}" autocomplete="off" readonly>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-11">
                                        <label class="col-md-4 control-label" for=
                                        "LNAME">Prenom:</label>
                                
                                        <div class="col-md-8">
                                            <input  class="form-control input-sm" id="LNAME" name="lastname" placeholder="Lastname" value="{{Session::get("client")->lastname}}"  autocomplete="off" readonly>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-11">
                                        <label class="col-md-4 control-label" for=
                                        "MNAME">Deuxième nom:</label>
                                
                                        <div class="col-md-8">
                                            <input  class="form-control input-sm" id="MNAME" name="middlename" placeholder=
                                            "Middle Name" value="{{Session::get("client")->middlename}}" autocomplete="off" readonly>
                                        </div>
                                    </div>
                                </div> 

                                <div class="form-group">
                                    <div class="col-md-11">
                                        <label class="col-md-4 control-label" for=
                                        "ADDRESS">Adresse:</label>
                                
                                        <div class="col-md-8">
                                            <textarea class="form-control input-sm" id="ADDRESS" name="address" placeholder=
                                            "Address" type="text" value="" readonly autocomplete="off">{{Session::get("client")->address}}</textarea>
                                        </div>
                                    </div>
                                </div> 

                                <div class="form-group">
                                    <div class="col-md-11">
                                        <label class="col-md-4 control-label" for=
                                        "Gender">Sexe:</label>
                                         
                                              @if (Session::get("client")->gender=="Mal")
                                              <div class="col-md-8">
                                                <div class="col-lg-5">
                                                    <div class="radio">
                                                    <label><input id="optionsRadios1"  name="gender" type="radio" value="Female" readonly>Femme</label>
                                                    </div>
                                                </div>
                                        
                                                <div class="col-lg-4">
                                                    <div class="radio">
                                                    <label><input id="optionsRadios2" checked="true"   name="gender" type="radio" value="Male" readonly> Homme</label>
                                                    </div>
                                                </div> 
                                            </div> 
                                              @else
                                              <div class="col-md-8">
                                                <div class="col-lg-5">
                                                    <div class="radio">
                                                    <label><input id="optionsRadios1"  checked="true" name="gender" type="radio" value="Female" readonly>Femme</label>
                                                    </div>
                                                </div>
                                        
                                                <div class="col-lg-4">
                                                    <div class="radio">
                                                    <label><input id="optionsRadios2"    name="gender" type="radio" value="Male" readonly> Homme</label>
                                                    </div>
                                                </div> 
                                            </div> 
                                                  
                                              @endif
                                                
                                        
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-11">
                                        <label class="col-md-4 control-label" for=
                                        "BIRTHPLACE">
                                        Date de naissance:
                                        </label>
                                
                                        <div class="col-md-8">
                                            <input type="date" name="" id="" class="form-control input-sm" value="{{Session::get("client")->dateofbirth}}" readonly>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-11">
                                        <label class="col-md-4 control-label" for=
                                        "BIRTHPLACE">Lieu de naissance:</label>
                                
                                        <div class="col-md-8">
                                            <textarea class="form-control input-sm" id="BIRTHPLACE" name="birthplace" placeholder="Place of Birth" type="text" autocomplete="off" readonly>{{Session::get("client")->birthplace}}
                                            </textarea>
                                        </div>
                                    </div>
                                </div> 

                                <div class="form-group">
                                    <div class="col-md-11">
                                        <label class="col-md-4 control-label" for=
                                        "TELNO">Contact :</label>
                                    
                                        <div class="col-md-8">
                                            <input class="form-control input-sm" id="TELNO" name="phone" placeholder=
                                            "Contact No." type="text" any value="{{Session::get("client")->phone}}" readonly autocomplete="off">
                                        </div>
                                    </div>
                                </div> 

                                <div class="form-group">
                                    <div class="col-md-11">
                                        <label class="col-md-4 control-label" for=
                                        "CIVILSTATUS">Etat civil:</label>
                                    
                                        <div class="col-md-8">
                                            <select class="form-control input-sm" name="civilstatus" id="CIVILSTATUS" readonly >
                                                <option value="Widow" >{{Session::get("client")->civilstatus}}</option>
                                            </select> 
                                        </div>
                                    </div>
                                </div>  
                                
                                <div class="form-group">
                                    <div class="col-md-11">
                                        <label class="col-md-4 control-label" for=
                                        "EMAILADDRESS">Email :</label> 
                                        <div class="col-md-8">
                                            <input type="email" class="form-control input-sm" id="EMAILADDRESS" name="email" placeholder="Email Address"   autocomplete="false" value="{{Session::get("client")->email}}" readonly/> 
                                        </div>
                                    </div>
                                </div>  

                                <div class="form-group">
                                    <div class="col-md-11">
                                        <label class="col-md-4 control-label" for=
                                        "USERNAME">Nom d'utilisateur:</label>
                                    
                                        <div class="col-md-8">
                                            <input  class="form-control input-sm" id="USERNAME" name="username" placeholder="Username" value="{{Session::get("client")->username}}" autocomplete="off" readonly>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="col-md-11">
                                        <label class="col-md-4 control-label" for=
                                        "PASS">Mot de passe :</label>
                                    
                                        <div class="col-md-8">
                                        <input  class="form-control input-sm" id="PASS" name="password" placeholder="Password" type="password" value="{{Session::get("client")->password}}" autocomplete="off" readonly>
                                        </div>
                                    </div>
                                </div> 

                                <div class="form-group">
                                    <div class="col-md-11">
                                        <label class="col-md-4 control-label" for=
                                        "DEGREE">Niveau de scolarité :</label>
                                    
                                        <div class="col-md-8">
                                            <input  class="form-control input-sm" id="DEGREE" name="degree" placeholder="Educational Attainment" value="{{Session::get("client")->degree}}" autocomplete="off" readonly>
                                        </div>
                                    </div>
                                </div> 

                                <div class="form-group">
                                    <div class="col-md-11">
                                        <label class="col-md-4 control-label" for=
                                        "d"></label>  
                                    
                                        <div class="col-md-8">
                                            <label><input type="checkbox" required>  En vous inscrivant, vous acceptez nos termes et conditions <a href="#">terme et condition</a></label>
                                        
                                        </div>
                                    </div>
                                </div>   
                
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="row">
                                <h2 class=" " >Detaills sur l'emploi</h2>
                                <div class="panel">

                                    <div class="panel-header">
                                        <div style="border-bottom: 1px solid #ddd;padding: 10px;font-size: 25px;font-weight: bold;color: #000;margin-bottom: 5px;"><a href="">{{$vacancy->occuptitle}}</a> 
                                        </div> 
                                    </div>

                                    <div class="panel-body">
                                            <div class="row contentbody">
                                                    <div class="col-sm-6">
                                                        <ul>
                                                            <li><i class="fp-ht-bed"></i>Nombre d'employés : {{$vacancy->numofemp}}</li>
                                                            <li><i class="fp-ht-food"></i>Salaire : {{$vacancy->salary}}</li>
                                                            <li><i class="fa fa-sun-"></i>Duration of Employment : {{$vacancy->duration}}</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <ul> 
                                                            <li><i class="fp-ht-tv"></i>Prefered Sex : {{$vacancy->prefsex}}</li>
                                                            <li><i class="fp-ht-computer"></i>Durée de l'emplo : {{$vacancy->sector}}</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <p>Diplôme/Expérience Professionnelle ::</p>
                                                        <ul style="list-style: none;"> 
                                                            <li>{{$vacancy->experience}}</li> 
                                                        </ul> 
                                                    </div>
                                                    <div class="col-sm-12"> 
                                                        <p>Description de l'emploi:</p>
                                                        <ul style="list-style: none;"> 
                                                            <li>{{$vacancy->description}}</li> 
                                                        </ul> 
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <p>Employeur : {{$vacancy->companyname}}</p> 
                                                        <p>Lieu:  {{$vacancy->address}}</p>
                                                    </div>
                                                </div>
                                    </div>
                                    
                                    <div class="panel-footer">
                                        Date de publication :   {{$vacancy->created_at}}  
                                    </div>
                                </div>  
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="row">
                                <div class="panel panel-default">
                                    <div class="panel-header">
                                        <div style="border-bottom: 1px solid #ddd;padding: 10px;font-size: 25px;font-weight: bold;color: #000;margin-bottom: 5px;">Joignez votre CV ici.
                                        </div>
                                    </div>
                                    <div class="panel-body"> 
                                        <label class="col-md-2" for="picture" style="padding: 0;margin: 0;">Fichier joint :</label> 
                                      
                                        <div class="col-md-10" style="padding: 0;margin: 0;">
                                            <input id="picture" name="resume" type="file" required>
                                            <input type="hidden" name="vacancyid" value="{{$vacancy->id}}">
                                            <input type="hidden" name="clientid" value="{{Session::get("client")->id}}">
                                            <input type="hidden" name="companyname" value="{{$vacancy->companyname}}">
                                            <input type="hidden" name="occuptitle" value="{{$vacancy->occuptitle}}">
                                        </div> 
                                    </div>
                                </div> 
                            </div> 
                        </div>
                        <div class="form-group">
                            <div class="col-md-12"> 
                                <button class="btn btn-primary btn-sm pull-right" name="submit" type="submit" >Soumettre <span class="fa fa-arrow-right"></span></button>
                            <a href="" class="btn btn-info"><span class="fa fa-arrow-left"></span>&nbsp;<strong>Retour</strong></a> 
                            </div>
                        </div>   
                    </form> 
                </div> 
            </section> 
        <!-- end content -->
@endsection