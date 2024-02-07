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

// Обработчик клика на кнопку "Вперед"
$('.slick-next-new').click(function(){
    $slider1.slick('slickNext');
});

// Обработчик клика на кнопку "Назад"
$('.slick-prev-new').click(function(){
    $slider1.slick('slickPrev');
});

// Обновление счетчика
$slider1.on('init reInit afterChange', function(event, slick, currentSlide, nextSlide){
    // Получаем общее количество слайдов
    var totalSlides = slick.slideCount;
    
    // Обновляем текущий номер слайда
    var currentSlideNumber = (currentSlide ? currentSlide : 0) + 1;

    // Обновляем текст счетчика
    $('.currentCoach').text(currentSlideNumber);
    $('.allCoach').text(totalSlides);
});
    


          // Создаем медиа-запрос для экранов с шириной меньше 768px
      const mobileMediaQuery = window.matchMedia('(max-width: 768px)');
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

    $('#order').on('click', '.btn__submit', function (e) {
      e.preventDefault();
      let form = $(this).closest('form');
      let policy = form.find('input[name="agree"]');

      form.find('.error').removeClass('error');
      form.find('.form__error').remove();

      if (policy.is(':checked')) {
        $.ajax({
          url: '/wp-admin/admin-ajax.php',
          data: form.serialize() + '&action=main_callback',
          type: 'POST',
        }).done(function (result) {
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
            }
          }
        });
      } else {
        policy.parent().addClass('error');
      }
    });
    $('#banner_form').on('click', '.btn__submit', function (e) {
      e.preventDefault();
      let form = $(this).closest('form');
      let policy = form.find('input[name="agree"]');

      form.find('.error').removeClass('error');
      form.find('.form__error').remove();

      if (policy.is(':checked')) {
        $.ajax({
          url: '/wp-admin/admin-ajax.php',
          data: form.serialize() + '&action=main_callback',
          type: 'POST',
        }).done(function (result) {
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
            }
          }
        });
      } else {
        policy.parent().addClass('error');
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


  
});
