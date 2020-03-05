jQuery(function($){

  $('#search_btn').on('click', function() {

    $('#result').html('');
  
    var recipe = $('#recipe_name').val();
  
    var postData = {
      action: 'advancedSearch',
      recipe_name: recipe,

    }
  
    jQuery.ajax({
        url : admin_url.ajax_url,
        type : 'post',
        data : postData
    }).done(function(response) {
        console.log(response.length);
        $.each(response, function(index, object) {
          var result  = '<div class="medium-6 columns">';
              result += '<div class="row">';
              result += '<div class="medium-6 columns">';
              result += '<a href="'+ object.link + '">';
              result += object.image;
              result += '</a>';
              result += '</div>';
              result += '<div class="medium-6 columns">';
              result += '<h2>' + object.name + '</h2>';
              result += '<p>' + object.content + '</p>';
              result += '<a class="button" href="'+ object.link + '">View Recipe</a>';
              result += '</div>'; //closing row
              result += '</div>'; //closing medium-6
              
          $('#result').append(result);
        });
        
        if(!response.length > 0 ) {
          var result = '<h2>No results found, try with other search terms</h2>';
          $('#results_found').html(result);
        } else {
          var result = '<h2>There are: ' +  response.length + ' result(s)';
          $('#results_found').html(result);
        }
        
        
    });
});
    

  });

  //missing filterizr code

  
     jQuery( '#recipes > div').not(':first').hide();
     jQuery( '#filter .menu li:first-child').addClass('active');


     jQuery('#filter .menu a').on('click', function(){
         jQuery('#filter .menu li').removeClass('active');
         jQuery(this).parent().addClass('active');
        var recipeLink = jQuery(this).attr('href');
        
        console.log(recipeLink);
         jQuery('#recipes > div ').hide();
         jQuery(recipeLink).show();
        return false;
    });

    
  var date = new Date();
  var time = date.getHours();
  var meal;
  if(time<=10) {
    meal = "breakfast"
  } else if(time >= 11 && time <=17) {
    meal = "lunch"
  } else {
    meal = "dinner";
  }

   jQuery('h2#time').append('<span>' +meal+'</span>'); 

    jQuery.ajax({
        url: admin_url.ajax_url,
        type: 'POST',
        dataType: 'json',
        data: {
            action: 'recipe_breakfast'
        }
    }).done(function(response){
         jQuery.each(response, function(index, object){
            var recipeMeal = '<li class="medium-4 small-12 columns">' +
                object.image +
                '<div class"content">' + 
                '<h3 class="text-center">' +
                '<a href="'+object.link+'">' +
                object.name +
                '</a>' +
                '</h3>' +
                '</div>' +
                '</li>';

                 jQuery('#meal-per-hour').append(recipeMeal);
        });

    });

