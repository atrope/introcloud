/* Random Hex Generator: paulirish.com/2009/random-hex-color-code-snippets
*/
  function getRandomColor(){
    return "#" + (Math.random().toString(16) + "000000").slice(2, 8).toUpperCase().slice(-6);
  }
  function createSquare(){
     return $('<article>', {
       class: 'square',
       css: { "background-color": getRandomColor() }
    });
  }
  $(document).ready(function() {
    for (var i = 0; i < 12; i++) $("main").append(createSquare());

  $("main").on("click",".square",function(){
    if ($(this).is(':last-child')) $("main").prepend(createSquare());
    else $(this).toggleClass("starred");
  })

  });
