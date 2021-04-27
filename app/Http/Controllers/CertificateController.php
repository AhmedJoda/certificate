<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use ArPHP\I18N\Arabic;
use Illuminate\Http\Request;



class CertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.certificates.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.certificates.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $Certificate = Certificate::create($request->except('_token'));


        $image = imagecreatefromjpeg('cert1.jpeg');
        $black = imagecolorallocate($image, 0, 0, 0);
        $darkblue  = imagecolorallocate($image, 0, 0, 139);
        $size = 22;
        $angle = 0;
        $iw1 = 710; // image width.
        $ih1 = 430; // image height.
        $font = public_path('/fonts/Amiri-Bold.ttf');
        $Arabic = new Arabic();
        $name1 = $Arabic->utf8Glyphs($Certificate->name1);
        $box1 = imagettfbbox($size, $angle, $font, $name1);
        $tw1 = abs($box1[6] - $box1[4]); // text width.
        imagettftext($image,  $size, $angle, $iw1 - $tw1, $ih1,  $darkblue, $font, $name1);
        imagejpeg($image, url('images/' . $Certificate->name1 . $Certificate->id . '.jpeg'));



        return redirect(route('certificates.show', $Certificate->id));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.certificates.show', ['show' => Certificate::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        return view('admin.certificates.edit', ['edit' => Certificate::find($id)]);
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
        Certificate::find($id)->update($request->except('_token', '_method'));
        return redirect(route('certificates.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Certificate::find($id)->delete();
        return redirect(route('certificates.index'));
    }
}
