import $ from 'jquery';
//console.log($);

function getArtist(artist_id){
  var settings = {
    "async": true,
    "url": "/artist",
    "method": "GET",
    //"dataType": "json",
    "data": { "artist_id": artist_id },
  }

   $.ajax(settings).done(function (response) {
      console.log("allo");
    // response = JSON.parse(response);
    
     console.log(response);
     //$('.artist').html( `` );
     $('body').empty();
     $('body').append(response);
     // $(response).each(function(response){
     //  $('.artist').append(`
     //    <h2>{{ $artistes->name }}</h2>
     //    `)
     // });


   });
}

$('.randomBloc').click(function() {
   var artist_id = generate();

  var div = document.createElement("div");
    div.src = artist_id;
    var src = document.getElementById("hideId");
    src.append(artist_id);

 // var artist_id = $(this).attr("data-id");
  console.log(artist_id);
  getArtist(artist_id);
});

function generate(response){
    let id = Math.floor(Math.random()*5000);

    return id;
  }






// $('.artists-container div').each(function(){
//   var artist_id = $(this).attr('data-id');
//   $.ajax({
//     url: '/fans',
//     data : 'artist_id='+artist_id,
//     type: 'GET',
//     context : this,
//     //dataType: 'json',
//     success: function(response){ // What to do if we succeed
//       var json = $.parseJSON(response);
//       fans = json.nb_fan;
//       console.log(fans); 
//       if(fans != 1536){
//         $(this).find('p').append(fans+" fans");
//       }
//     },
//     error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
//       console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
//     }
//   })
// });