
  @if (Session::has('success'))  
  <script src="{{ AdminOptions::base_url()}}js/bootbox/bootbox.js" type="text/javascript"></script>   
    <script type="text/javascript">
      bootbox.alert("<?php echo Session::get('success'); ?>");
    </script> 
    <?php Session::forget('success') ?>             
  @endif
<script type="text/javascript">
  $(document).ready(function() {   
   
    $(".noviRadnik").on("click", function() {
      $("#novi-radnik").modal('show');
    });

    $(".novaStavka").on("click", function() {
      $("#nova-stavka").modal('show');
    });

    $(".zaradaRadnik").on("click", function() {
      $("#zarada-radnik").modal('show');
    });

    $(".azuriranjeKupac").on("click", function() {
      $("#azuriranje-kupac").modal('show');
    });

    $(".noviProizvod").on("click", function() {
      $("#novi-proizvod").modal('show');
    });

    $(".noviKupac").on("click", function() {
      $("#novi-kupac").modal('show');
    }); 

    $(".novaGrupaProizvoda").on("click", function() {
      $("#nova-grupa-proizvoda").modal('show');
    }); 

    $(".veleMarza").on("click", function() {
      $("#veleprodaja-marza").modal('show');
    }); 
    

  });
</script>
<div id="container">  
<nav>  
  <ul class="mcd-menu">
    <li>
    <!-- web stranica -->  
      <a href="{{ AdminOptions::findSession('firma', 'web_sajt') }}" >
        <i class="fa fa-home"></i>
        <strong>{{ AdminOptions::lang(1, Session::get('jezik.AdminOptions::server()')) }}</strong>
        <small>{{ AdminOptions::lang(1, Session::get('jezik.AdminOptions::server()')) }}</small>     
      </a>
    </li>
    <!-- Ulazne stavke -->
    <li>
      <a href="#">
        <i class="glyphicon glyphicon-save fa-rotate-270"></i>
        <strong>{{ AdminOptions::lang(4, Session::get('jezik.AdminOptions::server()')) }}</strong>
        <small>{{ AdminOptions::lang(4, Session::get('jezik.AdminOptions::server()')) }}</small>
      </a>
        <ul>
        	<li>
            <a href="#" class="novaStavka" >
                <i class="fa fa-edit" aria-hidden="true"></i>
                <b>{{ AdminOptions::lang(14, Session::get('jezik.AdminOptions::server()')) }}</b>
            </a>
          </li>
        	<li>
            <a href="{{ AdminOptions::base_url() }}workers2" ><i class="fa fa-eye"></i><b>{{ AdminOptions::lang(15, Session::get('jezik.AdminOptions::server()')) }}</b>
            </a>
          </li>
        </ul>
    </li>
    <!-- Proizvodnja -->        
    <li>
      <a href="#">
        <i class="fa fa-money"></i>
        <strong>{{ AdminOptions::lang(5, Session::get('jezik.AdminOptions::server()')) }}</strong>
        <small>{{ AdminOptions::lang(5, Session::get('jezik.AdminOptions::server()')) }}</small>
      </a>
      	<ul>
        	<li>
            <a href="#" class="noviProizvod">
              <i class="fa fa-edit"  aria-hidden="true"></i>
              <b>{{ AdminOptions::lang(27, Session::get('jezik.AdminOptions::server()')) }}</b>
            </a>
        		<ul>
        			<li>
                <a href="#" class="novaGrupaProizvoda">
                  <i class="fa fa-edit"></i>
                  {{ AdminOptions::lang(26, Session::get('jezik.AdminOptions::server()')) }}
                </a>
              </li>               
        		</ul>
        	</li>
        	<li>
            <a href="/admin-list-product">
              <i class="fa fa-eye"></i>
              <b>{{ AdminOptions::lang(28, Session::get('jezik.AdminOptions::server()')) }}</b>
            </a>
            <ul>
              <li>
                <a href="/admin-list-group">
                  <i class="fa fa-eye"></i>
                  {{ AdminOptions::lang(97, Session::get('jezik.AdminOptions::server()')) }}
                </a>
              </li>
            </ul>
          </li>
      </ul>
    </li>
    <!-- Prodaja -->
    <li>
      <a href="">
        <i class="fa fa-globe fa-spin"></i>
        <strong>{{ AdminOptions::lang(29, Session::get('jezik.AdminOptions::server()')) }}</strong>
        <small>{{ AdminOptions::lang(29, Session::get('jezik.AdminOptions::server()')) }}</small>
      </a>
      <ul>
        	<li><a href="#"><i class="fa fa-money"></i><b>{{ AdminOptions::lang(30, Session::get('jezik.AdminOptions::server()')) }}</b></a>
        		<ul>
        			<li><a href="#" class="veleMarza"><i class="fa fa-edit"></i>{{ AdminOptions::lang(120, Session::get('jezik.AdminOptions::server()')) }}</a>
        		</ul>
        	</li>
        	<li>
            <a href="#" data-toggle="modal" data-target="#modalCart"><i class="fa fa-money"></i><b>{{ AdminOptions::lang(31, Session::get('jezik.AdminOptions::server()')) }}</b></a>
            <ul>
              <li><a href="#"><i class="fa fa-edit"></i>{{ AdminOptions::lang(120, Session::get('jezik.AdminOptions::server()')) }}</a>
            </ul>
          </li>
          <div id="result"></div>
      </ul>
    </li>
    <!-- RADNICI -->
    <li>
      <a href="#">
        <i class="fa fa-group"></i>
        <strong>{{ AdminOptions::lang(49, Session::get('jezik.AdminOptions::server()')) }}</strong>
        <small>{{ AdminOptions::lang(49, Session::get('jezik.AdminOptions::server()')) }}</small>
      </a>
      <ul>
        <li>
          <a href="#" class="noviRadnik" aria-hidden="true">
              <i class="fa fa-edit"></i>
              <b>{{ AdminOptions::lang(6, Session::get('jezik.AdminOptions::server()')) }}</b>
          </a>
        </li>
        <li>
          <a href="{{ AdminOptions::base_url() }}workers1" ><i class="fa fa-female"></i><b>{{ AdminOptions::lang(69, Session::get('jezik.AdminOptions::server()')) }}</b></a>   
          <!-- <ul>
            <li><a href="#"><i class="fa fa-female"></i>Leyla Sparks</a></li>
            <li>
              <a href="#"><i class="fa fa-male"></i>Gleb Ismailov</a>
              <ul>
                <li><a href="#"><i class="fa fa-leaf"></i>About</a></li>
                <li><a href="#"><i class="fa fa-tasks"></i>Skills</a></li>
              </ul>
            </li>
            <li><a href="#"><i class="fa fa-female"></i>Viktoria Gibbers</a></li>
          </ul> -->
        </li>
        <!-- <li><a href="#"><i class="fa fa-trophy"></i>Rewards</a></li>
        <li><a href="#"><i class="fa fa-certificate"></i>Certificates</a></li> -->
      </ul>
    </li>
    <!-- Kupci -->
      <li>
        <a href="">
          <i class="fa fa-picture-o"></i>
          <strong>{{ AdminOptions::lang(8, Session::get('jezik.AdminOptions::server()')) }}</strong>
          <small>{{ AdminOptions::lang(8, Session::get('jezik.AdminOptions::server()')) }}</small>
        </a>
        <ul>
          <li>
            <a href="#" class="noviKupac" aria-hidden="true">
                <i class="fa fa-edit"></i>
                <b>{{ AdminOptions::lang(65, Session::get('jezik.AdminOptions::server()')) }}</b>
            </a>
          </li>
          <li>
            <a href="{{ AdminOptions::base_url() }}workers3" aria-hidden="true"><i class="fa fa-male"></i><b>{{ AdminOptions::lang(83, Session::get('jezik.AdminOptions::server()')) }}</b></a>
          </li>
        </ul>
      </li>
    <!-- AboutUs -->
    <li>
      <a href="">
        <i class="fa fa-envelope-o"></i>
        <strong>{{ AdminOptions::lang(9, Session::get('jezik.AdminOptions::server()')) }}</strong>
        <small>{{ AdminOptions::lang(9, Session::get('jezik.AdminOptions::server()')) }}</small>
      </a>
      <ul>
        <li><a href="#"><i class="fa fa-edit"></i>{{ AdminOptions::lang(12, Session::get('jezik.AdminOptions::server()')) }}</a></li>
        <li><a href="#"><i class="fa fa-edit"></i>{{ AdminOptions::lang(11, Session::get('jezik.AdminOptions::server()')) }}</a></li>
        <li><a href="#"><i class="fa fa-edit"></i>{{ AdminOptions::lang(13, Session::get('jezik.AdminOptions::server()')) }}</a></li>
      </ul>
    </li>
    <!-- LOGOUT -->
    <li>
      <a href="/admin" class="active">
        <i class="fa fa-sign-out"></i>
        <strong>{{ AdminOptions::lang(2, Session::get('jezik.AdminOptions::server()')) }}</strong>
        <small>{{ AdminOptions::lang(2, Session::get('jezik.AdminOptions::server()')) }}</small>
      </a>
    </li>
    <li class="float">
      <a class="search">
        <input type="text" value="{{ AdminOptions::lang(10, Session::get('jezik.AdminOptions::server()')) }}" >
        <button><i class="fa fa-search"></i></button>
      </a>
      <a href="" class="search-mobile">
        <i class="fa fa-search"></i>
      </a>
    </li>
  </ul>
</nav>
</div>
        

<!--- MODAL NOVI RADNIK --->
<div id="novi-radnik" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static" data-keyboard="false" style="display: none;" aria-hidden="true">
  @include('modals/unosNovogRadnika')
</div>

<!--- MODAL ZARADA RADNIKA --->
<div id="zarada-radnik" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static" data-keyboard="false" style="display: none;" aria-hidden="true">
  @include('modals/unosRadnikZarada')
</div>

<!--- MODAL NOVA ULAZNA STAVKA --->
<div id="nova-stavka" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static" data-keyboard="false" style="display: none;" aria-hidden="true">
  @include('modals/unosNoveStavke')
</div>  

<!--- MODAL UNOS KUPCA --->
<div id="novi-kupac" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static" data-keyboard="false" style="display: none;" aria-hidden="true">
  @include('modals/unosNovogKupca')
</div>

<!--- MODAL UNOS GRUPE PROIZVODA --->
<div id="nova-grupa-proizvoda" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static" data-keyboard="false" style="display: none;" aria-hidden="true">
  @include('modals/unosNoveGrupeProizvoda')
</div>

<!--- MODAL UNOS NOVOG PROIZVODA --->
<div id="novi-proizvod" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static" data-keyboard="false" style="display: none;" aria-hidden="true">
  @include('modals/unosNovogProizvoda')
</div>