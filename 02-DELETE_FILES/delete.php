<?php
use App\Http\Controllers\File;

use App\Post;
use App\Image;

..
..
..

*/
public function destroy($id)
{
    $post = Post::find($id);
    $path = public_path() . '/img/posts/';
    $imagen=Image::where('post_id','LIKE','%'.$post->id.'%')->first();
    $name=$imagen->name;
    \File::delete($path.$name);
    $post-> delete();
    return redirect()->route('posts.index')-> with('mensaje1',"Se ha eliminado a $post->title correctamente ");
}

