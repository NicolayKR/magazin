window.addEventListener('DOMContentLoaded', () => {
    $('.product-grid-header-show').click(function () {
        $('.product-grid-header-show').not(this).removeClass('active');
        $(this).addClass('active');
    });
    /////////////////// product +/-
// $(document).ready(function() {
//     $('.num-in span').click(function () {
//         var $input = $(this).parents('.num-block').find('input.in-num');
//       if($(this).hasClass('minus')) {
//         var count = parseFloat($input.val()) - 1;
//         count = count < 1 ? 1 : count;
//         if (count < 2) {
//           $(this).addClass('dis');
//         }
//         else {
//           $(this).removeClass('dis');
//         }
//         $input.val(count);
//       }
//       else {
//         var count = parseFloat($input.val()) + 1
//         $input.val(count);
//         if (count > 1) {
//           $(this).parents('.num-block').find(('.minus')).removeClass('dis');
//         }
//       }
      
//       $input.change();
//       return false;
//     });
    
//   });
//   // product +/-
    const swiper = new Swiper('.swiper-container', {
        pagination: {
            el: ".swiper-pagination",
            dynamicBullets: true,
            clickable: true,
        },
    });
    // function updateCount(){
    //     $.ajax({
    //         url: "/basket-count",
    //         type: "GET",
    //         headers: {
    //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //         },
    //         success: (data)=>{
    //             let total_qty = data;
    //             $('.cart-index').text(total_qty);
    //         }
    //     });
    // }
    $(window).scroll(function() {
		let header = $('#main-header').height();
		if($(window).scrollTop() > header){
				$('#main-header').addClass('fixed-top')
			}else{
				if($('#main-header').hasClass('fixed-top')){
				$('#main-header').removeClass('fixed-top')
				}
			}
    });
	// $('#basket').click(function(){
	// 	$('#basket-modal').toggleClass('show');
	// });
	$(window).click(function(event){
		if($(event.target).attr('id')=='cart' || $(event.target).attr('id')=='index-cart'){	
			$('#basket-modal').toggleClass('show');
		}else{
			if($('#basket-modal').hasClass('show')){
				$('#basket-modal').removeClass('show');
		   }
		}
	});
    $('#hamberger').click(function(){
        $('#hide-menu').toggleClass('show');
        // if($('#hide-menu').hasClass('show')){
        //     $('#hide-menu').removeClass('collapse').removeClass('show').removeClass('navbar-collapse').addClass('collapse').addClass('navbar-collapse');
        // }else{
        //     $('#hide-menu').removeClass('collapse').removeClass('navbar-collapse').addClass('collapse').addClass('show').addClass('navbar-collapse');
        // }
    })
});