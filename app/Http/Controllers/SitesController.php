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

    public function update(Request $request, $id)
    {
        if ($request->has('logo')) {
            $request->validate([
                'sitename' => 'required|min:3|max:20',
                'logo' => 'image|mimes:jpeg,png,jpg'
            ]);
            $tmp_logo =  time().$request->logo->getClientOriginalName();
            $request->logo->move(public_path('upload/img/logo/'), $tmp_logo);
            $site_data = [
                'sitename' => $request->sitename,
                'logo' => 'upload/img/logo/'.$tmp_logo,
                'about' => $request->about,
                'contact' => $request->contact,
                'contribute' => $request->contribute,
                'heroes' => $request->heroes,
                'license' => $request->license,
                'privacypolicy' => $request->privacypolicy,
                'report' => $request->report,
                'patched' => $request->patched
            ];
        } else {
            $request->validate([
                'sitename' => 'required|min:3|max:20'
            ]);
            $site_data = [
                'sitename' => $request->sitename,
                'about' => $request->about,
                'contact' => $request->contact,
                'contribute' => $request->contribute,
                'heroes' => $request->heroes,
                'license' => $request->license,
                'privacypolicy' => $request->privacypolicy,
                'report' => $request->report,
                'patched' => $request->patched
            ];
        }

        Sites::whereId(1)->update($site_data);
        return redirect()->route('webmanager.sites.index')->with('status', 'Site Configurations Updated!');
    }

}
