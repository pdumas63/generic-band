$(document).ready(function () {
  var trigger = $('.hamburger'),
    overlay = $('.overlay'),
    isOpen = false;

  trigger.click(function () {
    hamburger_cross();
  });

  function hamburger_cross() {

    if (isOpen == true) {
      overlay.hide();
      trigger.removeClass('is-open');
      trigger.addClass('is-closed');
      isOpen = false;
    } else {
      overlay.show();
      trigger.removeClass('is-closed');
      trigger.addClass('is-open');
      isOpen = true;
    }
  }

  $('[data-toggle="offcanvas"]').click(function () {
    $('#wrapper').toggleClass('toggled');
  });

  //function when you click everywhere on the body to close the sidebar
  $('main').click(function () {
    if (isOpen == true) {
      $('#wrapper').toggleClass('toggled');
      hamburger_cross();
    }

  });

  //show arrowup when it's under the header
  $(window).scroll(function (event) {
    var scroll = $(window).scrollTop();
    if (scroll >= 102) {
      $('#arrowup').css('visibility', 'visible');
    } else {
      $('#arrowup').css('visibility', 'hidden');
    }

  });


  //show a window with the media players

  $('.lecteur').hide();
  $('#recordings .photo').click(function () {
    $('.lecteur').hide(800);
    if (!$('.lecteur').is(':visible')) {
      $('.lecteur').slideDown(800);
    }
  });

  //show a window with band description text

  /* $('.textGroupe').hide(); */
  $('#groupe .photo').click(function () {
    $('.textGroupe').hide(800);
    if (!$('.textGroupe').is(':visible')) {
      $('.textGroupe').slideDown(800);
    }
  });

  //show a window with band information text

  /* $('.textInfo').hide(); */
  $('#infos .photo').click(function () {
    $('.textInfo').hide(800);
    if (!$('.textInfo').is(':visible')) {
      $('.textInfo').slideDown(800);
    }
  });

  //show a window with band albums text

  $('.textAlbum').hide();
  $('#albums .photo').click(function () {
    $('.textAlbum').hide(800);
    if (!$('.textAlbum').is(':visible')) {
      $('.textAlbum').slideDown(800);
    }
  });

  //show a window with dates & towns's tour text

  $('.textConcert').hide();
  $('#concerts .photo').click(function () {
    $('.textConcert').hide(800);
    if (!$('.textConcert').is(':visible')) {
      $('.textConcert').slideDown(800);
    }
  });

  //Ajax function for validate the contact-form
  $('#contact-form').submit(function (event) {
    event.preventDefault();
    if($('#name').val().length === 0 ||$('#email').val().length === 0 ||$('#message').val().length === 0 ) {
      $('#valid-message').text(' Remplir tous les champs');//if fields are empty
    }else {
      var metaForm = $(this);
      $.ajax({
          type: "POST",
          url: '../form/'+ metaForm.attr('action'),
          data: metaForm.serialize(),        
          success: function () {
            $('#valid-message').text(' Votre message a bien été envoyé');
          },
          error: function () {          
            $('#valid-message').text(' Votre message n\'a pas été envoyé');
          }
      });
    }
  });
});





