window.App = Ember.Application.create({
  // Basic logging, e.g. "Transitioned into 'post'"
  LOG_TRANSITIONS: true, 

  // Extremely detailed logging, highlighting every internal
  // step made while transitioning into a route, including
  // `beforeModel`, `model`, and `afterModel` hooks, and
  // information about redirects and aborted transitions
  LOG_TRANSITIONS_INTERNAL: true
});

App.EmberPull = Ember.Object.extend();

App.EmberPull.reopenClass({
  all: function() {
      return $.getJSON("http://api.ihackernews.com/page?format=jsonp&callback=?").then(function(response) {
        var items = [];
 
        response.items.forEach( function (jsonItem) {
          items.push( App.EmberPull.create(jsonItem) );
        });
 
         return items;
      });
  }
});


