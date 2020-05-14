$(function() {

    $('#menu-show').click(function(){
      var $menu = $('.header-menu-list');
      if($menu.hasClass('open')){
        $menu.removeClass('open');
        $menu.slideUp();
  
      }else{
        $menu.addClass('open');
          $menu.slideDown();
        }
  });
  
    $('#menu-close').click(function(){
      var $menu = $('.header-menu-list');
      if($menu.hasClass('open')){
        $menu.removeClass('open');
        $menu.slideUp();
      }
  
    });
  
  
  
  // アコーディオン
    $('.index-btn').click(function() {
      $('.active').removeClass('active');
      // clickedIndex = クリックされたindex-btnのインデックス番号
      var clickedIndex = $('.index-btn').index($(this));
      // slideにactiveを与える。
      $('.slide').eq(clickedIndex).addClass('active');
  
      // 1. 変数slideIndexに「.active」要素のインデックス番号を代入
      var slideIndex = $('.slide').index($('.active'));
  
      // 3. change-btn要素を表示してください
      $('.change-btn').show();
      // 2. ifとelse ifを用いて、「.change-btn」の表示/非表示
      if(slideIndex === 0){
        $('.prev-btn').hide();
      }else if(slideIndex === 2){
        $('.next-btn').hide();
      }
    });
  
  
  
  // ページ内スクロール
    $('a[href^="#"]').click(function(){
      var speed = 500;
      var href = $(this).attr("href");
      var target = $(href == "#" || href == "" ? 'html' : href);
      var position = target.offset().top;
      $("html, body").animate({scrollTop:position}, speed, "swing");
      return false;
    });
  
  
  
    $('.change-btn').click(function() {
      var $displaySlide = $('.active');
      $displaySlide.removeClass('active');
      if ($(this).hasClass('next-btn')) {
        $displaySlide.next().addClass('active');
      } else {
        $displaySlide.prev().addClass('active');
      }
  
      // 「.index-btn」のクリックイベントと同様の処理を記述してください
      var slideIndex = $('.slide').index($('.active'));
      $('.change-btn').show();
      if(slideIndex == 0){
        $('.prev-btn').hide();
      }else if (slideIndex==2){
        $('.next-btn').hide();
      }
    });
  
  
  
    $('.originals-list-item').click(function() {
        var $answer = $(this).find('.answer');
        if($answer.hasClass('open')) {
          $answer.removeClass('open');
          // slideUpメソッドを用いて、$answerを隠してください
          $answer.slideUp();
  
          // 子要素のspanタグの中身をtextメソッドを用いて書き換えてください
          $(this).find('span').text('+');
  
        } else {
          $answer.addClass('open');
          // slideDownメソッドを用いて、$answerを表示してください
          $answer.slideDown();
  
          // 子要素のspanタグの中身をtextメソッドを用いて書き換えてください
          $(this).find('span').text('-');
  
        }
      });

      $('#top-btn').click(function(){
        $('html,body').animate({ 
          'scrollTop': 0 
        }, 'slow');
      });


  });
  