           <main>
            <section class="post">
               <article>
                    <h3><?php if(isset($topic)) echo $topic['title'];
                              else echo $data[0]['title'];?></h3>
                    <p class="publishing-time"><?php if(isset($topic)) echo $topic['date'];
                              else echo $data[0]['date'];?></p>
                    <section>    
                        <img src="src/news/<?php if(isset($topic)) echo $topic['img'];
                              else echo $data[0]['img'];?>" alt="">
                        <p class="new">
                        <?php if(isset($topic)) echo $topic['content'];
                              else echo $data[0]['content'];?>
                    </section>
                </article>
            </section>
            <section class="news-roll">
                <section id="carousel" class="carousel">
                    <div class="arrow prev">
                            <img src="src/elements/left-32.png">
                    </div>
                    <div class="gallery">
                    <ul class="images">
                           <?php for($i = 0; $i < count($data); $i++) {
                            if(isset($topic)){
                                if($topic['id'] == $data[$i]['id']) continue;
                            }
                            echo <<<HTML
                            <li>
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
                            </li>
HTML;
}
?>
                        </ul>
                    </div>
                    <div class="arrow next">
                        <img src="src/elements/right-32.png">
                    </div>
            </section>
            </section>
        </main>
        <script>
            var lis = document.getElementsByTagName('li');
            for (var i = 0; i < lis.length; i++) {
              lis[i].style.position = 'relative';
            }
            var width = 153.333;
            var count = 3;
            var carousel = document.getElementById('carousel');
            var list = carousel.querySelector('ul');
            var listElems = carousel.querySelectorAll('li');

            var position = 0;

            carousel.querySelector('.prev').onclick = function() {
              position = Math.min(position + width * count, 0)
              list.style.marginLeft = position + 'px';
            };

            carousel.querySelector('.next').onclick = function() {

              position = Math.max(position - width * count, -width * (listElems.length - count));
              list.style.marginLeft = position + 'px';
            };
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