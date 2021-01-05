 $(document).ready(function () {
     $('.customer-logos').slick({
         centerMode: true,
         // centerPadding: '60px',
         slidesToShow: 6,
         autoplay: true,
         arrows: true,
         dots: false,
         pauseOnHover: false,
         autoplaySpeed: 1000,
         nextArrow: '<i class="fas fa-angle-right fa1 fa-2x"></i>',
         prevArrow: '<i class="fas fa-angle-left fa2 fa-2x"></i>',
         infinite: true,
         variableWidth: true,
         centerMode: false,
         initialSlide: 0,
         responsive: [{
                 breakpoint: 768,
                 settings: {
                     arrows: false,
                     centerMode: true,
                     centerPadding: '40px',
                     slidesToShow: 3
                 }
             },
             {
                 breakpoint: 480,
                 settings: {
                     arrows: false,
                     centerMode: true,
                     centerPadding: '40px',
                     slidesToShow: 1
                 }
             }
         ]
     });
 });








 $(document).ready(function () {
     $('#nav-mhweb-hamburger').click(function () {
         $(this).toggleClass('open');
     });
 });







 $(document).ready(function () {
     $(".dropdown, .btn-group").hover(function () {
         var dropdownMenu = $(this).children(".dropdown-menu");
         if (dropdownMenu.is(":visible")) {
             dropdownMenu.parent().toggleClass("open");
         }
     });
 });











 window.onload = function () {
     var elements = document.getElementsByTagName('*'),
         i;
     for (i in elements) {
         if (elements[i].hasAttribute && elements[i].hasAttribute('data-include')) {
             fragment(elements[i], elements[i].getAttribute('data-include'));
         }
     }

     function fragment(el, url) {
         var localTest = /^(?:file):/,
             xmlhttp = new XMLHttpRequest(),
             status = 0;

         xmlhttp.onreadystatechange = function () {
             /* if we are on a local protocol, and we have response text, we'll assume
              *  				things were sucessful */
             if (xmlhttp.readyState == 4) {
                 status = xmlhttp.status;
             }
             if (localTest.test(location.href) && xmlhttp.responseText) {
                 status = 200;
             }
             if (xmlhttp.readyState == 4 && status == 200) {
                 el.outerHTML = xmlhttp.responseText;
             }
         }

         try {
             xmlhttp.open("GET", url, true);
             xmlhttp.send();
         } catch (err) {
             /* todo catch error */
         }
     }
 }





 function confirmEmail() {
     var email = document.getElementById("email").value
     var confemail = document.getElementById("confemail").value
     if (email != confemail) {
         alert('Email Not Matching!');
     }
 }