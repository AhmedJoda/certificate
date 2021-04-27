<?php

namespace App\Http\Controllers;

use App\Models\GoldenCertificate;
use Illuminate\Http\Request;
use ArPHP\I18N\Arabic;

class GoldenCertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.golden_certificates.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.golden_certificates.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Certificate = GoldenCertificate::create($request->except('_token'));


        $image = imagecreatefromjpeg('cert3.jpeg');
        $black = imagecolorallocate($image, 0, 0, 0);
        $blue  = imagecolorallocate($image, 0, 0, 255);
        $navy  = imagecolorallocate($image, 0, 0, 125);
        $size = 22;
        $angle = 0;
        $iw1 = 475; // image width.
        $ih1 = 430; // image height.
        $font = public_path('/fonts/Amiri-Bold.ttf');
        $Arabic = new Arabic();
        $name = $Arabic->utf8Glyphs($Certificate->name);
        $box1 = imagettfbbox($size, $angle, $font, $name);
        $tw1 = abs($box1[6] - $box1[4]); // text width.
        imagettftext($image,  $size, $angle, $iw1 - $tw1, $ih1,  $navy, $font, $name);
        imagejpeg($image, url('images/' . $Certificate->name . $Certificate->id . '.jpeg'));



        return redirect(route('golden-certificates.show', $Certificate->id));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.golden_certificates.show', ['show' => GoldenCertificate::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        return view('admin.golden_certificates.edit', ['edit' => GoldenCertificate::find($id)]);
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
        GoldenCertificate::find($id)->update($request->except('_token', '_method'));
        return redirect(route('golden-certificates.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        GoldenCertificate::find($id)->delete();
        return redirect(route('golden-certificates.index'));
    }
}
