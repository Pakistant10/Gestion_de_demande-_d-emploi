@extends('client_layouts.master')
@section('title')
Job Details
@endsection
@section('content')

      <!-- start content -->
      <section id="inner-headline">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="pageTitle">Détails Du Poste</h2>
                </div>
            </div>
        </div>
    </section>

    <section id="content">
        <div class="container content">      
            <div class="container">
                <div class="mg-available-rooms">
                    <h5 class="mg-sec-left-title">Date de publication :  2022-07-26 02:15:02</h5>
                    <div class="mg-avl-rooms">
                        <div class="mg-avl-room">
                            <div class="row">
                                <div class="col-sm-2">
                                    <a href="#"><span class="fa fa-building-o" style="font-size: 50px"></span></a>
                                </div>
                                <div class="col-sm-10">
                                    <div style="border-bottom: 1px solid #ddd;padding: 10px;font-size: 25px;font-weight: bold;color: #000;margin-bottom: 5px;">{{$vacancy->occuptitle}}
                                    </div> 
                                    <div class="row contentbody">
                                        
                                        <div class="col-sm-6">
                                            <ul>
                                                <li><i class="fp-ht-bed"></i>Nombre d'employés : {{$vacancy->numofemp}}</li>
                                                <li><i class="fp-ht-food"></i>Salaire :{{$vacancy->salary}} </li>
                                                <li><i class="fa fa-sun-"></i>Durée de l'emploi: {{$vacancy->duration}}</li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6">
                                            <ul>
                                                <li><i class="fp-ht-tv"></i>Sexe préféré : {{$vacancy->prefsex}}</li>
                                                <li><i class="fp-ht-computer"></i>Secteur d'emploi : {{$vacancy->sector}}</li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-12">
                                            <p>Diplôme/Expérience Professionnelle:</p>
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
                                            <p>Employeur :  {{$vacancy->companyname}}</p> 
                                            <p>Lieu: {{$vacancy->address}}</p>
                                        </div>
                                    </div>
                                    <a href="/applynow/{{$vacancy->id}}" class="btn btn-main btn-next-tab">Aplliquer maintenant !</a>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>                        
        </div>
    </section>  
<!-- end content -->
@endsection