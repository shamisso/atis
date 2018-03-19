        <main class="services">
           <h3>LEGAL SERVICES</h3>
            <aside>
                <cite>
                    “Великое дело законодательства состоит в том, чтобы создавать общественное благо из наибольшего числа частных интересов.”
                </cite>
                <div class="partners">
                    <img  src="src/stuff/stuff_1.png" id="one" class="nods" alt="">
                    <p class="surname">МЕДВЕДЕВ<br></p>
                    <p class="name">АЛЕКСАНДР ВАЛЕРИЕВИЧ</p>
                    <p class="position">Генеральный бухгалтер</p>
                </div>
                <section class="skidka">
                    <p>
                        СКИДКА 15%
                    </p>
                    <p>на услуги юридического отдела</p>
                </section>
            </aside>
            <section>
                <article>
                    <p>
                        Наша работа заключается в обеспечении юридической безопасности  сделок, решении налоговых проблем, сопровождение по реорганизации бизнеса , ведение арбитражных процессов и др.
                        <br><br>
                        Компания ООО "Атис"предлагает услуги по оказанию правовой помощи. Все юристы, работающие в нашей фирме, имеют  отличные знания в области права,  и обладают , профессионализмом, и большим опытом в решении юридических задач любой сложности. Поэтому, какие бы вопросы не возникли у вас, не сомневайтесь, мы поможем их решить быстро и квалифицированно.
                    </p>
                </article>
                <section>
                    <article class="serv-item">
                        <img src="src/icons/services/repair.png" alt="">
                        <p>
                            Споры со страховщиками при взыскании возмещения по риску <strong>КАСКО/ОСАГО</strong> (оспаривание суммы ущерба в пользу увеличения)
                        </p>                    
                    </article>
                    <article class="serv-item">
                        <img src="src/icons/services/repair.png" alt="">
                        <p>
                           Оспаривание в сторону увеличения вреда от ДТП, взыскание возмещ 
                        </p>
                    </article>
                    <article class="serv-item">
                        <img src="src/icons/services/repair.png" alt="">
                        <p>
                            Юридическая поддержка в исполнительном производстве. Оспаривани
                        </p>
                    </article>
                    <article class="serv-item">
                        <img src="src/icons/services/repair.png" alt="">
                        <p>
                            Семейные спроры, споры о разделе имущества. Соглашения о детях,
                        </p>
                    </article>
                    <article class="serv-item">
                        <img src="src/icons/services/repair.png" alt="">
                        <p>
                            Наследственные дела
                        </p>
                    </article>
                    <article class="serv-item">
                        <img src="src/icons/services/repair.png" alt="">
                        <p>
                            Защита прав потребителей
                        </p>
                    </article>
                    <article class="serv-item">
                        <img src="src/icons/services/repair.png" alt="">
                        <p>
                            Личная консультация нашего специалиста в нашем офисе или выезд 
                        </p>
                    </article>
                    <article class="serv-item">
                        <img src="src/icons/services/repair.png" alt="">
                        <p>
                            Проконсультироваться по любым вопросам можно заполнив форму обр
                        </p>
                    </article>
                </section>
            </section>
        </main>
    <script>
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
