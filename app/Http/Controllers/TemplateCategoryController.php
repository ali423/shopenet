<?php

namespace App\Http\Controllers;

use App\Models\Template;
use App\Models\TemplateCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TemplateCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard.template-category.index', [
            'categories' => TemplateCategory::query()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }
        TemplateCategory::query()->create([
           'title'=>$request->get('title'),
        ]);
        return redirect(route('template-category.index'))->with('successful', 'اطلاعات با موفقیط ثبت شد .');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TemplateCategory  $templateCategory
     * @return \Illuminate\Http\Response
     */
    public function show(TemplateCategory $templateCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TemplateCategory  $templateCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(TemplateCategory $templateCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TemplateCategory  $templateCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TemplateCategory $templateCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TemplateCategory  $templateCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(TemplateCategory $templateCategory)
    {
        //
    }
}
