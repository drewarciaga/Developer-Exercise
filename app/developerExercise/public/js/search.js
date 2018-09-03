$(document).ready(function(){
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});

  $("#houses-table").hide();
  $(".loaderImage").hide();
  

	$('#search-form').on('submit', function (event) {
		event.preventDefault();
     $(".loaderImage").show();
		var data = $('#search-form').serializeArray();
    //console.log(data);
    var houseTbl = $("#houses-table");
        $.ajax({
          type: "POST",
          url: 'api/findHouse',
          data: JSON.stringify(data),
          contentType: "json",
          processData: false,
          success: function(data) {
         // console.log(data);
          $(".loaderImage").hide();
          if ( data.length == 0 ) {
            houseTbl.dataTable().fnDestroy();
            houseTbl.hide();
            $('#noData-modal').modal('show');
          }else{
              houseTbl.dataTable().fnDestroy();
              houseTbl.DataTable ({
                  "data" : data,
                  "columns" : [
                      { "data" : "name" },
                      { "data" : "price" },
                      { "data" : "bedrooms" },
                      { "data" : "bathrooms" },
                      { "data" : "storeys" },
                      { "data" : "garages" }
                  ],
              });

            houseTbl.show();
            $('html, body').animate({ scrollTop: houseTbl.offset().top }, 'slow'); 
          }

          },
          error: function(data) {
            console.log(data);
            $(".loaderImage").hide();
            houseTbl.hide();
            alert('an error occured');
          }
        });
  	});


});

function clearFields(){
  $( '.form-control' ).val('');
}