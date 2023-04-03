@extends('Admin_layouts.master')
@section('title')
Categorie
@endsection
@section('content')
<div class="content-wrapper">

    <section class="content-header">
        <h1>Catégories</h1>
        <ol class="breadcrumb">
        <li><a href="admin"><i class="fa fa-dashboard"></i> Acceuil</a></li><li class=>Catégories</li>      </ol>
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
                                <h1 class="page-header">Liste des catégories <a href="{{url('admin/addcategorie')}}" class="btn btn-primary btn-xs  ">  <i class="fa fa-plus-circle fw-fa"></i> Ajouter une  catégories</a>  </h1>
                            </div>
                            <!-- /.col-lg-12 -->
                        </div>

                        <form action="" Method="POST">
                            <div class="table-responsive">

                                <table id="dash-table" class="table table-striped table-bordered table-hover" style="font-size:12px" cellspacing="0">
                                
                                    <thead>
                                        <tr>
                                            <th>  catégories</th> 
                                            <th width="10%" align="center">Action</th>
                                        </tr>	
                                    </thead>
                                     
                                    <tbody>
                                        @foreach ($categories as $category)
                
                                            <tr>
                                            <td>{{$category->Category}}</td>
                                            <td align="center"><a title="Edit" href="/admin/editcategory/{{$category->id}}" class="btn btn-primary btn-xs  "> <span class="fa fa-edit fw-fa"></a>
                                                <a title="Delete" href="/admin/deletecategory/{{$category->id}}" class="btn btn-danger btn-xs  ">  <span class="fa  fa-trash-o fw-fa "></a>
                                            </td>
                                        </tr>
                                          
                                        @endforeach
                                              
                                                                                			  
                                    </tbody>
                                </table>

                                <div class="btn-group">
                                </div>

                            </div>
                        </form>

                        <div class="table-responsive"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection