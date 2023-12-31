# Web Project

#### ***Kurulum için yapılması gerekenler:***
 1. Yeni bir terminal açıp aşağıdaki kodu çalıştırın:
 `composer install`
 
 2.  Site verilerinin düzgün kullanılabilmesi için `laravel_web` adında MySQL veritabanı oluşturun.

 3. Repository içinde paylaşılan veritabanını, oluşturduğunuz veritabanının içine aktarın.

 4. `.env` dosyası içinde `DB_DATABASE=` bölümüne `laravel_web` yazın.
 
 5. 505 Server Error hatası almamak için terminale:
 `php artisan key:generate` kodunu yapıştırıp, çalıştırın.
 
 
 6. Son olarak`php artisan serve` kodunu çalıştırdıktan sonra projeyi inceleyebilirsiniz. http://127.0.0.1:8000/
#### Dipnot

> Bu web projesi **Jengal Yazılım** Şirketindeki **Back-End Developer
> Stajyer** başvurusu kapsamında yapılan başvuruya karşılık
> yüklenmiştir. Başka başvurularda kullanmak için kopyalanması etik olmamakla beraber rızam yoktur.
