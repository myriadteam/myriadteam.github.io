$(function() {
  // load localizations
  const language = url('?lang') || 'en';
  var browserLanguage = (navigator) ? navigator.language : undefined;

  if (browserLanguage && !url('?lang')) {
    browserLanguage = browserLanguage.replace('-', '_');

    if (browserLanguage.indexOf('en') === -1) {
      window.location = '/?lang=' + browserLanguage;
    }
  }

  if ($.inArray(language, Localizations.languages)) {
    $.each(Localizations, function(localizationCode, value) {
      $('[localization="' + localizationCode + '"]').text(value[language]);
    });
  }

  // scroll functionality
  $('.view-section').click(function(e) {
    e.preventDefault();

    const section = $(this).attr('section');
    const headerHeight = $('#header').outerHeight();

    $('html, body').animate({
      scrollTop: $('#' + section).offset().top - headerHeight + 1
    });
  });


  $(window).scroll(function() {
    const scrollTop = $(document).scrollTop();
    const heroHeight = $('#hero').height();
    const headerHeight = $('#header').outerHeight();
    const $header = $('#header');

    if (scrollTop >= heroHeight - headerHeight && !$header.hasClass('pinned')) {
      $header.addClass('pinned').css('top', -1 * headerHeight + 'px');
      $header.animate({
        top: 0
      }, 250);
    }

    if (scrollTop < heroHeight - headerHeight && $header.hasClass('pinned') && $header.css('top') == '0px') {
      $header.animate({
        top: -1 * headerHeight + 'px'
      }, 250, function() {
        $(this).removeClass('pinned').css('top', 0);
      });
    }

    if (scrollTop < headerHeight + 50 && $header.is(':animated')) {
      $header.finish();
    }
  });
});
