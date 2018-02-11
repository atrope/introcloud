$(document).ready(function() {
    $('body').on('click', '.backer', function(e) {
        window.history.back();
    });
    $(".search").keyup(function(e) {
        if (e.which === 13) {
            this.form.submit();
        }
    });



    $(".carousel").swipe({
        swipeRight: function() {
            $(this).carousel('prev')
        },
        swipeLeft: function() {
            $(this).carousel('next')
        }
    });
    $('.settings form').on('submit', function(e) {
        e.preventDefault();
        swal({
            title: 'Updating settings..',
            onOpen: () => {
                swal.showLoading();
            }
        });
        var formObj = $(this);
        var formURL = formObj.attr("action");
        var serial = formObj.serialize();
        $.getJSON(formURL, serial, function(data) {
                swal.hideLoading();
                if (data.status == 200) {
                    $(".userdropname,.username").text(data.username);
                    $(".usermail").text(data.email);
                    swal.close();
                    swal('Great!', 'Settings were updated!', 'success');
                } else swal(':(', 'Something unexpected happened!', 'error');

            })
            .fail(function() {
                swal.hideLoading();
                swal(':(', 'Something unexpected happened!', 'error');
            })

    });

    $('.famous').on('click', ' .item', function(e) {
        curItem = $(this).find(".fa-calendar");
        swal({
            title: 'A Confirmation mail was sent!',
            type: 'success',
            timer: 1500,
            onOpen: () => {
                swal.showLoading();
            }
        }).then((result) => {
            if (result.dismiss === 'timer') {
                curItem.toggleClass("active");
            }
        })
    });

    $('body').on('click', '.btn-buy', function(e) {
        swal({
            title: 'Redirecting you to checkout page!',
            imageUrl: 'img/cart.png',
            imageWidth: 100,
            imageHeight: 100,
            imageAlt: 'Shopping cart',
            timer: 1500,
            onOpen: () => {
                swal.showLoading();
            }
        }).then((result) => {
            if (result.dismiss === 'timer') {
                window.location.href = window.location.href.replace("store", "index");
            }
        })
    });

    $('body').on('click', '.qrcode', function(e) {
        e.preventDefault();
        swal({
            title: 'Scanning QRCODE!',
            imageUrl: 'img/qrcode.png',
            imageWidth: 100,
            imageHeight: 100,
            imageAlt: 'qrcode',
            timer: 1500,
            onOpen: () => {
                swal.showLoading();
            }
        }).then((result) => {
            if (result.dismiss === 'timer') {
                window.location.href = window.location.href.replace("search", "product") + "?id=" + (Math.floor(Math.random() * 6) + 1);
            }
        })
    });

    $('body').on('click', '.btn-find-store', function(e) {
        swal({
            title: 'Searching...',
            imageUrl: 'img/store.jpg',
            imageWidth: 100,
            imageHeight: 100,
            imageAlt: 'Shopping cart',
            text: 'finding stores within selected parameters',
            timer: 1500,
            onOpen: () => {
                swal.showLoading();
            }
        }).then((result) => {
            if (result.dismiss === 'timer') {
                window.location.href = window.location.href.replace("product", "storeList");
            }
        })
    });

    $('body').on('click', '.rating', function(e) {
        if ($(e.target).hasClass("fa")) {
            /* Send to backend user rate  and inform him  real time that it was updated*/

            swal({
                title: 'Rating received',
                type: 'success',
                timer: 1500
            });
            let num = $(e.target).data("rate"),
                i = 0;
            $(this).children('i').each(function() { /* Real time Update */
                if (i < num) $(this).addClass("fa-star").removeClass("fa-star-o");
                else $(this).addClass("fa-star-o").removeClass("fa-star");
                i++;
            });

        }
    });
    $('body').on('click','.recommendations .bookmark,.product .bookmark',function(e){
      e.preventDefault();
      $(this).find(".fa").toggleClass("fa-bookmark-o").toggleClass("fa-bookmark");
    });
    $('body').on('click', '.map', function(e) {
        swal({
            html: '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3381.1410855591716!2d34.77445461516411!3d32.065432581192695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151d4b7df683586b%3A0xc95a69f356f7f3b2!2sSderot+Rothschild%2C+Tel+Aviv-Yafo!5e0!3m2!1spt-BR!2sil!4v1515023771237" width="1" height="200" frameborder="0" style="border:0;width:100%;" allowfullscreen></iframe>'
        })
    });



});
