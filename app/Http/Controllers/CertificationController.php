<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Certification;


class CertificationController extends Controller
{
    public function list()
    {
        return view('certifications.list', [
            'certifications' => Certification::all()
        ]);
    }

    public function addForm()
    {
        return view('certifications.add');
    }
    
    public function add(Request $request)
    {

        request()->validate([
            'type' => 'required',
            'subject' => 'required',
            'school' => 'required',
            'date' => 'required',
        ]);

        $certification = new Certification();
        $certification->fill($request->all());
        $certification->save();

        return redirect('/console/certifications/list')
            ->with('message', 'Certification has been added!');
    }

    public function editForm(Certification $certification)
    {
        return view('certifications.edit', [
            'certification' => $certification,
        ]);
    }

    public function edit(Certification $certification, Request $request)
    {

        request()->validate([
            'type' => 'required',
            'subject' => 'required',
            'school' => 'required',
            'date' => 'required',
        ]);

        $certification->fill($request->all());
        $certification->save();

        return redirect('/console/certifications/list')
            ->with('message', 'Certification has been edited!');
    }

    public function delete(Certification $certification)
    {
        $certification->delete();
        
        return redirect('/console/certifications/list')
            ->with('message', 'Certification has been deleted!');        
    }
}
