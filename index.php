<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="bower_components/jquery/jquery.js"></script>
        <script src="bower_components/handlebars/handlebars.js"></script>
        <script src="bower_components/ember/ember.js"></script>
        <!-- <script src="bower_components/ember-data/ember-data.js"></script> -->
        
        <script src="js/ember/route.js"></script>
        <script src="js/ember/model.js"></script>
        <script src="js/ember/controller.js"></script>
        <script src="js/ember/app.js"></script>

    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->	

        <script type="text/x-handlebars" data-template-name="application">
		    {{outlet}}
		</script>




<!-- load ajax -->
    <script type="text/x-handlebars" data-template-name="index">
		     <h2>{{headerName}} {{appVersion}}</h2>
		    <ul>
			    {{#each item in model}}
    <li>{{item}}</li>
{{/each}}
		     </ul>
		</script>

    </body>
</html>