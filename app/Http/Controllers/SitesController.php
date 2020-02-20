<?php

namespace App\Http\Controllers;

use App\Sites;
use Illuminate\Http\Request;

class SitesController extends Controller
{
    
    public function index()
    {
        $sites = Sites::first();

        return view('admin.sites.index', compact('sites'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'sitename' => 'required|min:3|max:20',
        ]);

        $site_data = [
            'sitename' => $request->sitename
        ];

        Sites::whereId(1)->update($site_data);
        return redirect()->route('sites.index')->with('status', 'Site Configurations Updated!');
    }

}
