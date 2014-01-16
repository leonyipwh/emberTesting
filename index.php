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
        <script src="js/ember/app.js"></script>
        <script src="js/ember/route.js"></script>
        <script src="js/ember/model.js"></script>
        <script src="js/ember/controller.js"></script>

    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->	

        <script type="text/x-handlebars" data-template-name="application">
		    {{outlet}}
		</script>


          <script type="text/x-handlebars" data-template-name="index">
		     <h2>{{headerName}} {{appVersion}}</h2>
		    <ul>
			    {{#each emberPull in model}}
			        <li>{{emberPull.title}}</li>
			    {{/each}}
		     </ul>
		  </script>

<!-- 
	 //  <script type='text/x-handlebars' data-template-name='application'>
	 //    <div class='navbar navbar-default'>
	 //      <div class='container'>
	 //        {{#link-to 'index' class='navbar-brand'}}<img style="height:60px" src='http://pixls.co/wp-content/uploads/2012/10/PiXLSLogo.final_.png' alt='logo' height='34' width='224' />{{/link-to}}
	 //        <ul class='nav navbar-nav navbar-right'>
	 //          {{#link-to 'index' tagName='li'}}Home{{/link-to}}
	 //          {{#link-to 'items' tagName='li'}}Items{{/link-to}}
	 //          {{#link-to 'contacts' tagName='li'}}Contacts{{/link-to}}
	 //        </ul>
	 //      </div>
	 //    </div>
	 //    <div class='container'>
	 //      {{outlet}}
	 //    </div>
	 //    <footer class='container'>
	 //      <hr />
	 //      <p class='pull-left'>&copy; 2013 The Flint &amp; Flame</p>
	 //      <p class='pull-right'>{{#link-to 'credits'}}Credits{{/link-to}}</p>
	 //    </footer>
	 //  </script>

	 //  <script type='text/x-handlebars' data-template-name='index'>
	 //    <div class='jumbotron'>
	 //      <h1>Welcome to The Flint &amp; Flame!</h1>
	 //      <p class='tagline'>
	 //        <img {{bind-attr src='logo'}} alt='Logo' />
	 //        Everything you need to make it through the winter.
	 //      </p>
	 //      <p>
	 //        {{#link-to 'products' class='btn btn-primary btn-lg'}}
	 //          Browse All {{productsCount}} Items &raquo;
	 //        {{/link-to}}
	 //      </p>
	 //    </div>
	 //    <p class='pull-right text-muted'>Rendered on {{time}}</p> 
	 //  </script>

	 //  <script type='text/x-handlebars' data-template-name='contacts/index'>
	 //    <div class='row'>
	 //      <img {{bind-attr src='avatar'}} alt='Avatar' class='img-thumbnail col-sm-4'/>
	 //      <div class='col-sm-8'>
	 //        <h1>About The Fire Spirits</h1>
	 //        <p>Contact {{contactName}} for more info!</p>
	 //        <p>Current Status: {{open}}.</p>
	 //      </div>
	 //    </div>
	 //  </script>

	 //  <script type='text/x-handlebars' data-template-name='credits'>
	 //    <h1>Thanks for the Help!</h1>
	 //    <p>This site would not be possible without the hardworking Ember Core Team!</p>
	 //  </script>

	 //  <script type='text/x-handlebars' data-template-name='products'>
		// <h2><strong>{{firstName}} {{lastName}}</strong></h2>
	 //  </script>

	 //  <script type='text/x-handlebars' data-template-name='items'>
	 //    <div class='row'>
	 //      <div class='col-sm-7'>
	 //        <h2>
	 //        	{{#each item in model}}
		// 	    	<li>{{item}}</li>
		// 		{{/each}}
		// 	</h2>
	 //      </div>
	 //    </div>
	 //  </script>

	 //  <script type='text/x-handlebars' data-template-name='products/index'>
	 //    <p class='text-muted'>Choose a product from those on the left!</p>
	 //  </script>

	 //  <script type='text/x-handlebars' data-template-name='contacts'>
	 //    <div class='row'>
	 //      <div class='col-sm-9'>
	 //        {{outlet}}
	 //      </div>
	 //      <div class='col-sm-3'>
	 //        <div class='list-group'>
	 //          {{#each}}
	 //            {{#link-to 'contact' this classNames='list-group-item'}}
	 //              {{name}}
	 //            {{/link-to}}
	 //          {{/each}}
	 //        </div>
	 //      </div>
	 //    </div>
	 //  </script>

	 //  <script type='text/x-handlebars' data-template-name='contact'>
	 //    <div class='row'>
	 //      <div class='col-sm-5'>
	 //        <img {{bind-attr src='avatar' alt='name'}} class='img-thumbnail img-rounded'/>
	 //      </div>
	 //      <div class='col-sm-7'>
	 //        <h2>{{name}}</h2>
	 //        <p>{{about}}</p>
	 //      </div>
	 //    </div>
	 //  </script>
-->
    </body>
</html>