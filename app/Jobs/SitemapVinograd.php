<?php

namespace App\Jobs;

use App\Models\Blog\Category as BlogCategory;
use App\Models\Blog\Post;
use App\Models\Vinograd\Category;
use App\Models\Vinograd\Page;
use App\Models\Vinograd\Product;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class SitemapVinograd implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function handle()
    {
        $base = '<?xml version="1.0" encoding="UTF-8"?><urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"></urlset>';
        $xmlbase = new \SimpleXMLElement($base);
        $row = $xmlbase->addChild("url");
        $row->addChild("loc", env('APP_URL', 'https://vinograd-minsk.by'));
        $row->addChild("lastmod", date("c"));
        $row->addChild("changefreq", "monthly");
        $row->addChild("priority", "1");

        $this->addChild($xmlbase, route('vinograd.category'));
        $categorys = Category::select('id', 'slug')->get();
        foreach ($categorys as $category)
        {
            $this->addChild($xmlbase, route('vinograd.category.category', ['slug' => $category->slug]));

            $products = Product::where('category_id', $category->id)->active()->get();
            foreach ($products as $product)
            {
                $this->addChild($xmlbase, route('vinograd.product', ['slug' => $product->slug]));
            }
        }

        $this->addChild($xmlbase, route('blog.home'));
        $categorys = BlogCategory::select('id', 'slug')->get();
        foreach ($categorys as $category)
        {
            $this->addChild($xmlbase, route('blog.category', ['slug' => $category->slug]));

            $posts = Post::where('category_id', $category->id)->active()->get();
            foreach ($posts as $post)
            {
                $this->addChild($xmlbase, route('blog.post', ['slug' => $post->slug]));
            }
        }

        $pages = Page::active()->get();
        foreach ($pages as $page)
        {
            $this->addChild($xmlbase, route('vinograd.page', ['slug' => $page->slug]));
        }

        $this->addChild($xmlbase, route('vinograd.contactForm'));

        $xmlbase->saveXML(public_path("sitemap.xml"));
    }

    public function addChild ($xmlbase, $route)
    {
        $row = $xmlbase->addChild("url");
        $row->addChild("loc", $route);
        //$row->addChild("lastmod", date("Y-m-d\TH:i:s+02:00"));
        $row->addChild("priority", "0.5");
    }
}
