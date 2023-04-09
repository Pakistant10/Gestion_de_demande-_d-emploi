@extends('Admin_layouts.master')
@section('title')
Voir les Candidatures
@endsection
@section('content')
                   <!-- start content -->
                   <div class="content-wrapper">
                    <section class="content-header">
                        <h1>Candidats</h1>
                        <ol class="breadcrumb">
                            <li><a href="dashboard.html"><i class="fa fa-dashboard"></i> Maison</a></li>
                            <li class=><a href="dashboard.html">Candidats</a></li><li class="active">voir</li>      
                        </ol>
                    </section>
            
                    <section class="content">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="box">
                                    <div class="box-body">
                    
                                        <style type="text/css">
                                            .content-header {
                                                min-height: 50px;
                                                border-bottom: 1px solid #ddd;
                                                font-size: 15px;
                                                font-weight: bold;
                                            }
            
                                            .content-body {
                                                min-height: 350px;
                                                /*border-bottom: 1px solid #ddd;*/
                                            }
            
                                            .content-body >p {
                                                padding:10px;
                                                font-size: 12px;
                                                font-weight: bold;
                                                border-bottom: 1px solid #ddd;
                                            }
            
                                            .content-footer {
                                                min-height: 100px;
                                                border-top: 1px solid #ddd;
                                            }
            
                                            .content-footer > p {
                                                padding:5px;
                                                font-size: 15px;
                                                font-weight: bold; 
                                            }
                                        
                                            .content-footer textarea {
                                                width: 100%;
                                                height: 200px;
                                            }
                                            .content-footer  .submitbutton{  
                                                margin-top: 20px;
                                                /*padding: 0;*/
                                            }
                                        </style>
                    
                                        <form action="{{url('/admin/sendfeedback')}}" method="POST">
                                            @csrf
                                            {{-- <input type="hidden" name="_token" value="DqmT9A5GdcuqqLQFE2cJcsc4Rsh0gP5TtDP5zwMj"> --}}
                                            <div class="col-sm-12 content-header">Voir les détails</div>
                                            
                                            <div class="col-sm-6 content-body" > 
                                                <p>JDétails du poste</p> 
                                                <h3>{{$vacancy->occuptitle}}.</h3>
                                                <input type="hidden" name="JOBREGID" value="3">
                                                <input type="hidden" name="APPLICANTID" value="2022016">
                        
                                                <div class="col-sm-6">
                                                    <ul>
                                                        <li><i class="fp-ht-bed"></i>Nombre d'employés requis  :{{$vacancy->numofemp}}</li>
                                                        <li><i class="fp-ht-food"></i>Salaire : {{$vacancy->salary}}</li>
                                                        <li><i class="fa fa-sun-"></i>Durée de l'emploi : {{$vacancy->duration}}</li>
                                                    </ul>
                                                </div> 
                        
                                                <div class="col-sm-6">
                                                    <ul> 
                                                        <li><i class="fp-ht-tv"></i>Sexe préféré : {{$vacancy->prefsex}}</li>
                                                        <li><i class="fp-ht-computer"></i>Secteur: {{$vacancy->sector}}.</li>
                                                    </ul>
                                                </div>
                        
                                                <div class="col-sm-12">
                                                    <p>Description de l'emploi :</p>   
                                                    <p style="margin-left: 15px;">{{$vacancy->description}}.</p>
                                                </div>
                        
                                                <div class="col-sm-12"> 
                                                    <p>Diplôme/Expérience Professionnelle : </p>
                                                    <p style="margin-left: 15px;">{{$vacancy->experience}}.</p>
                                                </div>
                        
                                                <div class="col-sm-12"> 
                                                    <p>Employé  : </p>
                                                    <p style="margin-left: 15px;">{{$vacancy->companyname}}</p> 
                                                    
                                                </div>
                        
                                            </div>
                    
                                            <div class="col-sm-6 content-body" >
                                                <p>Informations sur le candidat</p> 
                                                <h3> {{$client->firstname}} {{$client->lastname}}
                                                </h3>
                                                <ul> 
                                                    <li>Adresse : {{$client->address}}</li>
                                                    <li>Contact : {{$client->phone}}</li>
                                                    <li>Email  : {{$client->email}}</li>
                                                    <li>Sexe: {{$client->gender}}</li>
                                                    <li>Age : {{$client->dateofbirth}}</li> 
                                                </ul>
            
                                                <div class="col-sm-12"> 
                                                    <p>Niveau de scolarité : </p>
                                                    <p style="margin-left: 15px;">{{$client->degree}}</p>
                                                </div>
                                            </div>
                                        
                                            <div class="col-sm-12 content-footer">
                                                
                                                <p><i class="fa fa-paperclip"></i>  Fichiers joints</p>
                                                
                                                <div class="col-sm-12 slider">
                                                    <h3>Télécharger le CV ici <a href="/storage/resumes/{{$resume}}" target="_blank">ici </a></h3>
                                                </div> 
                        
                                                <div class="col-sm-12">
                                                    <p>Message</p>
                                                    <textarea class="input-group" name="feedback" required>{{$applicant->status != "Attent"? $applicant->status: ''}}</textarea>
                                                    <input type="hidden" name="id" placeholder="entre le message" value="{{$applicant->id}}">
                                                </div>
            
                                                <div class="col-sm-12  submitbutton "> 
                                                    <button type="submit" name="submit" class="btn btn-primary">Envoyer</button>
                                                </div> 
                                            </div>
            
                                        </form> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <!-- end content -->

@endsection