@extends('Admin_layouts.master')
@section('title')
Users
@endsection
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1> Users </h1>
        <ol class="breadcrumb">
          <li><a href="admin"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class=>Users</li>      
        </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-body">
              <div class="col-lg-12">
                <h1 class="page-header">List of Users  <a href="{{url('admin/addusers')}}" class="btn btn-primary btn-xs  ">  <i class="fa fa-plus-circle fw-fa"></i> Add User</a>  </h1>
              </div>
              <!-- /.col-lg-12 --> 
              <div class="col-lg-12"> 
                <table id="dash-table" class="table  table-bordered table-hover table-responsive" style="font-size:12px;" cellspacing="0"> 
                  <thead>
                    <tr>
                      <th>Account ID</th>
                      <th> Account Name</th>
                      <th>Username</th>
                      <th>Role</th>
                      <th width="10%" >Action</th>
                
                    </tr>	
                  </thead> 
                  <tbody>
                   @foreach ($usersAdmin as $user)
                   <tr>
                    <td>{{$user->id}}</a></td>
                    <td>{{$user->username}}</a></td>
                    <td>{{$user->fullname}}</td>
                    <td>{{$user->role}}</td>
                    <td align="center" ><a title="Edit" href=""  class="btn btn-primary btn-xs  "><span class="fa fa-edit fw-fa"></span></a>
                          <a title="Delete" href="" class="btn btn-danger btn-xs" ><span class="fa fa-trash-o fw-fa"></span> </a>
                    </td>
                  </tr>
                   @endforeach
                  
                    
                  
                    <tr>
                      <td>2018001</a></td>
                      <td>Nkele</a></td>
                      <td>user</td>
                      <td>Staff</td>
                      <td align="center" > <a title="Edit" href=""  class="btn btn-primary btn-xs  ">  <span class="fa fa-edit fw-fa"></span></a>
                        <a title="Delete" href="" class="btn btn-danger btn-xs" ><span class="fa fa-trash-o fw-fa"></span> </a>
                      </td>
                    </tr>				  
                  </tbody>
                </table>  
              </div> 
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection