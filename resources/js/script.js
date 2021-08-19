window.addEventListener('DOMContentLoaded', () => {
    $('.product-grid-header-show').click(function () {
        $('.product-grid-header-show').not(this).removeClass('active');
        $(this).addClass('active');
    });
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
		if($(window).width() > '991' && $(event.target).attr('id')=='cart' || $(event.target).attr('id')=='index-cart'){	
            event.preventDefault();
			$('#basket-modal').toggleClass('show');
		}else{
			if($('#basket-modal').hasClass('show')){
				$('#basket-modal').removeClass('show');
		   }
		}
	});
    $('#hamburger').click(function(){
        $('#hide-menu').toggleClass('show');
    });
    $(window).click(function(event){
		if($(event.target).hasClass('main-header')==false && $(event.target).attr('id')!='hamburger' && $(event.target).attr('id')!='icon-hamburger' && $('#hide-menu').hasClass('show') && $(event.target).hasClass('nav-item') && $(event.target).attr('id')=='cart' || $(event.target).attr('id')=='index-cart'){	
            $('#hide-menu').toggleClass('show');
		}
	});
});