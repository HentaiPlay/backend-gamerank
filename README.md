## Описание:

Проектик написан на Laravel 8 + Nuxt (SSR mode), представляет собой мини рейтинговую площадку для игр.

Фронтенд (скорее функционал в целом):

* Есть возможность зарегистрироваться / авторизоваться, это дает доступ к комментированию и возможности оставлять оценку на игру, тем самым влияя на общий рейтинг игры (используется nuxt/auth -> laravel-sanctum)
* Есть личный кабинет где можно поменять аватарку, загрузив свою
* Есть страница с списком игр, где их можно фильтровать по категориям.
* На странице самой игры есть информация о разработчиках, как и на странице разработчиков есть список их игр
* Так же есть скриншоты к игре (используется vue-cool-lightbox)
* К игре имеются комментарии (используется vue-CKEditor)
* Есть так же "звездочки" для оценки игры (используется vue-star-rating)
* Медиа файлы (всякие картинки) шибко не оптимизирвал и сами респонсы не быстро приходят из за лишних подзапросов (ниже опишу)
* При первом неавторизованном запуске может вывалиться 401 ошибка, но ничего страшного (пока не разобрался как исправить)
* В качестве UI используется vuetify

Бэкенд: 

* Для удобства создал seeder-ы, поэтому при первом запуске миграции нужно сразу просидировать всю БД (БД файла в репозиториях нет)
* В сидах уже есть несколько пользователей со своими оценками и комментариями, можно зайти с их аккаунтов или зарегать свой и потом с него войти
* Медиа файлы (картинки) хранятся в storage, возможно при развертывании придется создать ссылку на него (php artisan storage:link)
* БД как несложно догадаться реляционное, связи расписывать не буду, лучше посмотреть сразу в проекте
* Есть костыль в виде slug-а в url игры и по хорошему там должен быть id, что бы избежать лишних запросов в модель игры (это станет сразу ясно как откроете контроллер комментариев или рейтинга, знаю что так делать нельзя), но так как проект маленький и это не сильно заметно, исправлять я это не стал. Возможно чуть позже сделаю кэширование запросов
* В .env для нормальной работы sanctum нужно указать (SANCTUM_STATEFUL_DOMAINS=localhost:3000, SESSION_DOMAIN=localhost, SESSION_DOMAIN=localhost)
* В config/cors добавить ('paths' => ['api/*', 'sanctum/csrf-cookie'])

В целом интуитивно разобраться тут можно, в силу небольшого масштаба. Над интерфейсом особо не потел, поэтому адаптива нет, наиболее комфортное расширение от 1200px.

Скриншоты (для понимания как должно быть):
<p align="center">
<img width="19%" src="https://sun9-9.userapi.com/impg/lcwfiE8PBvsUThZefpaVEwgu_LRvkVEAR2iodw/prn48tHOnB8.jpg?size=1206x897&quality=96&sign=c92c510024a956af5a4f20a84ecfa907&type=album">
<img width="19%" src="https://sun9-69.userapi.com/impg/PfW4cgaIsAHECWpFWm6whOpJXWiV66Sm-DgrRw/dNFdF-5M0p4.jpg?size=1209x897&quality=96&sign=39d3542fe53308973f1a1723cf2aa1bd&type=album">
<img width="19%" src="https://sun9-63.userapi.com/impg/pUvqW4fHWzldUsfu0Zb6Rw2LvZu5k0fWyEauyA/qAxtndgyVA4.jpg?size=1211x898&quality=96&sign=487444d5ec64cc5de327c006a6ee3890&type=album">
<img width="19%" src="https://sun9-58.userapi.com/impg/QdfIN01CoEacXYw9ZkjfuQlJljz0GnHvDU4z9Q/YW2kSUCPg2s.jpg?size=1209x900&quality=96&sign=efc7977200482b7273aa45f78ee1c024&type=album">
<img width="19%" src="https://sun9-18.userapi.com/impg/0KeuFH8PPaj5CX5TyPhtvbHmag7gx2ftb5FNKg/i5hBdh-eusI.jpg?size=1209x892&quality=96&sign=4fbc266458d4fff57b30f1a35d293b71&type=album">
</p>

<hr />

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
