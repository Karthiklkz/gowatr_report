<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- Bootstrap 4.0-->
  <link rel="stylesheet" href="./assets/vendor_components/bootstrap/dist/css/bootstrap.css">

  <!-- Bootstrap extend-->
  <!-- <link rel="stylesheet" href="css/bootstrap-extend.css"> -->
  <link rel="stylesheet" href="./css/bootstrap-extend.css">

  <!-- theme style -->
  <link rel="stylesheet" href="./css/master_style.css">

  <!-- AIUI Admin skins -->

</head>

<body>
  <aside class="main-sidebar" style="background-color: #c8c8ff;">
    <!-- sidebar-->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="image">
          <img src="./images/GoWatr_logo.png" class="rounded-circle" alt="User Image">
        </div>
        <div class="info">
          <p>Gowatr</p>

        </div>
      </div>
      <!-- search form -->

      <!-- /.search form -->

      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="treeview">
          <a href="./index.php" style="display: flex; gap: 20px;    align-items: center;">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-home" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
              <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
              <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
            </svg> <span style="margin-right: 13px;">Dashboard</span>

          </a>

        </li>


        <li class="nav-devider"></li>


        <li>
          <a href="user_request" style="display: flex;  gap: 20px;       align-items: center;">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
              <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
            </svg> <span>QSIR</span>
          </a>
        </li>

        <li>
          <a href="reqStatHandler" style="display: flex;  gap: 20px;     align-items: center;">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-asana" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path d="M12 7m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
              <path d="M17 16m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
              <path d="M7 16m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
            </svg> <span>Manage</span>
          </a>
        </li>

        <li >
          <a href="#">
            <i class="mdi mdi-file-document"></i> <span>Checkdata</span>
            <span class="pull-right-container">
              <i class="ti-plus pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="greenpharma"><i class="mdi mdi-resize-bottom-right"></i>Green Pharma</a></li>
            <li><a href="arjun"><i class="mdi mdi-resize-bottom-right"></i>Arjun Flats</a></li>
            
            <li class="treeview">
          <a href="#">
            <i class="mdi mdi-file-document"></i> <span>Brownstone</span>
            <span class="pull-right-container">
              <i class="ti-plus pull-right"></i>
            </span>
          </a>

 
          <ul class="treeview-menu">
          <li><a href="brownstonea"><i class="mdi mdi-resize-bottom-right"></i>Brownstone A</a></li>
          <li><a href="brownstoneb"><i class="mdi mdi-resize-bottom-right"></i>Brownstone B</a></li>
          <li><a href="brownstonec"><i class="mdi mdi-resize-bottom-right"></i>Brownstone C</a></li>
          <li><a href="brownstoned"><i class="mdi mdi-resize-bottom-right"></i>Brownstone D</a></li>
          <li><a href="brownstone_sumpone"><i class="mdi mdi-resize-bottom-right"></i>Sump One</a></li>
          <li><a href="brownstone_sumptwo"><i class="mdi mdi-resize-bottom-right"></i>Sump Two</a></li>
          <!-- <li><a href="main/brownstone_sumpthree"><i class="mdi mdi-resize-bottom-right"></i>Sump Three</a></li> -->
          <li><a href="brownstone_temp"><i class="mdi mdi-resize-bottom-right"></i>Motor Status</a></li>
        </ul>
       </li>
           
            <li><a href="flowmeter_test"><i class="mdi mdi-resize-bottom-right"></i>Baashyaam Flowmeter</a></li>
            <li><a href="flowmeter_lnt"><i class="mdi mdi-resize-bottom-right"></i>L & T</a></li>
            <li><a href="hcl"><i class="mdi mdi-resize-bottom-right"></i>HCL</a></li>
          </ul>
        </li>

<!-- 
        <li class="treeview">
          <a href="#" style="display: flex;  gap: 20px;       align-items: center;">
            <i class="mdi mdi-file-document"></i> <span>Checkdata</span>
            <span class="pull-right-container">
              <i class="ti-plus pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="form-advanced.html"><i class="mdi mdi-resize-bottom-right"></i>Adv.Elements</a></li>
            <li><a href="code-editor.html"><i class="mdi mdi-resize-bottom-right"></i>Code Editor</a></li>
            <li><a href="editors.html"><i class="mdi mdi-resize-bottom-right"></i>Editors</a></li>
            <li><a href="form-validation.html"><i class="mdi mdi-resize-bottom-right"></i>Validation</a></li>
            <li><a href="form-wizard.html"><i class="mdi mdi-resize-bottom-right"></i>Wizard</a></li>
            <li><a href="form-general.html"><i class="mdi mdi-resize-bottom-right"></i>General Elements</a></li>
          </ul>
        </li> -->

      </ul>
    </section>
  </aside>
  <script src="./assets/vendor_components/jquery-3.3.1/jquery-3.3.1.min.js"></script>

  <!-- jQuery UI 1.11.4 -->
  <script src="./assets/vendor_components/jquery-ui/jquery-ui.js"></script>

  <!-- popper -->
  <script src="./assets/vendor_components/popper/dist/popper.min.js"></script>

  <!-- Bootstrap 4.0-->
  <script src="./assets/vendor_components/bootstrap/dist/js/bootstrap.js"></script>

  <!-- Slimscroll -->
  <script src="./assets/vendor_components/jquery-slimscroll/jquery.slimscroll.js"></script>

  <!-- FastClick -->
  <script src="./assets/vendor_components/fastclick/lib/fastclick.js"></script>

  <!-- Sparkline -->
  <script src="./assets/vendor_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>

  <!-- apexcharts -->
  <script src="./assets/vendor_components/apexcharts-bundle/irregular-data-series.js"></script>
  <script src="./assets/vendor_components/apexcharts-bundle/dist/apexcharts.js"></script>

  <!-- FLOT CHARTS -->
  <script src="./assets/vendor_components/Flot/jquery.flot.js"></script>
  <script src="./assets/vendor_components/Flot/jquery.flot.resize.js"></script>
  <!-- <script src="./js/pages/sampledata1.js"></script> -->
  <script src="./main/js/pages/sampledata1.js"></script>

  <!-- AIUI Admin App -->
  <!-- <script src="../js/template.js"></script> -->
  <script src="./main/js/template.js"></script>


  <!-- AIUI Admin dashboard demo (This is only for demo purposes) -->
  <!-- <script src="./js/pages/dashboard.js"></script> -->
  <script src="./main/js/pages/dashboard.js"></script>


</body>

</html>