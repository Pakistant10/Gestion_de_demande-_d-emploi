@extends('client_layouts.master')
@section('title')
Register
@endsection
@section('content')
    <!-- start content -->

    <section id="inner-headline">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
                <h2 class="pageTitle">Enregistrer Un Nouveau Membre</h2>
            </div>
          </div>
        </div>
      </section>
    
      <section id="content">
          <div class="container content">    
            <p> </p> 

            <form class="form-horizontal span6  wow fadeInDown" action="{{url('createaccount')}}" method="POST">
              {{-- <input type="hidden" name="_token" value="ZJLPQIkfMJhoPRGwoueM8KtNelvHt69vXLhsfjjO"> --}}
              @csrf
              <div class="col-sm-8"> 
                <div class="row">
                  @if(Session::has('status'))
                  <div class="alert-success" style="height:30px;text-align:center;padding:5px">{{Session::get('status')}}
                  </div>
                   @endif
                   @if(count($errors)>0)
                   <div class="alert-danger" style="height:30px;text-align:center;padding:5px">
                   <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach

                   </ul>
                   
                   </div>
                    @endif
                  <h2 class=" ">INFORMATIONS PERSONNELLES  </h2>
                  
                              <br>       
                  <div class="form-group">
                    <div class="col-md-11">
                      <label class="col-md-4 control-label" for=
                        "FNAME">FPrénom:</label>
                      <div class="col-md-8">
                        <input class="form-control input-sm" id="FNAME" name="firstname" placeholder=
                        "Prénom" type="text" value="" autocomplete="off" required>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-11">
                      <label class="col-md-4 control-label" for=
                      "LNAME">Nom de famille:</label>
              
                      <div class="col-md-8">
                        <input  class="form-control input-sm" id="LNAME" name="lastname" placeholder="Nom de famille"   autocomplete="off" required>
                      </div>

                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-11">
                      <label class="col-md-4 control-label" for=
                      "MNAME">Deuxième nom:</label>
              
                      <div class="col-md-8">
                          <input  class="form-control input-sm" id="MNAME" name="Deuxième nom" placeholder=
                          "Middle Name" autocomplete="off" required>
                      </div>
                    </div>
                  </div> 

                  <div class="form-group">
                    <div class="col-md-11">
                      <label class="col-md-4 control-label" for=
                      "ADDRESS">Adresse:</label>
              
                      <div class="col-md-8">
                        <textarea class="form-control input-sm" id="ADDRESS" name="address" placeholder=
                        "Adresse" type="text" value="" required autocomplete="off"></textarea>
                      </div>
                    </div>
                  </div> 

                  <div class="form-group">
                    <div class="col-md-11">
                      <label class="col-md-4 control-label" for=
                      "Gender">Sexe:</label>
                
                      <div class="col-md-8">
                        <div class="col-lg-5">
                          <div class="radio">
                            <label><input id="optionsRadios1"  name="gender" type="radio" value="Female" required>Femmen</label>
                          </div>
                        </div>
                  
                        <div class="col-lg-4">
                          <div class="radio">
                            <label><input id="optionsRadios2"   name="gender" type="radio" value="Male" required>Homme</label>
                          </div>
                        </div> 
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-11">
                      <label class="col-md-4 control-label" for=
                      "BIRTHPLACE">
                      Date de naissance:
                      </label>
              
                      <div class="col-md-8">
                          <input type="date" name="dateofbirth" id="" class="form-control input-sm" required>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-11">
                      <label class="col-md-4 control-label" for=
                      "BIRTHPLACE">Lieu de naissance:</label>
              
                      <div class="col-md-8">
                          <textarea class="form-control input-sm" id="ADDRESS" name="birthplace" placeholder="Lieu de naissance" type="text" value="" required autocomplete="off"></textarea>
                      </div>
                    </div>
                  </div> 

                  <div class="form-group">
                    <div class="col-md-11">
                      <label class="col-md-4 control-label" for=
                      "phone">Contact :</label>
                  
                      <div class="col-md-8">
                          <input class="form-control input-sm" id="TELNO" name="phone" placeholder=
                          "Contact " type="text" any value="" required autocomplete="off">
                      </div>
                    </div>
                  </div> 

                  <div class="form-group">
                    <div class="col-md-11">
                      <label class="col-md-4 control-label" for=
                      "CIVILSTATUS">Etat civil:</label>
                  
                      <div class="col-md-8">
                          <select class="form-control input-sm" name="civilstatus" id="CIVILSTATUS" required>
                              <option value="" >Select</option>
                              <option value="Single">Celibataire</option>
                              <option value="Married">Marie</option>
                              <option value="Widow" >veuve</option>
                          </select> 
                      </div>
                    </div>
                  </div>  
                    
                  <div class="form-group">
                    <div class="col-md-11">
                      <label class="col-md-4 control-label" for=
                      "EMAILADDRESS">Email :</label> 
                      <div class="col-md-8">
                          <input type="email" class="form-control input-sm" id="EMAILADDRESS" name="email" placeholder="Email "   autocomplete="false" required/> 
                      </div>
                    </div>
                  </div>  

                  <div class="form-group">
                    <div class="col-md-11">
                      <label class="col-md-4 control-label" for=
                      "USERNAME">Nom d'utilisateur:</label>
                  
                      <div class="col-md-8">
                          <input  class="form-control input-sm" id="USERNAME" name="username" placeholder=
                              "Nom d'utilisateur" autocomplete="off" required>
                      </div>
                    </div>
                  </div>
                    
                  <div class="form-group">
                    <div class="col-md-11">
                      <label class="col-md-4 control-label" for=
                      "PASS">Mot de passe:</label>
                  
                      <div class="col-md-8">
                      <input  class="form-control input-sm" id="PASS" name="password" placeholder=
                          "Mot de passe" type="password" required  autocomplete="off">
                      </div>
                    </div>
                  </div> 

                  <div class="form-group">
                    <div class="col-md-11">
                      <label class="col-md-4 control-label" for=
                      "DEGREE">Niveau de scolarité :</label>
                  
                      <div class="col-md-8">
                          <input  class="form-control input-sm" id="DEGREE" name="degree" placeholder=
                          "Niveau de scolarité " autocomplete="off" required>
                      </div>
                    </div>
                  </div> 

                  <div class="form-group">
                    <div class="col-md-11">
                      <label class="col-md-4 control-label" for=
                      "d"></label>  
                  
                      <div class="col-md-8">
                          <label><input type="checkbox" required> En vous inscrivant, vous acceptez nos termes et conditions<a href="#">termes et conditions</a></label>
                      
                      </div>
                    </div>
                  </div>   

                </div>
              </div>

              <div class="form-group">
                <div class="col-md-8">
                  <label class="col-md-4 control-label" for=
                  "idno"></label>  

                  <div class="col-md-8">
                    <button class="btn btn-primary btn-sm" name="btnRegister" type="submit" ><span class="fa fa-save fw-fa"></span> Enregistrer</button> 
                </div>

                </div>
              </div>  

            </form> 
          </div>
      </section> 

    <!--end content  -->


@endsection