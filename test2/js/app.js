// $(document).ready(function() {
//     $('#country').keyup(function() {
//         var query = $(this).val();
//         if (query != ''){
//             $.ajax({
//                 url: "search.php",
//                 method:"POST",
//                 data:{query:query},
//                 success:function(data){
//                     $('#countryList').fadeIn();
//                     $('#countryList').html(data);
//                 }
//             })
//         }
//     });

//     $(document).on('click', 'li', function(){
//         console.log('salut');
//         $("#country").val($(this).text());
//         $('#countryList').fadeOut();
//     });
// });

