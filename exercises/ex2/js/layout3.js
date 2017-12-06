/* Random Hex Generator: paulirish.com/2009/random-hex-color-code-snippets */
  let MYUSERID = 24;
  function getRandomColor(){
    return "#" + (Math.random().toString(16) + "000000").slice(2, 8).toUpperCase().slice(-6);
  }
  function createSquare(){
     return $('<rectangle>', {
       css: { "background-color": getRandomColor() }
    });
  }
  $(document).ready(function() {
    let numRects = MYUSERID/2;
    for (var i = 0; i < numRects; i++) $("main").append(createSquare());

  $("main").on("click","rectangle",function(){
    if ($(this).is(':last-child')) $("main").prepend(createSquare());
    else $(this).toggleClass("starred");
  })

  });
