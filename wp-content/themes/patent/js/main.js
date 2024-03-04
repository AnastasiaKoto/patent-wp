document.addEventListener("DOMContentLoaded", function(event) {
  jQuery(function($) {

    var overlay = $('.overlay');
    var modal = $('.modal-result');

    var closeButton = $('.close__btn');

    function closeModal() {
      overlay.removeClass('active');
      modal.removeClass('active');
    }
    closeButton.on('click', closeModal);
    $("input[name='order_tel']").mask("+7(999) 999-99-99");
    // При клике на таб
    $('.keyses__tabs ul.tabs__caption').on('click', 'li:not(.active)', function() {
      // Находим слайдер в текущей вкладке и переинициализируем его
      $(this).closest('.keys__tabs').find('.keyses__slider').slick('unslick').slick({
        infinite: false,
        dots: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
      });

      // Далее ваш код для переключения табов
      $(this)
          .addClass('active').siblings().removeClass('active')
          .closest('div.keyses__tabs').find('div.tabs__content').removeClass('active').eq($(this).index()).addClass('active');
    });

// Инициализация слайдера при загрузке страницы
    var $slider1 = $('.keyses__slider');
    $slider1.slick({
      infinite: false,
      dots: false,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
    });
    updateCounter();

      // Обновление счетчика
      function updateCounter() {
          var currentSlideNumber = $slider1.slick('slickCurrentSlide') + 1;
          $('.currentCoach').text(currentSlideNumber);
          $('.allCoach').text($slider1.slick('getSlick').slideCount);
      }

      // Обновление счетчика при инициализации и переключении таба
      $slider1.on('init reInit afterChange', function(event, slick, currentSlide, nextSlide){
          updateCounter();
      });

      $('.tabs__caption li').on('click', function () {
          // Проверяем активный таб и обновляем счетчик, если это нужный таб
          if ($(this).hasClass('active')) {
              updateCounter();
          }
      });

      // Обработчик клика на кнопку "Вперед"
      $('.slick-next-new').click(function(){
          $slider1.slick('slickNext');
      });

      // Обработчик клика на кнопку "Назад"
      $('.slick-prev-new').click(function(){
          $slider1.slick('slickPrev');
      });



          // Создаем медиа-запрос для экранов с шириной меньше 1024px
      const mobileMediaQuery = window.matchMedia('(max-width: 1024px)');
      let sliderInitialized = false;
      let $slider;

      // Функция для инициализации слайдера
      function initSlider() {
          $slider = $('.benefit__list').slick({
              infinite: false,
              dots: true,
              slidesToShow: 1,
              slidesToScroll: 1,
              arrows: false
          });
          sliderInitialized = true;
      }

      // Функция для уничтожения слайдера
      function destroySlider() {
          if (sliderInitialized) {
              $slider.slick('unslick');
              sliderInitialized = false;
          }
      }

      // Проверяем условие медиа-запроса при загрузке страницы и вызываем инициализацию слайдера при необходимости
      if (mobileMediaQuery.matches) {
          initSlider();
      }

      // Следим за изменениями размера экрана и вызываем инициализацию или уничтожение слайдера при необходимости
      window.addEventListener('resize', function() {
          if (mobileMediaQuery.matches) {
              if (!sliderInitialized) {
                  initSlider();
              }
          } else {
              destroySlider();
          }
      });




    //отправка формы
    let footerSubmitted = false;
    $('#order').on('click', '.btn__submit', function (e) {
      e.preventDefault();
      let form = $(this).closest('form');
      form.find('.global_err').removeClass('active');
      if(footerSubmitted == false) {
        let policy = form.find('input[name="agree"]');

        form.find('.error').removeClass('error');
        form.find('.form__error').remove();

        if (policy.is(':checked')) {
          footerSubmitted = true;
          $.ajax({
            url: '/wp-admin/admin-ajax.php',
            data: form.serialize() + '&action=main_callback',
            type: 'POST',
          }).done(function (result) {
            footerSubmitted = false;
            if (result.errors) {
              $.each(result.errors, function (e, index) {
                form.find('input[name="' + e + '"]').addClass('error');
                form
                  .find('input[name="' + e + '"]')
                  .parent()
                  .append('<div class="form__error">' + index[0] + '</div>');
              });
            } else {
              if (result.success == true) {
                form[0].reset();
                if($('.order-form')) {
                  let submitBlock = '<div class="footer__submit-block"><div>спасибо, ваша&nbsp;заявка&nbsp;отправлена</div><p>Мы с Вами свяжемся в ближайшее время</p></div>';
                  $('.order-form .form__content').remove();
                  $('.order-form .container').append(submitBlock);
                }
                if($('.page-template-contacts')) {
                  console.log('contacts');
                  $('.overlay').addClass('active');
                  $('.modal-result').addClass('active');
                  body.classList.add('stop-scroll');
                }
              }
            }
          });
        } else {
          console.log('политика не заполнена');
          policy.parent().addClass('error');
          policy.parent.append('<div class="form__error">Это обязательное поле</div>')
        }
      } else {
        form.find('.global_err').addClass('active');
      }
    });

    //отправка формы банер
    let bannerSubmitted = false;
    $('#banner').on('click', '.btn__submit', function (e) {
      e.preventDefault();
      let form = $(this).closest('form');
      form.find('.global_err').removeClass('active');
      if(bannerSubmitted == false) {
        let policy = form.find('input[name="agree"]');

        form.find('.error').removeClass('error');
        form.find('.form__error').remove();

        if (policy.is(':checked')) {
          bannerSubmitted = true;
          $.ajax({
            url: '/wp-admin/admin-ajax.php',
            data: form.serialize() + '&action=main_callback',
            type: 'POST',
          }).done(function (result) {
            bannerSubmitted = false;
            if (result.errors) {
              $.each(result.errors, function (e, index) {
                form.find('input[name="' + e + '"]').addClass('error');
                form
                    .find('input[name="' + e + '"]')
                    .parent()
                    .append('<div class="form__error">' + index[0] + '</div>');
              });
            } else {
              if (result.success == true) {
                form[0].reset();
                let submitBlock = '<div class="footer__submit-block"><div>спасибо, ваша&nbsp;заявка&nbsp;отправлена</div><p>Мы с Вами свяжемся в ближайшее время</p></div>';
                form.remove();
                $('.patent-form h2').remove();
                $('.patent-form .container').append(submitBlock);
              }
            }
          });
        } else {
          $('.patent-form__custom-checkbox').addClass('error');
        }
      } else {
        form.find('.global_err').addClass('active');
      }
    });

    //Получить скидку
    let SubmittedSale = false;
    $('#order-sale').on('click', '.btn__submit', function (e) {
      e.preventDefault();
      let form = $(this).closest('form');
      form.find('.global_err').removeClass('active');
      if(SubmittedSale == false) {
        let policy = form.find('input[name="agree"]');

        form.find('.error').removeClass('error');
        form.find('.form__error').remove();

        if (policy.is(':checked')) {
          SubmittedSale = true;
          $.ajax({
            url: '/wp-admin/admin-ajax.php',
            data: form.serialize() + '&action=main_callback',
            type: 'POST',
          }).done(function (result) {
            SubmittedSale = false;
            if (result.errors) {
              $.each(result.errors, function (e, index) {
                form.find('input[name="' + e + '"]').addClass('error');
                form
                    .find('input[name="' + e + '"]')
                    .parent()
                    .append('<div class="form__error">' + index[0] + '</div>');
              });
            } else {
              if (result.success == true) {
                Fancybox.close();
                form[0].reset();
                if($('.order-form')) {
                  let submitBlock = '<div class="footer__submit-block"><div>спасибо, ваша&nbsp;заявка&nbsp;отправлена</div><p>Мы с Вами свяжемся в ближайшее время</p></div>';
                  $('.order-form .form__content').remove();
                  $('.order-form .container').append(submitBlock);
                }
                if($('.page-template-contacts')) {
                  console.log('contacts');
                  $('.overlay').addClass('active');
                  $('.modal-result').addClass('active');
                  body.classList.add('stop-scroll');
                }
              }
            }
          });
        } else {
          console.log('политика не заполнена');
          policy.parent().addClass('error');
          policy.parent.append('<div class="form__error">Это обязательное поле</div>')
        }
      } else {
        form.find('.global_err').addClass('active');
      }
    });


    //Заказать услугу
    let SubmittedOrder = false;
    $('#order-services').on('click', '.btn__submit', function (e) {
      e.preventDefault();
      let form = $(this).closest('form');
      form.find('.global_err').removeClass('active');
      if(SubmittedOrder == false) {
        let policy = form.find('input[name="agree"]');

        form.find('.error').removeClass('error');
        form.find('.form__error').remove();

        if (policy.is(':checked')) {
          SubmittedOrder = true;
          $.ajax({
            url: '/wp-admin/admin-ajax.php',
            data: form.serialize() + '&action=main_callback',
            type: 'POST',
          }).done(function (result) {
            SubmittedOrder = false;
            if (result.errors) {
              $.each(result.errors, function (e, index) {
                form.find('input[name="' + e + '"]').addClass('error');
                form
                    .find('input[name="' + e + '"]')
                    .parent()
                    .append('<div class="form__error">' + index[0] + '</div>');
              });
            } else {
              if (result.success == true) {
                Fancybox.close();
                form[0].reset();
                if($('.order-form')) {
                  let submitBlock = '<div class="footer__submit-block"><div>спасибо, ваша&nbsp;заявка&nbsp;отправлена</div><p>Мы с Вами свяжемся в ближайшее время</p></div>';
                  $('.order-form .form__content').remove();
                  $('.order-form .container').append(submitBlock);
                }
                if($('.page-template-contacts')) {
                  console.log('contacts');
                  $('.overlay').addClass('active');
                  $('.modal-result').addClass('active');
                  body.classList.add('stop-scroll');
                }
              }
            }
          });
        } else {
          console.log('политика не заполнена');
          policy.parent().addClass('error');
          policy.parent.append('<div class="form__error">Это обязательное поле</div>')
        }
      } else {
        form.find('.global_err').addClass('active');
      }
    });

    //Заказать звонок
    let SubmittedCall = false;
    $('#request-call').on('click', '.btn__submit', function (e) {
      e.preventDefault();
      let form = $(this).closest('form');
      form.find('.global_err').removeClass('active');
      if(SubmittedCall == false) {
        let policy = form.find('input[name="agree"]');

        form.find('.error').removeClass('error');
        form.find('.form__error').remove();

        if (policy.is(':checked')) {
          SubmittedCall = true;
          $.ajax({
            url: '/wp-admin/admin-ajax.php',
            data: form.serialize() + '&action=main_callback',
            type: 'POST',
          }).done(function (result) {
            SubmittedCall = false;
            if (result.errors) {
              $.each(result.errors, function (e, index) {
                form.find('input[name="' + e + '"]').addClass('error');
                form
                    .find('input[name="' + e + '"]')
                    .parent()
                    .append('<div class="form__error">' + index[0] + '</div>');
              });
            } else {
              if (result.success == true) {
                Fancybox.close();

                form[0].reset();
                if($('.order-form')) {
                  let submitBlock = '<div class="footer__submit-block"><div>спасибо, ваша&nbsp;заявка&nbsp;отправлена</div><p>Мы с Вами свяжемся в ближайшее время</p></div>';
                  $('.order-form .form__content').remove();
                  $('.order-form .container').append(submitBlock);
                }
                if($('.page-template-contacts')) {
                  console.log('contacts');
                  $('.overlay').addClass('active');
                  $('.modal-result').addClass('active');
                  body.classList.add('stop-scroll');
                }
              }
            }
          });
        } else {
          console.log('политика не заполнена');
          policy.parent().addClass('error');
          policy.parent.append('<div class="form__error">Это обязательное поле</div>')
        }
      } else {
        form.find('.global_err').addClass('active');
      }
    });



    //Получить консультацию
    let SubmittedConsult = false;
    $('#get-consult').on('click', '.btn__submit', function (e) {
      e.preventDefault();
      let form = $(this).closest('form');
      form.find('.global_err').removeClass('active');
      if(SubmittedConsult == false) {
        let policy = form.find('input[name="agree"]');

        form.find('.error').removeClass('error');
        form.find('.form__error').remove();

        if (policy.is(':checked')) {
          SubmittedConsult = true;
          $.ajax({
            url: '/wp-admin/admin-ajax.php',
            data: form.serialize() + '&action=main_callback',
            type: 'POST',
          }).done(function (result) {
            SubmittedConsult = false;
            if (result.errors) {
              $.each(result.errors, function (e, index) {
                form.find('input[name="' + e + '"]').addClass('error');
                form
                    .find('input[name="' + e + '"]')
                    .parent()
                    .append('<div class="form__error">' + index[0] + '</div>');
              });
            } else {
              if (result.success == true) {
                Fancybox.close();
                form[0].reset();
                if($('.order-form')) {
                  let submitBlock = '<div class="footer__submit-block"><div>спасибо, ваша&nbsp;заявка&nbsp;отправлена</div><p>Мы с Вами свяжемся в ближайшее время</p></div>';
                  $('.order-form .form__content').remove();
                  $('.order-form .container').append(submitBlock);
                }
                if($('.page-template-contacts')) {
                  console.log('contacts');
                  $('.overlay').addClass('active');
                  $('.modal-result').addClass('active');
                  body.classList.add('stop-scroll');
                }
              }
            }
          });
        } else {
          console.log('политика не заполнена');
          policy.parent().addClass('error');
          policy.parent.append('<div class="form__error">Это обязательное поле</div>')
        }
      } else {
        form.find('.global_err').addClass('active');
      }
    });


    //Оставить заявку
    let SubmittedApplication = false;
    $('#submit-application').on('click', '.btn__submit', function (e) {
      e.preventDefault();
      let form = $(this).closest('form');
      form.find('.global_err').removeClass('active');
      if(SubmittedApplication == false) {
        let policy = form.find('input[name="agree"]');

        form.find('.error').removeClass('error');
        form.find('.form__error').remove();

        if (policy.is(':checked')) {
          SubmittedApplication = true;
          $.ajax({
            url: '/wp-admin/admin-ajax.php',
            data: form.serialize() + '&action=main_callback',
            type: 'POST',
          }).done(function (result) {
            SubmittedApplication = false;
            if (result.errors) {
              $.each(result.errors, function (e, index) {
                form.find('input[name="' + e + '"]').addClass('error');
                form
                    .find('input[name="' + e + '"]')
                    .parent()
                    .append('<div class="form__error">' + index[0] + '</div>');
              });
            } else {
              if (result.success == true) {
                Fancybox.close();
                form[0].reset();
                if($('.order-form')) {
                  let submitBlock = '<div class="footer__submit-block"><div>спасибо, ваша&nbsp;заявка&nbsp;отправлена</div><p>Мы с Вами свяжемся в ближайшее время</p></div>';
                  $('.order-form .form__content').remove();
                  $('.order-form .container').append(submitBlock);
                }
                if($('.page-template-contacts')) {
                  console.log('contacts');
                  $('.overlay').addClass('active');
                  $('.modal-result').addClass('active');
                  body.classList.add('stop-scroll');
                }
              }
            }
          });
        } else {
          console.log('политика не заполнена');
          policy.parent().addClass('error');
          policy.parent.append('<div class="form__error">Это обязательное поле</div>')
        }
      } else {
        form.find('.global_err').addClass('active');
      }
    });



    //Кому и чем могу быть полезен
    let SubmittedUseful = false;
    $('#request-useful').on('click', '.btn__submit', function (e) {
      e.preventDefault();
      let form = $(this).closest('form');
      form.find('.global_err').removeClass('active');
      if(SubmittedUseful == false) {
        let policy = form.find('input[name="agree"]');

        form.find('.error').removeClass('error');
        form.find('.form__error').remove();

        if (policy.is(':checked')) {
          SubmittedUseful = true;
          $.ajax({
            url: '/wp-admin/admin-ajax.php',
            data: form.serialize() + '&action=main_callback',
            type: 'POST',
          }).done(function (result) {
            SubmittedUseful = false;
            if (result.errors) {
              $.each(result.errors, function (e, index) {
                form.find('input[name="' + e + '"]').addClass('error');
                form
                    .find('input[name="' + e + '"]')
                    .parent()
                    .append('<div class="form__error">' + index[0] + '</div>');
              });
            } else {
              if (result.success == true) {
                Fancybox.close();

                form[0].reset();
                if($('.order-form')) {
                  let submitBlock = '<div class="footer__submit-block"><div>спасибо, ваша&nbsp;заявка&nbsp;отправлена</div><p>Мы с Вами свяжемся в ближайшее время</p></div>';
                  $('.order-form .form__content').remove();
                  $('.order-form .container').append(submitBlock);
                }
                if($('.page-template-contacts')) {
                  console.log('contacts');
                  $('.overlay').addClass('active');
                  $('.modal-result').addClass('active');
                  body.classList.add('stop-scroll');
                }
              }
            }
          });
        } else {
          console.log('политика не заполнена');
          policy.parent().addClass('error');
          policy.parent.append('<div class="form__error">Это обязательное поле</div>')
        }
      } else {
        form.find('.global_err').addClass('active');
      }
    });




    $(".click_btn_services-top").click(function() {
      $('html, body').animate({
        scrollTop: $(".services").offset().top
      }, 1000);
    });






    $('.targets__list').slick({
      infinite: false,
      slidesToShow: 1,
      slidesToScroll: 1,
      prevArrow: $('.slick-prev-new-2'),
      nextArrow: $('.slick-next-new-2'),
      appendArrows: $('.prices__slide_count'),
      appendDots: $('.prices__slide_count'),
      customPaging: function(slider, i) {
        return '<span class="dot"></span>';
      },
      dots: true
    });

    $('.targets__list').on('beforeChange', function(event, slick, currentSlide, nextSlide){
      $('.currentCoach').text(nextSlide + 1);
    });

    if ($(window).width() < 769) {
      $('.prices__list').slick({
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: $('.slick-prev-new'),
        nextArrow: $('.slick-next-new'),
        appendArrows: $('.prices__slide_count'),
        appendDots: $('.prices__slide_count'),
        customPaging: function(slider, i) {
          return '<span class="dot"></span>';
        },
        dots: true
      });

      $('.prices__list').on('beforeChange', function(event, slick, currentSlide, nextSlide){
        $('.currentCoach').text(nextSlide + 1);
      });
    }


    $('.points-slider__list').slick({
      infinite: false,
      slidesToShow: 2,
      slidesToScroll: 3,
      variableWidth: true,
      prevArrow: $('.points-slider__arrows__end'),
      nextArrow: $('.points-slider__arrows__next'),
    });

  });

  // let dropDownBtn = document.querySelector('.order__custom-select');
  // let dropDownList = document.querySelector('.order__services-list');
  // console.log(dropDownList);
  // let currentPoint = document.querySelector('.order__default');
  // let serviceBtns = dropDownList.querySelectorAll('li');
  // let servicesSelect = document.querySelector('select[name="order_service"]');
  // if(dropDownBtn) {
  //   dropDownBtn.addEventListener('click', function() {
  //     dropDownList.classList.toggle('active');
  //     currentPoint.classList.toggle('active');
  //   })
  // }

  // if(serviceBtns) {
  //   serviceBtns.forEach(service => {
  //     service.addEventListener('click', function() {
  //       currentPoint.textContent = this.textContent;
  //       let selectedValue = this.getAttribute('data-value');
  //       servicesSelect.value = selectedValue;
  //     })
  //   })
  // }

  // let feedBack = document.querySelector('.agree__group');
  // if(feedBack) {
  //   feedBack.querySelector('.personal').addEventListener('click', function() {
  //     feedBack.querySelector('.custom__check').classList.toggle('active');
  //   })
  // }












  let dropDownBtns = document.querySelectorAll('.order__custom-select'); // Общий класс для кнопок
  let dropDownLists = document.querySelectorAll('.order__services-list'); // Общий класс для списков
  let currentPoints = document.querySelectorAll('.order__default'); // Общий класс для текущих значений
  let servicesSelects = document.querySelectorAll('select[name="order_service"]'); // Общий класс для селектов услуг

  dropDownBtns.forEach((dropDownBtn, index) => {
    let dropDownList = dropDownLists[index];
    let currentPoint = currentPoints[index];
    let servicesSelect = servicesSelects[index];

    if (dropDownBtn) {
      dropDownBtn.addEventListener('click', function () {
        dropDownList.classList.toggle('active');
        currentPoint.classList.toggle('active');
      });
    }

    if (dropDownList) {
      dropDownList.querySelectorAll('li').forEach(service => {
        service.addEventListener('click', function () {
          currentPoint.textContent = this.textContent;
          let selectedValue = this.getAttribute('data-value');
          servicesSelect.value = selectedValue;
        });
      });
    }
  });

  let feedBacks = document.querySelectorAll('.agree__group'); // Общий класс для обратной связи

  feedBacks.forEach(feedBack => {
    if (feedBack) {
      feedBack.querySelector('.personal').addEventListener('click', function () {
        feedBack.querySelector('.custom__check').classList.toggle('active');
      });
    }
  });



  //  бургер меню
  const burger = document?.querySelector('[data-burger]');
  const nav = document?.querySelector('[data-nav]');
  const navItems = nav?.querySelectorAll('a');
  const body = document.body;
  const header = document?.querySelector('.header');
  const headerHeight = header.offsetHeight;
  console.log(headerHeight)
  document.querySelector(':root').style.setProperty('--header-height', `${headerHeight}px`);

  burger?.addEventListener('click', () => {
      body.classList.toggle('stop-scroll');
      burger?.classList.toggle('burger--active');
      nav?.classList.toggle('nav--visible');
  });

  navItems.forEach(el => {
      el.addEventListener('click', () => {
          body.classList.remove('stop-scroll');
          burger?.classList.remove('burger--active');
          nav?.classList.remove('nav--visible');
      });
  });

  let overlay = document.querySelector('.overlay');
  let resultClose = document.querySelector('.close__btn');
  let modal = document.querySelector('.modal');

  if(overlay) {
    overlay.addEventListener('click', function() {
      if(modal.classList.contains('active')) {
        modal.classList.remove('active');
        overlay.classList.remove('active');
        body.classList.remove('stop-scroll');
      }
    })
  }

  if(resultClose) {
    resultClose.addEventListener('click', function() {
      if(modal.classList.contains('active')) {
        modal.classList.remove('active');
        overlay.classList.remove('active');
        body.classList.remove('stop-scroll');
      }
    })
  }

  let dropDownServices = document.querySelectorAll('.serv__header-block');

  if(dropDownServices) {
    dropDownServices.forEach(service => {
      service.addEventListener('click', function() {
        this.classList.toggle('active');
        this.parentNode.querySelector('.service-cats__card-list').classList.toggle('active');
      })
    })
  }






});

window.addEventListener('DOMContentLoaded', () => {
  const btnToTop = document.querySelector('.to_top');

  // Показываем кнопку "Наверх" при прокрутке страницы
  window.addEventListener('scroll', () => {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      btnToTop.style.opacity = '1';
    } else {
      btnToTop.style.opacity = '0';
    }
  });

  // Плавный скролл к началу страницы при клике на кнопку "Наверх"
  btnToTop.addEventListener('click', () => {
    scrollToTop();
  });

  // Функция плавного скролла
  const scrollToTop = () => {
    const currentPosition = document.documentElement.scrollTop || document.body.scrollTop;
    if (currentPosition > 0) {
      window.requestAnimationFrame(scrollToTop);
      window.scrollTo(0, currentPosition - currentPosition / 20); // Скорость скролла определяется делим значением второго аргумента
    }
  };
});

document.addEventListener('DOMContentLoaded', function() {
  var showMoreButton = document.getElementById('showMoreKeyses');
  if (showMoreButton) {
    showMoreButton.addEventListener('click', function() {
      var hiddenSlides = document.querySelectorAll('.keyses-slide.hidden');
      var counter = 0;
      hiddenSlides.forEach(function(slide) {
        if (counter < 4) {
          slide.classList.remove('hidden');
          counter++;
        }
      });
      if (document.querySelectorAll('.keyses-slide.hidden').length === 0) {
        showMoreButton.style.display = 'none';
      }
    });
  }
});


document.addEventListener('DOMContentLoaded', function() {
  const pointsItems = document.querySelectorAll('.points__inner');

  pointsItems.forEach(item => {
    item.addEventListener('click', function() {
      const hiddenContents = document.querySelectorAll('.points__hidden.active');
      hiddenContents.forEach(content => {
        content.classList.toggle('active');
      });

      const hiddenContent = this.parentElement.querySelector('.points__hidden');
      const svgIcons = document.querySelectorAll('.points__item--svg.active');
      svgIcons.forEach(icon => {
        icon.classList.toggle('active');
      });

      const svgIcon = this.querySelector('.points__item--svg');
      if (hiddenContent) {
        hiddenContent.classList.add('active');
        svgIcon.classList.add('active');
      }
    });
  });
  const nextBtn = document.querySelector('.calculator__next');
  const prevBtn = document.querySelector('.calculator__end');
  const countElement = document.querySelector('.calculator__caunt span:first-child');
  const totalElement = document.querySelector('.calculator__caunt span:last-child');
  const nextBtnText = nextBtn.querySelector('span');
  const questionsBtn = document.querySelector('.calculator__questions');

  let currentWrapperIndex = 0;
  const wrappers = document.querySelectorAll('.calculator__wrapper');
  const totalWrappers = wrappers.length;

  // Скрыть все блоки, кроме первого
  hideAllWrappers();
  showWrapper(currentWrapperIndex);

  updateNextButtonText();
  updateCountText();

  nextBtn.addEventListener('click', function (event) {
    event.preventDefault();
    if (currentWrapperIndex < totalWrappers - 1) {
      currentWrapperIndex++;
      updateCalculator();
    } else {
      // Если текущий блок последний, выполнить действие
      // Например, отправить заявку
      sendRequest();
    }
  });

  prevBtn.addEventListener('click', function (event) {
    event.preventDefault();
    if (currentWrapperIndex > 0) {
      currentWrapperIndex--;
      updateCalculator();
    }
  });

  function updateCalculator() {
    hideAllWrappers();
    showWrapper(currentWrapperIndex);
    updateNextButtonText();
    updateCountText();
    showQuestionsButtonIfNeeded()
    updatePrevButtonVisibility();
  }

  function hideAllWrappers() {
    wrappers.forEach(function (wrapper) {
      wrapper.style.display = 'none';
    });
  }

  function showWrapper(index) {
    wrappers[index].style.display = 'flex';
  }

  function updateNextButtonText() {
    if (nextBtnText) {
      if (currentWrapperIndex === totalWrappers - 1) {
        nextBtnText.textContent = 'Оставить заявку';
      } else {
        nextBtnText.textContent = 'Далее';
      }
    }
  }

  function updateCountText() {
    countElement.textContent = currentWrapperIndex + 1;
    totalElement.textContent = totalWrappers;
  }

  function showQuestionsButtonIfNeeded() {
    if (currentWrapperIndex === totalWrappers - 1) {
      questionsBtn.style.display = 'block';
    } else {
      questionsBtn.style.display = 'none';
    }
  }

  function updatePrevButtonVisibility() {
    if (currentWrapperIndex === 0) {
      prevBtn.style.display = 'none';
    } else {
      prevBtn.style.display = 'block';
    }
  }

  function sendRequest() {
    // Здесь можно добавить логику отправки заявки
    // Например, показать модальное окно или перенаправить пользователя на другую страницу
    alert('Здесь отправляем заявку');
  }

  // Управление отображением блоков с логотипами для радио-кнопок
  const radioButtons = document.querySelectorAll('input[name="wordmark_option"]');
  const logoBlocks = document.querySelectorAll('.calculator__logos-p');

  radioButtons.forEach(function (radioButton, index) {
    radioButton.addEventListener('change', function () {
      logoBlocks.forEach(function (logoBlock) {
        logoBlock.style.display = 'none';
      });
      logoBlocks[index].style.display = 'block';
    });
  });

  // Управление отображением блоков с логотипами для других радио-кнопок
  const radioButtonsm = document.querySelectorAll('input[name="wordmark_option"]');
  const logoBlocksm = document.querySelectorAll('.calculator__logos-m');

  radioButtonsm.forEach(function (radioButton, index) {
    radioButton.addEventListener('change', function () {
      logoBlocksm.forEach(function (logoBlock) {
        logoBlock.style.display = 'none';
      });
      logoBlocksm[index].style.display = 'block';
    });
  });
});
