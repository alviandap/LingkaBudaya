<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::created([
            'name' => 'admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin12345')
        ]);

        Post::create([
            'title' => 'Sejarah Jakarta',
            'category_id' => 1,
            'link' => 'https://www.youtube.com/watch?v=1L5PsgMXbXA&t=79s',
            'slug' => 'sejarah-jakarta',
            'body' => '<p>Jakarta  atau secara resmi bernama Daerah Khusus Ibukota Jakarta (disingkat DKI Jakarta) adalah ibu kota negara dan kota terbesar di Indonesia. Menurut sistem pembagian administratif Indonesia, Jakarta merupakan provinsi dengan status daerah khusus. Sementara menurut pengertian secara umum, Jakarta merupakan kota metropolitan. Jakarta terletak di pesisir bagian barat laut Pulau Jawa. Dahulu pernah dikenal dengan beberapa nama di antaranya Sunda Kelapa, Jayakarta, dan Batavia. Jakarta juga mempunyai julukan The Big Durian karena dianggap kota yang sebanding New York City (Big Apple) di Indonesia.</p><p>Jakarta pertama kali dikenal sebagai salah satu pelabuhan Kerajaan Sunda yang bernama Sunda Kalapa berlokasi di muara Sungai Ciliwung. Ibu kota Kerajaan Sunda yang dikenal sebagai Dayeuh Pakuan Padjadjaran atau Pajajaran (sekarang Bogor) dapat ditempuh dari pelabuhan Sunda Kalapa selama dua hari perjalanan. Menurut sumber Portugis, Sunda Kalapa merupakan salah satu pelabuhan yang dimiliki Kerajaan Sunda selain pelabuhan Banten, Pontang, Cigede, Tamgara dan Cimanuk. Sunda Kalapa yang dalam teks ini disebut Kalapa dianggap pelabuhan yang terpenting karena dapat ditempuh dari ibu kota kerajaan yang disebut dengan nama Dayo (dalam bahasa Sunda modern: dayeuh yang berarti "ibu kota") dalam tempo dua hari. Kerajaan Sunda sendiri merupakan kelanjutan dari Kerajaan Tarumanagara pada abad ke-5 sehingga pelabuhan ini diperkirakan telah ada sejak abad ke-5 dan diperkirakan merupakan ibu kota Tarumanagara yang disebut Sundapura (bahasa Sanskerta yang berarti "Kota Sunda").</p>'
        ]);


        Category::create([
            'name' => 'DKI Jakarta',
            'slug' => 'dki-jakarta',
            'quotes' => '“Kalo emang ente mau nantangin, eh aye sanggup biar ada perlawanan.”',
            'gambar' => 'https://drive.google.com/drive/folders/1QePYecSCzHkx7hwjlgxhDufSpCTAwC3u',
            'quiz' => 'https://forms.gle/yKisQhoyP7mQ9LsC8'
        ]);

        Category::create([
            'name' => 'Sumatera Utara',
            'slug' => 'sumatera-utara',
            'quotes' => '“Kalo emang ente mau nantangin, eh aye sanggup biar ada perlawanan.”',
            'gambar' => 'https://drive.google.com/drive/folders/1QePYecSCzHkx7hwjlgxhDufSpCTAwC3u',
            'quiz' => 'https://forms.gle/yKisQhoyP7mQ9LsC8'
        ]);
    }
}
