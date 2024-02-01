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
    
});

let dropDownBtn = document.querySelector('.order__custom-select');
let dropDownList = document.querySelector('.order__services-list');
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