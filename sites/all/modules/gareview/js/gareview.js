/**
 * @file
 * Google review module init js.
 */

(function ($) {

Drupal.behaviors.initgareview = {
  attach: function (context, settings) {
    var site_id = Drupal.settings.gareview.site_review_variables.site_id;
    var min_rating = Drupal.settings.gareview.site_review_variables.min_rating;
    var max_rows = Drupal.settings.gareview.site_review_variables.max_rows;

    $("#google-reviews").googlePlaces({
        placeId: site_id //Find placeID @: https://developers.google.com/places/place-id
      , render: ['reviews']
      , min_rating: min_rating
      , max_rows: max_rows
    });
  
  }
};

})(jQuery);
