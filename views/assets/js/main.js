

$(document).ready(function(){
    checkHash();
    applyScrollSpy();


    $("#changethewords").changeWords({
        time: 1500,
        animate: "flipInX",
        selector: "p",
        repeat: true // false
    });
    
    //AJAX Get the Sections
    $.get("sections/profile", function(data){$('#profile').html(data);});
    $.get("sections/opportunities", function(data){$('#opportunities').html(data);});
    $.get("sections/skills", function(data){$('#skills').html(data);});
    $.get("sections/contact", function(data){$('#contact').html(data);});



    /*=================== Sticky Header ===================*/
    $(window).on("scroll",function(){
        var scroll = $(window).scrollTop();
        var navbar = $("#navbar");

        // if the viewport is past the top header image then we will display the navbar
        if (scroll > $('.header').height()){
            navbar.show(); //show once we pass the threshold
            navbar.css('top', '0');
        } 
        // else hide the navbar
        else{
            navbar.css('top', '-200px');
        }

    });

    //Smooth scrolling
    $(".link").on('click', function(event){
        if (this.hash !== ""){
            event.preventDefault();
            var hash = this.hash;

            $('html, body').animate({
                scrollTop: $(hash).offset().top}, 1000, function(){
                    if(hash != "#top"){
                        window.location.hash = hash;
                        window.history.replaceState('Section', 'EricTurner.it', hash.replace('#', '#/'));
                    }
                    else{
                        window.location.hash = hash;
                        window.history.replaceState('Section', 'EricTurner.it', " ");
                    }
                    
                });
        }
    });
    

    function applyScrollSpy()
{
	$('#navbar').on('activate.bs.scrollspy', function() 
	{
		window.location.hash = $('.nav-item .active').attr('href').replace('#', '#/');
	});
}

    // I liked the hash in the URL from http://www.pascalvangemert.nl so this method implements that formatting


    function checkHash()
{
	lstrHash = window.location.hash.replace('#/', '#');
	
	if($('a[href="'+ lstrHash +'"]').length > 0)
	{
		$('a[href="'+ lstrHash +'"]').trigger('click');
	}
}


});
