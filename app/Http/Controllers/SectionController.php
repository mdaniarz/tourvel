<?php

namespace App\Http\Controllers;

use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use \Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use Woo\GridView\DataProviders\EloquentDataProvider;

class SectionController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            new Middleware('permission:section view', only: ['index', 'show']),
            new Middleware('permission:section create', only: ['create', 'store']),
            new Middleware('permission:section edit', only: ['edit', 'update']),
            new Middleware('permission:section delete', only: ['destroy']),
        ];
    }

    public function index(Request $request): View
    {
        $query = Section::query();

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
        
        $section = $query->paginate(10);

        if ($request->header('HX-Request')) {
            return view('section.includes.index-table', compact('section'));
        }

        return view('section.index', compact('section', 'columns', 'selectedColumns'));
    }

    public function create(): View
    {
        $section = new Section();

        return view('section.create', compact('section'));
    }

    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            	'name' => 'required|string|max:255',
	'slug' => 'required|string|max:255',
	'data' => 'nullable|string',
	'is_active' => 'required|boolean',
        ]);

        try {
            Section::create($validatedData);
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()
                ->withInput($request->all())
                ->with('error', 'Terjadi kesalahan saat membuat data.');
        }

        return redirect()->route('section.index')
            ->with('success', 'Section berhasil dibuat');
    }

    public function show(Section $section): View
    {
        return view('section.show', compact('section'));
    }

    public function edit(Section $section): View
    {
        return view('section.edit', compact('section'));
    }

    public function update(Request $request, Section $section): RedirectResponse
    {
        $validatedData = $request->validate([
            	'name' => 'required|string|max:255',
	'slug' => 'required|string|max:255',
	'data' => 'nullable|string',
	'is_active' => 'required|boolean',
        ]);

        try {
            $section->update($validatedData);
        } catch (\Illuminate\Database\QueryException $e) {
            if ($e->getCode() == '23000') {
                return redirect()->back()
                    ->withInput($request->all())
                    ->with('error', 'Data section ini sudah digunakan dan tidak dapat diperbarui.');
            }
            return redirect()->back()
                ->withInput($request->all())
                ->with('error', 'Terjadi kesalahan saat memperbarui data.');
        }

        return redirect()->route('section.index')
            ->with('success', 'Section berhasil diperbarui');
    }

    public function destroy(Section $section): RedirectResponse
    {
        try {
            $section->delete();
        } catch (\Illuminate\Database\QueryException $e) {
            if ($e->getCode() == '23000') {
                return redirect()->route('section.index')
                    ->with('error', 'Data section ini sudah digunakan dan tidak dapat dihapus.');
            }
            return redirect()->route('section.index')
                ->with('error', 'Terjadi kesalahan saat menghapus data.');
        }

        return redirect()->route('section.index')
            ->with('success', 'Section berhasil dihapus');
    }
}