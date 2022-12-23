<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\web\Cifras;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function index()
    {
        $cifras = Cifras::where('published', '=', 'yes')->where('category', 'LIKE', '%inicio%')->get();
        $datecifras = PageController::getDateCifras();
        $sliders = DB::table('slide_mains')->where('status', '=', 'yes')->get();
        $slideDonor = DB::table('slide_donors')->where('status', '=', 'yes')->get();
        $blog = new BlogController();
        $posts = $blog->index();
        return view('web.index', compact(['sliders', 'slideDonor', 'cifras', 'posts', 'datecifras']));
    }

    public function ourValues()
    {
        return view('web.ourValues');
    }

    public function ourLeaders()
    {
        return view('web.ourLeaders');
    }

    public function managementReports()
    {
        return view('web.managementReports');
    }

    public function cashDonations()
    {
        return view('web.cashDonations');
    }

    public function corporateValueProposition()
    {
        return view('web.corporateValueProposition');
    }

    public function donationsInKind()
    {
        return view('web.donationsInKind');
    }

    public function volunteering()
    {
        return view('web.volunteering');
    }

    public function academy()
    {
        return view('web.academy');
    }

    public function corabastos()
    {
        return view('web.corabastos');
    }

    public function prea()
    {
        return view('web.prea');
    }

    public function ourWork()
    {
        return view('web.ourWork');
    }

    public function linkUp()
    {
        return view('web.linkUp');
    }

    public function contactUs()
    {
        return view('web.contactUs');
    }
    public function getDateCifras(){
        $datecifras = DB::table('cifras')->select('updated_at')->where('published', '=', 'yes')->where('category', 'LIKE', '%inicio%')->orderBy('updated_at', 'DESC')->first();
        foreach ($datecifras as $dc) {
            $fecha = Carbon::parse($dc);
            $dia = $fecha->format('d');
            $mes = ucfirst($fecha->formatLocalized('%B'));
            $año = $fecha->format('Y');
            $fsalida = $dia.' de '.$mes.' del '.$año;
            return $fsalida;
        }
    }
    
}
