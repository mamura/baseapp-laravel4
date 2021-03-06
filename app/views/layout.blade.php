<!DOCTYPE html>
<html lang="pt_BR">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="pragma" content="no-cache" />
	<meta http-equiv="Cache-Control" content="no-cache">
	<meta http-equiv="Cache-Control" content="no-store">
	<meta http-equiv="Expires" content="-1">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>BaseApp - A perfect Base Application</title>

    <link href="/assets/stylesheets/butistrapi.css" rel="stylesheet" type="text/css" />
    <link href="/assets/stylesheets/animate.css" rel="stylesheet" type="text/css" />
    <link href="/assets/stylesheets/metismenu.css" rel="stylesheet" type="text/css" />
    <link href="/assets/stylesheets/styles.css" rel="stylesheet" type="text/css" />

    <script type="text/javascript" src="/assets/javascripts/jquery.min.js"></script>
    <script type="text/javascript" src="/assets/javascripts/jquery-ui.min.js"></script>
    <script type="text/javascript" src="/assets/javascripts/metismenu.js"></script>
    <script type="text/javascript" src="/assets/javascripts/bootstrap.min.js"></script>
    <script type="text/javascript" src="/assets/javascripts/template.js"></script>
    <script type="text/javascript" src="/assets/javascripts/toastr.js"></script>
</head>

<body class="fixed-navbar fixed-sidebar">

	<!--div class="splash no-print"> 
		<div class="color-line"></div>
		<div class="splash-title">
			<h1>BaseApp - A perfect Base Application</h1>
			<p>Loren Ipsum dolor sit amet </p>
			<div class="spinner"> 
				<div class="rect1"></div> 
				<div class="rect2"></div> 
				<div class="rect3"></div> 
				<div class="rect4"></div> 
				<div class="rect5"></div> 
			</div> 
		</div> 
	</div-->
	
	<div id="header">
        <div class="color-line"></div>
		<div id="logo" class="light-version">
        	<img src="/assets/images/logo-pmf.png" alt="logo" />
    	</div>
		
        <nav role="navigation">
        	<div class="header-link hide-menu"><i class="fa fa-bars"></i></div>
        	
            <form class="header-search" role="search" method="post" action="#">
                <div class="form-group">
                    <input class="form-control" placeholder="Busca no topo" name="search" type="text">
                </div>
            </form>

        	<div class="navbar-right">
        		<ul class="nav navbar-nav no-borders">
                    <li class="dropdown">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="pe-7s-speaker"></i>
                        </a>

                        <ul class="dropdown-menu hdropdown notification animated flipInX">
                            <li>
                                <a>
                                    <span class="label label-success">NOVO</span>
                                    Nova mensagem.
                                </a>
                            </li>
                            <li>
                                <a>
                                    <span class="label label-warning">ALERTA</span>
                                    Mensagem de Alerta.
                                </a>
                            </li>
                            <li>
                                <a>
                                    <span class="label label-danger">ERRO</span>
                                    Mensagem de erro.
                                </a>
                            </li>
                            <li class="summary">
                                <a href="#">Veja todas as notificações</a>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="pe-7s-keypad"></i>
                        </a>

                        <div class="dropdown-menu hdropdown bigmenu animated flipInX">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a href="#">
                                                    <i class="pe pe-7s-portfolio text-info"></i>
                                                    <h5>Projetos</h5>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="#">
                                                    <i class="pe pe-7s-mail text-warning"></i>
                                                    <h5>Email</h5>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="#">
                                                    <i class="pe pe-7s-users text-success"></i>
                                                    <h5>Contatos</h5>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#">
                                                    <i class="pe pe-7s-comment text-info"></i>
                                                    <h5>Fórum</h5>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="#">
                                                    <i class="pe pe-7s-graph1 text-danger"></i>
                                                    <h5>Analytics</h5>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="{{ URL::route('user/request') }}">
                                                    <i class="pe pe-7s-user text-success"></i>
                                                    <h5>Usuário</h5>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                    </li>

                    <li>
                        <a href="#" id="sidebar" class="right-sidebar-toggle">
                            <i class="pe-7s-upload pe-7s-news-paper"></i>
                        </a>
                    </li>

        			<li>
        				<a href="{{ URL::route('user/logout') }}">
							<i class="pe-7s-upload pe-rotate-90"></i>     
						</a>
        			</li>
        		</ul>
        	</div>     
        </nav>
	</div>

	
	<aside id="menu" class="hidden-print no-print">
		<div id="navigator">
			<div class="system-name">
            	<a href="index.html">
                	<h3>BaseApp</h3>
                    <span>Aplicação Base em laravel 4</span>
            	</a>

            	<!--div class="stats-label text-color">
                	<span class="font-extra-bold font-uppercase"></span>
                	<br clear="both" />
                	<small class="text-muted">Grupo do Usuário</small>

                	<div id="sparkline1" class="small-chart m-t-sm"></div>
                	<div>
                    	<h4 class="font-extra-bold m-b-xs">260</h4>
                    	<small class="text-muted">Solicitações atendidas nos últimos dias.</small>
                	</div>
            	</div-->
        	</div>
		</div>

		<nav class="sidebar-nav" role="navigation">
            <ul class="nav" id="side-menu">
                <li class="active">
                    <a href="#/"> <span class="nav-label">Dashboard</span> </a>
                </li>
            
                <li>
                    <a class="list-group-item" href="#" data-toggle="offcanvas">
                        <span class="nav-label">Solicitações</span>
	           	   </a>
                </li>
            
                <li ng-class="{active: matchesRoute('Ordems')}">
                    <a class="list-group-item"  href="#/Ordems" data-toggle="offcanvas">
                        <span class="nav-label">Ordens de Serviços</span>
                    </a>
                </li>
            
                <li>
                    <a href="#"><span class="nav-label">Outros</span><span class="fa arrow"></span> </a>
                    <ul class="nav nav-second-level">
                    	<li><a ng-class="{active: matchesRoute('Engenheiros')}" href="#/Engenheiros" data-toggle="offcanvas">Engenheiros</a></li>
                        <li><a ng-class="{active: matchesRoute('Equipes')}" href="#/Equipes" data-toggle="offcanvas">Equipes</a></li>
                        <li><a ng-class="{active: matchesRoute('Especies')}" href="#/Especies" data-toggle="offcanvas">Espécies Vegetais</a></li>
                        <li><a ng-class="{active: matchesRoute('Locals')}" href="#/Locals" data-toggle="offcanvas">Locais</a></li>
                        <li><a ng-class="{active: matchesRoute('TipoServicos')}" href="#/TipoServicos" data-toggle="offcanvas">Tipos Serviços</a></li>
                        <li><a ng-class="{active: matchesRoute('Usuarios')}" href="#/Usuarios" data-toggle="offcanvas">Usuários</a></li>
                    </ul>
                </li>
		    </ul>
		</nav>
	</aside>
	
	<div id="wrapper">
		
		<div class="normalheader small-header">
    		<div class="hpanel">
    			<div class="panel-body">
    				<h2 class="font-light m-b-xs">{{$title}}</h2>
    				<small>{{$description}}</small>
    			</div>
    		</div>
    	</div>
    	
    	<div id="main" class="content animate-panel">
            <div class="row">
                @if( strpos(Route::current()->getName(), 'index') )
                    @include("partials.filters")
                @endif

                @yield("content")
            </div>
        </div>

		<footer class="footer">
			<span class="pull-right"> Sistema de Manutenção - Paisagismo </span> PMF 2016
		</footer>
	</div>
</body>
</html>