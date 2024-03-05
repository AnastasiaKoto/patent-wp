// Получаем все поля для вывода цены
let priceTrademark = document.querySelector('.calculator-value__span-jsstr');  // Ваш товарный знак:
let priceSearch = document.querySelector('.calculator-value__span-js-s1');  // Поиск:
let priceBusiness  = document.querySelector('.calculator-value__span-js-s2');  // Подача заявки и ведение дел
let priceEvidence = document.querySelector('.calculator-value__span-js-3');  // Получение свидетельства
let priceTotal = document.querySelector('.calculator-value__span-js-s-4');  // Итого:

let duesFiling = document.querySelector('.calculator-value__span-js-c-1');  // Подача заявки
let duesCertificate  = document.querySelector('.calculator-value__span-js-c-2');  // Получение свидетельства
let duesTotal = document.querySelector('.calculator-value__span-js-c-3');  // Итого:

console.log(priceSearch)



// Получаем все радио-кнопки
const radioButtons = document.querySelectorAll('input[name="wordmark_option"]');
const radioButtons2 = document.querySelectorAll('input[name="wordmark2_option"]');
const radioButtons3 = document.querySelectorAll('input[name="wordmark3_option"]');
const radioButtons4 = document.querySelectorAll('input[name="wordmark4_option"]');

// Создаем переменную для хранения выбранного значения
let selectedValue = '';
let additionalValue = 0; // Дополнительное значение, которое будет добавлено к selectedValue

// Проходимся по всем радио-кнопкам и добавляем обработчик события
radioButtons.forEach(button => {
    button.addEventListener('change', function() {
        // Обновляем значение переменной при изменении выбора
        selectedValue = this.value;
        // Выводим значение в консоль
        console.log('Выбранное значение1:', selectedValue);
    });
});

// Проходимся по всем радио-кнопкам во второй группе и добавляем обработчик события
// Получаем элементы, в которые будем выводить название товарного знака и цену
let selectedTrademark = document.querySelector('.calculator-value__span-jsstr');


// Проходимся по всем радио-кнопкам второй группы и добавляем обработчик события
radioButtons2.forEach(button => {
    button.addEventListener('change', function() {
        // Обновляем значение переменной при изменении выбора во второй группе
        selectedValue = document.querySelector('input[name="wordmark_option"]:checked').value;
        // Проверяем, был ли выбран вариант "Да" во второй группе
        if (this.value === 'yes') {
            // Выводим название товарного знака в соответствующий элемент
            let selectedTrademarkName = document.querySelector('input[name="wordmark_option"]:checked').nextSibling.nodeValue.trim();
            selectedTrademark.textContent = selectedTrademarkName;

            // Выводим цену в соответствующий элемент
            let price = parseInt(selectedValue);
            priceSearch.textContent = price;
        } else {
            // Если выбрано "Нет", то сбрасываем значения
            selectedTrademark.textContent = '';
            priceSearch.textContent = '';
        }
    });
});

radioButtons3.forEach(button => {
    button.addEventListener('change', function() {
        // Обновляем значение переменной при изменении выбора во второй группе
        selectedValue = document.querySelector('input[name="wordmark3_option"]:checked').value;
        // Проверяем, был ли выбран вариант "Да" во второй группе
        if (this.value === '100000') {
            // Если выбрано "Да", то добавляем 10 к selectedValue 100000
            additionalValue = 100000;
        } else {
            // Если выбрано "Нет", то сбрасываем дополнительное значение
            additionalValue = 0;
        }
        // Выводим значение в консоль
        console.log('Выбранное значение3:', selectedValue);
        console.log('Дополнительное значение:', additionalValue);
    });
});

radioButtons4.forEach(button => {
    button.addEventListener('change', function() {
        // Обновляем значение переменной при изменении выбора
        selectedValue = this.value;
        // Выводим значение в консоль
        console.log('Выбранное значение4:', selectedValue);
    });
});

// Определяем функцию для расчета цены с учетом логики
function calculatePrice(selectedCount, totalClasses, basePrice, wordOrImage) {
    let additionalPrice = 0;

    // Вычисляем дополнительную стоимость в зависимости от выбранного словесного или изобразительного знака
    if (wordOrImage === "11000") {
        additionalPrice = 2000;
    } else if (wordOrImage === "12000") {
        additionalPrice = 4000;
    }

    // Вычисляем общую стоимость
    let totalPrice = basePrice;

    if (selectedCount === 1) {
        totalPrice += additionalPrice;
    } else if (selectedCount > 1 && selectedCount < totalClasses) {
        // Вычисляем количество дополнительных классов
        const additionalClasses = selectedCount - 1;
        totalPrice += additionalClasses * additionalPrice;
    } else if (selectedCount === totalClasses) {
        // Один класс идет по базе, остальные по дополнительной стоимости
        totalPrice += additionalPrice * (selectedCount - 1);
    }

    return totalPrice;
}

// Получаем все элементы с классом section-mkty-area-item
const items = document.querySelectorAll('.section-mkty-area-item');

// Добавляем цену 1000 к каждому элементу
items.forEach(item => {
    item.dataset.price = '1000';
});

// Переменные для хранения общей цены без скидки и с учетом скидки
let totalPrice = 0;
let discountedPrice = 0;

// Добавляем обработчик клика для каждого элемента
items.forEach(item => {
    item.addEventListener('click', () => {
        // Добавляем класс при клике
        item.classList.toggle('section-clicked');

        // Подсчитываем количество выбранных элементов
        let selectedCountElement = document.getElementById("selected-count");
        const clickedItems = document.querySelectorAll('.section-mkty-area-item.section-clicked');
        const clickedCount = clickedItems.length;

        // Вычисляем общую цену выбранных элементов без скидки
        totalPrice = 0;
        clickedItems.forEach(clickedItem => {
            totalPrice += parseInt(clickedItem.dataset.price);
        });

        // Вычисляем цену за каждый класс и прибавляем к итоговой цене
        const classPrice = 1000; // Указываем цену за каждый класс
        const additionalPrice = classPrice * clickedCount;
        const totalPriceWithClasses = totalPrice + additionalPrice;

        // Вычисляем цену с учетом скидки после выбора более 10 элементов
        discountedPrice = totalPriceWithClasses;
        if (clickedCount > 10) {
            const discountPrice = Math.ceil(clickedCount / 10) * 1000;
            discountedPrice -= discountPrice;
        }

        // Выводим цену в соответствующий элемент
        priceSearch.textContent = discountedPrice;

        // Выводим результат в консоль
        console.log('Количество выбранных элементов:', clickedCount);
        console.log('Общая цена выбранных элементов без скидки:', totalPrice);
        console.log('Цена со скидкой:', discountedPrice);

        // Обновляем текст внутри элемента div
        selectedCountElement.textContent = clickedCount;
    });
});