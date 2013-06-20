$('.menu-parent-item').hover(
  function() {
    if(!$(this).hasClass('current_page_item')) {
      $(this).addClass('current-menu-item');
    }
    $('.sub-menu').css('visibility','visible');
  }, function () {
    if(!$(this).hasClass('current_page_item')) {
      $(this).removeClass('current-menu-item');
    }
    $('.sub-menu').css('visibility','hidden');
  }
)