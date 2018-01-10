       <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle mr-lg-2" href="#" id="messagesDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-fw fa-envelope"></i>
              <span class="d-lg-none">Mensajes
                <span class="badge badge-pill badge-primary">12 New</span>
              </span>
              <span class="new-indicator text-primary d-none d-lg-block">
                <i class="fa fa-fw fa-circle"></i>
                <span class="number">12</span>
              </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
              <h6 class="dropdown-header">Últimos mensajes:</h6>
              
              <?php
                    if (isset($ultimos_mensajes)){
                     for($i=0; $i<sizeof($ultimos_mensajes); $i++){ ?>

              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <strong><?php echo $ultimos_mensajes[$i]->asunto;?></strong>
                <span class="small float-right text-muted">11:20 AM</span>
                <div class="dropdown-message small"><?php echo $ultimos_mensajes[$i]->mensaje;?></div>
              </a>

              <?php } }

              else{?>


              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <strong>No hay mensajes</strong>                
              </a>

              <?php }?>
              <!--div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <strong>Jane Smith</strong>
                <span class="small float-right text-muted">11:21 AM</span>
                <div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <strong>John Doe</strong>
                <span class="small float-right text-muted">11:21 AM</span>
                <div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
              </a-->

              <div class="dropdown-divider"></div>
              <a class="dropdown-item small" href="<?=base_url()?>Welcome/ver_mensajes_alumno">
                Ver mensajes
              </a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle mr-lg-2" href="#" id="alertsDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-fw fa-bell"></i>
              <span class="d-lg-none">Alerts
                <span class="badge badge-pill badge-warning">6 New</span>
              </span>
              <span class="new-indicator text-warning d-none d-lg-block">
                <i class="fa fa-fw fa-circle"></i>
                <span class="number">6</span>
              </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
              <h6 class="dropdown-header">New Alerts:</h6>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <span class="text-success">
                  <strong>
                    <i class="fa fa-long-arrow-up"></i>
                    Status Update</strong>
                </span>
                <span class="small float-right text-muted">11:21 AM</span>
                <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <span class="text-danger">
                  <strong>
                    <i class="fa fa-long-arrow-down"></i>
                    Status Update</strong>
                </span>
                <span class="small float-right text-muted">11:21 AM</span>
                <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <span class="text-success">
                  <strong>
                    <i class="fa fa-long-arrow-up"></i>
                    Status Update</strong>
                </span>
                <span class="small float-right text-muted">11:21 AM</span>
                <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item small" href="#">
                View all alerts
              </a>
            </div>
          </li>

          <!--li class="nav-item">
            <form class="form-inline my-2 my-lg-0 mr-lg-2">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                  <button class="btn btn-primary" type="button">
                    <i class="fa fa-search"></i>
                  </button>
                </span>
              </div>
            </form>
          </li-->

          <!--li class="nav-item">
            <a class="nav-link" href="<?=base_url()?>login/logout">
              <i class="fa fa-fw fa-sign-out"></i>
              Salir</a>
          </li-->

          <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle mr-lg-2" data-toggle="dropdown" href="#">
                        <i class="fa fa-gear fa-fw"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li><a class="dropdown-item" href="<?=base_url()?>welcome/ver_perfil"><i class="fa fa-user fa-fw"></i> Mi perfil</a>
                        </li>
                        <li><a class="dropdown-item" href="<?=base_url()?>welcome/cambiar_password"><i class="fa fa-key fa-fw"></i> Cambiar contraseña</a>
                        </li>
                        <li><a class="dropdown-item" href="#"><i class="fa fa-gear fa-fw"></i> Opciones</a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="<?=base_url()?>login/logout"><i class="fa fa-sign-out fa-fw"></i> Salir</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
          </li>


        </ul>
      </div>
    </nav>