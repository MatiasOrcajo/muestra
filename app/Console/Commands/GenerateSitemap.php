<?php

namespace App\Console\Commands;

use App\Models\Categories;
use App\Models\Products;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Spatie\Sitemap\{Sitemap, SitemapIndex};
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate the sitemap.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
      Log::info('Sitemap creation');
      
      /* --- Sitemap Categorias --- */
      $sitemapCategoriesPath = public_path('sitemap-categorias.xml');
      $categories = Categories::all();
      $sitemapCategories = Sitemap::create();
      $lastModificationDate = null;
      
      foreach ($categories as $category){
          $url = env('APP_URL_FOR_SITEMAP').'/categoria/'.$category->slug;
          $sitemapCategories->add(Url::create($url)->setPriority(0.9)->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)->setLastModificationDate($category->updated_at));
          $lastModificationDate = ($category->updated_at < $lastModificationDate) ? $lastModificationDate : $category->updated_at;
      }
      $sitemapCategories->writeToFile($sitemapCategoriesPath);
      
       /* --- Sitemap Productos --- */
      $sitemapProductsPath = public_path('sitemap-productos.xml');
      $products = Products::all();
      $sitemapProducts = Sitemap::create();
      $lastModificationDate = null;
      
      foreach ($products as $product){
          $url = env('APP_URL_FOR_SITEMAP').'/'.$product->slug;
          $sitemapProducts->add(Url::create($url)->setPriority(0.9)->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)->setLastModificationDate($product->updated_at));
          $lastModificationDate = ($product->updated_at < $lastModificationDate) ? $lastModificationDate : $product->updated_at;
      }
      $sitemapProducts->writeToFile($sitemapProductsPath);
      
       /* --- Sitemap Index --- */
      $sitemapIndexPath = public_path('sitemap-index.xml');
      SitemapIndex::create()
        ->add(url(env('APP_URL_FOR_SITEMAP').'/sitemap-categorias.xml'))
        ->add(url(env('APP_URL_FOR_SITEMAP').'/sitemap-productos.xml'))
        ->writeToFile($sitemapIndexPath);
      
      Log::info('Sitemap of '. Carbon::now()->toDateString().' created');
      
    }
}
