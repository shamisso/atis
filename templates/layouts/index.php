           <main>
            <section class="promo">
                <div>
                    <img src="src/promo/Layer%201.jpg" alt="">
                </div>
                <section class="discount">
                    <div class="triangle left">
                        <div>
                            <img class="back" src="src/elements/back-50.png" alt="">
                        </div>
                    </div>
                    <article>
                        <ul>
                            <li><img src="src/elements/Ellipse%201.png" alt=""></li>
                            <li><img src="src/elements/Ellipse%202.png"></li>
                            <li><img src="src/elements/Ellipse%201.png"></li>
                        </ul>
                    </article>
                    <div class="triangle right">
                        <div>
                            <img class="forward" src="src/elements/forward-32.png" alt="">
                        </div>
                    </div>
                </section>
                <section class="icons">
                    <article>
                        <a href="legal-services/kasko">
                            <img src="src/icons/services/kasko.png" alt="">
                            <p>Споры по КАСКО/ОСАГО</p>
                        </a>
                    </article>
                    <article>
                        <a href="legal-services/dtp">
                            <img src="src/icons/services/dtp.png" alt="">
                            <p>Возмещение вреда от ДТП</p>
                        </a>
                    </article>
                    <article>
                        <a href="legal-services/law-support">
                            <img src="src/icons/services/law.png" alt="">
                            <p>Юридическая поддержка в судах</p>
                        </a>
                    </article>
                    <article>
                        <a href="legal-services/consumers">
                            <img src="src/icons/services/buyer.png" alt="">
                            <p>Защита прав потребителей</p>
                        </a>
                    </article>
                    <article>
                        <a href="legal-services/">
                            <img src="src/icons/services/storage.png" alt="">
                            <p>Раздел имущества</p>
                        </a>
                    </article>
                    <article>
                        <a href="legal-services/inheritance">
                            <img src="src/icons/services/testamentum.png" alt="">
                            <p>Наследство</p>
                        </a>
                    </article>
                    <article>
                       <a href="legal-services/consultations">
                            <img src="src/icons/services/consalt.png" alt="">
                            <p>Личные консультации специалистов</p>
                       </a>
                    </article>
                    <article>
                       <a href="legal-services/reports">
                            <img src="src/icons/services/order.png" alt="">
                            <p>Сдача бухгалтерской и налоговой отчетности</p>
                       </a>
                    </article>
                    <article>
                       <a href="legal-services/documentation">
                            <img src="src/icons/services/files.png" alt="">
                            <p>Сбор первичной документации</p>
                       </a>
                    </article>
                    <article>
                        <a href="legal-services/hr-keeping">
                            <img src="src/icons/services/employee.png" alt="">
                            <p><nobr>Кадровый учет</nobr> и расчет зарплат</p>
                        </a>
                    </article>
                    <article>
                        <a href="legal-services/tax-bills">
                            <img src="src/icons/services/forms.png" alt="">
                            <p>Заполнение налоговых деклараций</p>
                        </a>
                    </article>
                    <article>
                       <a href="legal-services/personal">
                            <img src="src/icons/services/personal.png" alt="">
                            <p>Персональный<br>учет</p>
                       </a>
                    </article>
                    <article>
                        <a href="legal-services/restore">
                            <img src="src/icons/services/repair.png" alt="">
                            <p>Возобновление бухгалтерского учета</p>
                        </a>
                    </article>
                    <article>
                        <a href="legal-services/calculator">
                            <img src="src/icons/services/calc_blue.png" alt="">
                            <p>Калькулятор<br>бухгалтерского<br>обслуживания</p>
                        </a>
                    </article>
                    <article>
                        <section id="show-button">
                            <img src="src/icons/services/call.png" alt="">
                            <p>Заказ бесплатной консультации</p>
                        </section>
                    </article>
                </section>
            </section>
            <section class="about">
                <article class="story">
                    <h3>КТО МЫ</h3>
                    <p>
                        Консалтинговая компания «АТИС» оказывает петербургским предприятиям, а также предприятиям из других регионов и индивидуальным предпринимателям бухгалтерские, юридические, консалтинговые услуги. Квалифицированное содействие наших специалистов - это важная  помощь в деятельности любого предприятия.
                    </p>
                </article>
                <article class="stuff">
                    <div class="karusel">
                        <img  src="src/stuff/stuff_1.png" id="one" class="nods" alt="">
                        <img src="src/stuff/stuff_2.png" id="two" class="nods" alt="">
                        <img src="src/stuff/stuff_3.png" id="three" class="nods" alt="">
                    </div>
                    <section class ="description">
                        <div>
                            <div>
                            <img src="src/elements/left-32.png" class="karusel-left" onclick="changeLeft()">
                            </div>
                            <div class="partners">
                                <p class="surname">МЕДВЕДЕВ<br></p>
                                <p class="name">АЛЕКСАНДР ВАЛЕРИЕВИЧ</p>
                                <p class="position">Генеральный бухгалтер</p>
                            </div>
                            <div>
                                <img src="src/elements/right-32.png" class="karusel-right" onclick="changeLeft()">
                            </div>
                        </div>
                    </section>         
                </article>
            </section>
            <section class="news">
                <h3>НОВОСТИ</h3>
                <section>
                   <?php for($i = 0; $i < count($data); $i++) {  
                    echo <<<HTML
                    <a href="http://localhost/atis/news/{$data[$i]['id']}/{$data[$i]['href']}">
                        <article>
                            <img src="src/news/{$data[$i]['img']}" alt="">
                            <h4>
                                {$data[$i]['title']}
                                <hr>
                            </h4>
                            <p>{$data[$i]['subtitle']}</p>
                        </article>
                    </a>
HTML;
}?>
                </section>    
            </section>
            <section class="map">
                <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ac62ce7c71493a3e0c9561917ae3a97514f8a42c1e160170049ba85df6598d44f&amp;source=constructor" width="980" height="185" frameborder="0"></iframe>
            </section>
            <div id="prompt-form-container">
                <form id="prompt-form" name="callback_request" method="post">
                    <div id="prompt-message"></div>
                    <input name="text" type="text" placeholder="Как к вам обратиться?" pattern="[А-Яа-я]{5,}" required>
                    <input name="phone" type="tel" placeholder="Введите номер для связи:">
                    <input name="email" type="email" placeholder="Или email:">
                    <textarea name="message" id="" cols="30" rows="10" placeholder="Ваш вопрос:" required></textarea>
                    <button type="submit" id="send" disabled="true">ОТПРАВИТЬ</button>
                    <button name="cancel">ОТМЕНА</button>
                </form>
            </div>
        </main>
        <script>
        'use strict';
        function saleSliding() {
            var container = document.querySelector('.promo > div > img');
            var imgIndex = 1;
            
            var back = document.querySelector('.back');
            var forward = document.querySelector('.forward');
            back.onclick = sliding;
            forward.onclick = sliding;
            
            function sliding() {
                var opacity = 1;
                if(imgIndex > 0 && imgIndex < 3) {
                    imgIndex++;
                }
                else {
                    imgIndex = 1;
                }
                var int = setInterval(function() {
                    opacity -= 0.2;
                    container.style.opacity = opacity;
                }, 50)

                setTimeout(function() {
                    clearInterval(int);
                    container.style.opacity = 0;
                }, 250);

                setTimeout(function() {

                    var vint = setInterval(function() {
                        container.setAttribute('src', 'src/promo/Layer%20' + String(imgIndex) + '.jpg');
                        opacity += .2;
                        container.style.opacity = opacity;
                    }, 50);

                    setTimeout(function() {
                        clearInterval(vint);
                        container.style.opacity = 1;
                        console.log(opacity);
                    }, 250);
                }, 252);            
            }
        }
        saleSliding();

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
        locateDetecting();
        //Листинг сотрудников
        var stuff = [
            {
                'firstName': 'АНДРЕЙ', 
                'secondName': 'АЛЕКСАНДРОВИЧ',
                'lastName': 'МАЗЕНЬКОВ',
                'position': 'Главный юрист',
                'image': 'src/stuff/stuff_1.png',
                'index': 1
            },
            
            {
                'firstName': 'АЛЕКСАНДР', 
                'secondName': 'ВАЛЕРИЕВИЧ',
                'lastName': 'МЕДВЕДЕВ',
                'position': 'Генеральный директор',
                'image': 'src/stuff/stuff_2.png',
                'index': 2
            },

            {
                'firstName': 'ЛЮБОВЬ', 
                'secondName': 'НИКОЛАЕВНА',
                'lastName': 'ЕРМОЛАЕВА',
                'position': 'Главный бухгалтер',
                'image': 'src/stuff/stuff_3.png',
                'index': 3
            }  
        ];
        var first = stuff[0];
        var second = stuff[1];
        var third = stuff[2];
        
        var array = [first, second, third];
        var br = document.createElement('br');
        var p = document.createElement('p');
        
        function changeLeft() {
            setTimeout(function() {
                if(array[0].index === 1 && array[1].index === 2 && array[2].index === 3) {
                    array = [second, third, first];
                    document.querySelectorAll('.karusel img')[0].setAttribute('src', array[0].image);
                    document.querySelectorAll('.karusel img')[1].setAttribute('src', array[1].image);
                    document.querySelectorAll('.karusel img')[2].setAttribute('src', array[2].image);
                    document.querySelector('.partners .surname').textContent = array[1].lastName;
                    document.querySelector('.partners .name').textContent = array[1].firstName + ' ' + array[1].secondName;
                    document.querySelector('.partners .position').textContent = array[1].position;
                }
                else if(array[0].index === 2 && array[1].index === 3 && array[2].index === 1) {
                    array = [third, first, second];
                    document.querySelectorAll('.karusel img')[0].setAttribute('src', array[0].image);
                    document.querySelectorAll('.karusel img')[1].setAttribute('src', array[1].image);
                    document.querySelectorAll('.karusel img')[2].setAttribute('src', array[2].image);
                    document.querySelector('.partners .surname').textContent = array[1].lastName;
                    document.querySelector('.partners .name').textContent = array[1].firstName + ' ' + array[1].secondName;
                    document.querySelector('.partners .position').textContent = array[1].position;
                }
                else{
                    array = [first, second, third];
                    document.querySelectorAll('.karusel img')[0].setAttribute('src', array[0].image);
                    document.querySelectorAll('.karusel img')[1].setAttribute('src', array[1].image);
                    document.querySelectorAll('.karusel img')[2].setAttribute('src', array[2].image);
                    document.querySelector('.partners .surname').textContent = array[1].lastName;
                    document.querySelector('.partners .name').textContent = array[1].firstName + ' ' + array[1].secondName;
                    document.querySelector('.partners .position').textContent = array[1].position;
                }
            }, 300);
        }
        function changeRight() {
            setTimeout(function() {
                if(array[0].index === 1 && array[1].index === 2 && array[2].index === 3) {
                    array = [third, first, second];
                    document.querySelectorAll('.karusel img')[0].setAttribute('src', array[0].image);
                    document.querySelectorAll('.karusel img')[1].setAttribute('src', array[1].image);
                    document.querySelectorAll('.karusel img')[2].setAttribute('src', array[2].image);
                    document.querySelector('.partners .surname').textContent = array[1].lastName;
                    document.querySelector('.partners .name').textContent = array[1].firstName + ' ' + array[1].secondName;
                    document.querySelector('.partners .position').textContent = array[1].position;
                    console.log(array[1].index);
                }
                else if(array[0].index === 3 && array[1].index === 1 && array[2].index === 2) {
                    array = [second, third, first];
                    document.querySelectorAll('.karusel img')[0].setAttribute('src', array[0].image);
                    document.querySelectorAll('.karusel img')[1].setAttribute('src', array[1].image);
                    document.querySelectorAll('.karusel img')[2].setAttribute('src', array[2].image);
                    document.querySelector('.partners .surname').textContent = array[1].lastName;
                    document.querySelector('.partners .name').textContent = array[1].firstName + ' ' + array[1].secondName;
                    document.querySelector('.partners .position').textContent = array[1].position;   
                    console.log(array[1].index);
                }
                else{
                    array = [first, second, third];
                    document.querySelectorAll('.karusel img')[0].setAttribute('src', array[0].image);
                    document.querySelectorAll('.karusel img')[1].setAttribute('src', array[1].image);
                    document.querySelectorAll('.karusel img')[2].setAttribute('src', array[2].image);
                    document.querySelector('.partners .surname').textContent = array[1].lastName;
                    document.querySelector('.partners .name').textContent = array[1].firstName + ' ' + array[1].secondName;
                    document.querySelector('.partners .position').textContent = array[1].position;
                    console.log(array[1].index);
                }
            }, 300);
        }
        function showCover() {
            var coverDiv = document.createElement('div');
            coverDiv.id = 'cover-div';
            document.body.appendChild(coverDiv);
        }

        function hideCover() {
            document.body.removeChild(document.getElementById('cover-div'));
        }

        function showPrompt(text, callback) {
            showCover();
            var form = document.getElementById('prompt-form');
            var container = document.getElementById('prompt-form-container');
            document.getElementById('prompt-message').innerHTML = text;
            //form.elements.value = '';

            function complete(value) {
                hideCover();
                container.style.display = 'none';
                document.onkeydown = null;
                callback(value);
            }

            form.onsubmit = function() {
                var value = form.elements.text.value;
                if (value == '') return false; // игнорировать пустой submit

                complete(value);
                return false;
            };

            form.elements.cancel.onclick = function() {
                complete(null);
            };

            document.onkeydown = function(e) {
                if (e.keyCode == 27) { // escape
                    complete(null);
                }
            };

            var lastElem = form.elements[form.elements.length - 1];
            var firstElem = form.elements[0];

            lastElem.onkeydown = function(e) {
                if (e.keyCode == 9 && !e.shiftKey) {
                    firstElem.focus();
                    return false;
                }
            };

            firstElem.onkeydown = function(e) {
                if (e.keyCode == 9 && e.shiftKey) {
                    lastElem.focus();
                    return false;
                }
            };

            container.style.display = 'block';
            form.elements.text.focus();
        }

        document.getElementById('show-button').onclick = function() {
            showPrompt("Заполните форму - вам перезвонят:", function(value) {
                alert("Вы ввели: " + value);
            });
        };
            
        var form;
        function initiate() {
            var button = document.getElementById("send");
            button.addEventListener("click", sendit);
            form = document.querySelector("form[name='callback_request']");
            form.addEventListener("invalid", validation, true);
            form.addEventListener("input", checkval);
        }
        function validation(event) {
            var element = event.target;
            element.style.background = "#FFDDDD";
        }
        function sendit() {
            var valid = form.checkValidity();
            if (valid) {
                form.submit();
            }
        }
        function checkval(event) {
            var element = event.target;
            if (element.validity.valid) {
                element.style.background = "#FFFFFF";
            }
            else{
                element.style.background = "#FFDDDD";
            }   
        }
        window.addEventListener("load", initiate);
    </script>