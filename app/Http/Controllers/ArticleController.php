<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;
use Illuminate\Support\Facades\Input;
use Alert;
use Redirect;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Article::orderBy('id','desc')->paginate(5);
        return view('Admin.Article.index',['article'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       return view('Admin.Article.Includes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $valid =  $this->validate($request, [
          'title' => 'required|min:2|max:255',
          'article' => 'required|min:2',
          'image'=>'image'
      ]);

      if ($request->hasFile('image')) {
          $input['image'] = $this->savePhoto($request->file('image'));
      }else{
          $input['image'] = 'images/default.jpg';
      }
      $data = array(
                    'title' => Input::get('title'),
                    'article' => Input::get('article'),
                    'image' => $input['image'],
                    'slug' => str_slug(Input::get('title'),"-")
               );
       // dd($data);
      $article = Article::create($data);

      Alert::success('Article Baru Sudah di buat','Create');
      return Redirect::route('admin.article.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    // Class Bikinan -->> buat foto
     protected function savePhoto($photo)
     {
         $destinationPath = 'images';
         $subdestinationPath = 'article';
         $extension = $photo->getClientOriginalExtension();
         $fileName = rand(11111,99999).'.'.$extension;
         $photo->move($destinationPath. '/' . $subdestinationPath , $fileName);
         $article['image'] = $destinationPath. '/' . $subdestinationPath . '/' . $fileName;

         return $article['image'];
     }


     protected function deletePhoto($photo)
     {
         if ($photo == 'images/default.jpg') {
             return $photo;
         }else{
              File::delete($photo);
             return $photo;
         }
     }
}
