<header>
    <div class="topbar navbar-fixed-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">      
                    <p class="pull-left hidden-xs">
                        <i class="fa fa-phone"></i>Tel  (+237) 699-456-789
                    </p>
                    @if (Session::has("client"))
                    <p class="pull-right login">
                        <a title="View Notification(s)" href=""> <i class="fa fa-bell-o"></i> <span class="label label-success">0</span></a> | 
                        <a title="View Message(s)" href="{{url('/profile/message')}}"> <i class="fa fa-envelope-o"></i> <span class="label label-success">0</span></a> |
                            
                        <a title="View Profile" href="{{url('profile')}}"> <i class="fa fa-user"></i>  {{Session::get("client")->firstname}} {{Session::get("client")->lastname}} </a> | 
                            
                        <a href="{{url('/logout')}}">  <i class="fa fa-sign-out"> </i>Logout</a>       
                    </p>
                        
                    @else
                                           <p   class="pull-right login">
                            <a data-target="#myModal" data-toggle="modal" href=""> <i class="fa fa-lock"></i> Login </a>
                        </p> 
                    @endif

                </div>
            </div>
        </div>
    </div> 

    <div style="min-height: 30px;"></div>

    <div class="navbar navbar-default navbar-static-top" > 
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
              
                <a class="navbar-brand" href="">  <img src="plugins/home-plugins/img/logos.png" alt="logo" width="150"  class="logo"/></a>
            </div>

            <div class="navbar-collapse collapse ">
                <ul class="nav navbar-nav">
                    <li class="{{request()->is("/")? 'active' :'' }}"><a href="{{url('/')}}">Acceuil</a></li> 
                    <li class="dropdown  {{request()->is("advance")? 'active' :''  }} || {{request()->is("jobcompany")? 'active' :''  }}
                       || {{request()->is("jobfunction")? 'active' :''  }} || {{request()->is("jobtitle")? 'active' :''  }} ">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Recherche Emploi <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class=""><a href="{{url('/advance')}}">Recherche Avancee</a></li>
                            <li><a href="{{url('/jobcompany')}}">Emploi pas Entreprises</a></li>
                            <li><a href="{{url('/jobfunction')}}">Emploi pas fonction </a></li>
                            <li><a href="{{url('/jobtitle')}}">emploi pas titre</a></li>
                        </ul>
                    </li> 
                    <li class="dropdown  {{request()->is("jobcategorie")? 'active' :'' }} ">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">Emploi populaire <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{url('/jobcategorie')}}">Technology Jobs</a></li>
                        <li><a href=""></a></li>
                        <li><a href=""></a></li>
                        <li><a href=""></a></li>
                        <li><a href=""></a></li>
                        <li><a href=""></a></li>
                        <li><a href=""></a></li>
                        <li><a href=""></a></li>
                        <li><a href=""></a></li>
                        <li><a href=""></a></li> 
                    </ul>
                    </li> 
                    <li class="{{request()->is("company")? 'active' :'' }}"><a href="{{url('/company')}}">ENTREPRISES</a></li>
                    <li class="{{request()->is("hiring")? 'active' :'' }}"><a href="{{url('/hiring')}}">EMBAUCHER MAINTENANT</a></li>
                    <li class="{{request()->is("abouts")? 'active' :'' }}"><a href="{{url('/abouts')}}">APROPOS</a></li>
                    <li class="{{request()->is("contact")? 'active' :'' }}"><a href="{{url('/contact')}}">CONCTACT</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>            