        <main class="feedbacks">
            <aside>
                <h3>ОСТАВЬТЕ ВАШ ОТЗЫВ</h3>
                <form action="">
                    <input type="text" placeholder="Введите ваше имя:">
                    <input type="text" placeholder="Введите вашу фамилию:">
                    <textarea name="" id="" cols="30" rows="10" placeholder="Введите текст:"></textarea>
                    <button>ОТПРАВИТЬ</button>
                </form>
            </aside>
            <section>
                <article>
                    <p class="publishing-time">01.01.2019</p>
                    <p>Компетентные специалисты осуществляют индивидуальный подход к каждому отдельному случаю, что позволяет достигать наилучших результатов в разрешении непростых ситуаций. Компания поможет в составлении необходимых документов и подачи их в суд. Нередко компания проводит бесплатные консультации, а для льготных категорий населения (ветераны ВОВ, ветераны боевых действий, многодетные семьи, ветераны труда, пенсионеры, матери-одиночки, инвалиды) действуют постоянные скидки. Компетентная помощь специалистов юридической компании «АТИС» поможет успешно решить многие проблемы.</p>
                    <p class="author"><strong>Краснова В.А.</strong></p>
                    <p class="author"><strong>Пенсионерка</strong></p>
                </article>
                <article>
                    <p class="publishing-time">01.01.2019</p>
                    <p>Компетентные специалисты осуществляют индивидуальный подход к каждому отдельному случаю, что позволяет достигать наилучших результатов в разрешении непростых ситуаций. Компания поможет в составлении необходимых документов и подачи их в суд. Нередко компания проводит бесплатные консультации, а для льготных категорий населения (ветераны ВОВ, ветераны боевых действий, многодетные семьи, ветераны труда, пенсионеры, матери-одиночки, инвалиды) действуют постоянные скидки. Компетентная помощь специалистов юридической компании «АТИС» поможет успешно решить многие проблемы.</p>
                    <p class="author"><strong>Краснова В.А.</strong></p>
                    <p class="author"><strong>Пенсионерка</strong></p>
                </article>
                <article>
                    <p class="publishing-time">01.01.2019</p>
                    <p>Компетентные специалисты осуществляют индивидуальный подход к каждому отдельному случаю, что позволяет достигать наилучших результатов в разрешении непростых ситуаций. Компания поможет в составлении необходимых документов и подачи их в суд. Нередко компания проводит бесплатные консультации, а для льготных категорий населения (ветераны ВОВ, ветераны боевых действий, многодетные семьи, ветераны труда, пенсионеры, матери-одиночки, инвалиды) действуют постоянные скидки. Компетентная помощь специалистов юридической компании «АТИС» поможет успешно решить многие проблемы.</p>
                    <p class="author"><strong>Краснова В.А.</strong></p>
                    <p class="author"><strong>Пенсионерка</strong></p>
                </article>
                <article>
                    <p class="publishing-time">01.01.2019</p>
                    <p>Компетентные специалисты осуществляют индивидуальный подход к каждому отдельному случаю, что позволяет достигать наилучших результатов в разрешении непростых ситуаций. Компания поможет в составлении необходимых документов и подачи их в суд. Нередко компания проводит бесплатные консультации, а для льготных категорий населения (ветераны ВОВ, ветераны боевых действий, многодетные семьи, ветераны труда, пенсионеры, матери-одиночки, инвалиды) действуют постоянные скидки. Компетентная помощь специалистов юридической компании «АТИС» поможет успешно решить многие проблемы.</p>
                    <p class="author"><strong>Краснова В.А.</strong></p>
                    <p class="author"><strong>Пенсионерка</strong></p>
                </article>
            </section>
        </main>
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