 $(document).ready(function() {

    // Submenu
    $('header nav ul li').mouseover(function(){
        if($(this).find('ul').length){
            $(this).addClass("hover");
            $(this).find('ul').addClass('active');
        }
    });

 
    $('header nav ul li').mouseout(function(){
        $(this).removeClass("hover");
        $(this).find('ul').removeClass('active');
    });

  // Mobile Menu
  $('.toggle-nav').click(function (e) {
    e.stopPropagation();
    toggleNav();
  });

  function toggleNav(){
    if($('nav').hasClass('active')){
      $('nav').removeClass('active');  
      $('.overlay').removeClass('active');  
      $('body').removeClass('no-scroll');
    }
    else {
      $('nav').addClass('active');
      $('.overlay').addClass('active');
      $('body').addClass('no-scroll');
    }
  };
 
  // Form
  $("form").submit(function() {
    $('form button').addClass('m-progress');
  });

  // Select CheckBoxes
  $('.radio').click(function() {
    $('.radio').removeClass('active'); 
    $(this).addClass('active').find('input').prop('checked', true);
    $(this).find('.select').addClass('active'); 
  });

  // Add class in header
  var pagina = window.location.pathname.split("/").pop();
  if ( pagina == '' ) {  pagina = 'home';}
  var target = $('nav a.'+pagina);
  target.addClass('active');

  

});