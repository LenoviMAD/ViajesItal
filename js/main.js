// import Modal from './modules/Modal.js';
// import Timer from './timer.js';
// // console.log(location);
// // Modules init


// $(function () {
//     $('[data-toggle="popover"]').popover()
//   })
  

// $("[data-toggle=popover]").each(function (i, obj) {
//     $(this).popover({
//         html: true,
//         content: function () {
//             var id = $(this).attr("id");
//             return $("#popover-content-" + id).html();
//         }
//     });
// });


$("[data-toggle=popover]").each(function (i, obj) {
    $(this).popover({
        html: true,
        title: function () {
            var id = $(this).attr("id");
            return $("#popover-content-head").html();
        },
        
        content: function () {
            return '<div class="popover-content1">' + $("#popover-content-content").html() +
                '</div><div class="popover-footer">' + $("#popover-content-footer").html() +
                '</div>';
        }
    });
});


$(document).ready( function () {
    $('example').DataTable();
} );

// /* Create the popover with Header Content and Footer */
// $('.popover-markup>[data-toggle="popover"]').popover({
//     html: true,
//     title: function() {
//       var id = $(this).attr("id");
//             return $("#popover-content-head").html();
//     },
//     /********** 
//       In the content method, return a class 'popover-content1' wrapping the actual 'contents', 
//       concatenated with a class 'popover-footer' wrapping the footer.
//     ************/
//     content: function() {
//         return '<div class="popover-content1">' + $("#popover-content-content").html() +
//           '</div><div class="popover-footer">' + $("#popover-content-footer").html() +
//           '</div>';
//       }    
//   });
  
//   /**
//     Allow the popover to be closed by clicking anywhere outside it.
//   **/
//   $('body').on('click', function(e) {
//     $('.popover-markup>[data-toggle="popover"]').each(function() {
//       //the 'is' for buttons that trigger popups
//       //the 'has' for icons within a button that triggers a 
//       if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {
//         $(this).popover('hide');
//       }
//     });
//   });