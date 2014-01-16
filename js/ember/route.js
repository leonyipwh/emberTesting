App.Router.map(function() {
  this.route('credits', { path: '/thanks' });
  this.resource('products', function() {
    this.resource('product', { path: '/:product_id' });
  });
  this.resource('contacts', function() {
    this.resource('contact', { path: '/:name' });
  });
});

App.ProductsRoute = Ember.Route.extend({
  model: function() {
    return this.store.findAll('product');
  }
});
