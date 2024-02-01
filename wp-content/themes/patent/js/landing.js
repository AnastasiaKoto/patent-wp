document.addEventListener("DOMContentLoaded", function() {
    document.querySelectorAll('.benefit__card').forEach(item => {
        let moreBtn = item.querySelector('.benefit-card__more');
        let hiddenTxt = item.querySelector('.benefit-card__descr');
        moreBtn.addEventListener('click', function() {
            hiddenTxt.classList.remove('hidden');
            moreBtn.classList.add('d-none');
        })
    })
})