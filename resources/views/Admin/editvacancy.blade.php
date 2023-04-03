@extends('Admin_layouts.master')
@section('title')
Mofication
@endsection
@section('content')
<div class="content-wrapper">

    <section class="content-header">
        <h1>
        Poste       <!-- <small>it all starts here</small> -->
        </h1>
        <ol class="breadcrumb">
        <li><a href=""><i class="fa fa-dashboard"></i> Acceuil</a></li><li class=><a href="">Poste</a></li><li class="active">Modifier</li>      </ol>
    </section>

    <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-body">
                            @if(Session::has('status'))
                            <div class="alert-success" style="height:30px;text-align:center;padding:5px">{{Session::get('status')}}
                            </div>
                             @endif
                                                        <form class="form-horizontal span6" action="{{url('admin/updatevacancy')}} " method="POST">
                                @csrf
                                {{-- <input type="hidden" name="_token" value="Nlnz4RR81OkM5thtNt1eIPiOup05KoiKdN3rY7OA"> --}}
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h1 class="page-header">Moficationl' offre d'emploi</h1>
                                    </div>
                                    <!-- /.col-lg-12 -->
                                </div> 

                                <div class="form-group">
                                    <div class="col-md-8">
                                        <label class="col-md-4 control-label" for=
                                        "COMPANYNAME">Nom de l'entreprise:</label>
                                        <div class="col-md-8">
                                            <select class="form-control input-sm" id="COMPANYID" name="companyname" required>
                                                <option value="{{$vacancy->companyname}}">{{$vacancy->companyname}}</option>
                                                @foreach ($companies as $company)
                                                            <option value="{{$company->name}}">{{$company->name}}</option>
                                                            @endforeach
                                                             
                                                 </select>
                                                 <input type="hidden" name="id" value="{{$vacancy->id}}">
        
                                        </div>
                                    </div>
                                </div>  

                                <div class="form-group">
                                    <div class="col-md-8">
                                        <label class="col-md-4 control-label" for="CATEGORY">Catégorie :</label>

                                        <div class="col-md-8">
                                            <select class="form-control input-sm" id="CATEGORY" name="category" required>
                                                <option value="{{$vacancy->category}}">{{$vacancy->category}}</option>
                                                @foreach ($categories as $category)
                                                            <option value="{{$category->Category}}">{{$category->Category}}</option>
                                                            @endforeach
                                                
                                                                       
                                            </select>
                                        </div>
                                    </div>
                                </div>  

                                <div class="form-group">
                                    <div class="col-md-8">
                                        <label class="col-md-4 control-label" for=
                                        "OCCUPATIONTITLE">Titre professionnel :</label> 
                                        <div class="col-md-8">
                                        <input class="form-control input-sm" id="OCCUPATIONTITLE" name="occuptitle"  value="{{$vacancy->occuptitle}}" placeholder="Titre professionnel "   autocomplete="none" required /> 
                                        </div>
                                    </div>
                                </div>  

                                <div class="form-group">
                                    <div class="col-md-8">
                                        <label class="col-md-4 control-label" for=
                                        "REQ_NO_EMPLOYEES">Nombre des employés:</label> 
                                        <div class="col-md-8">
                                            <input class="form-control input-sm" type="number" id="REQ_NO_EMPLOYEES" name="numofemp" value="{{$vacancy->numofemp}}" placeholder="Nombre des employés"   autocomplete="none" required /> 
                                        </div>
                                    </div>
                                </div>  

                                <div class="form-group">
                                    <div class="col-md-8">
                                        <label class="col-md-4 control-label" for=
                                        "SALARIES">Salaire:</label> 
                                        <div class="col-md-8">
                                            <input class="form-control input-sm" id="SALARIES" name="salary"  value="{{$vacancy->salary}}" type="number" placeholder="Salaire"   autocomplete="none" required /> 
                                        </div>
                                    </div>
                                </div>  

                                <div class="form-group">
                                    <div class="col-md-8">
                                        <label class="col-md-4 control-label" for=
                                        "DURATION_EMPLOYEMENT">Durée d'emploi:</label> 
                                        <div class="col-md-8">
                                            <input class="form-control input-sm" id="DURATION_EMPLOYEMENT" name="duration" value="{{$vacancy->duration}}" placeholder="Durée d'emploi"   autocomplete="none" required /> 
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-8">
                                        <label class="col-md-4 control-label" for=
                                        "QUALIFICATION_WORKEXPERIENCE">Diplôme/expérience de travail :</label> 
                                        <div class="col-md-8">
                                            <textarea class="form-control input-sm" id="QUALIFICATION_WORKEXPERIENCE" name="experience" placeholder="Diplôme/expérience de travail "   autocomplete="none" required >{{$vacancy->experience}}</textarea> 
                                        </div>
                                    </div>
                                </div> 

                                <div class="form-group">
                                    <div class="col-md-8">
                                        <label class="col-md-4 control-label" for=
                                        "JOBDESCRIPTION">Description de l'emploi:</label> 
                                        <div class="col-md-8">
                                            <textarea class="form-control input-sm" id="JOBDESCRIPTION" name="description" placeholder="Description de l'emploi"   autocomplete="none" required >{{$vacancy->description}}</textarea> 
                                        </div>
                                    </div>
                                </div>  

                                <div class="form-group">
                                    <div class="col-md-8">
                                        <label class="col-md-4 control-label" for=
                                        "PREFEREDSEX">Sexe préféré :</label> 
                                        <div class="col-md-8">
                                            <select class="form-control input-sm" id="PREFEREDSEX" name="prefsex" required>
                                                <option value="{{$vacancy->prefsex}}">{{$vacancy->prefsex}}</option>
                                                @if ($vacancy->prefsex=="homme")
                                                <option>Femme</option>
                                                <option>Homme/Femme</option>
                                                    
                                                @elseif($vacancy->prefsex=="Femme")
                                                <option>Homme</option>
                                                <option>Homme/Femme</option>
                                                @else
                                                <option>Homme</option>
                                                <option>Femme</option>
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                </div>  

                                <div class="form-group">
                                    <div class="col-md-8">
                                        <label class="col-md-4 control-label" for=
                                        "SECTOR_VACANCY">Secteur de vacance :</label> 
                                        <div class="col-md-8">
                                            <textarea class="form-control input-sm" id="SECTOR_VACANCY" name="sector" placeholder="Secteur de vacance "   autocomplete="none" required>{{$vacancy->sector}}</textarea> 
                                        </div>
                                    </div>
                                </div>   
                                
                                <div class="form-group">
                                    <div class="col-md-8">
                                        <label class="col-md-4 control-label" for="idno"></label>  

                                        <div class="col-md-8">
                                            <button class="btn btn-primary btn-sm" name="save" type="submit" ><span class="fa fa-save fw-fa"></span> Modification</button></a>
                                        </div>
                                    </div>
                                </div> 
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    </div>



@endsection