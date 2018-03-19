<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        form {
            width: 350px;
        }
        form * {
            font-family: Roboto;
            display: block;
            margin-bottom: 5%;
            font-size: .75rem;
        }
        input {
            width: 100%;
            padding: 3% 1% 3%;
            font-style: italic;
            border: 2px #f3f3f3 solid;
        }
        
        textarea {
            resize: vertical;
            width: 100%;
            padding: 3% 1% 3%;
            font-style: italic;
            border: 2px #f3f3f3 solid;
        }
        form button {
            display: block;
            text-align: center;
            width: 45.5%;
            background-color: #be2228;
            color: #f1f1f3;
            font-family: Roboto;
            font-size: .75rem;
            margin: 0 auto;
            border: none;
            padding: 3% 9.75%;
            margin-top: 3%;
        }
        form button:disabled {
            background-color: darkgrey;
            color: black;
        }
    </style>
</head>
<body>
    <form id="prompt-form" autocomplete="off">
       
        <input name="name" type="text" placeholder="Введите ваше имя:" patterm="[А-Яа-яЁё]{3,}">
        
        <input name="phone" type="phone" placeholder="Укажите номер для связи без '+':">
        <input type="email" placeholder="либо email">
        
        <textarea name="text" id="" cols="30" rows="10" placeholder="Введите текст:"></textarea>
        <button name="submit" disabled>ОТПРАВИТЬ</button>
        
        <button name="cancel">ОТМЕНА</button>
        
    </form>
    <script>
        var form = document.querySelector('form');
        var inputName = document.querySelector('[name="name"]');
        var phone = document.querySelector('[name="phone"]');
        var email = document.querySelector('[type="email"]');
        var textarea = document.querySelector('[name="text"]');
        var button = document.querySelector('[name="submit"]');
        
        function validation() {
            var valid = false;
            var validName = false;
            var validVariable = false;
            var span = document.createElement('span');
            span.style.color = 'red';
            var errorMessage;
                inputName.oninput = function() {
                    var reg = /^[А-Яа-яЁё\s]+$/;
                    if(this.value !== '')  {
                        if(!reg.test(this.value)) {
                            this.style.borderColor = 'red';
                            errorMessage = 'Используй русские символы';
                            span.innerHTML = errorMessage;
                            form.insertBefore(span, form.children[1]);
                        }
                        else {
                            this.style.borderColor = '#f3f3f3';
                            this.style.color = 'black';
                            span.remove();
                            validName = true;
                        }
                    }
                    else {
                        validName = false;
                        this.style.borderColor = 'red';
                        errorMessage = 'Укажите ваше имя';
                        span.innerHTML = errorMessage;
                        form.insertBefore(span, form.children[1]);
                    }
                }
                phone.oninput = function() {
                    var reg = /^\d[\d\(\)\ -]{4,14}\d$/;
                    if(this.value !== '')  {
                        if(!reg.test(this.value)) {
                            this.style.borderColor = 'red';
                            errorMessage = 'Неправильный формат номера';
                            span.innerHTML = errorMessage;
                            form.insertBefore(span, form.children[2]);
                        }
                        else {
                            this.style.borderColor = '#f3f3f3';
                            this.style.color = 'black';
                            span.remove();
                        }
                    }
                    else {
                        this.style.borderColor = '#f3f3f3';
                        this.style.color = 'black';
                        span.remove();
                    }
                }
                email.oninput = function() {
                    var reg = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))+$/;
                    if(this.value !== '')  {
                        if(!reg.test(this.value)) {
                            this.style.borderColor = 'red';
                            errorMessage = 'Неправильный формат электронного адресаff';
                            span.innerHTML = errorMessage;
                            form.insertBefore(span, form.children[3]);
                        }
                        else {
                            this.style.borderColor = '#f3f3f3';
                            this.style.color = 'black';
                            span.remove();
                        }
                    }
                    else {
                        this.style.borderColor = '#f3f3f3';
                        this.style.color = 'black';
                        span.remove();
                    }
                }
                form.oninput = function() {
                    console.log(valid);
                    if(validName && (phone.value ==! '') ) {
                        errorMessage = 'Укажите либо email, либо номер телефона';
                        span.innerHTML = errorMessage;
                        form.insertBefore(span, form.children[3]);
                        valid = false;
                        button.setAttribute('disabled', 'false')
                    }
                    if(valid) button.removeAttribute('disabled');
                }
            
        }
        validation();
    </script>
</body>
</html>
