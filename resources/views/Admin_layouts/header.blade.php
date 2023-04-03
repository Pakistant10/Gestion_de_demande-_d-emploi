      <!-- start header -->
      <header class="main-header">
        <!-- Logo -->
        @if (Session::has("usersAdmin"))
         
        <a href="{{asset('/dist/img/')}}" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b></b></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b> {{Session::get("usersAdmin")->role}}</b></span>
            @endif
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu" style="padding-right: 15px;"  >
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="{{asset('dist/img/user/photos/Koala.jpg')}}" class="user-image" alt="User Image">
                            <span class="hidden-xs">{{Session("username")}}</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header"> 
                              
                              <img data-target="#menuModal"  data-toggle="modal"  src="{{asset('dist/img/user/photos/Koala.jpg')}}" class="img-circle" alt="User Image" />  
                            </li> 
        
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="{{url('admin/userprofile')}}" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <a href="{{url('/logout')}}" class="btn btn-default btn-flat">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                
                </ul>
            </div>
        </nav>
    </header>
    <!-- end header -->

    <!-- start modal -->
    <div class="modal fade" id="menuModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" data-dismiss="modal" type=
                    "button">x</button>

                    <h4 class="modal-title" id="myModalLabel">Image.</h4>
                </div>

                <form action="" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <div class="rows">
                                <div class="col-md-12">
                                    <div class="rows">
                                        <div class="col-md-8">
                                            <input id="photo" name="photo" type="file">
                                        </div>
                                        <div class="col-md-4"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-default" data-dismiss="modal" type=
                        "button">Close</button> <button class="btn btn-primary"
                        name="savephoto" type="submit">Upload Photo</button>
                    </div>
                </form>
            </div><!-- /.modal-content-->
        </div>
    </div>
    <!-- end modal -->

    <!-- left sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu"> 
                <li  class="{{request()->is("admin/dashboard")? 'active' :'' }}" >
                    <a href="{{url('admin/dashboard')}}">
                        <i class="fa fa-dashboard"></i> <span>Dashboard</span>  
                    </a> 
                </li> 
                <li class="{{request()->is("admin/company")? 'active' :'' }} || {{request()->is("admin/addcompany")? 'active' :'' }} " >
                    <a href="{{url('admin/company')}}">
                        <i class="fa fa-building"></i> <span>Entreprise</span> 
                    </a>
                </li>
                <li class="{{request()->is("admin/vacancy")? 'active' :'' }} || {{request()->is("admin/addvacancy")? 'active' :'' }}" >
                    <a href="{{url('admin/vacancy')}}">
                        <i class="fa fa-suitcase"></i> <span>Poste Vacants</span> 
                    </a>
                </li>
                <li class="{{request()->is("admin/employe")? 'active' :'' }} || {{request()->is("admin/addemploye")? 'active' :'' }}" >
                    <a href="{{url('admin/employe')}}">
                        <i class="fa fa-users"></i> <span>Employe</span> 
                    </a>
                </li> 
                <li class="{{request()->is("admin/applicants")? 'active' :'' }}" > 
                    <a href="{{url('admin/applicants')}}">
                        <i class="fa fa-users"></i>
                        <span>Candidats</span> 
                        <span class="label label-primary pull-right">0</span>
                    </a>
                </li> 
                <li class="{{request()->is("admin/categorie")? 'active' :'' }} || {{request()->is("admin/addcategorie")? 'active' :'' }}" > 
                    <a href="{{url('admin/categorie')}}">
                        <i class="fa fa-list"></i> <span>Categorie</span>  
                    </a>
                </li>      
                <li class="{{request()->is("admin/users")? 'active' :'' }} || {{request()->is("admin/addusers")? 'active' :'' }}  ">
                    <a href="{{url('admin/users')}}">
                        <i class="fa fa-user"></i> <span>Gere les utilisateurs</span>
                    </a>
                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>
    <!-- end sidebar -->            
