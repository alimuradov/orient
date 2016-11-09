var febox = {
    init: function () {
        var self = this;
        
        document.addEventListener('DOMContentLoaded', function (e) {
            self.ui.init();
        });
    },
    
    ui: {
        init: function () {
            this.selectTabs();
            this.selectTabsDesignProject();
        },
        
        /* Табы, выбор кухни или шкафа-купе */
        selectTabs: function () {
            var item = document.querySelectorAll('.home-select-wrapper-tabs-item'),
                length = item.length;

            /* Установка события на все элементы */
            for (var i = 0; i < length; i++){
                item[i].addEventListener('click', function (e) {

                    /* Очистка от предыдещего активного элемента */
                    var oldActiveElement = document.querySelector('.home-select-wrapper-tabs-item.active');
                    if (typeof oldActiveElement === 'object'){
                        oldActiveElement.classList.remove('active');
                    }

                    /* Текущий элемент: активный */
                    this.classList.add('active');

                    /* Скрываем предыдущий блок */
                    document.querySelector('.home-select-wrapper-block-item.active').classList.remove('active');

                    /* Поиск подходящего блока с слайдером */
                    var newSlide = document.querySelector('.home-select-wrapper-block-item[data-type="'+ this.getAttribute('data-type') +'"]'),
                        activeSlide = newSlide.querySelector('.swiper-slide-active'),
                        param = document.querySelectorAll('.home-select-wrapper-data-param-item-data');

                    /* Отображаем его */
                    newSlide.classList.add('active');

                    /* Фасады и Цветовые варианты */
                    param[0].innerHTML = activeSlide.getAttribute('data-facade');
                    param[1].innerHTML = activeSlide.getAttribute('data-color');
                });
            }

            /* Запуск нескольких слайдеров */
            var slide = document.querySelectorAll('.home-select-wrapper-block-item-slider'),
                length = slide.length;

            for (var i = 0; i < length; i ++){
                var swiper = new Swiper(slide[i], {
                    pagination: '.swiper-pagination',
                    paginationClickable: true,
                    nextButton: '.swiper-button-next',
                    prevButton: '.swiper-button-prev',
                    spaceBetween: 30,
                    observer: true,
                    onSlideChangeEnd: function (e) {
                        var slider = e.container[0].querySelector('.swiper-slide-active'),
                            param = document.querySelectorAll('.home-select-wrapper-data-param-item-data');

                        /* Фасады и Цветовые варианты */
                        param[0].innerHTML = slider.getAttribute('data-facade');
                        param[1].innerHTML = slider.getAttribute('data-color');

                        /* Какие то манипуляции перед отправкой данных на сервер */
                    }
                });
            }
        },

        /* Табы дизайн-проектов */
        selectTabsDesignProject: function () {
            var item = document.querySelectorAll('.home-form-wrapper-form-tabs-wrapper-item'),
                length = item.length;

            /* Установка события на все элементы */
            for (var i = 0; i < length; i++){
                item[i].addEventListener('click', function (e) {

                    /* Очистка от предыдещего активного элемента */
                    var oldActiveElement = document.querySelector('.home-form-wrapper-form-tabs-wrapper-item.active');
                    if (typeof oldActiveElement === 'object'){
                        oldActiveElement.classList.remove('active');
                    }

                    /* Текущий элемент: активный */
                    this.classList.add('active');
                    
                    /* Меняем изображение */
                    document.querySelector('.home-form-wrapper-form-tabs-img').style.backgroundImage = "url(" + this.getAttribute('data-img') + ")";
                    console.log(this.getAttribute('data-img'))

                });
            }
        }
    }
};