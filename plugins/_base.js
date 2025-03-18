const setRWDWidth = parseInt(window.getComputedStyle(document.documentElement).getPropertyValue('--RWDWidth'));

$(function () {
  sliderDown('.language');
  faq('.qBox', '.aBox');
});

// 開啟畫面動態效果
new WOW({
  boxClass: 'wow', // default
  animateClass: 'animated', // default
  offset: 50, // default
  mobile: true, // default
  live: true, // default
}).init();
// 開啟畫面動態效果

// 滾動畫面時
function scrollCheck() {
  let scrollTop = window.scrollY;
  let body = document.querySelector('body');

  if (scrollTop > 0) {
    body.classList.add('headFix');
  } else {
    body.classList.remove('headFix');
  }
}
document.addEventListener('DOMContentLoaded', scrollCheck);
window.addEventListener('scroll', scrollCheck);
window.addEventListener('resize', scrollCheck);

// cookie
(function () {
  function parseCookie() {
    var cookieObj = {};
    var cookieAry = document.cookie.split(';');
    var cookie;

    for (var i = 0, l = cookieAry.length; i < l; ++i) {
      cookie = jQuery.trim(cookieAry[i]);
      cookie = cookie.split('=');
      cookieObj[cookie[0]] = cookie[1];
    }

    return cookieObj;
  }

  function getCookieByName(name) {
    var value = parseCookie()[name];
    if (value) {
      value = decodeURIComponent(value);
    }

    return value;
  }
  getCookieByName('privacy') === undefined ? (document.cookie = 'privacy=false; max-age=2592000; path=/') : null;

  if (getCookieByName('privacy') === 'false') {
    $('.closePrivacy').on('click', function () {
      $('.privacyBox').slideUp(400, function () {
        document.cookie = 'privacy=true; max-age=2592000; path=/';
        $(this).remove();
      });
    });
  } else {
    $('.privacyBox').remove();
  }
})();
// cookie

//  GOTOP
(function () {
  let goTopBtn = document.querySelector('.goTop');

  window.addEventListener('scroll', function () {
    let windowScrollTop = document.documentElement.scrollTop;
    if (windowScrollTop >= 200) {
      goTopBtn.style.cssText = 'opacity:1';
    } else {
      goTopBtn.style.cssText = 'opacity:0';
    }
  });
  goTopBtn.addEventListener('click', function () {
    window.scrollTo({
      top: 0,
      behavior: 'smooth',
    });
  });
})();

// head搜尋
(function () {
  $('.menuSearch > button').on('click', function () {
    $('.searchOuter').toggleClass('active');
  });
  $('.searchClose').on('click', function () {
    $('.searchOuter').removeClass('active');
  });
})();

// sliderDown
function sliderDown(elem) {
  $(elem)
    .children('button')
    .on('click', function () {
      $(elem).children('ul').slideToggle('fast');
    });
  $(window).on('load resize', function () {
    $(elem).find('ul').removeAttr('style');
    $(elem).removeClass('active');
  });
}

// mobileMenu按鈕

// menu
(function () {
  $('.menuBox .nextMenuBox').parent().addClass('nextLv');
  $('.menuBox .nextLv')
    .off()
    .mouseenter(function () {
      if (window.innerWidth > setRWDWidth) {
        // $(this).children('.nextMenuBox').stop().slideDown(300);
        $(this).children('.nextMenuBox').addClass('active');
        $(this).addClass('active');
      }
    })
    .mouseleave(function () {
      if (window.innerWidth > setRWDWidth) {
        // $(this).children('.nextMenuBox').stop().slideUp(300);
        $(this).children('.nextMenuBox').removeClass('active');
        $(this).removeClass('active');
      }
    });

  // menu手機版
  $('.mobileBtn').on('click', function () {
    $('body').toggleClass('mobileOpen');
    $('.menuBox').toggleClass('active');
  });
  $('.nextLv > button, .nextLv > a').on('click', function (e) {
    if (window.innerWidth <= setRWDWidth) {
      e.preventDefault();
      $(this).siblings('.nextMenuBox').slideToggle(300);
      $(this).parent().toggleClass('active');
      $(this).parent().siblings().find('.nextMenuBox').slideUp(300);
    }
  });

  $(window).on('resize', function () {
    $('.nextMenuBox').removeAttr('style');
    $('.hasSide .sideBox .content').removeAttr('style');
    $('.nextLv').removeClass('active');
  });
})();

// sideBox
(function () {
  $('.hasSide .sideBox button').on('click', function () {
    $(this).parent('.sideBox').toggleClass('active');
    $(this).parent('.sideBox').find('.content').slideToggle(300);
  });
})();

// faq

function faq(q, a) {
  $(q).on('click', function () {
    $(this).siblings(a).slideToggle('fast');
    $(this).parent().toggleClass('active');
    $(this).parent().siblings().removeClass('active');
    $(this).parent().siblings().find(a).slideUp('fast');
  });
}

function sliderUse(elem) {
  let parentBoxWidth;
  let sliderMovePx;
  let request;
  let cloneElem = document.querySelector(elem).innerHTML;

  document.querySelector(elem).insertAdjacentHTML('afterbegin', cloneElem);
  document.querySelector(elem).insertAdjacentHTML('afterbegin', cloneElem);

  function requestAnimation() {
    parentBoxWidth = document.querySelector(`${elem} .listBox`).offsetRWDWidth;

    sliderMovePx = 0;

    cancelAnimationFrame(request);
    if (window.innerWidth < parentBoxWidth * 3) {
      requestAnimationFrame(animation);
    }
  }

  window.addEventListener('load', requestAnimation);
  window.addEventListener('resize', requestAnimation);

  function animation() {
    sliderMovePx++;

    if (sliderMovePx < parentBoxWidth) {
      document.querySelectorAll(`${elem} .listBox`).forEach((value, index) => (value.style.transform = `translateX(-${sliderMovePx * 0.5}px)`));
      request = requestAnimationFrame(animation);
    } else {
      sliderMovePx = 0;
      request = requestAnimationFrame(animation);
    }
  }
}

function animateNumber(element, start, stop, duration, dot) {
  let startTime = null;
  const isCountdown = start > stop;
  let dotCheck = dot !== undefined ? dot : true;

  function numberWithCommas(number) {
    return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');
  }

  function animationStep(timestamp) {
    if (!startTime) {
      startTime = timestamp;
    }
    const elapsedTime = timestamp - startTime;
    const progress = elapsedTime / duration;
    let currentValue;
    if (isCountdown) {
      currentValue = Math.floor(start - (start - stop) * progress);
    } else {
      currentValue = Math.floor(start + (stop - start) * progress);
    }
    element.textContent = dotCheck ? numberWithCommas(currentValue) : currentValue;
    if (progress < 1) {
      requestAnimationFrame(animationStep);
    } else {
      element.textContent = dotCheck ? numberWithCommas(stop) : stop;
    }
  }
  requestAnimationFrame(animationStep);
}

$(window).on('scroll', function () {
  let windowWidth = $(window).outerWidth();
  let windowHeight = $(window).outerHeight();
  let windowScrollTop = document.documentElement.scrollTop;
  if (windowWidth > 767) {
    //   let bg_use = $('.bgUse');
    //   let bg_use_h = ((windowScrollTop - 100) / $('.mainBox').height()) * 100;
    //   if (windowScrollTop > 0) {
    //     gsap.to(bg_use, 1, {
    //       'background-position': '0 ' + bg_use_h + '%',
    //     });
    //   } else {
    //     gsap.to(bg_use, 1, {
    //       'background-position': '0 ' + '0' + '%',
    //     });
    //   }

    $('.acBoxDown').each(function () {
      let box_t = $(this).offset().top;
      // let ac_move = $(this).find('.acMove');
      let ac_move = $(this);
      if (windowScrollTop + windowHeight / 3 > box_t && windowWidth > 800) {
        gsap.to(ac_move, 1, {
          y: (windowScrollTop + windowHeight / 3 - box_t) / 10,
        });
      }
    });

    $('.acBoxUp').each(function () {
      let box_t = $(this).offset().top;
      // let ac_move = $(this).find('.acMove');
      let ac_move = $(this);
      if (windowScrollTop + windowHeight / 3 > box_t && windowWidth > 800) {
        gsap.to(ac_move, 1, {
          y: -(windowScrollTop + windowHeight / 3 - box_t) / 10,
        });
      }
    });

    $('.acBoxLeft').each(function () {
      let box_t = $(this).offset().top;
      // let ac_move = $(this).find('.acMove');
      let ac_move = $(this);
      if (windowScrollTop + windowHeight / 3 > box_t && windowWidth > 800) {
        gsap.to(ac_move, 1, {
          x: -(windowScrollTop + windowHeight / 3 - box_t) / 10,
        });
      }
    });
  } else {
    $('.acBoxUp').attr('style', '');
    $('.acBoxDown').attr('style', '');
  }
});

$(window).on('resize', function () {
  $('.acBoxDown').removeAttr('style');
  $('.acBoxUp').removeAttr('style');
});
$(window).on('load', function () {
  $('.acBoxDown').removeAttr('style');
  $('.acBoxUp').removeAttr('style');
});

$(window).on('load resize', function () {
  $('.acBoxDown').removeAttr('style');
  $('.acBoxUp').removeAttr('style');
});
$(window).on('scroll', function () {
  let windowWidth = $(window).outerWidth();
  let windowHeight = $(window).outerHeight();
  let windowScrollTop = document.documentElement.scrollTop;
  if (windowWidth > 767) {
    $('.acBoxDown').each(function () {
      let box_t = $(this).offset().top;
      // let ac_move = $(this).find('.acMove');
      let ac_move = $(this);
      if (windowScrollTop + windowHeight / 3 > box_t && windowWidth > 800) {
        gsap.to(ac_move, 1, {
          y: (windowScrollTop + windowHeight / 3 - box_t) / 10,
        });
      }
    });

    $('.acBoxUp').each(function () {
      let box_t = $(this).offset().top;
      // let ac_move = $(this).find('.acMove');
      let ac_move = $(this);
      if (windowScrollTop + windowHeight / 3 > box_t && windowWidth > 800) {
        gsap.to(ac_move, 1, {
          y: -(windowScrollTop + windowHeight / 3 - box_t) / 10,
        });
      }
    });

    $('.acBoxLeft').each(function () {
      let box_t = $(this).offset().top;
      // let ac_move = $(this).find('.acMove');
      let ac_move = $(this);
      if (windowScrollTop + windowHeight / 3 > box_t && windowWidth > 800) {
        gsap.to(ac_move, 1, {
          x: -(windowScrollTop + windowHeight / 3 - box_t) / 10,
        });
      }
    });
  } else {
    $('.acBoxUp').attr('style', '');
    $('.acBoxDown').attr('style', '');
  }
});
