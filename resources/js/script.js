window.addEventListener('DOMContentLoaded', () => {
    $('.product-grid-header-show').click(function () {
        $('.product-grid-header-show').not(this).removeClass('active');
        $(this).addClass('active');
    });
    /////////////////// product +/-
$(document).ready(function() {
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
    $('.cart-add').click(function(event){
        event.preventDefault();
        let qty = parseInt($(".detail-quantity").val());
        let total_qty = parseInt($('.cart-index').text());
        total_qty += qty;
        $('.cart-index').text(total_qty);
        addToCart(this.id, qty);
    });
    
    function addToCart(id, qty){
        $.ajax({
            url: "/add-to-cart",
            type: "POST",
            data:{
                id: id,
                qty: qty
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: (data)=>{
                console.log(data);
            }
        });
    }
});