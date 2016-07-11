$(function(){
  $('a').each(function() {
    if ($(this).prop('href') == window.location.href) {
      $(this).find("li").addClass('current');
    }
  });
});