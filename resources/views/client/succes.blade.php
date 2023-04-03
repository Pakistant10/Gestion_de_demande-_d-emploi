@extends('client_layouts.master')
@section('title')
recu
@endsection
@section('content')
<section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="pageTitle">Success</h2>
            </div>
        </div>
    </div>
</section>
    
<section id="content">
    <div class="container content">  
        <div class="alert alert-success alert-dismissible clearfix">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
            </button>
            <div class="mg-alert-icon"><i class="fa fa-check"></i></div>
            @if(Session::has('status'))
            <h3 class="mg-alert-payment">{{Session::get('status')}}</h3>
            </div>
             @endif
                               
        </div>
    </div>
</section> 
<!-- end content -->



@endsection