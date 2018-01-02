$( document ).ready(function() {
  $('body').on('click','.backer',function(e){
    window.history.back();
  });

  $(".carousel").swipe({
     swipeRight: function() {$(this).carousel('prev')},
     swipeLeft: function() {$(this).carousel('next')}
   });

   $('body').on('click','.btn-buy',function(e){
     swal({
       title: 'Redirecting you to checkout page!',
       imageUrl: 'img/cart.png',
       imageWidth: 100,
       imageHeight: 100,
       imageAlt: 'Shopping cart',
       timer: 1500,
       onOpen: () => { swal.showLoading(); }
     }).then((result) => {
       if (result.dismiss === 'timer') {
         console.log('I was closed by the timer')
       }
     })
   });

   $('body').on('click','.qrcode',function(e){
     e.preventDefault();
     swal({
       title: 'Scanning QRCODE!',
       imageUrl: 'img/qrcode.png',
       imageWidth: 100,
       imageHeight: 100,
       imageAlt: 'qrcode',
       timer: 1500,
       onOpen: () => { swal.showLoading(); }
     }).then((result) => {
       if (result.dismiss === 'timer') {
         window.location.href = window.location.href.replace("search","product");
       }
     })
   });

   $('body').on('click','.btn-find-store',function(e){
     swal({
       title: 'Searching...',
       imageUrl: 'img/cart.png',
       imageWidth: 100,
       imageHeight: 100,
       imageAlt: 'Shopping cart',
       text: 'finding stores within selected parameters',
       timer: 1500,
       onOpen: () => { swal.showLoading(); }
     }).then((result) => {
       if (result.dismiss === 'timer') {
         window.location.href = window.location.href.replace("product","storeList");
       }
     })
   });



});
