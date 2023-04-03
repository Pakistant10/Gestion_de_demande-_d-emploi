@extends('client_layouts.master')
@section('title')
Home
@endsection





@section('content')


     <!-- start content -->
     <section id="banner">
        <!-- Slider -->
        <div id="main-slider" class="flexslider">
            <ul class="slides">
                <li>
                    <img src="plugins/home-plugins/img/slides/1.jpg" alt="" />
                    <div class="flex-caption">
                        <h3>INNOVATION</h3> 
                        <p>Nous Créons Les Opportunités</p> 
                    </div>
                </li>
                <li>
                    <img src="plugins/home-plugins/img/slides/2.jpg" alt="" />
                    <div class="flex-caption">
                        <h3>Specialiser</h3> 
                        <p>Le Succès Dépend Du Travail</p>                    
                    </div>
                </li>
            </ul>
        </div>
    <!-- end slider -->
    </section> 

    <section id="call-to-action-2">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-sm-9">
                    <h3>Associez-vous à des chefs d’entreprise</h3>
                    <p>Développement de relations stratégiques fructueuses et à long terme entre les clients et les fournisseurs, basées sur la réalisation des meilleures pratiques et un avantage concurrentiel durable. Dans le modèle de partenariat commercial, les professionnels des ressources humaines travaillent en étroite collaboration avec les chefs d’entreprise et les responsables hiérarchiques pour atteindre des objectifs organisationnels communs..</p>
                </div>
            </div>
        </div>
    </section>

    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aligncenter"><h2 class="aligncenter">Entreprise</h2><!-- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident, doloribus omnis minus ovident, doloribus omnis minus temporibus perferendis nesciunt.. -->
                    </div>
                    <br/>
                </div>
            </div>
             @foreach ($companies as $company)
             <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-building-o"></i>
                <div class="info-blocks-in">
                    <h3>{{$company->name}}</h3>
                    <!-- <p>weqwe</p> -->
                    <p>Adresse :{{$company->address}}</p>
                    <p>Contact  :{{$company->contact}}</p>
                </div>
            </div>
             @endforeach
        </div>
    </section>

    <section class="section-padding gray-bg">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                <div class="section-title text-center">
                    <h2 >Emploi Populaire</h2>  
                </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 ">
                    @foreach ($categories as $category)
                    <div class="col-md-3" style="font-size:15px;padding:5px"> 
                        * <a href="/jobcategorie/{{$category->Category}}">{{$category->Category}}</a>
                    </div> 
                
                    @endforeach
                                            
                        
                </div>
            </div>
        </div>
    </section>  

    <section id="content-3-10" class="content-block data-section nopad content-3-10">
        
        <div class="image-container col-sm-6 col-xs-12 pull-left">
            <div class="background-image-holder">

            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-6 col-xs-12 content">
                    <div class="editContent">
                        <h3>Our Team</h3>
                    </div>
                    <div class="editContent"  style="height:235px;">
                        <p> 
                            &nbsp;&nbsp;Our "one team" attitude breaks down silos and helps us engage equally effectively from the C-suite to the front line. Our collaborative working style emphasizes teamwork, trust, and tolerance for diverging opinions. People tell us we are down-to-earth, approachable and fun.<br/><br/>

                            &nbsp;&nbsp;We have a passion for our clients' true results and a pragmatic drive for action that starts Monday morning 8am and doesn't let up. We rally clients with our infectious energy, to make change stick.<br/><br/>

                            &nbsp;&nbsp;And we never go it alone. We support and are supported to develop our own personal results stories. We balance challenging and co-creating with our clients, building the internal capabilities required for them to create repeatable results. 
                        </p>
                    </div> 
                </div>
            </div><!-- /.row-->
        </div><!-- /.container -->

    </section>

    <div class="about home-about">
        <div class="container">          
            <div class="row">
                <div class="col-md-4">
                    <!-- Heading and para -->
                    <div class="block-heading-two">
                    <h3><span>Programes</span></h3>
                    </div>
                    <p>Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur. <br><br>Sed ut perspiciaatis iste natus error sit voluptatem probably haven't heard of them accusamus.</p>
                </div>

                <div class="col-md-4">
                    <div class="block-heading-two">
                        <h3><span>Latest News</span></h3>
                    </div>    
                    <!-- Accordion starts -->
                    <div class="panel-group" id="accordion-alt3">
                        <div class="panel"> 
                            <!-- Panel heading -->
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseOne-alt3">
                                <i class="fa fa-angle-right"></i> Accordion Heading Text Item # 1
                                </a>
                                </h4>
                            </div>
                            <div id="collapseOne-alt3" class="panel-collapse collapse">
                                <!-- Panel body -->
                                <div class="panel-body">
                                Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
                                </div>
                            </div>
                        </div>

                        <div class="panel">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseTwo-alt3">
                                <i class="fa fa-angle-right"></i> Accordion Heading Text Item # 2
                                </a>
                                </h4>
                            </div>
                            <div id="collapseTwo-alt3" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
                                </div>
                            </div>
                        </div>

                        <div class="panel">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseThree-alt3">
                                <i class="fa fa-angle-right"></i> Accordion Heading Text Item # 3
                                </a>
                                </h4>
                            </div>
                            <div id="collapseThree-alt3" class="panel-collapse collapse">
                                <div class="panel-body">
                                Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
                                </div>
                            </div>
                        </div>

                        <div class="panel">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseFour-alt3">
                                <i class="fa fa-angle-right"></i> Accordion Heading Text Item # 4
                                </a>
                                </h4>
                            </div>
                            <div id="collapseFour-alt3" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="block-heading-two">
                        <h3><span>Testimonials</span></h3>
                    </div>  
                    <div class="testimonials">
                        <div class="active item">
                            <blockquote><p>Lorem ipsum dolor met consectetur adipisicing. Aorem psum dolor met consectetur adipisicing sit amet, consectetur adipisicing elit, of them jean shorts sed magna aliqua. Lorem ipsum dolor met.</p></blockquote>
                            <div class="carousel-info">
                                <img alt="" src="plugins/home-plugins/img/team4.jpg" class="pull-left">
                                <div class="pull-left">
                                    <span class="testimonials-name">Marc Cooper</span>
                                    <span class="testimonials-post">Technical Director</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  <br>
        </div>            
    </div>  
<!-- end content -->

@endsection
       
       

           
    