@extends('Admin_layouts.master')
@section('title')
Employe
@endsection
@section('content')

<div class="content-wrapper">

    <section class="content-header">
        <h1>Employés </h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">
                <i class="fa fa-dashboard"></i> Acceuil</a>
            </li>
            <li class=>Employes</li>      
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
                                                <div class="row">
                            <div class="col-lg-12">
                                <h1 class="page-header">Liste des employés  <a href="{{url('admin/addemploye')}}" class="btn btn-primary btn-xs  ">  <i class="fa fa-plus-circle fw-fa"></i> Ajouter un nouvel employés </a>  </h1>
                            </div>
                                <!-- /.col-lg-12 -->
                        </div>

                        <form class="wow fadeInDownaction" action="" Method="">
                            <table id="dash-table" class="table table-striped  table-hover table-responsive" style="font-size:12px" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th width="5%">employésID</th>
                                        <th>Nom</th>
                                        <th>Adresse</th>
                                        <th>Sexe</th>
                                        <th>Age</th>
                                        <th>Contact</th>
                                        <!-- <th>Department</th> -->
                                        <th>Position</th>
                                        <!-- <th>Work Status</th> -->
                                        <th width="14%" >Action</th> 
                                    </tr>	
                                </thead> 

                                <tbody>
                                    @foreach ($employees as $employee)
                                    <tr>
                                        <td>{{$employee->empid}}</td>
                                        <td>{{$employee->firstname}}</td>
                                        <td>{{$employee->address}}</td>
                                        <td>{{$employee->gender}}</td>
                                        <td>{{$employee->birthday}}</td>
                                        <td>{{$employee->phone}}</td>
                                        <td>{{$employee->position}}</td>
                                        <td align="center" >    
                                            <a title="Edit" href="/admin/editemployee/{{$employee->id}}"  class="btn btn-info btn-xs  ">
                                            <span class="fa fa-edit fw-fa"></span></a> 
                                            <a title="Delete" href="/admin/deleteemployee/{{$employee->id}}"  class="btn btn-danger btn-xs  ">
                                            <span class="fa fa-trash-o fw-fa"></span></a> 
                                        </td>
                                    </tr> 
                                    @endforeach
                                      
                                    		
                                </tbody>
                            </table>    
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection