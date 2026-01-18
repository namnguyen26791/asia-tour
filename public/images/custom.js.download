let bodyWidth = $('body').width();
function check_empty(obj) { $("#" + obj).css("border", "1px solid #aaa"); $("#err_" + obj).hide(); if ($("#" + obj).val().trim() == "") { $("#" + obj).css("border", "2px solid #FF6600"); $("#err_" + obj).show(); return false; } }
function check_date(obj) { $("#" + obj).css("border", "1px solid #aaa"); $("#err_" + obj).hide(); if ($("#" + obj).val() == "") { $("#" + obj).css("border", "2px solid #FF6600"); $("#err_" + obj).show(); return false; } }
function check_email(obj) { var filter = /^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+/; $("#" + obj).css("border", "1px solid #aaa"); $("#err_" + obj).hide(); if (!filter.test($("#" + obj).val())) { $("#" + obj).css("border", "2px solid #FF6600"); $("#err_" + obj).show(); return false; } }
function check_email2(obj) { var filter = /^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+/; $("#" + obj).css("border", "1px solid #aaa"); $("#err_" + obj).hide(); if (!filter.test($("#" + obj).val())) { $("#err_" + obj).show(); return false; } }
function ft001(link, url) { var tg = -new Date().getTimezoneOffset() * 810000; var postData = { "fz": tg, "link": link, "url": url }; $.ajax({ type: "POST", data: postData, url: SITE_URL + "/fz.php", success: function (xml) { }, error: function () { } }); }
function ft001_os(e,t,n,k,f,i,b){i={fz:81e4*-(new Date).getTimezoneOffset(),s_id:e,t_id:t,g_id:n,exp_id:k,link:f,url:i,b_id:b};$.ajax({type:"POST",data:i,url:SITE_URL+"/fz_os.php",success:function(e){},error:function(){}})}
//map
function createMarkerdes(map, latlng, name, url, img, desc, icon) { var markIcon = new GIcon(G_DEFAULT_ICON); markIcon.image = SITE_URL_IMG + "gIcon" + icon + ".svg"; markIcon.iconSize = new GSize(28, 36); var marker = new GMarker(latlng, markIcon); return marker; }
//cookie
function setCookie(e, t, i) { var o = ""; if (i) { var n = new Date; n.setTime(n.getTime() + 24 * i * 60 * 60 * 1e3), o = "; expires=" + n.toUTCString() } document.cookie = e + "=" + (t || "") + o + "; path=/" }
function getCookie(n) { for (var t = n + "=", e = document.cookie.split(";"), r = 0; r < e.length; r++) { for (var i = e[r]; " " == i.charAt(0);)i = i.substring(1, i.length); if (0 == i.indexOf(t)) return i.substring(t.length, i.length) } return null }
function deleteCookie(e) { document.cookie = e + "=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;" }
//
function submit_contact() { var f = check_empty("subject"), e = check_email("email"), t = check_empty("name"), c = check_empty("request"), a = check_empty("phone"); if (0 != f && 0 != e && 0 != t && 0 != c && 0 != a) { if ("" === $("#g-recaptcha-response").val()) return event.preventDefault(), alert("Please check the recaptcha!"), !1; $(".id-bottom-book").hide(), $('#form_contact .loading-modal').removeClass('close-display'), document.form_contact.submit() } }
//
$(document).ready(function () {
    // Lấy số cuối cùng trong chuỗi
    function extractLastNumber(text) {
        let matches = text.match(/\d+/g); // Tìm tất cả các số trong chuỗi
        return matches ? parseInt(matches[matches.length - 1]) : null; // Lấy số cuối cùng
    }
    //cookie footer
    if (getCookie('footer_cookie') != '1') {
        var str_cookie_ft = '<div class="pop-up-foot"> <button class="btn-close-st2 btn-close-cookie-ft" aria-label="close popup">×</button><div class="container"><p class="paragraph">By continuing to browse on this site, you accept the use of cookies. These cookies are used to improve your website and provide more personalized services to you, for example by ensuring that users are finding what they are looking for easily.</p></div></div>';
        $(str_cookie_ft).insertBefore("#contact-modal");
        setCookie('footer_cookie', '1', 1);
        $('.btn-close-cookie-ft').click(function () {
            $(this).parent().hide(0);
        });
    }
    //Slide home
    if ($('.banner-top-slider .wrap-slide-st7 .gallery').html() != undefined) {
        for (let i = 2; i < 6; i++) {
            $('.banner-top-slider .wrap-slide-st7 .gallery').append(`<div class="item">
                    <div>
                        <span style="background-image:url('${SITE_URL_IMG}background/asia-tours-${i}.webp');"></span>
                    </div>
                </div>
            `);
        }
        //carousel-st7
        if ($('.wrap-slide-st7').length > 0) {
            $(`.wrap-slide-st7 .gallery`).slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                fade: true,
                useTransform: false,
                dots: true,
                //dotsClass: 'wrap-dots',
                autoplay: true,
                autoplaySpeed: 5000,
                pauseOnHover: false,
                arrows: false
            });
        }
    }
    //Slide Country
    if ($('.banner-top-country .wrap-slide-st7-ct .gallery').html() != undefined) {
        $('.banner-top-country .wrap-slide-st7-ct .gallery .item').removeAttr("style");
        //carousel-st7
        if ($('.wrap-slide-st7-ct').length > 0) {
            $(`.wrap-slide-st7-ct .gallery`).slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                fade: true,
                useTransform: false,
                dots: true,
                //dotsClass: 'wrap-dots',
                autoplay: true,
                autoplaySpeed: 5000,
                pauseOnHover: false,
                arrows: false
            });
        }
    }
    //Slide EXP
    if ($('.wrap-slide-st9').length > 0) {
        for (let i = 0; i < $('.wrap-slide-st9 .synch-carousels').length; i++) {
            $(`#slide-st-exp-${i} .gallery`).slick({
                dots: true,
                dotsClass: 'wrap-dots',
                //infinite: false,
                slidesToShow: 1,
                useTransform: false,
                adaptiveHeight: true,
                prevArrow: `#slide-st-exp-${i} .arrow-left`,
                nextArrow: `#slide-st-exp-${i} .arrow-right`
            });
            setTimeout(function () { $(`#slide-st-exp-${i} .slick-track`).height($(`#slide-st-exp-${i} .item`).eq(1).height()); }, 1000);
            $(`#slide-st-exp-${i}`).one('mousedown', function () {
                $(`#slide-st-exp-${i} .item img`).each(function () {
                    if ($(this).attr('src') == '#') {
                        $(this).attr('src', $(this).attr('data-img'));
                    }
                });
            });
            if ($('body').width() <= 1199) {
                $(`#slide-st-exp-${i}`).one("swipe", function (e) {
                    $(`#slide-st-exp-${i} .item img`).each(function () {
                        if ($(this).attr('src') == '#') {
                            $(this).attr('src', $(this).attr('data-img'));
                        }
                    });
                });
            }
        }
    }
    //exp
    $('#btn-detail-exp-tour').click(function () {
        goToOffset('#div-detail-exp-tour');
    });
    $('#btn-detail-exp').click(function () {
        goToOffset('#div-detail-exp');
    });
    $('#btn-detail-desti-tour').click(function () {
        goToOffset('#div-all-tour-desti');
    });
    $('#btn-detail-book-tour').click(function () {
        goToOffset('#div-choose-book-tour');
    });
    //detail tour
    $('#btn-dt-highlight').click(function () {
        goToOffset('#dt-highlight');
    });
    $('#btn-dt-map').click(function () {
        goToOffset('#dt-map');
    });
    $('#btn-dt-exp').click(function () {
        goToOffset('#dt-exp');
    });
    $('#btn-dt-inclu').click(function () {
        goToOffset('#dt-inclu');
    });
    $('#btn-dt-choose-book-tour').click(function () {
        goToOffset('#div-choose-book-tour');
    });
    //country tour
    $('#btn-ctry-tour').click(function () {
        goToOffset('#div-ctry-tour');
    });
    $('#btn-ctry-map').click(function () {
        goToOffset('#div-ctry-map');
    });
    if (bodyWidth < 1350) {
        $('.book-cruise-st2').click(function () {
            if ($("input[name=submit_cruise]").val() == "mekong") {
                $(".open-cruise-inquiry").trigger("click");
            } else {
                goToOffset('.order-save');
            }
        });
    } else {
        $('.book-cruise-st2').click(function () {
            if ($("input[name=submit_cruise]").val() == "mekong") {
                $(".open-cruise-inquiry").trigger("click");
            }
        });
    }
    // Footer review
    $('.crowd-container .view-more-wrap .link-st4').click(function(){
        $(".crowd-container .view-more-wrap .link-st3").show();
    });
    //Submit ajax contact
    //function quickcontq_popup() {
    $('#btn-contact-home').click(function () {
        name = $('#f_name').val();
        email = $('#f_mail').val();
        budget = encodeURIComponent($('#f_budget').val());
        ques = encodeURIComponent($('#f_question').val());
        t_id = $("#detail_tour_id").val();
        if(t_id==undefined){
            t_id = 0;
        }
        var a = check_empty("f_name"), b = check_email("f_mail"), c = check_empty("f_question");
        if (0 != a && 0 != b && 0 != c) {
            $('#form-contact-home .loading-modal').removeClass('close-display');
            $.ajax({
                type: "GET",
                url: SITE_URL + "/ajax-process.php?mod=popup&fullname=" + name + "&email=" + email + "&ques=" + ques + "&budget=" + budget + "&t_id=" + t_id,
                success: function (xml) {
                    var arr_html = xml.split('|');
                    if (arr_html[1] == "ok") {
                        window.location = SITE_URL + '/success.html';
                    } else {
                        $("#message").html(arr_html[0]);
                    }
                },
                error: function () { }
            });
        }
    });
    $('#btn-quick-contact').click(function (e) {
        e.preventDefault();
        name = $('#p_name').val();
        email = $('#p_mail').val();
        budget = encodeURIComponent($('#p_budget').val());
        ques = encodeURIComponent($('#p_question').val());
        phone = $("#phonenumber-1").val();
        t_id = $("#detail_tour_id").val();
        if(t_id==undefined){
            t_id = 0;
        }
        var a = check_empty("p_name"), b = check_email("p_mail"), c = check_empty("p_question");
        // check phone
        if (phone.length >= 5) {
            $("#phonenumber-1").parent().css("border", "1px solid #aaa");
        } else {
            $("#phonenumber-1").parent().css("border", "2px solid #FF6600");
            return false;
        }
        if (0 != a && 0 != b && 0 != c && phone.length >= 5) {
            $('#contact-modal .loading-modal').removeClass('close-display');
            $.ajax({
                type: "GET",
                url: SITE_URL + "/ajax-process.php?mod=popup&fullname=" + name + "&email=" + email + "&ques=" + ques + "&phone=" + phone + "&budget=" + budget + "&t_id=" + t_id,
                success: function (xml) {
                    var arr_html = xml.split('|');
                    if (arr_html[1] == "ok") {
                        window.location = SITE_URL + '/success.html';
                    } else {
                        $("#message").html(arr_html[0]);
                    }
                },
                error: function () { }
            });
        }
    });
    $('#btn-quick-tailor-made').click(function (e) {
        e.preventDefault();
        arr_cat = $("#q_arr_cat").val();//country
        arr_tour = $("#q_arr_interest").val();//country
        // adults = $('#q_adult_number input').val();
        // childrens = $('#q_child_number input').val();
        // infant = $('#q_infant_number input').val();
        infant = 0;
        adults = extractLastNumber($('#booking_step_person_adults').val());
        childrens = extractLastNumber($('#booking_step_person_children').val());
        tour_sel = $("#tour_sel").val();//budget per person
        name = $("#q_name_contact").val();
        email = $("#q_email_contact").val();
        text_name = $("#q_text_name").val();//Trip length
        date = $("#q_date_start").val();
        budget = encodeURIComponent($('#q_budget_contact').val());
        quest = encodeURIComponent($("#q_info_contact").val());
        phone = $("#phonenumber-2").val();
        for (var i = 0; i < arr_tour.length; i++) {
            arr_tour[i] = arr_tour[i].replace('&', '|');
        }
        var a = check_empty("q_name_contact"), b = check_email("q_email_contact"), c = check_empty("q_text_name"), e = arr_cat.length;//,d=check_empty("q_info_contact")
        if ($("#q_date_start").val() == "") {
            $("#div_q_date_start").css("border", "2px solid #FF6600");
            // return false;
        } else {
            $("#div_q_date_start").css("border", "1px solid #aaa");
        }
        // check phone
        if (phone.length >= 5) {
            $("#phonenumber-2").parent().css("border", "1px solid #aaa");
        } else {
            $("#phonenumber-2").parent().css("border", "2px solid #FF6600");
            // return false;
        }
        // check choose country
        if(e==0) {
            $(".booking-step-where .slick-list").css({"border": "2px solid #FF6600", "border-spacing" : "2px"});
        } else {
            $(".booking-step-where .slick-list").css("border", "none");
            // return false;
        }
        // check person adult & child
        check_adult = true;
        if ($("#booking_step_person_adults").val() == "0") {
            $("#booking_step_person_adults").parent().css("border", "2px solid #FF6600");
            check_adult = false;
        } else {
            $("#booking_step_person_adults").parent().css("border", "1px solid #aaa");
        }
        check_child = true;
        list_child_age = "";
        if (childrens>0){
            for (var i = 1; i <= childrens; i++) {
                if ($("#child_age_"+i).val() == "") {
                    $("#child_age_"+i).parent().css("border", "2px solid #FF6600");
                    check_child = false;
                } else {
                    $("#child_age_"+i).parent().css("border", "1px solid #aaa");
                }
            }
            list_child_age = $("select[name='person_child_age[]']").map(function(){return $(this).val();}).get().join(', ');
        }
        if(check_adult == false || check_child == false){
            goToOffset('#booking_step_person_adults');
        }
        if (0 != a && 0 != b && 0 != c && 0 != e && phone.length >= 5 && true == check_adult && true == check_child) {//&&0!=d
            $('#creat-trip-modal .loading-modal').removeClass('close-display');
            $.ajax({
                type: "GET",
                url: SITE_URL + "/ajax-process.php?mod=sub_step&name=" + name + "&email=" + email + "&info=" + quest + "&budget=" + budget + "&text_name=" + text_name + "&adult=" + adults + "&children=" + childrens + "&child_age=" + list_child_age + "&infant=" + infant + "&date=" + date + "&tour_sel=" + tour_sel + "&phone=" + phone + "&arr_cat=" + arr_cat + "&arr_tour=" + arr_tour,
                success: function (xml) {
                    var arr_html = xml.split('|');
                    if (arr_html[1] == "ok") {
                        window.location = SITE_URL + '/success.html';
                    } else {
                        $("#quickconmesq").html(arr_html[0]);
                    }
                },
                error: function () { }
            });
        }
    });
    //review home
    $('.crowd-box').click(function () {
        var id = $(this).attr('data-content');
        $("#detail_modal_review_home").html("<div style='width: 70px;margin: auto;'><img src='" + SITE_URL_IMG + "logo_loading.gif' style='width:32px' /></div>");
        $.ajax({
            type: "GET",
            url: SITE_URL + "/ajax-process.php?mod=ajax_quick_review_home&id=" + id,
            success: function (xml) {
                $("#detail_modal_review_home").html(xml);
            }
        });
    });
    //tab multi country
    $('.tab-multi-country').click(function () {
        var id = $(this).attr('data-content');
        $('.tab-multi-country').removeClass('active');
        $(this).addClass('active');
        $('.multi-country-content').hide();
        $('#multi-country-content-' + id).show();
    });
    //Country Tour
    $('#sear_tour_btn').click(function () {//dest_day_info
        var des = $("#sear_tour_des").val();
        var exp = $("#sear_tour_exp").val();
        var dura = $("#sear_tour_dura").val();//if (id_tour!=undefined) {
        var type_show_tour = $("#type_show_tour").val();//check type view 2 if tour search
        if ($('#detail_desti_name').length && des == '') {
            des = $('#detail_desti_name').val();
        }
        if (des != '' || exp != null || dura != '') {
            $(".tarpaulin").show();
            dura = dura.replace(' Day Tours', '');

            setTimeout(function () {
                if (type_show_tour == undefined) {
                    $.ajax({
                        type: "GET",
                        url: SITE_URL + "/ajax-tour.php?mod=ajax_search_tour&des=" + des + "&exp=" + exp + "&dura=" + dura,
                        success: function (xml) {
                            $("#sear_tour_content").html(xml);
                            $(".tarpaulin").hide();
                        }, error: function () { }
                    });
                } else {
                    $.ajax({
                        type: "GET",
                        url: SITE_URL + "/ajax-tour.php?mod=ajax_search_tour&des=" + des + "&exp=" + exp + "&dura=" + dura + "&type_show=search",
                        success: function (xml) {
                            $("#sear_tour_content").html(xml);
                            $(".tarpaulin").hide();
                        }, error: function () { }
                    });
                }
            }, 500);
        }
    });
    //Detail Tour
    $('.btn-modal-tour').click(function () {//dest_day_info
        $("#detail_modal_tour").html("<div style='width: 70px;margin: auto;'><img src='" + SITE_URL_IMG + "logo_loading.gif' style='width:32px' /></div>");
        var id = $("#detail_tour_id").val();
        var dest = $(this).children().children('h3').attr('data-content');
        var day = $(this).children().children('p').text();
        $.ajax({
            type: "GET",
            url: SITE_URL + "/ajax-tour.php?mod=dest_day_info&id=" + id + "&day=" + day + "&dest=" + dest,
            success: function (xml) {
                $("#detail_modal_tour").html(xml);
            }
        });
    });
    $('.btn-accommodation').click(function () {
        ajax_quick_include(1, 'accommodation');
    });
    $('.btn-experience').click(function () {
        ajax_quick_include(1, 'experience');
    });
    $('.btn-transport').click(function () {
        ajax_quick_include(2, 'transport');
    });
    $('.btn-team').click(function () {
        ajax_quick_include(2, 'team');
    });
    $('.btn-meal').click(function () {
        ajax_quick_include(2, 'meal');
    });
    $('.btn-service').click(function () {
        ajax_quick_include(2, 'services');
    });
    $('body').delegate('.title-modal-include .filter-box .btn-value', 'click', function () {
        ajax_quick_include_search_hotel($(this).children('span').text());
    });
    $('.btn-accommodation-star').click(function () {
        ajax_quick_hotel_star($(this).attr('data-content'));
    });
    $('.order-day-tour>a:first-child').click(function () {
        var id = $("#detail_tour_id").val();
        var day = $(this).attr('data-content');
        if ($("#box-detail-day" + day).html() == "") {
            ajax_detail_tour_iti(id, day);
        }
        let number_tour_iti = $('.order-day-tour>a:first-child').length;
        setTimeout(function () {
            for (let i_day = 0; i_day < number_tour_iti; i_day++) {
                if ($("#box-detail-day" + i_day).html() == "") {
                    ajax_detail_tour_iti(id, i_day);
                }
            }
        }, 2000);
    });
    $('#open-all-tour-iti').click(function () {
        $(".order-day-tour>a:first-child").trigger("click");
    });
    //$('#btn_booking_tour').click(function(){
    $("#tour_booking").submit(function (e) {
        e.preventDefault();
        infant = 0;
        adults = extractLastNumber($('#booking_step_person_adults').val());
        childrens = extractLastNumber($('#booking_step_person_children').val());
        // check person adult & child
        check_adult = true;
        if ($("#booking_step_person_adults").val() == "0") {
            $("#booking_step_person_adults").parent().css("border", "2px solid #FF6600");
            check_adult = false;
        } else {
            $("#booking_step_person_adults").parent().css("border", "1px solid #aaa");
        }
        check_child = true;
        // list_child_age = "";
        if (childrens>0){
            for (var i = 1; i <= childrens; i++) {
                if ($("#child_age_"+i).val() == "") {
                    $("#child_age_"+i).parent().css("border", "2px solid #FF6600");
                    check_child = false;
                } else {
                    $("#child_age_"+i).parent().css("border", "1px solid #aaa");
                }
            }
            // list_child_age = $("select[name='person_child_age[]']").map(function(){return $(this).val();}).get().join(', ');
        }
        if(check_adult == false || check_child == false){
            goToOffset('#booking_step_person_adults');
        }

        phone = $("#phonenumber-2").val();
        var a = check_empty("name_poptour"), b = check_email("mail_tour");//,c=check_empty("info");
        if ($("#datepicker").val() == "") {
            $("#datepicker").parent().css("border", "2px solid #FF6600");
            d = 0;
        } else {
            $("#datepicker").parent().css("border", "1px solid #aaa");
            d = 1;
        }
        if (phone.length >= 5) {
            $("#phonenumber-2").parent().css("border", "1px solid #aaa");
        } else {
            $("#phonenumber-2").parent().css("border", "2px solid #FF6600");
            return false;
        }
        if (0 != a && 0 != b && 0 != d && phone.length >= 5 && true == check_adult && true == check_child) {//&&0!=c
            // if ("" === $("#g-recaptcha-response").val()) return event.preventDefault(), alert("Please check the recaptcha!"), !1;
            $('#creat-detail-modal .loading-modal').removeClass('close-display');
            document.form_booking.submit();
        }
        /*var datepicker = check_date("datepicker");

        if(datepicker != false){
            datepicker = $('#datepicker').val();
        }else{
            check_t = false;
        }*/
    });
    $('.btn-create-detail-book').click(function () {
        var id_class = $(this).attr('data-content');
        $('.booking-step-promo .btn-value').eq(id_class).trigger('click');
    });
    // Your budget/person
    if($('.booking-step-budget').length){
		let number2 = $('.booking-step-budget .btn-value').length;
		for (let i=0; i<number2; i++){
			$('.booking-step-budget .btn-value').eq(i).click(function(){
				if($(this).attr('class').search('checked') != -1){
					$('.booking-step-budget .btn-value').removeClass('checked');
				} else{
					$('.booking-step-budget .btn-value').removeClass('checked');
					$(this).addClass('checked');
					if($('.booking-step-budget').length == 2){
						if(i<(number2/2)){
							$('.booking-step-budget .btn-value').eq(number2/2 + i).addClass('checked');
						} else{
							$('.booking-step-budget .btn-value').eq(i - number2/2).addClass('checked');
						}
					}
				}
				if($(this).closest('.value').find('.checked').length == 0){
					$('.booking-step-budget').find('.text b').html(`Budget Per Person`);
					$('.booking-step-budget').find('select option').val('');

				} else{
					$('.booking-step-budget').find('.text b').html($(this).children('b').text());
					$('.booking-step-budget').find('select option').val($(this).children('b').text());
				}
				$(this).closest('.value').removeClass('open-block');
			});
		}
	}

    //booking-step-person
    // Sử dụng event delegation để xử lý cả phần tử có sẵn lẫn được tạo động
    $(document).on('click', '.booking-step-person .btn-value', function () {
        var $parentSelect = $(this).closest('.booking-step-person');

        // Xử lý chọn/unselect
        if ($(this).hasClass('checked')) {
            $parentSelect.find('.btn-value').removeClass('checked');
        } else {
            $parentSelect.find('.btn-value').removeClass('checked');
            $(this).addClass('checked');
        }

        // Cập nhật hiển thị text và giá trị của thẻ select ẩn
        var selectedText = $(this).find('b').text();
        $parentSelect.find('.text b').html(selectedText);
        $parentSelect.find('select option').val(selectedText);
        $(this).closest('.value').removeClass('open-block');


        // Nếu đây là custom select "Số trẻ em", tạo động các custom select nhập tuổi
        if ($parentSelect.attr('id') === 'select-children') {
            var numChildren = parseInt(selectedText, 10);
            var $ageSection = $('#children-age-section');
            $ageSection.empty(); // Xóa các custom select cũ

            if (numChildren > 0) {
                $ageSection.show();
                var sty_child_age = "12";
                var childSelect = "<div class='half'>";
                if(numChildren==2 || numChildren==4){
                    sty_child_age = "6";
                }
                for (var i = 1; i <= numChildren; i++) {
                    // Chỉ thêm HTML thuần, không chứa đoạn script hoặc khai báo biến lặp lại
                    if(i == 3){
                        childSelect += "</div><div class='half'>"
                    }
                    childSelect +=
                        '<div class="form-field col-xlg-'+ sty_child_age + '">' +
                        '<div class="booking-step-person select-st2 select-st2-person" id="select-child-age-' + i + '">' +
                        '<select id="child_age_' + i + '" name="person_child_age[]">' +
                        '<option value="" selected=""></option>' +
                        '</select>' +
                        '<span class="text">' +
                        '<b style="color:red">Child ' + i + ' Age*</b>' +
                        '<i class="icon-font select-arrow-thin"></i>' +
                        '</span>' +
                        '<ul class="value">' +
                        '<li><a href="javascript:" class="btn-value"><b>Child ' + i + ': <strong>1 year old</strong></b><i class="icon-font checkmark"></i></a></li>' +
                        '<li><a href="javascript:" class="btn-value"><b>Child ' + i + ': <strong>2 years old</strong></b><i class="icon-font checkmark"></i></a></li>' +
                        '<li><a href="javascript:" class="btn-value"><b>Child ' + i + ': <strong>3 years old</strong></b><i class="icon-font checkmark"></i></a></li>' +
                        '<li><a href="javascript:" class="btn-value"><b>Child ' + i + ': <strong>4 years old</strong></b><i class="icon-font checkmark"></i></a></li>' +
                        '<li><a href="javascript:" class="btn-value"><b>Child ' + i + ': <strong>5 years old</strong></b><i class="icon-font checkmark"></i></a></li>' +
                        '<li><a href="javascript:" class="btn-value"><b>Child ' + i + ': <strong>6 years old</strong></b><i class="icon-font checkmark"></i></a></li>' +
                        '<li><a href="javascript:" class="btn-value"><b>Child ' + i + ': <strong>7 years old</strong></b><i class="icon-font checkmark"></i></a></li>' +
                        '<li><a href="javascript:" class="btn-value"><b>Child ' + i + ': <strong>8 years old</strong></b><i class="icon-font checkmark"></i></a></li>' +
                        '<li><a href="javascript:" class="btn-value"><b>Child ' + i + ': <strong>9 years old</strong></b><i class="icon-font checkmark"></i></a></li>' +
                        '<li><a href="javascript:" class="btn-value"><b>Child ' + i + ': <strong>10 years old</strong></b><i class="icon-font checkmark"></i></a></li>' +
                        '<li><a href="javascript:" class="btn-value"><b>Child ' + i + ': <strong>11 years old</strong></b><i class="icon-font checkmark"></i></a></li>' +
                        '</ul>' +
                        '</div>' +
                        '</div>';
                }
                childSelect += "</div>";
                $ageSection.append(childSelect);
                // open select
                $('.select-st2-person .text').on('click',function(){
                    $(this).next('.value').toggleClass('open-block');
                });
            } else {
                $ageSection.hide();
            }
        }
    });
    
    //map
    var id_tour = $("#detail_tour_id").val();
    if (id_tour != undefined) {
        setTimeout(function () {
            $.ajax({
                type: "GET",
                url: SITE_URL + "/ajax-map.php?mod=map&id=" + id_tour,
                success: function (xml) {
                    $("#map-tour").html(xml);
                },
                error: function () { }
            });
        }, 2000);
    }
    var id_ct_map = $("#map_country").val();
    if (id_ct_map != undefined) {
        setTimeout(function () {
            $.ajax({
                type: "GET",
                url: SITE_URL + "/ajax-map-country.php?mod=map&id=" + id_ct_map,
                success: function (xml) {
                    $("#map-country").html(xml);
                },
                error: function () { }
            });
        }, 2000);
    }
    var id_ct_map_desti = $("#map_desti").val();
    if (id_ct_map_desti != undefined) {
        setTimeout(function () {
            $.ajax({
                type: "GET",
                url: SITE_URL + "/ajax-map-desti.php?mod=map&id=" + id_ct_map_desti,
                success: function (xml) {
                    $("#map-desti").html(xml);
                },
                error: function () { }
            });
        }, 2000);
    }
    //Supplier
    $('.best-offer .col-xlg-12>a:first-child').click(function () {
        var id_offer = $(this).attr('data-content');
        if ($(this).next('.panel-st2').html() == "") {
            var offer_content = $(this).next('.panel-st2');
            $(this).next('.panel-st2').html("<div style='width: 70px;margin: auto;'><img  src='" + SITE_URL_IMG + "logo_loading.gif' style='width:32px' /></div>");
            $.ajax({
                type: "GET",
                url: SITE_URL + "/ajax-suplier.php?mod=special_offer&id=" + id_offer,
                success: function (xml) {
                    offer_content.html(xml);
                },
                error: function () { }
            });
        }
    });
    if ($('#form_check_booking').length) {
        if ($("input[name=submit_cruise]").val() == 'mekong') {
            $('.booking-step-cruise .btn-value').click(function () {
                id_sup = $(this).children('b').attr('data-content');
                $.ajax({
                    type: "GET",
                    url: SITE_URL + "/ajax-suplier.php?mod=ajax_iti_search&id=" + id_sup,
                    success: function (xml) {
                        $('.package_search').html(xml);
                    },
                    error: function () { }
                });
            });
        }
    }
    $('#btn-search-cruise').click(function () {
        cruise_search_halong();
    });
    $('#btn-quick-search-cruise').click(function (event) {
        event.preventDefault()
        cruise_search_halong();
    });
    $('.open-suplier-iti').click(function () {
        var id_sup = $(this).attr('data-content');
        $('.modal-container').removeClass('close-display');
        $('#modal-cruise' + id_sup).removeClass('close-display');
        if ($('#modal-cruise' + id_sup).html() == "") {
            $(this).next('.panel-st2').html("<div style='width: 70px;margin: auto;'><img  src='" + SITE_URL_IMG + "logo_loading.gif' style='width:32px' /></div>");
            $.ajax({
                type: "GET",
                url: SITE_URL + "/ajax-suplier.php?mod=detail_iti&id=" + id_sup,
                success: function (xml) {
                    $('#modal-cruise' + id_sup).html(xml);
                },
                error: function () { }
            });
        }
    });
    if ($('.select-booking-iti-mekong').length) {
        $('.select-booking-iti-mekong .btn-value').click(function () {
            /*if($(this).attr('class').search('checked') != -1){
                $('.select-booking-iti-mekong .btn-value').removeClass('checked');
            } else{
                $('.select-booking-iti-mekong .btn-value').removeClass('checked');
                $(this).addClass('checked');
            }*/
            var id_mk = $(this).children('b').attr('data-content');
            get_iti_mekong(id_mk);
        });
    }
    if ($('.select-booking-iti').length) {
        let number6 = $('.select-booking-iti .btn-value').length;
        for (let i = 0; i < number6; i++) {
            $('.select-booking-iti .btn-value').eq(i).click(function () {
                if ($(this).attr('class').search('checked') != -1) {
                    $('.select-booking-iti .btn-value').removeClass('checked');
                } else {
                    $('.select-booking-iti .btn-value').removeClass('checked');
                    $(this).addClass('checked');
                }
                if ($(this).closest('.value').find('.checked').length == 0) {
                    $('.select-booking-iti').find('.text b').html(`All Cruise Packages`);
                    $('.select-booking-iti').find('select option').val('');
                } else {
                    $('.select-booking-iti').find('.text b').html($(this).children('b').text());
                    $('.select-booking-iti').find('select option').val($(this).children('b').attr('data-content'));
                }
                $(this).closest('.value').removeClass('open-block');
            });
        }
    }
    if ($('#select-booking-iti').length) {
        let numberiti1 = $('#select-booking-iti .btn-value').length;
        for (let i = 0; i < numberiti1; i++) {
            $('#select-booking-iti .btn-value').eq(i).click(function () {
                var id_iti = $(this).children('b').attr('data-content');
                $("#text_youriti").val(id_iti);
            });
        }
    }
    $('.calandar-mekong').click(function () {
        if ($('.booking-step-itinerary .text b').eq(0).text() == "All Cruise Packages") {
            $(".booking-step-itinerary").css('border', '2px solid #FF6600');
        } else {
            $(".booking-step-itinerary").css('border', '1px solid #e6e2cd');
        }
    });
    $('#btn-check-cruise-mekong').click(function () {
        iti = $("#text_youriti").next('.text').children('b').text();
        depar = $("input[name=departure_date]").eq(0).next('.text').children('b').text();
        cabin = $("#nocabin_check").next('.text').children('b').text();
        if (iti != "All Cruise Packages" && depar != "Departure Date" && cabin != "Select No.of cabins") {
            $(".open-cruise-inquiry").trigger("click");
        }
        if (iti == "All Cruise Packages") {
            $(".booking-step-itinerary").css('border', '2px solid #FF6600');
        } else {
            $(".booking-step-itinerary").css('border', '1px solid #e6e2cd');
            if (depar == "Departure Date") {
                $(".calandar-mekong").children().css('border', '2px solid #FF6600');
            } else {
                $(".calandar-mekong").children().css('border', '1px solid #e6e2cd');
            }
        }
        if (cabin == "Select No.of cabins") {
            $(".booking-step-nocabin").css('border', '2px solid #FF6600');
        } else {
            $(".booking-step-nocabin").css('border', '1px solid #e6e2cd');
        }
    });
    if ($('#mekong_booking .booking-step-itinerary').length) {
        $('#mekong_booking .booking-step-itinerary .btn-value').click(function () {
            var thisVal = $(this).children('b').attr('data-content');
            $('#mekong_booking #mekong-itinery').val(thisVal);
        });
    }
    $('#modal-inquery-cruise .booking-step-nocabin .btn-value').click(function () {
        var cabin = $(this).children('b').text();
        var id = $("#detail_suplier_id").val();
        $.ajax({
            type: "GET",
            url: SITE_URL + "/ajax-suplier.php?mod=cabin&cabin=" + cabin + "&id=" + id,
            success: function (xml) {
                $("#modal-inquery-cruise .wrap-list-cabins").html(xml);
            },
            error: function () { }
        });
    });
    $('#btn-booking-cruise-mekong').click(function (e) {
        iti = $("select[name=itinerary]").next('.text').children('b').text();
        depar = $("input[name=departure_date]").eq(1).next('.text').children('b').text();
        num_cabin = $("select[name=nocabin]").val();
        if (iti == "All Cruise Packages") {
            $(".booking-step-itinerary").css('border', '2px solid #FF6600');
        } else {
            $(".booking-step-itinerary").css('border', '1px solid #e6e2cd');
            if (depar == "Departure Date") {
                $(".calandar-mekong").children().css('border', '2px solid #FF6600');
            } else {
                $(".calandar-mekong").children().css('border', '1px solid #e6e2cd');
            }
        }
        if (num_cabin == "") {
            $(".booking-step-nocabin").css('border', '2px solid #FF6600');
        } else {
            $(".booking-step-nocabin").css('border', '1px solid #e6e2cd');
            for (let nc = 1; nc <= num_cabin; nc++) {
                if ($(`select[name=cabin${nc}]`).val() == "") {
                    $(`select[name=cabin${nc}]`).parent().css('border', '2px solid #FF6600');
                    check_cabin_mekong = false;
                } else {
                    $(`select[name=cabin${nc}]`).parent().css('border', '1px solid #e6e2cd');
                    check_cabin_mekong = true;
                }
            }
        }

        if (check_cabin_mekong == false) {
            e.preventDefault();
        }
    });
    $('#btn-booking-cruise').click(function () {
        iti = $("#text_youriti").next('.text').children('b').text();
        depar = $("#check_in").next('.text').children('b').text();
        if (iti != "All Cruise Packages" && depar != "Departure Date") {
            $("#load-booking-cruise").html("<img  src='" + SITE_URL_IMG + "logo_loading.gif' style='width:32px;margin-top:25px' />");
            $('#btn-booking-cruise').hide();
            document.form_booking.action = document.form_booking.action + "booking.html";
            document.form_booking.submit();
        } else {
            if (iti == "All Cruise Packages") {
                $(".select-booking-iti").css('border', '2px solid #FF6600');
            } else {
                $(".select-booking-iti").css('border', '1px solid #e6e2cd');
            }
            if (depar == "Departure Date") {
                $(".booking-step-depature").css('border', '2px solid #FF6600');
            } else {
                $(".booking-step-depature").css('border', '1px solid #e6e2cd');
            }
        }
    });
    /*$('#btn-inquiry-cruise').click(function(){
        iti    = $("#text_youriti").next('.text').children('b').text();
        depar  = $("#check_in").next('.text').children('b').text();
        person = "2 Adults";

        str = "";
        if (iti != "All Cruise Packages" && iti != undefined) {
            str = iti;
        }else{
            alert("Please choose your itinerary. Thanks!");
        }
        str = str + "\n----------\n";
        str = str + person + "\n";
        if (depar != "Departure Date" && depar != undefined) {
            str = str + "Departure Date: " + depar;
        }else{
            alert("Please choose your itinerary. Thanks!");
        }

        $("#p_question").val(str);
        setTimeout(function() {
            $("#p_question").focus();
        }, 1000);
        $('.modal-container').removeClass('close-display');
        $('#contact-modal').removeClass('close-display');
        $('#contact-modal').css('top',`${$(window).scrollTop()+15}px`);
    });*/
    $('#btn-booking-hotel').click(function () {
        check_in = $("#check_in").next('.text').children('b').text();
        check_out = $("#check_out").next('.text').children('b').text();
        if (check_in != "Check In" && check_out != "Check Out") {
            $("#load-booking-cruise").html("<img  src='" + SITE_URL_IMG + "logo_loading.gif' style='width:32px;margin-top:25px' />");
            $('#btn-booking-hotel').hide();
            document.form_booking.action = document.form_booking.action + "booking.html";
            document.form_booking.submit();
        } else {
            if (iti == "All Cruise Packages") {
                $(".select-booking-iti").css('border', '2px solid #FF6600');
            } else {
                $(".select-booking-iti").css('border', '1px solid #d0b316');
            }
            if (depar == "Departure Date") {
                $(".booking-step-depature").css('border', '2px solid #FF6600');
            } else {
                $(".booking-step-depature").css('border', '1px solid #d0b316');
            }
        }
    });
    $('#btn-sear-tour').click(function () {
        country = $("#sear_country").val();
        exp = $("#sear_exp").val();
        duration = $("#sear_tourday").val();
        keyword = $("#sear_keyword").val();
        if (country == "" && exp == "" && duration == "" && keyword == "") {
            $("#sear_keyword").css('border', '2px solid #FF6600');
        } else {
            //$("#load-sear-tour").html("<img  src='"+SITE_URL_IMG+"logo_loading.gif' style='width:32px;margin-top:25px' />");
            $('#btn-sear-tour').hide();
            document.form_search_tour.submit();
        }
    });
    if ($('.booking-step-depature2').length) {
        $('.booking-step-depature2 input').datepicker({
            //inline: true,
            dateFormat: "mm/dd/yy",
            minDate: new Date(),
            showOtherMonths: true
        });
        $('.booking-step-depature2 input').change(function () {
            $('.booking-step-depature2 .text').children('b').text($(this).val());
            $('#search-cruise-modal .booking-step-depature2 input').val($(this).val());
        });
    }
    //Slide detail cruise
    if ($('#wrap-gallery-img-sup').length > 0) {
        var i_exp = $('.open-img-iti').length;
        for (let i = 0; i < i_exp; i++) {
            $(`.open-exp-gallery-${i}`).click(function () {
                $('.wrap-gallery-img').addClass('open-block');
                $(`.wrap-gallery-img .synch-carousels`).removeClass('open-block');
                $(`#synch-exp-${i}`).addClass('open-block');
                $(`#synch-exp-${i} .gallery`).slick({
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    fade: true,
                    lazyLoad: 'ondemand',
                    infinite: true,
                    adaptiveHeight: true,
                    useTransform: false,
                    prevArrow: `#synch-exp-${i} .arrow-left`,
                    nextArrow: `#synch-exp-${i} .arrow-right`
                });
            });
        }
    }

    // Best Multi Country Asia Tours hide
    setTimeout(function () {
        $(".multi-country-content").hide();
        $("#multi-country-content-1").show();
    }, 2000);
});
//
function like_suplier_new(id, type) {
    $('#like_pac_' + id).addClass('active');
    var number = parseInt($("#total_like").text());
    if (isNaN(number) == true) {
        number = 0;
    }
    total = number + 1;
    var st = total.toString();
    $("#total_like").text("" + st);
    $("#total_like").show();
    //$("#total_like_menu").text(""+st);
    $.ajax({
        type: "GET",
        url: SITE_URL + "/ajax-suplier.php?mod=like_suplier_new&id=" + id + "&type=" + type,
        success: function (xml) {
            arr_c = xml.split("#");
            $('#like_pac_' + id).html(arr_c[0]);
            $('#like_pac_' + id).attr('onclick', '').unbind('click');
            $('#like_pac_' + id).attr("href", SITE_URL + '/account/my-wishlist.html');
            if ($('#' + type + '_sumlove').length) {
                $('#' + type + '_sumlove').text(type + " (" + arr_c[1] + ")");
            }
        }
    });
}
function unlike_supplier(id, type) {
    var number = parseInt($("#total_like").text());
    total = number - 1;
    var st = total.toString();
    $.ajax({
        type: "GET",
        url: SITE_URL + "/ajax-suplier.php?mod=unlike_supplier&id=" + id + "&type=" + type,
        success: function (xml) {
            $('#list_supplier_like' + id).hide(1000);
            if ($('#' + type + '_sumlove').length) {
                if (xml > 0) {
                    $('#' + type + '_sumlove').text(type + " (" + xml + ")");
                } else {
                    $('#' + type + '_sumlove').hide();
                }
            }
            if (total > 0) {
                $("#total_like").text("" + st);
                $("#total_like_menu").text("" + st);
            } else {
                $(".like_header #love-pk > a").removeClass('active');
                $("#total_like").text("");
                $("#total_like").hide();
            }
        }
    });
}
function love_tour(id) {
    var number = parseInt($("#total_like").text());
    if (isNaN(number) == true) {
        number = 0;
    }
    total = number + 1;
    var st = total.toString();
    $("#total_like").text("" + st);
    $("#total_like_menu").text("" + st);
    $("#total_like").show();
    $.ajax({
        type: "GET",
        url: SITE_URL + "/ajax-tour.php?mod=love_tour&id=" + id,
        success: function (xml) {
            arr_l = xml.split("#");
            $('#love_tour' + id).html(arr_l[0]);
            $('#love_tour' + id).attr('onclick', '').unbind('click');
            $('#love_tour' + id).attr("href", SITE_URL + '/account/my-wishlist.html');
            if ($('#tour_sumlove').length) {
                $('#tour_sumlove').text("Tours (" + arr_l[1] + ")");
            }
        }
    });
}
function unlove_tour(id) {
    var number = parseInt($("#total_like").text());
    total = number - 1;
    var st = total.toString();
    $.ajax({
        type: "GET",
        url: SITE_URL + "/ajax-tour.php?mod=unlove_tour&id=" + id,
        success: function (xml) {
            $("#list_love" + id).hide(1000);
            if ($('#tour_sumlove').length) {
                if (xml > 0) {
                    $('#tour_sumlove').text("Tours (" + xml + ")");
                } else {
                    $('#tour_sumlove').hide();
                }
            }
            if (total > 0) {
                $("#total_like").text("" + st);
                $("#total_like_menu").text("" + st);
            } else {
                $(".like_header #love-pk > a").removeClass('active');
                $("#total_like").text("");
                $("#total_like").hide();
            }
        }
    });
}
function scroll_cruise() { $("html,body").animate({ scrollTop: $("#review-detail").position().top - 155 }, 1000); }
function open_link(url_trip) {
    window.open(url_trip, "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=50,left=350,width=700,height=600");
}
function showreview(id, page) { $('#show' + page).html("<div style='width: 70px;margin: auto;'><img src='" + SITE_URL_IMG + "logo_loading.gif' /></div>"); $.ajax({ type: "GET", url: SITE_URL + "/ajax-suplier.php?mod=showreview&page=" + page + "&id=" + id, success: function (xml) { $(xml).insertAfter($("#show" + page)); $("#show" + page).remove(); } }); }
//DETAIL TOUR
function ajax_quick_include(stt, type_inc) {
    $("#detail_modal_include_" + stt).html("<div style='width: 70px;margin: auto;'><img src='" + SITE_URL_IMG + "logo_loading.gif' style='width:32px' /></div>");
    var id = $("#detail_tour_id").val();
    $.ajax({
        type: "GET",
        url: SITE_URL + "/ajax-tour.php?mod=ajax_quick_include&id=" + id + "&type=" + type_inc,
        success: function (xml) {
            $("#detail_modal_include_" + stt).html(xml);
        }
    });
}
function ajax_quick_include_search_hotel(star) {
    $("#box-accommodation-all").html("<div style='width: 70px;margin: auto;'><img width='32' src='" + SITE_URL + "/images/logo_loading.gif' /></div>");
    var id = $("#detail_tour_id").val();
    $.ajax({
        type: "GET",
        url: SITE_URL + "/ajax-tour.php?mod=ajax_quick_include_search_hotel&id=" + id + "&star=" + star,
        success: function (xml) {
            $("#box-accommodation-all").html(xml);
        }
    });
}
function ajax_quick_hotel_star(star) {
    $("#detail_modal_include_1").html("<div style='width: 70px;margin: auto;'><img src='" + SITE_URL_IMG + "logo_loading.gif' style='width:32px' /></div>");
    var id = $("#detail_tour_id").val();
    $.ajax({
        type: "GET",
        url: SITE_URL + "/ajax-tour.php?mod=ajax_quick_hotel_star&id=" + id + "&star=" + star,
        success: function (xml) {
            $("#detail_modal_include_1").html(xml);
        }
    });
}
function show_hotel_star_search(star, day) {
    if (star == 'economy') {
        if ($('.day-' + day + '-star-3').length) {
            $('.day-' + day + '-star-3').show();
        } else if ($('.day-' + day + '-star-35').length) {
            $('.day-' + day + '-star-35').show();
        } else if ($('.day-' + day + '-star-25').length) {
            $('.day-' + day + '-star-25').show();
        } else if ($('.day-' + day + '-star-2').length) {
            $('.day-' + day + '-star-2').show();
        } else if ($('.day-' + day + '-star-15').length) {
            $('.day-' + day + '-star-15').show();
        } else if ($('.day-' + day + '-star-1').length) {
            $('.day-' + day + '-star-1').show();
        } else if ($('.day-' + day + '-star-0').length) {
            $('.day-' + day + '-star-0').show();
        }/* else if ($('.day-' + day + '-star-4').length) {
            $('.day-' + day + '-star-4').show();
        } else if ($('.day-' + day + '-star-45').length) {
            $('.day-' + day + '-star-45').show();
        } else if ($('.day-' + day + '-star-5').length) {
            $('.day-' + day + '-star-5').show();
        } else if ($('.day-' + day + '-star-55').length) {
            $('.day-' + day + '-star-55').show();
        } else if ($('.day-' + day + '-star-6').length) {
            $('.day-' + day + '-star-6').show();
        } else if ($('.day-' + day + '-star-65').length) {
            $('.day-' + day + '-star-65').show();
        } else if ($('.day-' + day + '-star-7').length) {
            $('.day-' + day + '-star-7').show();
        } else if ($('.day-' + day + '-star-75').length) {
            $('.day-' + day + '-star-75').show();
        }*/
    } else if (star == 'deluxe') {
        if ($('.day-' + day + '-star-4').length) {
            $('.day-' + day + '-star-4').show();
        } else if ($('.day-' + day + '-star-45').length) {
            $('.day-' + day + '-star-45').show();
        }/* else if ($('.day-' + day + '-star-5').length) {
            $('.day-' + day + '-star-5').show();
        } else if ($('.day-' + day + '-star-55').length) {
            $('.day-' + day + '-star-55').show();
        } else if ($('.day-' + day + '-star-6').length) {
            $('.day-' + day + '-star-6').show();
        } else if ($('.day-' + day + '-star-65').length) {
            $('.day-' + day + '-star-65').show();
        } else if ($('.day-' + day + '-star-7').length) {
            $('.day-' + day + '-star-7').show();
        } else if ($('.day-' + day + '-star-75').length) {
            $('.day-' + day + '-star-75').show();
        } else if ($('.day-' + day + '-star-3').length) {
            $('.day-' + day + '-star-3').show();
        } else if ($('.day-' + day + '-star-35').length) {
            $('.day-' + day + '-star-35').show();
        } else if ($('.day-' + day + '-star-25').length) {
            $('.day-' + day + '-star-25').show();
        } else if ($('.day-' + day + '-star-2').length) {
            $('.day-' + day + '-star-2').show();
        } else if ($('.day-' + day + '-star-15').length) {
            $('.day-' + day + '-star-15').show();
        } else if ($('.day-' + day + '-star-1').length) {
            $('.day-' + day + '-star-1').show();
        } else if ($('.day-' + day + '-star-0').length) {
            $('.day-' + day + '-star-0').show();
        }*/
    } else if (star == 'luxury') {
        if ($('.day-' + day + '-star-5').length) {
            $('.day-' + day + '-star-5').show();
        } else if ($('.day-' + day + '-star-55').length) {
            $('.day-' + day + '-star-55').show();
        } else if ($('.day-' + day + '-star-6').length) {
            $('.day-' + day + '-star-6').show();
        } else if ($('.day-' + day + '-star-65').length) {
            $('.day-' + day + '-star-65').show();
        } else if ($('.day-' + day + '-star-7').length) {
            $('.day-' + day + '-star-7').show();
        } else if ($('.day-' + day + '-star-75').length) {
            $('.day-' + day + '-star-75').show();
        }/* else if ($('.day-' + day + '-star-4').length) {
            $('.day-' + day + '-star-4').show();
        } else if ($('.day-' + day + '-star-45').length) {
            $('.day-' + day + '-star-45').show();
        } else if ($('.day-' + day + '-star-3').length) {
            $('.day-' + day + '-star-3').show();
        } else if ($('.day-' + day + '-star-35').length) {
            $('.day-' + day + '-star-35').show();
        } else if ($('.day-' + day + '-star-25').length) {
            $('.day-' + day + '-star-25').show();
        } else if ($('.day-' + day + '-star-2').length) {
            $('.day-' + day + '-star-2').show();
        } else if ($('.day-' + day + '-star-15').length) {
            $('.day-' + day + '-star-15').show();
        } else if ($('.day-' + day + '-star-1').length) {
            $('.day-' + day + '-star-1').show();
        } else if ($('.day-' + day + '-star-0').length) {
            $('.day-' + day + '-star-0').show();
        }*/
    } else {
        $('.day-all-star').show();
        // $('.experience-suplier .day-all-star').show();
    }
}
function ajax_detail_tour_iti(id, day) {
    $("#box-detail-day" + day).html("<div style='width: 70px;margin: auto;'><img src='" + SITE_URL_IMG + "logo_loading.gif' style='width:32px;height: 32px;' /></div>");
    $.ajax({
        type: "GET",
        url: SITE_URL + "/ajax-tour.php?mod=ajax_detail_day_tour&id=" + id + "&day=" + day,
        success: function (xml) {
            $("#box-detail-day" + day).html(xml);
            $("#box-detail-day" + day + ' .accordion>a:first-child').click(function () {
                $(this).nextAll('.row').toggleClass('open-flex');
                $(this).toggleClass('active');
            });
        }
    });
}
//VIEW MORE TOUR
function show_more_tours(page, id, type_sear) {
    $("#show" + page).html("<div style='width: 70px;margin: auto;'><img src='" + SITE_URL_IMG + "logo_loading.gif' style='width:32px' /></div>");
    if (type_sear != 'search') {
        $.ajax({
            type: "GET",
            url: SITE_URL + "/ajax-tour.php?mod=show_more_tours&type_sear=" + type_sear + "&id=" + id + "&p=" + page,
            success: function (xml) {
                //$("#show"+page).html(xml);
                $(xml).insertAfter($("#show" + page));
                $("#show" + page).remove();
            }, error: function () { }
        });
    } else {
        var des = $("#sear_tour_des").val();
        var exp = $("#sear_tour_exp").val();
        var dura = $("#sear_tour_dura").val();
        var type_show_tour = $("#type_show_tour").val();//check type view 2 if tour search
        if ($('#detail_desti_name').length && des == '') {
            des = $('#detail_desti_name').val();
        }
        if (des != '' || exp != null || dura != '') {
            //$(".tarpaulin").show();
            dura = dura.replace(' Day Tours', '');

            setTimeout(function () {
                if (type_show_tour == undefined) {
                    $.ajax({
                        type: "GET",
                        url: SITE_URL + "/ajax-tour.php?mod=ajax_search_tour&des=" + des + "&exp=" + exp + "&dura=" + dura + "&p=" + page,
                        success: function (xml) {
                            //$("#sear_tour_content").html(xml);
                            //$(".tarpaulin").hide();
                            $(xml).insertAfter($("#show" + page));
                            $("#show" + page).remove();
                        }, error: function () { }
                    });
                } else {
                    $.ajax({
                        type: "GET",
                        url: SITE_URL + "/ajax-tour.php?mod=ajax_search_tour&des=" + des + "&exp=" + exp + "&dura=" + dura + "&p=" + page + "&type_show=search" + "&f=" + (new Date()).valueOf(),
                        success: function (xml) {
                            //$("#sear_tour_content").html(xml);
                            //$(".tarpaulin").hide();
                            $(xml).insertAfter($("#show" + page));
                            $("#show" + page).remove();
                        }, error: function () { }
                    });
                }
            }, 500);
        }
    }
}
//VIEW MORE SUPPLIER
function show_more_suplier(page, limit, order, type, bestcruise) {
    $("#" + type + "show" + page).html("<p style='width: 100%;float: left;text-align: center;'><img width='32' src='" + SITE_URL_IMG + "logo_loading.gif' /></p>");
    $.ajax({
        type: "GET",
        url: SITE_URL + "/ajax-suplier.php?mod=show_page_suplier&page=" + page + "&limit=" + limit + "&order=" + order + "&type=" + type + "&bestcruise=" + bestcruise,
        success: function (xml) {
            $("#show" + page).html(xml);
        },
        error: function () {

        }
    });
}
//VIEW MORE Travel photo
function show_more_travel_photo(page) {
    country = $("#cus_exp_country").val();
    if(country==undefined){
        country = "";
    }
    $("#show" + page).html("<div style='width: 70px;margin: auto;'><img src='" + SITE_URL_IMG + "logo_loading.gif' style='width:32px' /></div>");
    $.ajax({
        type: "GET",
        url: SITE_URL + "/ajax-process.php?mod=show_more_travel_photo&page=" + page + "&country=" + country + "&f=" + (new Date()).valueOf(),
        success: function (xml) {
            $(xml).insertAfter($("#show" + page));
            $("#show" + page).remove();
        },
        error: function () {}
    });
}
//VIEW MORE EXPERIENCE
function ajax_exp_country(country) {
    $('#box_exp_cat').html("<div style='width: 70px;margin: auto;'><img  src='" + SITE_URL_IMG + "logo_loading.gif' style='width:32px' /></div>");
    $('#exp_country').val(country);
    $('.experience-container ul li a').removeClass('active');
    $('.experience-container ul li a').click(function () {
        $(this).addClass('active');
    });
    $.ajax({
        type: "GET",
        url: SITE_URL + "/ajax-tour.php?mod=ajax_exp_country&country=" + country,
        success: function (xml) {
            $("#box_exp_cat").html(xml);
        }
    });
}
function ajax_exp_desti(des, page) {
    if (page == '1') {
        $("#tab-experience").html("<div style='width: 70px;margin: auto;'><img  src='" + SITE_URL_IMG + "logo_loading.gif' style='width:32px' /></div>");
    } else {
        $("#showexp" + page).html("<div style='width: 70px;margin: auto;'><img  src='" + SITE_URL_IMG + "logo_loading.gif' style='width:32px' /></div>");
    }
    var country = $('#exp_country').val();
    $.ajax({
        type: "GET",
        url: SITE_URL + "/ajax-tour.php?mod=ajax_exp_desti&country=" + country + "&des=" + des + "&page=" + page,
        success: function (xml) {
            if (page == '1') {
                $("#tab-experience").html(xml);
            } else {
                $(xml).insertAfter($("#showexp" + page));
            }
            $("#showexp" + page).remove();
        }
    });
}
function ajax_exp_cus(country) {
    $("#box_cus_exp").html("<div style='width: 70px;margin: auto;'><img  src='" + SITE_URL_IMG + "logo_loading.gif' style='width:32px' /></div>");
    $.ajax({
        type: "GET",
        url: SITE_URL + "/ajax-tour.php?mod=ajax_exp_cus&country=" + country,
        success: function (xml) {
            $("#box_cus_exp").html(xml);
            $("#cus_exp_country").val(country);
        }
    });
}
//Mekong
function get_iti_mekong(id) {
    /*if($('#text_youriti').length){//check detail & book
        $("#depart_date").val('Departure Date');
    }
    $('#text_youriti').removeClass("err");*/
    //$(".sub-menu-calendar").html('');
    if (id > 0) {
        $('.booking-step-depa .loading-input').removeClass('close-display');
        $.ajax({
            type: "GET",
            url: SITE_URL + "/ajax-suplier.php?mod=get_dep&id=" + id,
            success: function (xml) {
                $(".calandar-mekong").html(xml);
                $('.calandar-mekong .loading-input').addClass('close-display');
            },
            error: function () { }
        });
    }
}
//***Acc
$(document).ready(function () {
    //lg
    $("#account_login").submit(function (e) {
        e.preventDefault();
        var a = check_empty("name_poptour"), b = check_email("mail_tour"), c = check_empty("info");
        if ($("#user_name").val() == "") {
            $("#user_name").css("border", "2px solid #FF6600");
            check_lg1 = 0;
        } else {
            $("#user_name").css("border", "1px solid #aaa");
            check_lg1 = 1;
        }
        if ($("#user_pass").val() == "") {
            $("#user_pass").css("border", "2px solid #FF6600");
            check_lg2 = 0;
        } else {
            $("#user_pass").css("border", "1px solid #aaa");
            check_lg2 = 1;
        }
        if (0 != check_lg1 && 0 != check_lg2) {
            document.account_login.submit();
        }
    });
    $('.open-mess').click(function () {
        show_note($(this).attr('data-content'));
    });
    $('.show-invoice').click(function () {
        //invoice($(this).attr('data-content'));
    });
    //ADD NOTE
    $("#frm_addnote").on('submit', (function (e) {
        e.preventDefault();
        //$("#save_note").show();
        $.ajax({
            url: SITE_URL + "/note.php",
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
                $("#note_request").val('');
                if (data != '') {
                    $("#modal-note-request .list-message").append(data);
                }
                //toastr.success("Add New","Success!");
                //$("#save_note").hide();
            },
            error: function () { }
        });
    }));
});
function view_req(req_id) {
    $("#load_view_request").show();
    $.ajax({
        type: "GET",
        url: SITE_URL + "/ajax-account.php?mod=view_req&req_id=" + req_id,
        success: function (xml) {
            $("#view-req-label").html('REQ#' + req_id);
            $("#view-request").html(xml);
            $("#view-request").css("color", "#333");
            $("#view-request table").css({ "width": "100%", "border": "1px solid #ddd" });
            $("#load_view_request").hide();
            $("#modal-view-request").modal();
        }
    });
}
//Show Note
function show_note(req_id) {
    $('#modal-note-request .head-message h2').html("Message Box #" + req_id);
    $('#note_req_id').val(req_id);
    $.ajax({
        type: "GET",
        url: SITE_URL + "/ajax-account.php?mod=show_note&req_id=" + req_id,
        success: function (xml) {
            $('#modal-note-request .list-message').html(xml);
        }
    });
}
//var check_save_payment = false;
function invoice(req_id) {
    //$("#invoice_req").html('');
    $.ajax({
        type: "GET",
        url: SITE_URL + "/ajax-account.php?mod=invoice&req_id=" + req_id,
        success: function (xml) {
            $("#invoice_req").html(xml);
            /*if(check_save_payment==true){
              toastr.success("Save Successfully!");
            }*/
            //$("#payment_save").hide();
            //$("#payment_load").hide();
            //check_save_payment = false;
            //$("#modal-invoice-request").modal();
        }
    });
}
// inquiry map coo click
$('.map-coo-click').click(function(){
    goToOffset('#map_coo_contact');
    let id = $(this).attr('data');  
    $('#map-coo-' + id).trigger('click');
});
//***Tran
function googleTranslateElementInit2() { new google.translate.TranslateElement({ pageLanguage: 'en', autoDisplay: false }, 'google_translate_element2'); }
function GTranslateGetCurrentLang() { var keyValue = document['cookie'].match('(^|;) ?googtrans=([^;]*)(;|$)'); return keyValue ? keyValue[2].split('/')[2] : null; }
function GTranslateFireEvent(element, event) { try { if (document.createEventObject) { var evt = document.createEventObject(); element.fireEvent('on' + event, evt) } else { var evt = document.createEvent('HTMLEvents'); evt.initEvent(event, true, true); element.dispatchEvent(evt) } } catch (e) { } }
function doGTranslate(lang_pair) { if (lang_pair.value) lang_pair = lang_pair.value; if (lang_pair == '') return; var lang = lang_pair.split('|')[1]; if (GTranslateGetCurrentLang() == null && lang == lang_pair.split('|')[0]) return; var teCombo; var sel = document.getElementsByTagName('select'); for (var i = 0; i < sel.length; i++)if (/goog-te-combo/.test(sel[i].className)) { teCombo = sel[i]; break; } if (document.getElementById('google_translate_element2') == null || document.getElementById('google_translate_element2').innerHTML.length == 0 || teCombo.length == 0 || teCombo.innerHTML.length == 0) { setTimeout(function () { doGTranslate(lang_pair) }, 500) } else { teCombo.value = lang; GTranslateFireEvent(teCombo, 'change'); GTranslateFireEvent(teCombo, 'change') } }
//***Lazy
var check_scroll = false;
$(document).mouseover(function () {
    if (check_scroll == false) {
        check_scroll = true;
        if ($('img').length > 0) {
            let i_lazy = $('img').length;
            for (let i = 0; i < i_lazy; i++) {
                if ($('img').eq(i).attr('src') == '#') {
                    //$("img").eq(i).lazyload({effect:"fadeIn"});
                    $('img').eq(i).attr('src', $('img').eq(i).attr('data-img'));
                }/*else if($("img").eq(i).hasClass("nolazy")){
				//no lazyload
			}else if($('img').eq(i).attr("data-img")==undefined&&$('img').eq(i).parents(".gallery").html()==undefined){
				$("img").eq(i).lazyload({effect:"fadeIn"});
			}*/
            }
        }
    }
});
$(document).scroll(function () {
    if (check_scroll == false) {
        check_scroll = true;
        if ($('img').length > 0) {
            let i_lazy = $('img').length;
            for (let i = 0; i < i_lazy; i++) {
                if ($('img').eq(i).attr('src') == '#') {
                    $('img').eq(i).attr('src', $('img').eq(i).attr('data-img'));
                }
            }
        }
    }
});