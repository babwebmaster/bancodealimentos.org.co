<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\web\Cifras;
use App\Models\web\Directors;
use App\Models\web\Reconocimientos;
use App\Models\web\Reports;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function index()
    {
        $cifras = Cifras::where('published', '=', 'yes')->whereRelation('CategoryCifras','nombre','inicio',true)->get();
        // dd($cifras);
        // $cifras = Cifras::where('published', '=', 'yes')->where('category', 'LIKE', '%inicio%')->get();
        $datecifras = PageController::getDateCifras();
        $sliders = DB::table('slide_mains')->where('status', '=', 'yes')->get();
        $slideDonor = DB::table('slide_donors')->where('status', '=', 'yes')->get();
        $blog = new BlogController();
        $posts = $blog->index();
        return view('web.index', compact(['sliders', 'slideDonor', 'cifras', 'posts', 'datecifras']));
    }

    public function ourValues()
    {
        $reconocimientos = Reconocimientos::orderByRaw('date_announcement DESC')->get();
        $cifras = Cifras::where('published', '=', 'yes')->whereRelation('CategoryCifras','nombre','nuestros-valores',true)->get();
        $datecifras = PageController::getDateCifras();
        return view('web.ourValues', compact(['cifras', 'datecifras', 'reconocimientos']));
    }

    public function ourLeaders()
    {
        $directors = Directors::all();
        return view('web.ourLeaders', compact('directors'));
    }

    public function managementReports()
    {
        $reports = Reports::latest()->take(6)->get();
        return view('web.managementReports', compact('reports'));
    }

    public function cashDonations()
    {
        return view('web.cashDonations');
    }

    public function rsa()
    {
        return view('web.rsa');
    }

    public function pni()
    {
        return view('web.pni');
    }
    
    public function corabastos()
    {
        return view('web.corabastos');
    }

    public function prea()
    {
        return view('web.prea');
    }

    public function volunteering()
    {
        return view('web.volunteering');
    }

    public function academy()
    {
        return view('web.academy');
    }

    public function donationsInKind()
    {
        return view('web.donationsInKind');
    }

    public function beneficiaries()
    {
        return view('web.beneficiaries');
    }

    public function beneficiary()
    {
        return view('web.beneficiary');
    }

    public function iambeneficiary()
    {
        return view('web.iambeneficiary');
    }

    public function cookBooks()
    {
        return view('web.beneficiaries');
    }

    public function contactUs()
    {
        $blog = new BlogController();
        $posts = $blog->index();
        return view('web.contactUs', compact('posts'));
    }

    public function getDateCifras(){
        // $datecifras = DB::table('cifras')->select('updated_at')->where('published', '=', 'yes')->where('category', 'LIKE', '%inicio%')->orderBy('updated_at', 'DESC')->first();
        $datecifras = Cifras::select('updated_at')->whereRelation('CategoryCifras','nombre','inicio',true)->orderBy('updated_at', 'DESC')->first();
        // foreach ($datecifras as $dc) {
            $fecha = Carbon::parse($datecifras->updated_at);
            $dia = $fecha->format('d');
            $mes = ucfirst($fecha->formatLocalized('%B'));
            $año = $fecha->format('Y');
            $fsalida = $dia.' de '.$mes.' del '.$año;
            // dd($fsalida);
            return $fsalida;
        // }
    }
    
}
