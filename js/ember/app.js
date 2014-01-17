window.App = Ember.Application.create({
  // Basic logging, e.g. "Transitioned into 'post'"
  LOG_TRANSITIONS: true, 

  // Extremely detailed logging, highlighting every internal
  // step made while transitioning into a route, including
  // `beforeModel`, `model`, and `afterModel` hooks, and
  // information about redirects and aborted transitions
  LOG_TRANSITIONS_INTERNAL: true
});

/* w/o ember Data */
App.EmberPull = Ember.Object.extend();

App.Item.reopenClass({
  all: function() {
      return $.getJSON("http://api.ihackernews.com/page?format=jsonp&callback=?").then(function(response) {
        var items = [];
 
        response.items.forEach( function (item) {
          items.push( App.Item.create(item) );
        });
 
         return items;
      });
  }
});

App.IndexRoute = Ember.Route.extend({
  model: function() {
    return App.Item.all();
  }
});




/* Ember Data */
// var App = Ember.Application.create({
//   LOG_TRANSITIONS: true
// });

// App.Store = DS.Store.extend({
//   revision: 11,
//   url: "http://instagram.artonagroup.com/api/random?count=3"
// });

// App.Post = DS.Model.extend({
//   title: DS.attr('string'),
//   body: DS.attr('string')
// });

// var posts = App.Post.find();

// App.Router.map(function(){
//   this.resource('posts');
// });

// App.PostsRoute = Ember.Route.extend({
//   model: function() {
//     return App.Post.find();
//   }
// });

