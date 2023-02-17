    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">

                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle"
                                src="{{ asset("assets/$theme/dist/img/user_default.jpg  ") }}" alt="User profile picture">
                        </div>

                        <h2 id="namesaddpro" class="profile-username text-center text-muted"></h2>
                        <p id="documentsaddpro" class="text-muted text-center"></p>
                    </div>
                </div>
            </div>

            <div class="col-md-9">
                <div class="card card-primary card-outline">
                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                 <a class="nav-link active" id="custom-tabs-one-datos-profesional-tab" data-toggle="pill"
                                    href="#custom-tabs-one-datos-profesional" role="tab"
                                    aria-controls="custom-tabs-one-datos-profesional" aria-selected="false">Profesional</a>
                               

                            </li>
                             <li class="nav-item">
                                <a class="nav-link "id="custom-tabs-one-datos-del-editpaciente-tab" data-toggle="pill"
                                     href="#custom-tabs-one-datos-del-editpaciente" role="tab"
                                    aria-controls="custom-tabs-one-datos-del-editpaciente"  aria-selected="false" >Editar Paciente</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                              <div class="tab-content" id="custom-tabs-one-tabContent">
                            <div class="tab-pane fade active show" id="custom-tabs-one-datos-profesional" role="tabpanel" aria-labelledby="custom-tabs-one-datos-profesional-tab">
                            <div class="post">
                             



                                <div class="col-lg-12 col-md-12 col-xs-12 p-0">
                                    <label for="addpro" class="col-xs-4 control-label requerido">Profesional</label>
                                    <select name="addpro" id="addpro" class="form-control select2bs4" style="width: 100%;" required>
                                    </select>

                                </div>
                           

                            <div class="card-footer p-2">
                                <span class="float-right"><div class="row">
                                     <div class="col-xs-3">
                                      <input type ="submit" name="action_pro" id="action_pro" class="updatepro btn btn-success" value="Add"/>
                                      <input type ="hidden" name="action_prou" id="action_prou" class="btn btn-success" value="Add"/>
                                    </div>
                                    </div>
                                    </span>
                            </div>

                            </div>

                            </div>

                        
                       
                        <div class="tab-pane fade" id="custom-tabs-one-datos-del-editpaciente" role="tabpanel" aria-labelledby="custom-tabs-one-datos-del-editpaciente-tab">
                            <div class="card-body accent-blue">
                                
                                     <div class="card-body">
                        <form  id="form-generalpaciente" class="form-horizontal" method="POST">
                            @csrf
                            @include('paliativos.form.formPacienteEdit')
                            <input type ="submit" name="action_paciente" id="action_paciente" class="updatepaciente btn btn-success" value="Add"/>
                            <input type ="hidden" name="action_pacienteu" id="action_pacienteu" class="btn btn-success" value="Add"/>
                            
                        </form>
                        </div>
                    
                         

                            </div>


                        </div>
                       </div>
                    
                     





                    </div>


                </div>
            </div>
        </div>
    </div>
