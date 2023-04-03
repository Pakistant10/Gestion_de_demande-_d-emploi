@extends('Admin_layouts.master')
@section('title')
Poste vacants
@endsection
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>
          Poste Vacant       <!-- <small>it all starts here</small> -->
        </h1>
        <ol class="breadcrumb">
          <li><a href="admin"><i class="fa fa-dashboard"></i> Acceuil</a></li><li class=>poste</li>      </ol>
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
                            <div class="row">
                <div class="col-lg-12">
                  <h1 class="page-header">List des postes vacants <a href="{{url('admin/addvacancy')}}" class="btn btn-primary btn-xs  ">  <i class="fa fa-plus-circle fw-fa"></i> Ajouter un poste vacant</a>  </h1>
                </div>
              <!-- /.col-lg-12 -->
              </div>

                <form action="controller.php?action=delete" Method="POST">  	
                <div class="table-responsive">					
              <table id="dash-table" class="table table-striped table-bordered table-hover"  style="font-size:12px" cellspacing="0">
              
                <thead>
                  <tr>

                    <!-- <th>No.</th> -->
                    <th>Nom de l'Entreprise</th> 
                    <th>Titre de la Profession</th> 
                    <th>Nombre d'employe</th> 
                    <th>Salaire</th> 
                    <th>Durée d'emploi</th> 
                    <th>Diplôme/expérience de travail</th> 
                    <th>Description de l'emploi</th> 
                    <th>Sexe préféré</th> 
                    <th>Secteur vacant</th> 
                    
                    <th width="10%" align="center">Action</th>
                  </tr>	
                </thead> 
                <tbody>
                   @foreach ($vacancies as $vacancy)

                   <tr>
                    <td>{{$vacancy->companyname}}</td>
                    <td>{{$vacancy->occuptitle}}</td>
                    <td>{{$vacancy->numofemp}}</td>
                    <td>{{$vacancy->salary}}</td>
                    <td>{{$vacancy->duration}}</td>
                    <td>{{$vacancy->experience}}</td>
                    <td>{{$vacancy->description}}</td>
                    <td>{{$vacancy->prefsex}}</td>
                    <td>{{$vacancy->sector}}.</td>
                    <td align="center">
                      <a title="Edit" href="/admin/editvacancy/{{$vacancy->id}}" class="btn btn-primary btn-xs  ">  <span class="fa fa-edit fw-fa"></a>
                      <a title="Delete" href="/admin/deletevacancy/{{$vacancy->id}}" class="btn btn-danger btn-xs  ">  <span class="fa  fa-trash-o fw-fa "></a>
                    </td>
                  </tr>
                   @endforeach
                   
                 
                              
      				  </tbody>
              </table>
                  <div class="btn-group">
              <!--  <a href="index.php?view=add" class="btn btn-default">New</a> -->
                        </div>
            
            
                </form>

              <div class="table-responsive">	  
              </div>
            </div>
          </div>
        </div>
    </section>
  </div>
@endsection