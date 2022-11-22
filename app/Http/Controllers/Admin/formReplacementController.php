<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\formReplacement;
use Illuminate\Http\Request;

class formReplacementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $formreplacement = formReplacement::where('namaLengkap', 'LIKE', "%$keyword%")
                ->orWhere('mataKuliah', 'LIKE', "%$keyword%")
                ->orWhere('kelas', 'LIKE', "%$keyword%")
                ->orWhere('programStudi', 'LIKE', "%$keyword%")
                ->orWhere('semester', 'LIKE', "%$keyword%")
                ->orWhere('tahunAkademik', 'LIKE', "%$keyword%")
                ->orWhere('tanggalReplacement', 'LIKE', "%$keyword%")
                ->orWhere('jamKuliah', 'LIKE', "%$keyword%")
                ->orWhere('tanggalReplacement', 'LIKE', "%$keyword%")
                ->orWhere('jamreplacement', 'LIKE', "%$keyword%")
                ->orWhere('alasan', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $formreplacement = formReplacement::latest()->paginate($perPage);
        }

        return view('admin.form-replacement.index', compact('formreplacement'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.form-replacement.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        formReplacement::create($requestData);

        return redirect('admin/form-replacement')->with('flash_message', 'formReplacement added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $formreplacement = formReplacement::findOrFail($id);

        return view('admin.form-replacement.show', compact('formreplacement'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $formreplacement = formReplacement::findOrFail($id);

        return view('admin.form-replacement.edit', compact('formreplacement'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $formreplacement = formReplacement::findOrFail($id);
        $formreplacement->update($requestData);

        return redirect('admin/form-replacement')->with('flash_message', 'formReplacement updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        formReplacement::destroy($id);

        return redirect('admin/form-replacement')->with('flash_message', 'formReplacement deleted!');
    }
}
