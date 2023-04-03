@extends('Admin_layouts.master')
@section('title')
Modfier  Entreprise
@endsection
@section('content')
<div class="content-wrapper">

    <section class="content-header">
        <h1>Entreprise</h1>
        <ol class="breadcrumb">
          <li><a href="dashboard.html"><i class="fa fa-dashboard"></i> Acceuil</a></li><li class=><a href="dashboard.html">Entreprise</a></li><li class="active">Modifier</li>      
        </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-body">         
              <form class="form-horizontal span6" action="{{url('admin/updatecompany')}}" method="POST">
                {{ csrf_field() }}
                  {{-- <input type="hidden" name="_token" value="Nlnz4RR81OkM5thtNt1eIPiOup05KoiKdN3rY7OA"> --}}
                  <div class="row">
                    <div class="col-lg-12">
                      <h1 class="page-header">Modifier une Entreprise</h1>
                    </div>
                  </div> 
                                    <br>
                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "COMPANYNAME">Nom de L'Entreprise:</label>

                      <div class="col-md-8">
                        <input class="form-control input-sm" id="COMPANYNAME" placeholder=
                            "nom entreprise" type="text" value="{{$company->name}}" autocomplete="none" name="name" required>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "COMPANYADDRESS">Adresse Entreprise:</label> 
                      <div class="col-md-8">
                        <textarea class="form-control input-sm" id="COMPANYADDRESS" placeholder=" Adresse entreprise" type="text" value="{{$company->address}}" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off" name="address">{{$company->address}}</textarea>
                      </div>
                    </div>
                  </div> 

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "COMPANYCONTACTNO"> Contact :</label>

                      <div class="col-md-8">
                        <input type="hidden"  name="id" value="{{$company->id}}">
                        <input class="form-control input-sm" id="COMPANYCONTACTNO" placeholder=
                            " Contact " type="text" value="{{$company->contact}}" autocomplete="none"   name="contact" required>
                      </div>
                    </div>
                  </div>  

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "idno"></label>  

                      <div class="col-md-8">
                        <button class="btn btn-primary btn-sm" name="save" type="submit" ><span class="fa fa-save fw-fa"></span> Modifier</button>
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