<?php

use Illuminate\Database\Seeder;


class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       //        factory(\App\Category::class,5)->create();
//        factory(\App\Product::class,100)->create();
//        factory(\App\ProductImage::class,200)->create();

//Se crean  5 categorias
        $categories = factory(\App\Category::class,5)->create();
        $categories->each(function ($category)
        {
            //Por cada categoria se crean 20 productos
           $products = factory(\App\Product::class,20)->make();
            $category->products()->saveMany($products);

              //Por cada producto se crean 5 imagenes   
            $products->each(function ($p)
            {
                $images = factory(\App\ProductImage::class,5)->make();
                $p->images()->saveMany($images);

            });
        });
    }
}

//Recuerda que en la entidades deben estar anidadad
//Entidad Categorias
 public function products()
    {
        return $this->hasMany(Product::class);

    }
//Entidad Producto

     public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class);

    }


//Entidad ProductoImage

      public function product()
    {
        return $this->belongsTo(Product::class);

    }