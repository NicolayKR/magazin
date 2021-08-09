window.addEventListener('DOMContentLoaded', () => {
    $('.product-grid-header-show').click(function () {
        $('.product-grid-header-show').not(this).removeClass('active');
        $(this).addClass('active');
    });
    /////////////////// product +/-
$(document).ready(function() {
    updateCount();
    $('.num-in span').click(function () {
        var $input = $(this).parents('.num-block').find('input.in-num');
      if($(this).hasClass('minus')) {
        var count = parseFloat($input.val()) - 1;
        count = count < 1 ? 1 : count;
        if (count < 2) {
          $(this).addClass('dis');
        }
        else {
          $(this).removeClass('dis');
        }
        $input.val(count);
      }
      else {
        var count = parseFloat($input.val()) + 1
        $input.val(count);
        if (count > 1) {
          $(this).parents('.num-block').find(('.minus')).removeClass('dis');
        }
      }
      
      $input.change();
      return false;
    });
    
  });
  // product +/-
    const swiper = new Swiper('.swiper-container', {
        pagination: {
            el: ".swiper-pagination",
            dynamicBullets: true,
            clickable: true,
        },
    });
    // $('.plus').click(function(event){
    //     event.preventDefault();
    //     addToCart(this.attr("data-id"), qty = 1);
    // });
    // // $('.cart-add').click(function(event){
    // //     event.preventDefault();
    // //     let qty = parseInt($(".detail-quantity").val());
    // //     let total_qty = parseInt($('.cart-index').text());
    // //     total_qty += qty;
    // //     $('.cart-index').text(total_qty);
    // //     addToCart(this.id, qty);
    // // });
    
    function updateCount(){
        $.ajax({
            url: "/basket-count",
            type: "GET",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: (data)=>{
                let total_qty = data;
                $('.cart-index').text(total_qty);
            }
        });
    }
});