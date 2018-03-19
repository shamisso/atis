        <main class="team">
            <article>
                <p>Консалтинговая компания «АТИС» оказывает петербургским предприятиям, а также предприятиям из других регионов и индивидуальным предпринимателям бухгалтерские, юридические, консалтинговые услуги. Квалифицированное содействие наших специалистов - это важная  помощь в деятельности любого предприятия.
                </p>
                <p>К Вашим услугам квалифицированные специалисты: юристы,налоговые адвокаты,бухгалтеры,аудиторы.
                </p>
            </article>
            <header>
                    <p>НАШИ СОТРУДНИКИ</p>
            </header>
            <section>
                <article class="person">
                    <img src="src/stuff/stuff_1.png" alt="">
                    <div class="partners">
                        <p class="surname">МЕДВЕДЕВ<br></p>
                        <p class="name">АЛЕКСАНДР ВАЛЕРИЕВИЧ</p>
                        <p class="position">Генеральный бухгалтер</p>
                        <p>Никола́ Пуссе́н (фр. Nicolas Poussin; в Италии его именовали Никколо́ Пусси́но (итал. Niccolò Pussino); 1594, Лез-Андели, Нормандия — 19 ноября 1665, Рим) — французский художник, один из основоположников живописи классицизма.</p>
                    </div>
                </article>
                <article class="person">
                    <img src="src/stuff/stuff_1.png" alt="">
                    <div class="partners">
                        <p class="surname">МЕДВЕДЕВ<br></p>
                        <p class="name">АЛЕКСАНДР ВАЛЕРИЕВИЧ</p>
                        <p class="position">Генеральный бухгалтер</p>
                        <p>Никола́ Пуссе́н (фр. Nicolas Poussin; в Италии его именовали Никколо́ Пусси́но (итал. Niccolò Pussino); 1594, Лез-Андели, Нормандия — 19 ноября 1665, Рим) — французский художник, один из основоположников живописи классицизма.</p>
                    </div>
                </article>
                <article class="person">
                    <img src="src/stuff/stuff_1.png" alt="">
                    <div class="partners">
                        <p class="surname">МЕДВЕДЕВ<br></p>
                        <p class="name">АЛЕКСАНДР ВАЛЕРИЕВИЧ</p>
                        <p class="position">Генеральный бухгалтер</p>
                        <p>Никола́ Пуссе́н (фр. Nicolas Poussin; в Италии его именовали Никколо́ Пусси́но (итал. Niccolò Pussino); 1594, Лез-Андели, Нормандия — 19 ноября 1665, Рим) — французский художник, один из основоположников живописи классицизма.</p>
                    </div>
                </article>
                <article class="person">
                    <img src="src/stuff/stuff_1.png" alt="">
                    <div class="partners">
                        <p class="surname">МЕДВЕДЕВ<br></p>
                        <p class="name">АЛЕКСАНДР ВАЛЕРИЕВИЧ</p>
                        <p class="position">Генеральный бухгалтер</p>
                        <p>Никола́ Пуссе́н (фр. Nicolas Poussin; в Италии его именовали Никколо́ Пусси́но (итал. Niccolò Pussino); 1594, Лез-Андели, Нормандия — 19 ноября 1665, Рим) — французский художник, один из основоположников живописи классицизма.</p>
                    </div>
                </article>
                <article class="person">
                    <img src="src/stuff/stuff_1.png" alt="">
                    <div class="partners">
                        <p class="surname">МЕДВЕДЕВ<br></p>
                        <p class="name">АЛЕКСАНДР ВАЛЕРИЕВИЧ</p>
                        <p class="position">Генеральный бухгалтер</p>
                        <p>Никола́ Пуссе́н (фр. Nicolas Poussin; в Италии его именовали Никколо́ Пусси́но (итал. Niccolò Pussino); 1594, Лез-Андели, Нормандия — 19 ноября 1665, Рим) — французский художник, один из основоположников живописи классицизма.</p>
                    </div>
                </article>
            </section>
            <header>
                <p>НАМ ДОВЕРЯЮТ</p>
            </header>
            
        </main>
        <section class="clients-logos">
                <div><img src="src/clients/avg.png" alt=""></div>
                <div><img src="src/clients/dell.png" alt=""></div>
                <div><img src="src/clients/knight.png" alt=""></div>
                <div><img src="src/clients/lenovo.gif" alt=""></div>
                <div><img src="src/clients/logo_total.png" alt=""></div>
                <div><img src="src/clients/mazda.png" alt=""></div>
                <div><img src="src/clients/microsoft.png" alt=""></div>
                <div><img src="src/clients/wayland_logo.png" alt=""></div>
            </section>
        <script>
            //Раскрываем нав и расширяем хедер
            function headerMarginTransform() {
                var lis =  document.querySelectorAll('header section nav ul li.havelist');
                var header = document.querySelector('.wrapper > header');
                for(var i = 0; i < lis.length; i++) {
                    lis[i].addEventListener('mouseover', function(){marginExtension(header)});
                    lis[i].addEventListener('mouseout', function(){marginCollapse(header)});
                }
            }

            addEventListener('load', headerMarginTransform);

            function marginExtension(elem) {
                elem.classList.remove('margin-minus');
                elem.classList.add('margin-transform');
            }

            function marginCollapse(elem) {
                elem.classList.remove('margin-transform');
                elem.classList.add('margin-minus');
            }
            //Подчеркивание для активной страницы
            function locateDetecting() {
                var loc = document.location;
                var array = loc.href.split('/');
                var nav = document.querySelectorAll('header section nav > ul > li > a');
                nav.forEach(function(item) {
                    if(item.getAttribute('href') === array[array.length - 1]) {
                        item.setAttribute('style', 'border-bottom: 1px #be2228 solid');
                    }
                });
            }
            function locateDetecting() {
                var loc = document.location;
                var array = loc.href.split('/');
                var nav = document.querySelectorAll('header section nav ul li a');
                nav.forEach(function(item) {
                    if(item.getAttribute('href') === array[array.length - 1]) {
                        item.setAttribute('style', 'border-bottom: 1px #16334f solid');
                    }
                });
            }
            locateDetecting();
        </script>