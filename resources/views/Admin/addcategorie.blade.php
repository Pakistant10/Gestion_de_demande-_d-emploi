@extends('Admin_layouts.master')
@section('title')
Ajoute une categorie
@endsection
@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <h1>catégories</h1>
        <ol class="breadcrumb">
          <li><a href=""><i class="fa fa-dashboard"></i> Acceuil</a></li>
          <li class=><a href="dashboard.html"></a> catégories</li>
          <li class="active">Ajouter</li>      
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
                            <form class="form-horizontal span6" action="{{url('admin/savecategory')}}" method="POST">
                             @csrf
                              {{-- <input type="hidden" name="_token" value="Nlnz4RR81OkM5thtNt1eIPiOup05KoiKdN3rY7OA"> --}}
                <div class="row">
                  <div class="col-lg-12">
                    <h1 class="page-header">Ajouter une catégories</h1>
                  </div>
                  <!-- /.col-lg-12 -->
                </div> 

                <div class="form-group">
                  <div class="col-md-8">
                    <label class="col-md-4 control-label" for=
                    "CATEGORY">catégories:</label>

                    <div class="col-md-8">
                      <input class="form-control input-sm" id="CATEGORY" name="category" placeholder=
                          "catégories" type="text" value="">
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

                <div class="form-group">
                  <div class="rows">
                    <div class="col-md-6">
                      <label class="col-md-6 control-label" for="otherperson"></label>
                      <div class="col-md-6">
                      </div>
                    </div>
                    <div class="col-md-6" align="right">
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