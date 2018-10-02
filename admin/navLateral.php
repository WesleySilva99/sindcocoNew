<aside>
      <div id="sidebar" class="nav-collapse ">
      
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="img/7.png" class="img-circle" width="80"></a></p>
          <h5 class="centered"><?=$_SESSION["nome"];?></h5>
          <li class="mt">
            <a class="active" href="/admin/indexLogin.php">
              <i class="fa fa-dashboard"></i>
              <span>Início</span>
              </a>
          </li>
          <?php

              if($_SESSION["adm"] == 1) {

          ?>
          <li class="sub-menu">
            <a href="/admin/usuarios/">
              <i class="fa fa-desktop"></i>
              <span>Usuários</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-cogs"></i>
              <span>Notícias</span>
              </a>
            <ul class="sub">
              <li><a href="grids.html">Cadastrar Categoria</a></li>
              <li><a href="calendar.html">Cadastrar Notícias</a></li>
              <li><a href="gallery.html">Consultar Notícias</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-book"></i>
              <span>Eventos</span>
              </a>
            <ul class="sub">
              <li><a href="/admin/eventos/cadastrar.php">Cadastrar Eventos</a></li>
              <li><a href="/admin/eventos/fotos.php">Cadastrar fotos de eventos</a></li>
              <li><a href="/admin/eventos/">Consultar Eventos</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-tasks"></i>
              <span>Informativos</span>
              </a>
            <ul class="sub">
              <li><a href="blank.html">Cadastrar Informtivos</a></li>
              <li><a href="lock_screen.html">Consultar Informativos</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-th"></i>
              <span>Ações judiciais</span>
              </a>
            <ul class="sub">
              <li><a href="basic_table.html">Inserir Arquivo</a></li>
              <li><a href="responsive_table.html">Consultar Arquivos</a></li>
              
            </ul>
          </li>
          <?php

              }

          ?>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-th"></i>
              <span>Anuncios</span>
              </a>
            <ul class="sub">
              <li><a href="basic_table.html">Autorizar</a></li>
              <li><a href="responsive_table.html">Autorizados</a></li>
            </ul>
          </li>
          <!-- resto do menu lateral 
          <li>
            <a href="inbox.html">
              <i class="fa fa-envelope"></i>
              <span>Mail </span>
              <span class="label label-theme pull-right mail-info">2</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class=" fa fa-bar-chart-o"></i>
              <span>Charts</span>
              </a>
            <ul class="sub">
              <li><a href="morris.html">Morris</a></li>
              <li><a href="chartjs.html">Chartjs</a></li>
              <li><a href="flot_chart.html">Flot Charts</a></li>
              <li><a href="xchart.html">xChart</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-comments-o"></i>
              <span>Chat Room</span>
              </a>
            <ul class="sub">
              <li><a href="lobby.html">Lobby</a></li>
              <li><a href="chat_room.html"> Chat Room</a></li>
            </ul>
          </li>
          <li>
            <a href="google_maps.html">
              <i class="fa fa-map-marker"></i>
              <span>Google Maps </span>
              </a>
          </li>
        </ul>
        -->
        <!-- sidebar menu end-->
      </div>
    </aside>