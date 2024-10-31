### What the Hell

Проект создан для Гильдии в MMORPG игре Royal Quest
<br>
<br>
Для обновления файлов хостинга

1. Обновите `master` до нужного состояния
2. Сделайте `npm run build` у себя локально
3. Перейдите на хостинг и в папке с проектом сделайте `git pull`
4. После этого выполните миграции `php artisan migrate`
5. (Так же запустите сидеры если требуется)
6. Удалите старый build на проекте, и загрузите новый
7. Обновите папку assets, если требуется

### Если вы разворачиваете у себя проект
1. Клонируйте проект `git clone https://github.com/Linsaym/WhatTheHell`
2. Установите все модули `composer install` & `npm install`
3. Сгенерируйте ключ `php artisan key:generate`
4. Выполните все нужные сидеры из /database/seeders

P.s. У вас должен быть устоновлен <a href="https://getcomposer.org/">Composer</a> и <a href="https://getcomposer.org/">Node.js</a>,<br>
а так же поднят MySQL и Apache(PHP). Сделать это можно с помощью <a href="https://www.apachefriends.org/ru/index.html">XAMPP</a>
