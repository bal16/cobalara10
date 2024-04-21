<?php

namespace App\Models;



class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => 'judul-post-pertama',
            "author" => "Ahmad Hamid Balya",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis quas maxime, nostrum laboriosam debitis, magni optio deleniti, facere nesciunt voluptatibus culpa repudiandae ex. Ipsa ratione, veniam odit voluptatum reiciendis inventore aspernatur nesciunt dolor beatae amet distinctio praesentium maiores atque accusantium quod vel a cum ea modi ullam totam ipsum quo aliquid. Labore voluptatibus eos, laborum asperiores optio facilis non cum ab delectus possimus rerum officia sed perferendis sapiente quae magni ex voluptate accusamus. Consequuntur maxime inventore repellat, accusamus aspernatur et."
        ],
        [
            "title" => "Judul Post KEDUA",
            "slug" => 'judul-post-kedua',
            "author" => "FM NANA",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, ad in. Veniam maxime sed reprehenderit laborum, tempora corporis fugiat enim maiores magnam recusandae! Iste distinctio optio pariatur suscipit possimus maxime fugit molestias doloribus consequatur, excepturi ipsum quas perspiciatis accusamus in, cumque explicabo cum nesciunt debitis voluptas amet, harum dolorum nulla eius minima! Eligendi minima totam officiis amet ipsa nobis est asperiores praesentium sint doloribus, omnis, odio quam. Dolores, ullam voluptatum sed voluptates explicabo libero quibusdam quaerat dolore! Consequuntur tenetur quidem laboriosam minus numquam eius praesentium possimus modi voluptate. Accusantium enim dolorem corrupti quis ullam possimus reiciendis animi deserunt exercitationem quia?"
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }

}
