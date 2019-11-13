$(document).ready(function(){

    // Collapse Bootstrap Hamburger Menu On Link Click

    $('.navbar-toggler').on('click', function () {

        $('.animatedIcon').toggleClass('open');

    });

    $('.navbar-nav >li >a').on('click', function(){

        $('.navbar-collapse').collapse('hide');

        $('.animatedIcon').removeClass('open');

    });

})



/* Select sectors upto 3 

$('input[type=checkbox]').change(function(e){
   if ($('input[type=checkbox]:checked').length > 3) {
        $(this).prop('checked', false)
        alert("Only 3 Sectors are allowed");
   }
}) */

/* Upload image with preview */

$('#imageUpload').change(function(){      
      readImgUrlAndPreview(this);
      function readImgUrlAndPreview(input){
         if (input.files && input.files[0]) {
                  var reader = new FileReader();
                  reader.onload = function (e) {                    
                      $('#imagePreview').attr('src', e.target.result);
              }
                };
                reader.readAsDataURL(input.files[0]);
           }  
    });

/* File attachment */

( function ( document, window, index )
{
	var inputs = document.querySelectorAll( '.inputfile' );
	Array.prototype.forEach.call( inputs, function( input )
	{
		var label	 = input.nextElementSibling,
			labelVal = label.innerHTML;

		input.addEventListener( 'change', function( e )
		{
			var fileName = '';
			if( this.files && this.files.length > 1 )
				fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
			else
				fileName = e.target.value.split( '\\' ).pop();

			if( fileName )
				label.querySelector( 'span' ).innerHTML = fileName;
			else
				label.innerHTML = labelVal;
		});

		// Firefox bug fix
		input.addEventListener( 'focus', function(){ input.classList.add( 'has-focus' ); });
		input.addEventListener( 'blur', function(){ input.classList.remove( 'has-focus' ); });
	});
}( document, window, 0 ));


    function PopUp(hideOrshow) {
    if (hideOrshow == 'hide') document.getElementById('ac-wrapper').style.display = "none";
    else document.getElementById('ac-wrapper').removeAttribute('style');
}
window.onload = function () {
    setTimeout(function () {
        PopUp('show');
    }, 1000);
}