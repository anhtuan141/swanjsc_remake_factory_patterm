<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Shape;
use Illuminate\Http\Request;

class ShapeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->id == 1) {
            $admin = Shape::_listAdmin();

            return view('backend.shape.list', ['collection' => $admin]);
        } else {
            $list = Shape::_list();

            if (!$list) {
                return redirect()->route('b.404');
            }

            return view('backend.shape.list', ['collection' => $list]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $shape = Shape::_delete($id);

        if ($shape) {
            return redirect()->route('shapes.index')
                ->with([
                    'msg' => 'Delete Shape ID: ' . $id . ' Successfully!',
                    'type' => 'success'
                ]);
        } else {
            return redirect()->route('shapes.index')
                ->with([
                    'msg' => 'Delete Shape ID: ' . $id . ' Fail!',
                    'type' => 'danger'
                ]);
        }
    }
}
