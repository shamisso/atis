<?php?>
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
        .response {
            width: 350px;
        }
    </style>
</head>
<body>
    <div class="response" hidden></div>
    <form id='callbackform' id="prompt-form" autocomplete="off">
       
        <input name="name" type="text" placeholder="Введите ваше имя:">
        
        <input name="phone" type="phone" placeholder="Укажите номер для связи без '+':">
        <input name = "email" placeholder="либо email">
        
        <textarea name="textarea" id="" cols="30" rows="10" placeholder="Введите текст:"></textarea>
        <button name="submit" disabled type="button">ОТПРАВИТЬ</button>
        
        <button name="cancel" type="button">ОТМЕНА</button>
        
    </form>
    <script>
        var div = document.querySelector('div');
        var form = document.querySelector('form');
        var formValid;
        var inputName = document.querySelector('[name="name"]');
        var phone = document.querySelector('[name="phone"]');
        var email = document.querySelector('[name="email"]');
        var textarea = document.querySelector('[name="textarea"]');
        var button = document.querySelector('[name="submit"]');
        
        function validation() {
            var valid = false;
            var validName = false;
            var validVariable = false;
            var validPhone = false;
            var validEmail = false;
            var span = document.createElement('span');
            span.style.color = 'red';
            var errorMessage;
                inputName.oninput = function() {
                    var reg = /^[А-Яа-яЁё\s]+$/;
                    if(this.value !== '')  {
                        if(!reg.test(this.value)) {
                            this.style.borderColor = 'red';
                            errorMessage = 'Используйте русские символы';
                            span.innerHTML = errorMessage;
                            span.classList.add('error');
                            form.insertBefore(span, form.children[0]);
                            validName = false;
                        }
                        else {
                            var error = document.querySelector('.error');
                            this.style.borderColor = '#f3f3f3';
                            this.style.color = 'black';
                            if(error) error.remove();
                            validName = true;
                        }
                    }
                    else {
                        validName = false;
                        this.style.borderColor = 'red';
                        errorMessage = 'Укажите ваше имя';
                        span.innerHTML = errorMessage;
                        form.insertBefore(span, form.children[0]);
                    }
                }
                phone.oninput = function() {
                    var reg = /^\d[\d\(\)\ -]{4,14}\d$/;
                    if(this.value !== '')  {
                        if(!reg.test(this.value)) {
                            validPhone = false;
                            this.style.borderColor = 'red';
                            errorMessage = 'Введите от 5 до 10 цифр без знака +';
                            span.innerHTML = errorMessage;
                            form.insertBefore(span, form.children[2]);
                        }
                        else {
                            this.style.borderColor = '#f3f3f3';
                            this.style.color = 'black';
                            span.remove();
                            validPhone = true;
                        }
                    }
                    else {
                        validPhone = false;
                        this.style.borderColor = '#f3f3f3';
                        this.style.color = 'black';
                        span.remove();
                        validPhone = false;
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
                            validEmail = false;
                        }
                        else {
                            this.style.borderColor = '#f3f3f3';
                            this.style.color = 'black';
                            span.remove();
                            validEmail = true;
                        }
                    }
                    else {
                        this.style.borderColor = '#f3f3f3';
                        this.style.color = 'black';
                        span.remove();
                        validEmail = false;
                    }
                }
                form.oninput = function() {
                    if(validEmail === false && validPhone === false) validVariable = false;
                    if(validEmail === false && validPhone === true) validVariable = true;
                    if(validEmail === true && validPhone === false) validVariable = true;
                    if(validVariable === true && validName === true) valid = true;
                    else valid = false;
                    if(!valid) {
                        button.setAttribute('disabled', 'true');
                        formValid = false;
                    }
                    if(valid) {
                        button.removeAttribute('disabled');
                        formValid = true;
                    }
                }
            
        }
        validation();
        function send(formName, formData) {
            var data = new FormData;
            data.append(formName, formData);
            var url = 'http://localhost/atis/test2.php';
            var request = new XMLHttpRequest();
            request.open("POST", url, true);
            request.send(data);
            request.onload = function() {
                if(request.status == 200) {
                div.removeAttribute('hidden');
                div.innerHTML = request.responseText;
            }
            }
            console.log(formName);
            console.log(formData);
        }
        button.onclick = function() {
            if(formValid) {
                var array = [inputName, phone, email, textarea];
                var data = {};
                data['formname'] = form.id;
                array.forEach(function(item) {
                    if(item.value !== '') data[item.name] = item.value;
                })
                data = JSON.stringify(data);
                send(form.id, data);
            }
        }
    </script>
</body>
</html>
