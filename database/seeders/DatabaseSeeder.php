<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(30)->create();
        User::factory(68)->unverified()->create();
        User::factory(2)->admin()->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Post::create(
            [
                'title' => 'Freya JKT48: The Shining Star in the Idol Universe',
                'author' => 'Freyanation',
                'slug' => 'freya-jkt48-the-shining-star-in-the-idol-universe',
                'body' => 'Freya JKT48 has quickly risen to become one of the brightest stars in the idol world. Known for her stunning performances and charming personality, Freya has captured the hearts of fans across Indonesia. Her journey with JKT48 has been nothing short of remarkable, showcasing her talent and dedication.
                From her debut, Freya showed immense potential. Her dance moves and vocal abilities set her apart, making her a standout member of the group. Her charisma on stage is undeniable, drawing fans in with every performance. Freya\'s versatility allows her to excel in various aspects of idol activities, from singing and dancing to acting and modeling.
                Off stage, Freya\'s interactions with fans have endeared her to many. She is known for her kindness and genuine connection with her supporters. Through social media and fan events, Freya maintains a close relationship with her fans, sharing glimpses of her life and career. Her dedication to her fans is evident, making her a beloved figure in the JKT48 community.
                Freya\'s hard work and determination continue to pay off. She has been involved in numerous successful projects, including singles, concerts, and TV appearances. Each project showcases her growth as an artist and her commitment to excellence. Freya\'s influence extends beyond JKT48, inspiring many young girls to pursue their dreams in the entertainment industry.
                As Freya\'s star continues to rise, her future looks incredibly bright. With her talent, charisma, and dedication, there\'s no doubt that she will achieve even greater success. Fans eagerly anticipate what Freya will accomplish next, confident that she will continue to shine brightly in the idol universe.',
            ],
        );
        Post::create(
            [
                'title' => 'Gita JKT48: A Journey of Passion and Talent',
                'author' => 'Gitroopers',
                'slug' => 'gita-jkt48-a-journey-of-passion-and-talent',
                'body' => 'Gita JKT48 has made a significant impact in the idol world with her passion and talent. Her journey with JKT48 has been a testament to her dedication and hard work. From the beginning, Gita has shown that she is a force to be reckoned with, captivating fans with her performances and personality.
                Gita\'s talent is evident in every performance. Her powerful vocals and dynamic dance moves set her apart, making her a key member of JKT48. Gita\'s ability to convey emotion through her performances resonates with fans, creating memorable and impactful moments on stage. Her versatility allows her to excel in various genres of music and styles of dance.
                Beyond her performances, Gita\'s interactions with fans have made her a beloved member of JKT48. She is known for her approachable and friendly nature, often taking the time to connect with her supporters. Gita\'s genuine personality shines through in her social media posts and fan events, creating a strong bond with her fans.
                Gita\'s dedication to her craft is evident in her continuous growth as an artist. She has been involved in numerous projects, each showcasing her development and versatility. From singles and albums to concerts and TV shows, Gita\'s contributions to JKT48 are significant. Her hard work and perseverance have earned her recognition and admiration from both fans and peers.
                Looking ahead, Gita\'s future in the entertainment industry looks promising. Her talent, passion, and dedication will undoubtedly lead to even greater achievements. Fans are excited to see what Gita will accomplish next, confident that she will continue to shine and inspire others with her journey.',
            ],
        );
        Post::create(
            [
                'title' => 'Gressel JKT48: A Rising Star in the Idol Scene',
                'author' => 'Gresselers',
                'slug' => 'gressel-jkt48-a-rising-star-in-the-idol-scene',
                'body' => 'Gressel JKT48 has quickly become a rising star in the idol scene. Her journey with JKT48 has been marked by incredible performances and a growing fanbase. Gressel\'s unique charm and talent have made her a standout member of the group, earning her recognition and admiration from fans and peers alike.
                From her debut, Gressel has shown exceptional talent in both singing and dancing. Her performances are characterized by energy and precision, captivating audiences with every move. Gressel\'s ability to connect with the audience through her performances sets her apart, creating memorable and impactful moments on stage.
                Off stage, Gressel\'s interactions with fans have endeared her to many. She is known for her warm and friendly personality, often engaging with fans through social media and events. Gressel\'s genuine connection with her supporters has created a strong and loyal fanbase, who eagerly follow her journey with JKT48.
                Gressel\'s dedication to her craft is evident in her continuous growth and development as an artist. She has been involved in various projects, each showcasing her talent and versatility. From singles and albums to concerts and TV appearances, Gressel\'s contributions to JKT48 are significant. Her hard work and perseverance have earned her recognition and respect in the idol community.
                Looking to the future, Gressel\'s career in the entertainment industry looks incredibly promising. With her talent, charisma, and dedication, there is no doubt that she will achieve even greater success. Fans eagerly anticipate what Gressel will accomplish next, confident that she will continue to shine brightly in the idol scene.',
            ],
        );
        Post::create(
            [
                'title' => 'Michie JKT48: The Epitome of Grace and Talent',
                'author' => 'Michiers',
                'slug' => 'm-for-michie',
                'body' => 'Michie JKT48 embodies grace and talent, making her a standout member of the group. Her journey with JKT48 has been marked by stunning performances and a growing fanbase. Michie\'s elegance and skill have made her a beloved figure in the idol world, earning her recognition and admiration from fans and peers alike.
                From her debut, Michie has shown exceptional talent in both singing and dancing. Her performances are characterized by poise and precision, captivating audiences with every move. Michie\'s ability to convey emotion through her performances sets her apart, creating memorable and impactful moments on stage.
                Off stage, Michie\'s interactions with fans have endeared her to many. She is known for her warm and kind personality, often engaging with fans through social media and events. Michie\'s genuine connection with her supporters has created a strong and loyal fanbase, who eagerly follow her journey with JKT48.
                Michie\'s dedication to her craft is evident in her continuous growth and development as an artist. She has been involved in various projects, each showcasing her talent and versatility. From singles and albums to concerts and TV appearances, Michie\'s contributions to JKT48 are significant. Her hard work and perseverance have earned her recognition and respect in the idol community.
                Looking to the future, Michie\'s career in the entertainment industry looks incredibly promising. With her talent, grace, and dedication, there is no doubt that she will achieve even greater success. Fans eagerly anticipate what Michie will accomplish next, confident that she will continue to shine brightly in the idol world.',
            ],
        );
        Post::create(
            [
                'title' => 'Flora JKT48: A Journey of Dedication and Talent',
                'author' => 'Florisen',
                'slug' => 'flora-jkt48-a-journey-of-dedication-and-talent',
                'body' => 'Flora JKT48 has made a significant impact in the idol world with her dedication and talent. Her journey with JKT48 has been a testament to her hard work and passion. From the beginning, Flora has shown that she is a force to be reckoned with, captivating fans with her performances and personality.
                Flora\'s talent is evident in every performance. Her powerful vocals and dynamic dance moves set her apart, making her a key member of JKT48. Flora\'s ability to convey emotion through her performances resonates with fans, creating memorable and impactful moments on stage. Her versatility allows her to excel in various genres of music and styles of dance.
                Beyond her performances, Flora\'s interactions with fans have made her a beloved member of JKT48. She is known for her approachable and friendly nature, often taking the time to connect with her supporters. Flora\'s genuine personality shines through in her social media posts and fan events, creating a strong bond with her fans.
                Flora\'s dedication to her craft is evident in her continuous growth as an artist. She has been involved in numerous projects, each showcasing her development and versatility. From singles and albums to concerts and TV shows, Flora\'s contributions to JKT48 are significant. Her hard work and perseverance have earned her recognition and admiration from both fans and peers.
                Looking ahead, Flora\'s future in the entertainment industry looks promising. Her talent, passion, and dedication will undoubtedly lead to even greater achievements. Fans are excited to see what Flora will accomplish next, confident that she will continue to shine and inspire others with her journey.',
            ],
        );
        Post::factory(195)->create();
    }
}
