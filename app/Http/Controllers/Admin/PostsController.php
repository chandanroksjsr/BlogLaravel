<?php

namespace App\Http\Controllers\Admin;

use App\Categories;
use App\Http\Controllers\Controller;
use App\PostCategories;
use App\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index() {
        $posts = Posts::all();
        return view('admin.posts.index', ['posts' => $posts]);
    }

    public function addPosts() {
        $categories = Categories::all();
        return view('admin.posts.add', ['categories' => $categories]);
    }

    public function addRequestPosts(Request $request) {
        try{
            $this->validate($request, [
                'title' => 'required|string|max:255',
                'content' => 'required'
            ]);
            $objPosts = new Posts();
            $objPostCat = new PostCategories();

            $objPosts = $objPosts->create([
                'title' => $request->title,
                'content' => $request->content
            ]);

            if($objPosts) {
                foreach ($request->categories as $categories_id) {
                    $categories_id = $categories_id;
                    $objPostCat = $objPostCat->create([
                        'categories_id' => $categories_id,
                        'post_id' => $objPosts->id
                    ]);
                }
            }

            if ($objPosts){
                return back()->with('success', 'Пост добавлен');
            }
            return back()->with('error', 'Пост не добавлен');
        } catch (ValidationException $e){
            Log::error($e->getMessage());
            return back()->with('error', $e->getMessage());
        }
    }

    public function editPosts($id) {
        $post = Posts::find($id);
        $categories = Categories::all();

        if (!$post){
            return abort(404);
        }

        $mainCat = $post->categories;
        $arrCat =[];
        foreach ($mainCat as $cat){
            $arrCat[]= $cat->id;
        }

        return view('admin.posts.edit', ['post' =>$post, 'categories' => $categories, 'arrCat' => $arrCat]);
    }

    public function editRequestPosts(Request $request, $id) {
        try{
            $this->validate($request, [
                'title' => 'required|string|max:255',
                'content' => 'required'
            ]);
            $objPosts = Posts::find($id);

            if (!$objPosts){
                return abort(404);
            }

            $objPosts->title = $request->title;
            $objPosts->content = $request->content;

            if ($objPosts->save()){
                $objPostCat = new PostCategories();
                $objPostCat->where('post_id', $objPosts->id)->delete();

                $arrCat = $request->categories;

                if (is_array($arrCat)){
                    foreach ($arrCat as $categori){
                        $objPostCat->create([
                            'post_id' => $objPosts->id,
                            'categories_id' => $categori
                        ]);
                    }
                }

                return redirect()->route('posts')->with('success', 'Статья изменена');
            }
            return back()->with('error', 'Статья не изменена');
        } catch (ValidationException $e){
            Log::error($e->getMessage());
            return back()->with('error', $e->getMessage());
        }
    }

    public function deletePosts(Request $request) {
        if ($request->ajax()){
            $id = $request->id;
            Posts::where('id', $id)->delete();
            $objPostCat = new PostCategories();
            $objPostCat->where('post_id', $id)->delete();
        }
    }
}
