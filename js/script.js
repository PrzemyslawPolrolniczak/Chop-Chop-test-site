$(function(){
  
  //██████ zadanie 1 ██████\\
  
  var navTop = $(".navTop");
  
  navTop.click(function(){
    $('body').animate({ scrollTop: 0}, 1500);
  })
  
  // komentarz: prosta rzecz, którą już kiedyś robiłem, nie miałem problemu z tym zadaniem.
  
  //██████ zadanie 2 ██████\\
  
  var readMore = $(".more");
  
  readMore.on('click',function(){
    if ($(this).parent().find('p').hasClass('hidden') == true) {
      $(this).parent().find('p').removeClass('hidden');
      $(this).html('<span>-</span><span>-</span><span>-</span><span>-</span>&nbsp;&nbsp;read less');
    } else {
      $(this).parent().find('p').last().addClass('hidden');
      $(this).html('<span>-</span><span>-</span><span>-</span><span>-</span>&nbsp;&nbsp;read more');
    }
  });
  
  //komentarz: proste zadanie z ukrytym divem.
  
  
  //██████ zadanie 3 ██████\\
  
  $("#highlighter").click(function(){
    $("p:contains('ipsum')").each(function() {
      $(this).html($(this).text().replace('ipsum', '<span>ipsum</span>' ));
      $('p > span').addClass('highlight');
      setTimeout(function() {
        $('p > span').removeClass('highlight');
      }, 3000);
    });
  });
  
  //komentarz: to zadanie było dla mnie trudne przez brak wiedzy o istnieniu funkcji "replace". Jednak po dłuższym grzebaniu w internecie odkryłem jQuerrowe replaceWith i replaceAll, a z tamtąd tylko krok do JS-owego replace. Animacja też sprawiła problem, bo stackoverflow zalecał korzystanie z plugina, a jak chciałem dodać klase a potem ją usunąć przez delay(3000), to okazało się, że delay działa tylko dla animate.
  
  //██████ zadanie AJAX ██████\\
  
  var button = $('#send');
  var request = "";
  
  button.click(function(a) {
    a.preventDefault();
    request = $.ajax({
      url: "/post.php",
      type: "post"
    });
    request.done(function() {
      console.log('dziala');
    });
    request.fail(function() {
      console.log('niedziala');
    });
  });
  
  
});