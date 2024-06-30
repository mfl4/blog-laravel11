<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

class Post
{
    public static function all(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'The Caramel Girl',
                'author' => 'Freyanation',
                'slug' => 'the-caramel-girl',
                'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet consequatur eum veniam quas doloribus,animi quisquam quia amet tempora cumque asperiores aliquid maiores quidem laboriosam aut unde, facere voluptatem distinctio nostrum cupiditate, nihil veritatis magni accusamus. Ipsam beatae ea enim fugiat dolores deserunt quam voluptates, aliquid fugit temporibus animi sapiente fuga rerum, necessitatibus adipisci? Provident, molestias dignissimos. Nesciunt minus natus, atque molestias est cupiditate suscipit, deserunt velit ex dolorem molestiae, facere iusto fugiat quae. Id adipisci commodi aliquam, officiis eligendi dolorem voluptas velit quibusdam, cupiditate provident repudiandae minima consequatur in vitae, quasi sapiente impedit quam! Modi corrupti cupiditate obcaecati eaquefafa.',
            ],
            [
                'id' => 2,
                'title' => 'The Flora World',
                'author' => 'Florisen',
                'slug' => 'the-flora-world',
                'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet consequatur eum veniam quas doloribus,animi quisquam quia amet tempora cumque asperiores aliquid maiores quidem laboriosam aut unde, facere voluptatem distinctio nostrum cupiditate, nihil veritatis magni accusamus. Ipsam beatae ea enim fugiat dolores deserunt quam voluptates, aliquid fugit temporibus animi sapiente fuga rerum, necessitatibus adipisci? Provident, molestias dignissimos. Nesciunt minus natus, atque molestias est cupiditate suscipit, deserunt velit ex dolorem molestiae, facere iusto fugiat quae. Id adipisci commodi aliquam, officiis eligendi doloremsdfsdfs voluptas velit quibusdam, cupiditate provident repudiandae minima consequatur in vitae, quasi sapiente impedit quam! Modi corrupti cupiditate obcaecati eaque.',
            ],
            [
                'id' => 3,
                'title' => 'Cool but Sweet',
                'author' => 'Gitroopers',
                'slug' => 'cool-but-sweet',
                'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet consequatur eum veniam quas doloribus,animi quisquam quia amet tempora cumque asperiores aliquid maiores quidem laboriosam aut unde, facere voluptatem distinctio nostrum cupiditate, nihil veritatis magni accusamus. Ipsam beatae ea enim fugiat dolores deserunt quam voluptates, aliquid fugit temporibus animi sapiente fuga rerum, necessitatibus adipisci? Provident, molestias dignissimos. Nesciunt minus natus, fsfsfsadfatque molestias est cupiditate suscipit, deserunt velit ex dolorem molestiae, facere iusto fugiat quae. Id adipisci commodi aliquam, officiis eligendi dolorem voluptas velit quibusdam, cupiditate provident repudiandae minima consequatur in vitae, quasi sapiente impedit quam! Modi corrupti cupiditate obcaecati eaque.',
            ],
            [
                'id' => 4,
                'title' => 'M for Michie',
                'author' => 'Michiers',
                'slug' => 'm-for-michie',
                'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet consequatur eum veniam quas doloribus,animi quisquam quia amet tempora cumque asperiores aliquid maiores quidem laboriosam aut unde, facere voluptatem distinctio nostrum cupiditate, nihil veritatis magni accusamus. Ipsam beatae ea enim fugiat dolores deserunt quam voluptates, aliquid fugit temporibus animi sapiente fuga rerum, necessitatibus adipisci? Provident, molestias dignissimos. Nesciunt minus natus, fsfsfsadfatque molestias est cupiditate suscipit, deserunt velit ex dolorem molestiae, facere iusto fugiat quae. Id adipisci commodi aliquam,mmfdmfdmfm officiis eligendi dolorem voluptas velit quibusdam, cupiditate provident repudiandae minima consequatur in vitae, quasi sapiente impedit quam! Modi corrupti cupiditate obcaecati eaque.',
            ],
            [
                'id' => 5,
                'title' => 'Rich and Adorable',
                'author' => 'Gresselation',
                'slug' => 'rich-and-adorable',
                'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet consequatur eum veniam quas doloribus,animi quisquam quia amet tempora cumque asperiores aliquid maiores quigdrewdem laboriosam aut unde, facere voluptatem distinctio nostrum cupiditate, nihil veritatis magni accusamus. Ipsam beatae ea enim fugiat dolores deserunt quam voluptates, aliquid fugit temporibus animi sapiente fuga rerum, necessitatibus adipisci? Provident, molestias dignissimos. Nesciunt minus natus, fsfsfsadfatque molestias est cupiditate suscipit, deserunt velit ex dolorem molestiae, facere iusto fugiat quae. Id adipisci commodi aliquam,mmfdmfdmfm officiis eligendi dolorem voluptas velit quibusdam, cupiditate provident repudiandae minima consequatur in vitae, quasi sapiente impedit quam! Modi corrupti cupiditate obcaecati eaque.',
            ],
        ];
    }
}

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home', [
        'title' => 'Home',
    ]);
});

Route::prefix('/posts')->group(function () {
    Route::get('/', function () {
        return view('posts', [
            'title' => 'Blog',
            'posts' => Post::all(),
        ]);
    });

    Route::get('/{slug}', function ($slug) {
        $post = Arr::first(Post::all(), function ($post) use ($slug) {
            return $post['slug'] === $slug;
        });

        return view('post', [
            'title' => 'Blog - ' . $post['title'],
            'post' => $post,
        ]);
    });
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'name' => 'Freyable',
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Contact',
    ]);
});
