<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use \Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use Woo\GridView\DataProviders\EloquentDataProvider;

class PackageController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            new Middleware('permission:package view', only: ['index', 'show']),
            new Middleware('permission:package create', only: ['create', 'store']),
            new Middleware('permission:package edit', only: ['edit', 'update']),
            new Middleware('permission:package delete', only: ['destroy']),
        ];
    }

    public function index(Request $request): View
    {
        $query = Package::query();

        // tambahkan kolom yang mau dikecualikan di pencarian
        $except = ['created_by', 'updated_by'];

        $columns = collect($query->getModel()->getFillable())->filter(function ($item) use ($except) {
            return !in_array($item, $except);
        })->toArray();

        $selectedColumns = $request->get('col', $columns);

        if ($search = $request->get('search')) {
            $query->where(function ($query) use ($search, $selectedColumns) {
                foreach ($selectedColumns as $column) {
                    $query->orWhere($column, 'like', '%' . $search . '%');
                }
            });
        }
        
        $package = $query->paginate(10);

        if ($request->header('HX-Request')) {
            return view('package.includes.index-table', compact('package'));
        }

        return view('package.index', compact('package', 'columns', 'selectedColumns'));
    }

    public function create(): View
    {
        $package = new Package();

        return view('packages.create', compact('package'));
    }

    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            	'name' => 'required|string|max:255',
	'description' => 'nullable|string',
	'destination_id' => 'nullable|integer',
	'duration' => 'nullable|integer',
	'price' => 'required|numeric',
	'image' => 'nullable|string|max:255',
	'facilities' => 'nullable|string',
	'itinerary' => 'nullable|string',
	'quota' => 'nullable|integer',
	'departure_date' => 'nullable|date',
	'is_active' => 'required|boolean',
        ]);

        try {
            Package::create($validatedData);
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()
                ->withInput($request->all())
                ->with('error', 'Terjadi kesalahan saat membuat data.');
        }

        return redirect()->route('package.index')
            ->with('success', 'Package berhasil dibuat');
    }

    public function show(Package $package): View
    {
        return view('package.show', compact('package'));
    }

    public function edit(Package $package): View
    {
        return view('package.edit', compact('package'));
    }

    public function update(Request $request, Package $package): RedirectResponse
    {
        $validatedData = $request->validate([
            	'name' => 'required|string|max:255',
	'description' => 'nullable|string',
	'destination_id' => 'nullable|integer',
	'duration' => 'nullable|integer',
	'price' => 'required|numeric',
	'image' => 'nullable|string|max:255',
	'facilities' => 'nullable|string',
	'itinerary' => 'nullable|string',
	'quota' => 'nullable|integer',
	'departure_date' => 'nullable|date',
	'is_active' => 'required|boolean',
        ]);

        try {
            $package->update($validatedData);
        } catch (\Illuminate\Database\QueryException $e) {
            if ($e->getCode() == '23000') {
                return redirect()->back()
                    ->withInput($request->all())
                    ->with('error', 'Data package ini sudah digunakan dan tidak dapat diperbarui.');
            }
            return redirect()->back()
                ->withInput($request->all())
                ->with('error', 'Terjadi kesalahan saat memperbarui data.');
        }

        return redirect()->route('package.index')
            ->with('success', 'Package berhasil diperbarui');
    }

    public function destroy(Package $package): RedirectResponse
    {
        try {
            $package->delete();
        } catch (\Illuminate\Database\QueryException $e) {
            if ($e->getCode() == '23000') {
                return redirect()->route('package.index')
                    ->with('error', 'Data package ini sudah digunakan dan tidak dapat dihapus.');
            }
            return redirect()->route('package.index')
                ->with('error', 'Terjadi kesalahan saat menghapus data.');
        }

        return redirect()->route('package.index')
            ->with('success', 'Package berhasil dihapus');
    }
}