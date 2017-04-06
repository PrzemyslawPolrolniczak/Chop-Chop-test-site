$(function(){
  
  //██████ zadanie 1 ██████\\
  
  var navTop = $(".navTop");
  
  navTop.click(function(){
    $('body').animate({ scrollTop: 0}, 1500);
  })
  
  // komentarz: prosta rzecz, którą już kiedyś robiłem, nie miałem problemu z tym zadaniem.
  
  //██████ zadanie 2 ██████\\
  
  var readMore = $(".more");
  
  readMore.one('click',function(){
    $(this).parent().css('height', "100%");
    $(this).parent().find( "p:last" ).append("<br><br><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget ex nulla. Integer ullamcorper nibh lorem, ut porttitor mi sagittis eget. Aenean malesuada mattis justo, sed efficitur nisl fringilla eget. Integer a mi quis lectus vulputate tempus quis quis dui. Mauris suscipit euismod urna, eget feugiat tellus imperdiet vitae. Vestibulum.<p>");
    $(".contact").css('margin-top', "222px");
    $(this).text('');
  });
  
  //komentarz: można to było zrobić na parę sposobów, np dodając nowy paragraf przed "read more", lub stworzyć taki ukryty paragraf w HTML z klasą "hidden" (display: none;). Postanowiłem zrobić to appendem aby nie dotykać pliku HTML i CSS. Największy problem w tym zadaniu sprawiło mi to, aby sekcja kontaktu uwzględniła nowy element i odniosła się do niego ustawiając margines, dlatego wpisałem nowy margines na sztywno. Jeśli po kliknięciu drugi raz w "read more" miałby ukrywać się tekst to zrobiłbym to na divach z klasą hidden i togglem w jQuerry (dodatkowo dodałbym text("-- read less") do diva o klasie ".more").
  
  
  //██████ zadanie 3 ██████\\
  
  $("#highlighter").click(function(){
    $("p:contains('ipsum')").each(function() {
      $(this).html($(this).text().replace('ipsum', '<span class="highlight">ipsum</span>' ));
      //zrób aby span o klasie "highlight" dostał animate 
    });
  });
});