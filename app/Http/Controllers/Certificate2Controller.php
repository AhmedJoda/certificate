<?php

namespace App\Http\Controllers;

use App\Models\Certificate2;
use Illuminate\Http\Request;
use ArPHP\I18N\Arabic;

class Certificate2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.certificate2s.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.certificate2s.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Certificate = Certificate2::create($request->except('_token'));


        $image = imagecreatefromjpeg('cert2.jpeg');
        $black = imagecolorallocate($image, 0, 0, 0);
        $blue  = imagecolorallocate($image, 0, 0, 255);
        $darkblue  = imagecolorallocate($image, 0, 0, 139);
        $green  = imagecolorallocate($image, 0, 100, 0);
        $size = 22;
        $angle = 0;
        $iw1 = 685; // image width.
        $ih1 = 375; // image height.
        $iw2 = 645; // image width.
        $ih2 = 455; // image height.
        $font = public_path('/fonts/Amiri-Bold.ttf');
        $Arabic = new Arabic();
        $name1 = $Arabic->utf8Glyphs($Certificate->name1);
        $name2 = $Arabic->utf8Glyphs($Certificate->name2);

        $box1 = imagettfbbox($size, $angle, $font, $name1);
        $tw1 = abs($box1[6] - $box1[4]); // text width.
        $box2 = imagettfbbox($size, $angle, $font, $name2);
        $tw2 = abs($box2[6] - $box2[4]); // text width.

        imagettftext($image,  $size, $angle, $iw1 - $tw1, $ih1,  $darkblue, $font, $name1);
        imagettftext($image, $size, $angle, $iw2 - $tw2, $ih2,  $dargreenkblue, $font, $name2);
        imagejpeg($image, url('images/' . $Certificate->name1 . $Certificate->id . '.jpeg'));



        return redirect(route('certificate2s.show', $Certificate->id));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.certificate2s.show', ['show' => Certificate2::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        return view('admin.certificate2s.edit', ['edit' => Certificate2::find($id)]);
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
        Certificate2::find($id)->update($request->except('_token', '_method'));
        return redirect(route('certificate2s.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Certificate2::find($id)->delete();
        return redirect(route('certificate2s.index'));
    }
}
