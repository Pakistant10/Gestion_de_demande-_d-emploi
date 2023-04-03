@extends('Admin_layouts.master')
@section('title')
Ajouter un employe
@endsection
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>Employés</h1>
        <ol class="breadcrumb">
            <li><a href="admin"><i class="fa fa-dashboard"></i>Acceuil</a></li>
            <li class=><a href="admin/addemployee">Employés</a></li><li class="active">Ajouter</li>      
        </ol>
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
                                                <section id="feature" class="transparent-bg">
                            <div class="container">
                                <div class="center wow fadeInDown">
                                    <h2 class="page-header"> Ajouter un nouvel employé </h2>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="features">
                                        <form class="form-horizontal span6  wow fadeInDown" action="{{url('admin/saveemployee')}} " method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <div class="col-md-8">
                                                <label class="col-md-4 control-label" for=
                                                "EMPLOYEEID">ID d'employé :</label>

                                                    <div class="col-md-8">
                                                        <input class="form-control input-sm" id="EMPLOYEEID" name="empid" placeholder=
                                                        "ID d'employé :" type="text" value="" required>
                                                    </div>
                                                </div>
                                            </div>           
                                            <div class="form-group">
                                            <div class="col-md-8">
                                            <label class="col-md-4 control-label" for= "FNAME">Prénom:</label>

                                            <div class="col-md-8">
                                                <input class="form-control input-sm" id="FNAME" name="firstname" placeholder=
                                                    "FPrénom:" type="text" value=""   autocomplete="off" required>
                                            </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-8">
                                            <label class="col-md-4 control-label" for=
                                            "LNAME">Nom de famille:</label>

                                            <div class="col-md-8">
                                                <input  class="form-control input-sm" id="LNAME" name="lastname" placeholder="Nom de famille:"     autocomplete="off" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-8">
                                                <label class="col-md-4 control-label" for="MNAME">Deuxième nom:</label>

                                                <div class="col-md-8">
                                                    <input  class="form-control input-sm" id="MNAME" name="middlename" placeholder=
                                                        "Deuxième nom"     autocomplete="off" required>
                                                </div>
                                            </div>
                                        </div> 

                                        <div class="form-group">
                                        <div class="col-md-8">
                                            <label class="col-md-4 control-label" for=
                                            "ADDRESS">Adresse:</label>

                                            <div class="col-md-8">
                                            
                                                <textarea class="form-control input-sm" id="ADDRESS" name="address" placeholder="Adresse" type="text" value="" required   autocomplete="off"></textarea>
                                            </div>
                                        </div>
                                        </div> 

                                        <div class="form-group">
                                        <div class="col-md-8">
                                            <label class="col-md-4 control-label" for=
                                            "Gender">Sexe:</label>

                                            <div class="col-md-8">
                                                <div class="col-lg-5">
                                                <div class="radio">
                                                    <label><input checked id="optionsRadios1" checked="True" name="gender" type="radio" value="Femme">Femme</label>
                                                </div>
                                                </div>

                                                <div class="col-lg-4">
                                                <div class="radio">
                                                    <label><input id="optionsRadios2"   name="gender" type="radio" value="Homme"> Homme</label>
                                                </div>
                                                </div> 
                                                
                                            </div>
                                        </div>
                                        </div>

                                                <div class="form-group">
                                                <div class="col-md-8">
                                                    <label class="col-md-4 control-label" for=
                                                    "BIRTHDATE">Date de naissance:</label>

                                                    <div class="col-md-8">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"> 
                                                            <i class="fa fa-calendar"></i> 
                                                        </span>  
                                                        <input class="form-control input-sm date_picker" id="BIRTHDATE" name="birthday" placeholder="Date de naissance" type="text"    value="" required  autocomplete="off">
                                                    </div>
                                                    </div>
                                                </div>
                                                </div>

                                                    <div class="form-group">
                                                    <div class="col-md-8">
                                                        <label class="col-md-4 control-label" for=
                                                        "BIRTHPLACE">Lieu de naissance:</label>

                                                        <div class="col-md-8">
                                                        
                                                            <textarea class="form-control input-sm" id="BIRTHPLACE" name="birthplace" placeholder=
                                                            "Lieu de naissance:" type="text" value="" required   autocomplete="off"></textarea>
                                                        </div>
                                                    </div>
                                                    </div> 


                                                    <div class="form-group">
                                                    <div class="col-md-8">
                                                    <label class="col-md-4 control-label" for=
                                                    "TELNO">Contact :</label>

                                                    <div class="col-md-8">
                                                        
                                                        <input class="form-control input-sm" id="TELNO" name="phone" placeholder=
                                                            "Contact " type="text" any value="" required   autocomplete="off">
                                                    </div>
                                                    </div>
                                                </div> 

                                                    <div class="form-group">
                                                    <div class="col-md-8">
                                                    <label class="col-md-4 control-label" for=
                                                    "CIVILSTATUS">Etat civil ::</label>

                                                    <div class="col-md-8">
                                                        <select class="form-control input-sm" name="civilstatus" id="CIVILSTATUS" required>
                                                            <option value="" >Selectionner</option>
                                                            <option value="Single">Celibataire</option>
                                                            <option value="Married">Marie</option>
                                                            <option value="Widow" >veuve</option>
                                                        </select> 
                                                    </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="col-md-8">
                                                    <label class="col-md-4 control-label" for=
                                                    "POSITION">Postion:</label>

                                                    <div class="col-md-8">
                                                        
                                                        <input class="form-control input-sm" id="POSITION" name="position" placeholder=
                                                            "Postion" type="text" any value="" required   autocomplete="off">
                                                    </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="col-md-8">
                                                    <label class="col-md-4 control-label" for=
                                                    "EMP_HIREDDATE">Date d'embauche :</label> 
                                                    <div class="col-md-8">
                                                        <div class="input-group date" data-provide="datepicker" data-date="2012-12-21T15:25:00Z">
                                                            <input type="input" class="form-control input-sm date_picker" id="HIREDDATE" name="hireddate" value="" placeholder="Date d'embauche " required>
                                                            <span class="input-group-addon"><i class="fa fa-th"></i></span>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>  


                                                    <div class="form-group">
                                                    <div class="col-md-8">
                                                    <label class="col-md-4 control-label" for=
                                                    "EMP_EMAILADDRESS">Adresse E-mail:</label> 
                                                    <div class="col-md-8">
                                                        <input type="Email" class="form-control input-sm" id="EMP_EMAILADDRESS" name="email" placeholder="Adresse E-mail:"   autocomplete="false" required/> 
                                                    </div>
                                                    </div>
                                                </div>  

                                                <div class="form-group">
                                                    <div class="col-md-8">
                                                        <label class="col-md-4 control-label" for=
                                                        "COMPANYNAME">Nom Entreprise:</label>

                                                        <div class="col-md-8">
                                                        <select class="form-control input-sm" id="COMPANYID" name="companyname" required>
                                                            <option value="">Selectionner</option>
                                                            @foreach ($companies as $company)
                                                            <option value="{{$company->name}}">{{$company->name}}</option>
                                                            @endforeach
                                        
                                                       
                                                                                                                           
                                                                                                                        
                                                        </select>
                                                        </div>
                                                    </div>
                                                </div>  

                                                <div class="form-group">
                                                    <div class="col-md-8">
                                                        <label class="col-md-4 control-label" for=
                                                        "idno"></label>  

                                                        <div class="col-md-8">
                                                            <button class="btn btn-primary btn-sm" name="save" type="submit" ><span class="fa fa-save fw-fa"></span> Ajouter</button>
                                                        </div>
                                                    </div>
                                                </div> 
                                        </form>
                                    </div><!--/.services-->
                                </div><!--/.row--> 
                            </div><!--/.container-->
                        </section><!--/#feature-->
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection