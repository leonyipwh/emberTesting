window.App = Ember.Application.create({
  // Basic logging, e.g. "Transitioned into 'post'"
  LOG_TRANSITIONS: true, 

  // Extremely detailed logging, highlighting every internal
  // step made while transitioning into a route, including
  // `beforeModel`, `model`, and `afterModel` hooks, and
  // information about redirects and aborted transitions
  LOG_TRANSITIONS_INTERNAL: true
});


App.Router.map(function(){
	this.resource('indexPage');
	this.route('gitPage');
});

App.GitPageController = Ember.Controller.extend({
	git: "ok!",
});

App.IndexPageRoute = Ember.Route.extend({
	welcome: "Welcome!!",
  	model: function(){
		return App.STAFFS;
	}
});


App.STAFFS =[

	{
		name:"Leon",
		age:"20",
	},

	{
		name:"Leo",
		age:"19",
	},
];