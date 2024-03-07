document.addEventListener("DOMContentLoaded", function() {


    document.querySelectorAll('.benefit__card').forEach(item => {
        let moreBtn = item.querySelector('.benefit-card__more');
        let hiddenTxt = item.querySelector('.benefit-card__descr');
        moreBtn.addEventListener('click', function() {
            hiddenTxt.classList.remove('hidden');
            moreBtn.classList.add('d-none');
        })
    })

   let benefitCon = document?.querySelector(".benefit-banner__content");
    let benefitBtn = benefitCon?.querySelector('.benefitBtn');
    let paragraph = benefitCon?.querySelector(".benefit-banner__text");

    benefitBtn?.addEventListener('click', function() {
        paragraph.classList.remove('hidden-text');
        benefitBtn.classList.add('d-none');
    });
})