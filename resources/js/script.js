window.addEventListener('DOMContentLoaded', () => {
    $('.product-grid-header-show').click(function () {
        $('.product-grid-header-show').not(this).removeClass('active');
        $(this).addClass('active');
    });
});