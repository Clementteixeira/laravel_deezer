import $ from 'jquery';

function getSongs(album_id){
	var settings = {
    "async": true,
    "url": "/topalbum",
    "method": "GET",
    "data": { "album_id": album_id },
  }

   $.ajax(settings).done(function (response) {
     //response = JSON.parse(response);
     //console.log( this.data );
     console.log(response);
     //var test = response.data;
     //$('body').empty();
     //$('body').append(response);
     // $(response).each(function(response){
     //  $('.artist').append(`
     //    <h2>{{ $artistes->name }}</h2>
     //    `)
     // });


   });
}

$('body').on('click','.theSong', function() {
	var album_id = $(this).attr('data-id');
	console.log(album_id);
	getSongs(album_id);
	showAlbum();
   });

$('.return').click(function() {
  $('.selectedAlbum').toggleClass("active");
  $('.topAlbum').toggleClass("active");
});

function showAlbum(){
	 $('.selectedAlbum').toggleClass("active");
     $('.topAlbum').toggleClass("active");
}
