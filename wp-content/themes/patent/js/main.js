document.addEventListener("DOMContentLoaded", function(event) {
  jQuery(function($) {
      
    $('.keyses__tabs ul.tabs__caption').on('click', 'li:not(.active)', function() {
        $('.keyses__slider').slick('reinit');
      $(this)
        .addClass('active').siblings().removeClass('active')
        .closest('div.keyses__tabs').find('div.tabs__content').removeClass('active').eq($(this).index()).addClass('active');
    });

    $('.articles__tabs ul.tabs__caption').on('click', 'li:not(.active)', function() {
      $(this)
        .addClass('active').siblings().removeClass('active')
        .closest('div.articles__tabs').find('div.tabs__content').removeClass('active').eq($(this).index()).addClass('active');
    });

      var $slider1 = $('.keyses__slider');

      // Инициализация слайдера
      $slider1.slick({
          infinite: false,
          dots: false,
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false,
      });

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
});