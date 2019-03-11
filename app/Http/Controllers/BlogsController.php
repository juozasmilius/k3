<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\User;

class BlogsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['home', 'show']]);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->user()->id;

        $user = User::find($user_id);

        return view('admin.blog.blog')->with('blogs', $user->blogs);
    }

    public function home()
    {
        $blogs = Blog::orderBy('created_at', 'desc')->get();

        return view('user.blog.blogs')->with('blogs', $blogs);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.createblog');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'pavadinimas' => 'required',
            'Aprašymas' => 'required',
        ]);

        //Create blog post
        $blog = new Blog;

        $blog->user_id = auth()->user()->id;
        $blog->pavadinimas = $request->input('pavadinimas');
        $blog->seo = $request->input('SEO');
        $blog->tr_aprasymas = $request->input('Trumpas_aprašymas');
        $blog->aprasymas = $request->input('Aprašymas');
        $blog->kategory_id = $request->input('Patalpinti_kategorijoje');
        $blog->pavadinimas = $request->input('pavadinimas');
        $blog->patinka = 0;
        $blog->perziuros = 0;

        $blog->save();

        return redirect('/admin/blog')->with('success', 'Blogas pridėtas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blog::find($id);
        return view('user.blog.blog')->with('blog', $blog);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('admin.blog.editblog')->with('blog', $blog);
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
        $this->validate($request, [
            'pavadinimas' => 'required',
            'Aprašymas' => 'required',
        ]);

        //Create blog post
        $blog = Blog::find($id);
        $blog->user_id = auth()->user()->id;
        $blog->pavadinimas = $request->input('pavadinimas');
        $blog->seo = $request->input('SEO');
        $blog->tr_aprasymas = $request->input('Trumpas_aprašymas');
        $blog->aprasymas = $request->input('Aprašymas');
        $blog->kategory_id = $request->input('Patalpinti_kategorijoje');
        $blog->pavadinimas = $request->input('pavadinimas');
        $blog->patinka = 0;
        $blog->perziuros = 0;

        $blog->save();

        return redirect('/admin/blog')->with('success', 'Įrašas atnaujintas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);
        $blog->delete();

        return redirect('/admin/blog')->with('success', 'Įrašas ištrintas');
    }
}
