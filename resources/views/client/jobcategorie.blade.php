@extends('client_layouts.master')
@section('title')
Job By categorie
@endsection


@section('content')


<section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="pageTitle">Search for {{$name}}</h2>
            </div>
        </div>
    </div>
  </section>

  <section id="content">
    <div class="container content"> 
       @foreach ($vacancies as $vacancy)
       <div class="panel panel-primary">

        <div class="panel-header">
          <div style="border-bottom: 1px solid #ddd;padding: 10px;font-size: 20px;font-weight: bold;color: #000;margin-bottom: 5px;"><a href="{{url('jobdetails')}}">{{$vacancy->occuptitle }}</a> 
          </div> 
        </div>

        <div class="panel-body contentbody">
          <div class="col-sm-10">
            <div class="col-sm-12">
              <p>Qualification/Work Experience :</p>
                <ul style="list-style: none;"> 
                  <li>{{$vacancy->experience}}.</li> 
              </ul> 
            </div>

            <div class="col-sm-12"> 
              <p>Job Description:</p>
              <ul style="list-style: none;"> 
                    <li>{{$vacancy->description}}.</li> 
              </ul> 
            </div>

            <div class="col-sm-12">
              <p>Employer : {{$vacancy->companyname}}</p>
              <p>Location :  {{$vacancy->address}}</p>
                                                                                                                                                                                                          </div>

          </div>

          <div class="col-sm-2"> 
            <a href="http://127.0.0.1:8000/applynow" class="btn btn-main btn-next-tab">Apply Now !</a>
          </div>

        </div> 
      
        <div class="panel-footer">
            Date Posted :  {{$vacancy->created_at}}            
        </div>
       @endforeach
       

        </div>  
          </div>
  </section>
            
@endsection