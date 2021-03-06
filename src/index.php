﻿<!DOCTYPE html>
<html ng-app="ngAmobam" ng-controller="AppCtrl">
  <head>
    <title ng-bind="pageTitle"></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.16/angular.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.16/angular-touch.min.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/angular-ui-router/0.2.11/angular-ui-router.min.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/0.10.0/ui-bootstrap.min.js"></script>
	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet"/>
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <script src="app/app.js"></script>
    <script src="app/home/home.js"></script>
    <script src="app/books/books.js"></script>
  </head>
  <body>
    <div class="container">
      <div class="navbar navbar-default">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" ng-init="menuCollapsed = true" ng-click="menuCollapsed = ! menuCollapsed">
            <span class="sr-only">Change Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="navbar-brand">
            Finance
          </div>
        </div>
        <div class="collapse navbar-collapse" collapse="menuCollapsed">
          <ul class="nav navbar-nav">
            <li ui-sref-active="active">
              <a href ui-sref="home">
                <i class="fa fa-home"></i>
                Início
              </a>
            </li>
            <li>
			<li ui-sref-active="active">
              <a href ui-sref="books">
                <i class="fa fa-info-circle"></i>
                Livros
              </a>
            </li>
            <li>
              <a href="mailto:brunoamelo@gmail.com">
                <i class="fa fa-comments"></i>
                Contato
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="container" ui-view="main"></div>

    <footer class="footer">
      <div class="container">
        <div class="footer-inner">
          <hr />
          <p>
            (c) <?php echo date("Y") ?> Bruno Melo (based on <a href="http://www.joshdavidmiller.com">Josh David Miller</a>). <br />
            Amobam utiliza <a href="http://www.slimframework.com/">Slim Framework</a>, <a href="http://www.angularjs.org">AngularJS</a>, <a href="http://getbootstrap.com">Bootstrap</a>, <a href="http://angular-ui.github.com/bootstrap">UI Bootstrap</a>, e <a href="http://fortawesome.github.com/Font-Awesome">Font Awesome</a>.
          </p>
        </div>
      </div>
    </footer>
  </body>
</html>
