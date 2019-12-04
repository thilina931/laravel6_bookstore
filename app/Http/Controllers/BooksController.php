<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Books;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $BooksS = books::latest()->paginate(5);
        return view('books.index',compact('BooksS'))
                ->with('i', (request()->input('page',1)-1)*5 );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
        'category' => 'required',
        'name' => 'required',
        'discription' => 'required'
      ]);
      books::create($request->all());
      return redirect()->route('books.index')
                       ->with('success', 'new books added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Books = books::find($id);
        return view('books.detail',compact('Books'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Books = books::find($id);
        return view('books.edit' , compact('Books'));
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
        $request->validate([
            'category' => 'required',
            'name' => 'required',
            'discription' => 'required'
        ]);
        $Books = books::find($id);
        $Books->category = $request->get('category');
        $Books->name = $request->get('name');
        $Books->discription = $request->get('discription');
        $Books->save();
        return  redirect()->route('books.index')
                        ->with('success', 'new books updated successfully');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Books = books::find($id);
        $Books -> delete();
        return redirect()->route('books.index')
                        ->with('success', 'Remove Books Successfully' );
    }
}
