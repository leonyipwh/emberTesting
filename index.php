
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
        <script src="app.js"></script>



        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    </head>
    <body style="font-family:arial;">
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <script type='text/x-handlebars' data-template-name='application'>
        
        <ul>
		  {{#link-to 'indexPage' tagName='li'}}Home{{/link-to}}
          {{#link-to 'gitPage' tagName='li'}}About{{/link-to}}
		</ul>

        {{outlet}}
		
		</script>


		<script type="text/x-handlebars"  data-template-name='gitPage'>
      		<?php
				echo "PHP testing"
			?>
			<h5>{{git}}</h5>
    	</script>

		<script type="text/x-handlebars"  data-template-name='indexPage'>
      		<h1>{{welcome}}</h2>
      		
      		{{#each}}
      			<h2>Name : {{name}}</h2>
      			<h4>Age: {{age}}</h4>

      		{{/each}}
    	</script>

        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>