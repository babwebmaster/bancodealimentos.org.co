<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\web\SlideMain;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SlideMainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = SlideMain::where('status','=','yes')->paginate(10);
        return view('dashboard.sliders.index-slide', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $slide = new SlideMain();
        return view('dashboard.sliders.create-slide', compact('slide'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:3|max:50|string',
            'content_desktop' => 'required|mimes:jpg,jpeg,png|max:2048|dimensions:width=1920,height=700',
            'content_mobile' => 'required|mimes:jpg,jpeg,png|max:2048|dimensions:width=778,height=778',
            'caption_status' => 'required|string',
            'content_caption' => 'exclude_if:caption_status,false|required|string|min:3|max:200',
            'btn_status' => 'required|string',
            'btn_text' => 'exclude_if:btn_status,false|required|string|min:3|max:30',
            'btn_url' => 'exclude_if:btn_status,false|required|url',
            'status' => 'required|string',
        ]);
        $fileName_desktop = env('APP_URL')."images"."/".'d-'.time().'.'.$validated["content_desktop"]->extension();
        $validated["content_desktop"]=$fileName_desktop;
        // dd($fileName);
        $request->content_desktop->move(public_path("images"), $fileName_desktop);

        $fileName_mobile = env('APP_URL')."images"."/".'m-'.time().'.'.$validated["content_mobile"]->extension();
        $validated["content_mobile"]=$fileName_mobile;
        // dd($fileName);
        $request->content_mobile->move(public_path("images"), $fileName_mobile);
        SlideMain::create($validated);
        session()->flash('flash.banner', 'Slide Creado Correctamente!');
        session()->flash('flash.bannerStyle', 'success');
        // Alert::alert('Exito', 'Usuario Creado Correctamente!', 'success');
        // Alert::toast('Usuario Creado Correctamente!', 'success');
        return to_route('slide.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\web\SlideMain  $slide
     * @return \Illuminate\Http\Response
     */
    public function show(SlideMain $slide)
    {
        return view('dashboard.sliders.show-slide', compact('slide'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\web\SlideMain  $slide
     * @return \Illuminate\Http\Response
     */
    public function edit(SlideMain $slide)
    {
        return view('dashboard.sliders.edit-slide', compact('slide'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\web\SlideMain  $slide
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SlideMain $slide)
    {
        $validated = $request->validate([
            'name' => 'required|min:3|max:50|string',
            'content_desktop' => 'mimes:jpg,jpeg,png|max:2048|dimensions:width=1920,height=700',
            'content_mobile' => 'mimes:jpg,jpeg,png|max:2048|dimensions:width=778,height=778',
            'caption_status' => 'required|string',
            'content_caption' => 'exclude_if:caption_status,false|required|string|min:3|max:200',
            'btn_status' => 'required|string',
            'btn_text' => 'exclude_if:btn_status,false|required|string|min:3|max:30',
            'btn_url' => 'exclude_if:btn_status,false|required|url',
            'status' => 'required',
        ]);
        if (isset($validated["content_desktop"]) && isset($validated["content_mobile"])) {
            // dd($request->image);
            // dd($request->validated()["image"]->hashName());
            // dd($request->validated()["image"]->extension());
            
            $fileName_desktop = env('APP_URL')."images"."/".'d-'.time().'.'.$validated["content_desktop"]->extension();
            $validated["content_desktop"]=$fileName_desktop;
            // dd($fileName);
            $request->content_desktop->move(public_path("images"), $fileName_desktop);

            $fileName_mobile = env('APP_URL')."images"."/".'m-'.time().'.'.$validated["content_mobile"]->extension();
            $validated["content_mobile"]=$fileName_mobile;
            // dd($fileName);
            $request->content_mobile->move(public_path("images"), $fileName_mobile);
            Alert::toast('Imagen mobile y desktop agregadas correctamente!', 'success');
        }elseif(isset($validated["content_desktop"]) && !isset($validated["content_mobile"])){
            $fileName_desktop = env('APP_URL')."images"."/".'d-'.time().'.'.$validated["content_desktop"]->extension();
            $validated["content_desktop"]=$fileName_desktop;
            $request->content_desktop->move(public_path("images"), $fileName_desktop);
            Alert::toast('Imagen desktop agregada correctamente!', 'success');
        }elseif(!isset($validated["content_desktop"]) && isset($validated["content_mobile"])){
            $fileName_mobile = env('APP_URL')."images"."/".'m-'.time().'.'.$validated["content_mobile"]->extension();
            $validated["content_mobile"]=$fileName_mobile;
            $request->content_mobile->move(public_path("images"), $fileName_mobile);
            Alert::toast('Imagen mobile agregada correctamente!', 'success');
        }
        $slide->update($validated);
        // session()->flash('flash.banner', 'Usuario Editado Correctamente!');
        // session()->flash('flash.bannerStyle', 'success');
        // Alert::alert('Exito', 'Usuario Editado Correctamente!', 'success');
        Alert::toast('Slide Editado Correctamente!', 'success');
        return to_route('slide.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\web\SlideMain  $slide
     * @return \Illuminate\Http\Response
     */
    public function destroy(SlideMain $slide)
    {
        $slide->delete();
        // session()->flash('flash.banner', 'Usuario Eliminado Correctamente!');
        // session()->flash('flash.bannerStyle', 'success');
        // Alert::alert('Exito', 'Usuario Eliminado Correctamente!', 'success');
        Alert::toast('Slider Eliminado Correctamente!', 'success');
        return to_route("slide.index");
    }
}
