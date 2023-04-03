@extends('Admin_layouts.master')
@section('title')
Ajoute une Entreprise
@endsection
@section('content')
<div class="content-wrapper">

    <section class="content-header">
        <h1>Emtreprise</h1>
        <ol class="breadcrumb">
          <li><a href="dashboard.html"><i class="fa fa-dashboard"></i> Acceuil</a></li><li class=><a href="dashboard.html">Entreprise</a></li><li class="active">Ajouter</li>      
        </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-body">         
              <form class="form-horizontal span6" action="{{url('admin/savecompany')}}" method="POST">
                {{ csrf_field() }}
                  {{-- <input type="hidden" name="_token" value="Nlnz4RR81OkM5thtNt1eIPiOup05KoiKdN3rY7OA"> --}}
                  <div class="row">
                    <div class="col-lg-12">
                      <h1 class="page-header">Ajouter une Entreprise</h1>
                     @if(Session::has('status'))
                      <div class="alert-success" style="height:30px;text-align:center;padding:5px">{{Session::get('status')}}
                      </div>
                       @endif
                    </div>
                  </div> 
                                    <br>
                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "COMPANYNAME">Nom de L'Entreprise:</label>

                      <div class="col-md-8">
                        <input class="form-control input-sm" id="COMPANYNAME" placeholder=
                            "Nom entreprise" type="text" value="" autocomplete="none" name="name" required>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "COMPANYADDRESS">Adresse de l'entreprise:</label> 
                      <div class="col-md-8">
                        <textarea class="form-control input-sm" id="COMPANYADDRESS" placeholder="Adresse de l entreprise" type="text" value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off" name="address"></textarea>
                      </div>
                    </div>
                  </div> 

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "COMPANYCONTACTNO">Contact :</label>

                      <div class="col-md-8">
                        <input class="form-control input-sm" id="COMPANYCONTACTNO" placeholder=
                            " Contact " type="text" value="" autocomplete="none"   name="contact" required>
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
            </div>
          </div>
        </div>
      </div>
    </section>

  </div>
@endsection