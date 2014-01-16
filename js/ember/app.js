App = Ember.Application.create({});

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


