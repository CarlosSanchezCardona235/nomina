<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Nomina</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>static/css/vendor/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>static/css/flat-ui.min.css">
</head>
<body>
	<div>
<header>
	<nav class="navbar navbar-inverse navbar-embossed navbar-expand-lg" role="navigation">
            <a class="navbar-brand" href="<?php echo base_url(); ?>cMenu_principal">Nomina</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse-01"></button>
            <div class="collapse navbar-collapse" id="navbar-collapse-01">
              <ul class="nav navbar-nav mr-auto">
                <!--<li><a href="#fakelink">Seleccionar Empresa<span class="navbar-unread">1</span></a></li>-->
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Catalogo Config</a>
                  <span class="dropdown-arrow"></span>
                  <ul class="dropdown-menu">
                    <li><a href="<?php echo base_url(); ?>cDefinicion_Modulo">Definicion del Modulo</a></li>
                    <li><a href="<?php echo base_url(); ?>cParametros_generalescalculo">Parametros Generales</a></li>
                    <li><a href="<?php echo base_url(); ?>cCuotas_imss_retiro_vivienda">Cuotas IMSS, Retiro y Vivienda</a></li>
                    <!--<li><a href="<?php echo base_url(); ?>cUMA">U.M.A. Y Salario Minimo </a></li>-->
                    <!--<li><a href="<?php echo base_url(); ?>cTablas_ISR">Tablas I.S.R, UMA Salario Minimo</a></li>-->
                    <li><a href="<?php echo base_url(); ?>cPercepciones_deducciones">Percepciones Y Deducciones</a></li>
                    
                    <!--<li class="divider"></li>
                    <li><a href="#">Separated link</a></li>-->

                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Catalogo Datos</a>
                  <span class="dropdown-arrow"></span>
                  <ul class="dropdown-menu">
                    <li><a href="<?php echo base_url(); ?>cDestajos">Destajos</a></li>
                    <li><a href="<?php echo base_url(); ?>cDepartamentos">Departamentos</a></li>
                    <li><a href="<?php echo base_url(); ?>cCategorias_puestos">Categorias y Puestos</a></li>
                    <li><a href="<?php echo base_url(); ?>cAguinaldos_primas">Aguinaldos, Primas y Vacaciones</a></li>
                    <li><a href="<?php echo base_url(); ?>cCatalogo_empleados">Empleados</a></li>
                    <li><a href="<?php echo base_url(); ?>cMovimientosfijos_empleado">Movimientos Fijos por empleado</a></li>
                    <li><a href="">Formatos</a></li>
                 </ul>
                </li>

                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Calculo Y Emision</a>
                  <span class="dropdown-arrow"></span>
                  <ul class="dropdown-menu">
                    <!--<li><a href="<?php echo base_url(); ?>cSemanal">Semanal</a></li>
                    <li><a href="<?php echo base_url(); ?>cDecenal">Decenal</a></li>
                    <li><a href="<?php echo base_url(); ?>cMensual">Mensual</a></li>-->
                    <li><a href="<?php echo base_url(); ?>cQuincenal">Quincenal</a></li>
                    
                 </ul>
                </li>




                <!--<li><a href="<?php //base_url(); ?>cCalculoyemision">Calculo y Emision</a></li>-->
                

                <li><a href="<?php echo base_url(); ?>cReportes">Reportes</a></li>
                <li><a href="<?php echo base_url(); ?>cAcercade">Acerca de...</a></li>
                <!--<li><a href="#fakelink">Salir</a></li>
                <li><a href="#fakelink">Acerca de </a></li>-->
                


               </ul>

               <!--<form class="navbar-form form-inline my-2 my-lg-0" action="#" role="search">
                <div class="form-group">
                  <div class="input-group">
                    <input class="form-control" id="navbarInput-01" type="search" placeholder="Search">
                    <span class="input-group-btn">
                      <button type="submit" class="btn"><span class="fui-search"></span></button>
                    </span>
                  </div>
                </div>
              </form>-->
            
            </div><!-- /.navbar-collapse -->
          </nav>
</header>
<div class="container">