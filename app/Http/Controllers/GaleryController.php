<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use \Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use Woo\GridView\DataProviders\EloquentDataProvider;

class GaleryController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            new Middleware('permission:galery view', only: ['index', 'show']),
            new Middleware('permission:galery create', only: ['create', 'store']),
            new Middleware('permission:galery edit', only: ['edit', 'update']),
            new Middleware('permission:galery delete', only: ['destroy']),
        ];
    }

    public function index(Request $request): View
    {
        $query = Galery::query();

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
        
        $galery = $query->paginate(10);

        if ($request->header('HX-Request')) {
            return view('galery.includes.index-table', compact('galery'));
        }

        return view('galery.index', compact('galery', 'columns', 'selectedColumns'));
    }

    public function create(): View
    {
        $galery = new Galery();

        return view('galery.create', compact('galery'));
    }

    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            	'title' => 'required|string|max:255',
	'image' => 'required|string|max:255',
	'description' => 'nullable|string',
	'category' => 'nullable|string|max:255',
	'is_active' => 'required|boolean',
        ]);

        try {
            Galery::create($validatedData);
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()
                ->withInput($request->all())
                ->with('error', 'Terjadi kesalahan saat membuat data.');
        }

        return redirect()->route('galery.index')
            ->with('success', 'Galery berhasil dibuat');
    }

    public function show(Galery $galery): View
    {
        return view('galery.show', compact('galery'));
    }

    public function edit(Galery $galery): View
    {
        return view('galery.edit', compact('galery'));
    }

    public function update(Request $request, Galery $galery): RedirectResponse
    {
        $validatedData = $request->validate([
            	'title' => 'required|string|max:255',
	'image' => 'required|string|max:255',
	'description' => 'nullable|string',
	'category' => 'nullable|string|max:255',
	'is_active' => 'required|boolean',
        ]);

        try {
            $galery->update($validatedData);
        } catch (\Illuminate\Database\QueryException $e) {
            if ($e->getCode() == '23000') {
                return redirect()->back()
                    ->withInput($request->all())
                    ->with('error', 'Data galery ini sudah digunakan dan tidak dapat diperbarui.');
            }
            return redirect()->back()
                ->withInput($request->all())
                ->with('error', 'Terjadi kesalahan saat memperbarui data.');
        }

        return redirect()->route('galery.index')
            ->with('success', 'Galery berhasil diperbarui');
    }

    public function destroy(Galery $galery): RedirectResponse
    {
        try {
            $galery->delete();
        } catch (\Illuminate\Database\QueryException $e) {
            if ($e->getCode() == '23000') {
                return redirect()->route('galery.index')
                    ->with('error', 'Data galery ini sudah digunakan dan tidak dapat dihapus.');
            }
            return redirect()->route('galery.index')
                ->with('error', 'Terjadi kesalahan saat menghapus data.');
        }

        return redirect()->route('galery.index')
            ->with('success', 'Galery berhasil dihapus');
    }
}