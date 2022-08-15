<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $items = array(
            'Главная' => '',
            'О нас'=>'about',
            'Наша продукция'=>'products',
            'Свяжитесь с нами'=>'Contacts',
        );

        foreach ($items as $key=>$item)
        {
            \App\Models\NavbarItem::create(
                [
                    'name' => $key,
                    'slug' => $item
                ]
            );
        }
        \App\Models\Contacts::create(
            [
                'phone' => '+998993680217',
                'address' => "Мирзо-Улугбекский район,<br/> ТТЗ-4, дом-33, кв-4",
                'email' => 'bobosodikovodiljon@gmail.com',
                'post_code' => '100109'
            ]);

        \App\Models\HeroSection::create(
            [
                'tagline' => "<span class='text-primary'>Инновации</span> в сельское хозяйство!",
                'body' => "i snackwave tilde chillwave ugh. Pour-over meditation PBR&amp;B pickled ennui celiac mlkshk freegan photo booth af fingerstache pitchfork.",
                'image_path' => './img/bg.png',
            ]);

        \App\Models\AboutSection::create(
            [
                'tagline' => "\"Everything is achievable with hard work\"",
                'body' => "<p class='text-base mb-8 italic'>
                        Компания <span class='text-lime-700 font-bold'>«IMPETUS NOVA CHEMICALS»</span> основана в 2019 году и опирается на многолетний опыт Института химии и растительности.
                        Основным родом деятельности Нашей Компании является производство комплексных листовых подкормок, стимуляторов роста растений,
                        а также (с начала 2022 года) регуляторов роста растений для сельского хозяйства нашей республики.
                        Отличительной чертой Наша Компания является инновационный подход к технологии производства и агросопровождения.<br/>
                    </p>
                    <p class='text-base mb-8 italic'>
                        Заботясь об интересах своих потребителей в первую очередь, мы не забыли о здоровье Земли как почвы, так и планеты.
                        Посредством инновационного подхода и усовершенствования методов производства мы нашли способ постепенного сокращения использования “устаревших” минеральных удобрений,
                        и заменили их на более современные, включающие в себя все необходимые для растения микроэлементы и органичекие добавки, которые обеспечивают экологическую безопасность в целом
                        и защищают микрофлору почвы.",
                'image1_path' => '/img/test.jpg',
                'image2_path' => '/img/test2.jpg',
                'image3_path' => '/img/about2.jpg',
            ]);

        $owners = array(
            'Генеральный директор' => 'АШУРОВ У.Р.',
            'Директор производства'=>'БАБАСАДИКОВ Ш.С.',
            'Главный консультант'=>'БОБОСОДИКОВ С.П.',
            'Коммерческий директор'=>'НОРОВ С.М.',
        );
        foreach ($owners as $key=>$owner)
        {
            \App\Models\Owners::create(
                [
                    'name' => $owner,
                    'position'=>$key
                ]);
        }
        $product_categories = array('Хелатные микроудобрения', 'Элсмики','Гуминовые препораты','Регуляторы роста растений','фосфоросодержащая листовая подкормка');
        foreach ($product_categories as $category)
        {
            \App\Models\ProductCategory::create(
                [
                    'name' => $category,
                ]);
        }
        \App\Models\Product::factory(3)->create(["product_category_id" => 1]);
        \App\Models\Product::factory(5)->create(["product_category_id" => 2]);
        \App\Models\Product::factory(4)->create(["product_category_id" => 3]);
        \App\Models\Product::factory(2)->create(["product_category_id" => 4]);
        \App\Models\Product::factory(1)->create(["product_category_id" => 5]);

        \App\Models\VideoSection::create([
            'url' => 'ba9Is7igTn0',
            'title' => 'Отзыв довольного клиента с результатами ДО и ПОСЛЕ',
            'description' => 'На данном видео представлено одно из полевых угодий нашего постоянного покупателя. На данном участке в 1 га было использовано одна упаковка Агроуниверсал и три упаковки Новоамофоса. На видео показано поле До, на котором не использовался препарат и участок После. Видна заметная разница в качестве и количестве посева.'
        ]);

        \App\Models\VideoSection::create([
            'url' => 'uhfoYc4kUzA',
            'title' => 'Метод примения нашей продукции  "комплекс ГЕКТАР"',
            'description' => 'На данном видео представлен, метод использования продукции для 2 га земли. Фермерами использовались три упаковки Новоамофоса, одна упаковка "Комплекс ГЕКТАР" и одна упаковка гуминовой пасты для полива'
        ]);

        \App\Models\VideoSection::create([
            'url' => 'L7LPUjOHPM0',
            'title' => 'Тестирование препарата на поле от 14.07.2021',
            'description' => 'Использование нашего препарата на второй урожай кукурузы методом орошения. Для урожая была использована Гуминовая паста, Новоамофос и "Комплекс ГЕКТАР". Покупатель был доволен результатами продукции'
        ]);
    }
}
