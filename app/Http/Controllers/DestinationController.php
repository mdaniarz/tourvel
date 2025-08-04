<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use \Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use Woo\GridView\DataProviders\EloquentDataProvider;

class DestinationController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            new Middleware('permission:destination view', only: ['index', 'show']),
            new Middleware('permission:destination create', only: ['create', 'store']),
            new Middleware('permission:destination edit', only: ['edit', 'update']),
            new Middleware('permission:destination delete', only: ['destroy']),
        ];
    }

    public function index(Request $request): View
    {
        $query = Destination::query();

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
        
        $destination = $query->paginate(10);

        if ($request->header('HX-Request')) {
            return view('destination.includes.index-table', compact('destination'));
        }

        return view('destination.index', compact('destination', 'columns', 'selectedColumns'));
    }

    public function create(): View
    {
        $destination = new Destination();

        return view('destination.create', compact('destination'));
    }

    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            	'name' => 'required|string|max:255',
	'description' => 'nullable|string',
	'location' => 'nullable|string|max:255',
	'address' => 'nullable|string|max:255',
	'city' => 'nullable|string|max:255',
	'province' => 'nullable|string|max:255',
	'country' => 'nullable|string|max:255',
	'image' => 'nullable|string|max:255',
	'price' => 'nullable|numeric',
	'contact_person' => 'nullable|string|max:255',
	'phone' => 'nullable|string|max:255',
	'is_active' => 'required|boolean',
        ]);

        try {
            Destination::create($validatedData);
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()
                ->withInput($request->all())
                ->with('error', 'Terjadi kesalahan saat membuat data.');
        }

        return redirect()->route('destination.index')
            ->with('success', 'Destination berhasil dibuat');
    }

    public function show(Destination $destination): View
    {
        return view('destination.show', compact('destination'));
    }

    public function edit(Destination $destination): View
    {
        return view('destination.edit', compact('destination'));
    }

    public function update(Request $request, Destination $destination): RedirectResponse
    {
        $validatedData = $request->validate([
            	'name' => 'required|string|max:255',
	'description' => 'nullable|string',
	'location' => 'nullable|string|max:255',
	'address' => 'nullable|string|max:255',
	'city' => 'nullable|string|max:255',
	'province' => 'nullable|string|max:255',
	'country' => 'nullable|string|max:255',
	'image' => 'nullable|string|max:255',
	'price' => 'nullable|numeric',
	'contact_person' => 'nullable|string|max:255',
	'phone' => 'nullable|string|max:255',
	'is_active' => 'required|boolean',
        ]);

        try {
            $destination->update($validatedData);
        } catch (\Illuminate\Database\QueryException $e) {
            if ($e->getCode() == '23000') {
                return redirect()->back()
                    ->withInput($request->all())
                    ->with('error', 'Data destination ini sudah digunakan dan tidak dapat diperbarui.');
            }
            return redirect()->back()
                ->withInput($request->all())
                ->with('error', 'Terjadi kesalahan saat memperbarui data.');
        }

        return redirect()->route('destination.index')
            ->with('success', 'Destination berhasil diperbarui');
    }

    public function destroy(Destination $destination): RedirectResponse
    {
        try {
            $destination->delete();
        } catch (\Illuminate\Database\QueryException $e) {
            if ($e->getCode() == '23000') {
                return redirect()->route('destination.index')
                    ->with('error', 'Data destination ini sudah digunakan dan tidak dapat dihapus.');
            }
            return redirect()->route('destination.index')
                ->with('error', 'Terjadi kesalahan saat menghapus data.');
        }

        return redirect()->route('destination.index')
            ->with('success', 'Destination berhasil dihapus');
    }
}