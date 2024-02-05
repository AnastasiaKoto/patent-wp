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

    $('.keyses__slider').slick({
        infinite: false,
        dots: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false
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

  let dropDownBtn = document.querySelector('.order__custom-select');
  let dropDownList = document.querySelector('.order__services-list');
  console.log(dropDownList);
  let currentPoint = document.querySelector('.order__default');
  let serviceBtns = dropDownList.querySelectorAll('li');
  let servicesSelect = document.querySelector('select[name="order_service"]');
  if(dropDownBtn) {
    dropDownBtn.addEventListener('click', function() {
      dropDownList.classList.toggle('active');
      currentPoint.classList.toggle('active');
    })
  }

  if(serviceBtns) {
    serviceBtns.forEach(service => {
      service.addEventListener('click', function() {
        currentPoint.textContent = this.textContent;
        let selectedValue = this.getAttribute('data-value');
        servicesSelect.value = selectedValue; 
      })
    })
  }

  let feedBack = document.querySelector('.agree__group');
  if(feedBack) {
    feedBack.querySelector('.personal').addEventListener('click', function() {
      feedBack.querySelector('.custom__check').classList.toggle('active');
    })
  }


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