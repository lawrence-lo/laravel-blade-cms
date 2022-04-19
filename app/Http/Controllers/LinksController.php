<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use App\Models\Link;

class LinksController extends Controller
{
    public function list()
    {
        return view('links.list', [
            'links' => Link::all()
        ]);
    }

    public function addForm()
    {
        return view('links.add');
    }
    
    public function add()
    {

        $attributes = request()->validate([
            'name' => 'required',
            'url' => 'required|url',
        ]);

        $link = new Link();
        $link->name = $attributes['name'];
        $link->url = $attributes['url'];
        $link->save();

        return redirect('/console/links/list')
            ->with('message', 'Link has been added!');
    }

    public function editForm(Link $link)
    {
        return view('links.edit', [
            'link' => $link,
        ]);
    }

    public function edit(Link $link)
    {
        $attributes = request()->validate([
            'name' => 'required',
            'url' => 'required|url',
        ]);

        $link->name = $attributes['name'];
        $link->url = $attributes['url'];
        $link->save();

        return redirect('/console/links/list')
            ->with('message', 'Link has been edited!');
    }

    public function delete(Link $link)
    {
        $link->delete();
        
        return redirect('/console/links/list')
            ->with('message', 'Link has been deleted!');        
    }

    public function iconForm(Link $link)
    {
        return view('links.icon', [
            'link' => $link,
        ]);
    }

    public function icon(Link $link)
    {

        $attributes = request()->validate([
            'icon' => 'required|image',
        ]);

        Storage::delete($link->icon);
        
        $path = request()->file('icon')->store('links');

        $link->icon = $path;
        $link->save();
        
        return redirect('/console/links/list')
            ->with('message', 'Link icon has been edited!');
    }
}
