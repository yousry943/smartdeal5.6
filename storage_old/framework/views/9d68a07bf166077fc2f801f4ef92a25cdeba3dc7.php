





 <!-- <script type="text/javascript" src="js/jquery-1.12.4.js"></script> -->




 <!-- <script type="text/javascript" src="js/bootstrap.min.js"></script> -->
 <!-- <script type="text/javascript" src="js/bootsnav.js"></script> -->
 <!-- <script type="text/javascript" src="js/parallax.js"></script> -->
 <!-- <script type="text/javascript" src="js/scrollto.js"></script> -->
 <!-- <script type="text/javascript" src="js/jquery-scrolltofixed-min.js"></script> -->
 <!-- <script type="text/javascript" src="js/jquery.counterup.js"></script> -->
 <!-- <script type="text/javascript" src="js/gallery.js"></script> -->
 <!-- <script type="text/javascript" src="js/wow.min.js"></script> -->
 <!-- <script type="text/javascript" src="js/slider.js"></script> -->
 <!-- <script type="text/javascript" src="js/video-player.js"></script> -->
 <!-- <script type="text/javascript" src="js/jquery.barfiller.js"></script> -->
 <!-- <script type="text/javascript" src="js/jflickrfeed.min.js"></script> -->
 <!-- <script type="text/javascript" src="js/timepicker.js"></script> -->
 <!-- <script type="text/javascript" src="js/tweetie.js"></script> -->
 <!-- Google Map Javascript Codes -->
 <!-- <script src="http://maps.google.com/maps/api/js?key=AIzaSyABqK-5ngi3F1hrEsk7-mCcBPsjHM5_Gj0"></script>
 <script src="js/jquery.googlemap.js"></script> -->
 <!-- Custom script for all pages -->
 <!-- <script type="text/javascript" src="js/color-switcher.js"></script> -->
 <!-- <script type="text/javascript" src="js/script.js"></script> -->












 <!-- Custom script for all pages -->




 <script src="<?php echo e(asset('assets/website/js/jquery-1.12.4.js')); ?>"></script>


    <script src="<?php echo e(asset('assets/website/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/website/js/bootsnav.js')); ?>"></script>

    <script src="<?php echo e(asset('assets/website/js/parallax.js')); ?>"></script>

    <script src="<?php echo e(asset('assets/website/js/scrollto.js')); ?>"></script>

      <script src="<?php echo e(asset('assets/website/js/jquery-scrolltofixed-min.js')); ?>"></script>

      <script src="<?php echo e(asset('assets/website/js/jquery.counterup.js')); ?>"></script>
      <script src="<?php echo e(asset('assets/website/js/gallery.js')); ?>"></script>

      <script src="<?php echo e(asset('assets/website/js/wow.min.js')); ?>"></script>

      <script src="<?php echo e(asset('assets/website/js/slider.js')); ?>"></script>
      <script src="<?php echo e(asset('assets/website/js/video-player.js')); ?>"></script>

      <script src="<?php echo e(asset('assets/website/js/jquery.barfiller.js')); ?>"></script>

      <script src="<?php echo e(asset('assets/website/js/jflickrfeed.min.js')); ?>"></script>

      <script src="<?php echo e(asset('assets/website/js/timepicker.js')); ?>"></script>

        <script src="<?php echo e(asset('assets/website/js/tweetie.js')); ?>"></script>

              <script src="<?php echo e(asset('assets/website/js/tweetie.js')); ?>"></script>

              <!-- <script src="<?php echo e(asset('assets/website/js/jquery.googlemap.js')); ?>"></script> -->


              <script src="<?php echo e(asset('assets/website/js/script.js')); ?>"></script>



              <!--Jquery-->
              <!--Floating WhatsApp css-->
              <!--Floating WhatsApp javascript-->
              <script type="text/javascript" src="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/floating-wpp.min.js"></script>


              <!--Div where the WhatsApp will be rendered-->
                <div id="WAButton"></div>



              <script type="text/javascript">
              var image_path="<?php echo e(asset('assets/website/images/whatsapp.svg')); ?>";
                 $(function () {
                              $('#WAButton').floatingWhatsApp({
                             phone: '+201009236100', //WhatsApp Business phone number
                             headerTitle: 'Chat with us on WhatsApp!', //Popup Title
                             popupMessage: 'Hello, how can we help you?', //Popup Message
                             showPopup: true, //Enables popup display
                             buttonImage: '<img src="http://www.smart-deal24.com/public/assets/website/images/whatsapp.png" />',
                             position: "right" //Position: left | right
                         });
                     });
              </script>





<script type="text/javascript">
// $(function(){
//
//   $('#formLogin').click(function() {
//       $('#myModal').modal();
//   });
//
//
//     $(document).on('click', '#formLogin', function(e) {
//         e.preventDefault();
//
//         $('input+small').text('');
//         $('input').parent().removeClass('has-error');
//
//         $.ajax({
//             method: $(this).attr('method'),
//             url: $(this).attr('action'),
//             data: $(this).serialize(),
//             dataType: "json"
//         })
//
//         .done(function(data) {
//             $('.alert-success').removeClass('hidden');
//             $('#myModal').modal('hide');
//         })
//         .fail(function(data) {
//             $.each(data.responseJSON, function (key, value) {
//
//                 var input = '#formLogin input[name=' + key + ']';
//                 $(input + '+small').text(value);
//                 $(input).parent().addClass('has-error');
//             });
//         });
//     });
//
// })


    $(document).ready(function () {







      $("#register").click(function (e) {
          e.preventDefault();
          var loading = document.getElementById('reg_gif');
          var err = document.getElementById('error_login');
          $(err).hide(500);
          $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
              }
          })
          var formData = $('#register_form').serialize();
      
          $.ajax({
              type: 'POST',
              url: '<?php echo e(url("/register")); ?>',
              data: formData,
              dataType: 'json',
              beforeSend: function (xhr) {
                  //loading ajax animation
                  $(loading).show();
                  $('.regErrors').each(function () {
                      $(this).html('');
                  })
              },
              success: function (response) {

                  window.open(location.protocol + '//' + location.host + location.pathname, '_self');
                  $(loading).hide();
                  $('#regErrors_all').html('');

              },
              error: function (response) {
                  $(loading).hide();
                  var objOut = response.responseText;
                  if (objOut.match("^<")) {
                      // do this if begins with Hello
                      $(loading).hide();
                      window.open(location.protocol + '//' + location.host + location.pathname, '_self');
                  } else {
                      var obj = $.parseJSON(response.responseText);
                      var errors = obj.errs;

                      if (errors.first_name != undefined && errors.first_name[0] != undefined) {
                          $('#fname_err').html(errors.first_name[0]);
                      }
                      if (errors.last_name != undefined && errors.last_name[0] != undefined) {
                          $('#lname_err').html(errors.last_name[0]);
                      }
                      if (errors.email != undefined && errors.email[0] != undefined) {
                          $('#email_err').html(errors.email[0]);
                      }
                      if (errors.email != undefined && errors.email[1] != undefined) {
                          $('#email_err').html(errors.email[1]);
                      }
                      if (errors.password != undefined && errors.password[0] != undefined) {
                          $('#password_err').html(errors.password[0]);
                      }
                      if (errors.password != undefined && errors.password[1] != undefined) {
                          $('#password_err').html(errors.password[1]);
                      }
                      if (errors.age != undefined && errors.age[0] != undefined) {
                          $('#age_err').html(errors.age[0]);
                      }
                      if (errors.phone != undefined && errors.phone[0] != undefined) {
                          $('#phone_err').html(errors.phone[0]);
                      }
                      if (errors.slug != undefined && errors.slug[0] != undefined) {
                          $('#slug_err').html(errors.slug[0]);
                      }
                      if (errors.country != undefined && errors.country[0] != undefined) {
                          $('#country_err').html(errors.country[0]);
                      }
                      $('#regErrors_all').html('Please enter all required information');
                  }
              }
          });
      });




$("#login").click(function (e) {
        e.preventDefault();
        loging(0);
    });
    $('#logout').on('click', function () {
        $.ajax({
            type: 'GET',
            url: '<?php echo e(url("/logout")); ?>',
            beforeSend: function (xhr) {
                //loading ajax animation
            },
            success: function (response) {
                //
                window.open(location.protocol + '//' + location.host + location.pathname, '_self');
            },
            error: function (response) {

            }
        });
    });


function loging() {
    var err = document.getElementById('error_login');
    $(err).hide(500);
    // $.ajaxSetup({
    //     headers: {
    //         'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
    //     }
    // })
    var formData = $('#login_form').serialize();
    var loading = document.getElementById('login_gif');
    $.ajax({
        type: 'POST',
        url: '<?php echo e(url("/login")); ?>',
        "_token": "<?php echo e(csrf_token()); ?>",
        data: formData,
        dataType: 'json',
        beforeSend: function (xhr) {
            //loading ajax animation
            $(loading).show();
        },
        success: function (response) {
            //


            if (response.message == 'login') {

              $(loading).hide();

              window.open(location.protocol + '//' + location.host + location.pathname, '_self');
                // window.open(url, '_self');
                //  window.open('/', '_self');
                }


          // window.open('/', '_self');





        },
        error: function (response) {


            $(loading).hide();
            if (response.responseText == 'match') {

            } else {
                $(err).show(500);
                $(err).html(response.responseText.email);
            }
        }
    });
}
    });

</script>
