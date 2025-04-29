<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function index()
    {
        return inertia("Listing/Index", [
            'listings' => Listing::all()
        ]);
    }

    public function create()
    {
        return inertia("Listing/Create");
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Listing $listing)
    {
        return inertia("Listing/Show", [
            'listing' => $listing
        ]);
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
