<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditTemplateRequest;
use App\Http\Requests\OrderTemplateRequest;
use App\Http\Requests\TemplateRequest;
use App\Models\KeyWord;
use App\Models\OrderTemplate;
use App\Models\Template;
use App\Models\TemplateOption;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class TemplateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard.template.index', [
            'templates' => Template::query()->get(),
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(TemplateRequest $request)
    {

        $default_options = array_filter($request->get('options_default'));
        $professional_options = array_filter($request->get('options_professional'));
        $key_words = explode(',', $request->get('key_words'));
        DB::transaction(function () use ($request, $default_options, $professional_options, $key_words
        ) {
            $icon = $request->file('icon')->storeAs('public/templates/icon', rand(1000, 9999) . $request->file('icon')->getClientOriginalName());
            $img = $request->file('img')->storeAs('public/templates/img', rand(1000, 9999) . $request->file('img')->getClientOriginalName());

            $template = Template::query()->create([
                'title' => $request->get('title'),
                'icon' => $icon,
                'img' => $img,
                'slug' => $request->get('slug'),
                'sort' => $request->get('sort'),
                'description' => $request->get('description'),
                'about' => $request->get('about'),
            ]);

            foreach ($default_options as $option) {
                TemplateOption::query()->create([
                    'template_id' => $template->id,
                    'title' => $option,
                    'type' => 'default',
                ]);
            }
            foreach ($professional_options as $option) {
                TemplateOption::query()->create([
                    'template_id' => $template->id,
                    'title' => $option,
                    'type' => 'professional',
                ]);
            }
            foreach ($key_words as $key_word) {
                KeyWord::query()->create([
                    'template_id' => $template->id,
                    'title' => $key_word,
                ]);
            }
        });
        return redirect(route('template.index'))->with('successful', 'قالب با موفقیط ثبت شد .');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Template $template
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show(Template $template)
    {
        return view('templates.single', [
            'template' => $template,
            'templates' => Template::query()->where('status', 'active')->get(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Template $template
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Template $template)
    {
        $key_words = array_column($template->KeyWords()->select('title')->get()->toArray(), 'title');
        $key_words_array = implode(',', $key_words);

        return view('admin.dashboard.template.edit', [
            'template' => $template,
            'key_words' => $key_words_array,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Template $template
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(EditTemplateRequest $request, Template $template)
    {
        $check_title_unique = $this->checkObjectUnique('title', $request->get('title'), $template->id);
        $check_slug_unique = $this->checkObjectUnique('slug', $request->get('slug'), $template->id);
        $check_sort_unique = $this->checkObjectUnique('sort', $request->get('sort'), $template->id);
        if ($check_sort_unique || $check_title_unique || $check_slug_unique) {
            return redirect()->back()->withErrors('یکی از مقادیر انتخاب شده تکراری است .');
        }
        $default_options = array_filter($request->get('options_default'));
        $professional_options = array_filter($request->get('options_professional'));
        $key_words = explode(',', $request->get('key_words'));
        DB::transaction(function () use ($request, $default_options, $professional_options, $key_words, $template
        ) {
            if ($request->file('icon') != null) {
                $icon = $request->file('icon')->storeAs('public/templates/icon', rand(1000, 9999) . $request->file('icon')->getClientOriginalName());
                Storage::delete($template->icon);
            } else {
                $icon = $template->icon;
            }
            if ($request->file('img') != null) {
                $img = $request->file('img')->storeAs('public/templates/img', rand(1000, 9999) . $request->file('img')->getClientOriginalName());
                Storage::delete($template->img);
            } else {
                $img = $template->img;
            }

            $template->update([
                'title' => $request->get('title'),
                'icon' => $icon,
                'img' => $img,
                'slug' => $request->get('slug'),
                'sort' => $request->get('sort'),
                'description' => $request->get('description'),
                'about' => $request->get('about'),
            ]);
            $template->templateOptions()->delete();
            foreach ($default_options as $option) {
                TemplateOption::query()->create([
                    'template_id' => $template->id,
                    'title' => $option,
                    'type' => 'default',
                ]);
            }
            foreach ($professional_options as $option) {
                TemplateOption::query()->create([
                    'template_id' => $template->id,
                    'title' => $option,
                    'type' => 'professional',
                ]);
            }
            $template->KeyWords()->delete();
            foreach ($key_words as $key_word) {
                KeyWord::query()->create([
                    'template_id' => $template->id,
                    'title' => $key_word,
                ]);
            }
        });
        return redirect(route('template.index'))->with('successful', 'قالب با موفقیط ویرایش شد .');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Template $template
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function destroy(Template $template)
    {
        DB::transaction(function () use ($template
        ) {
            $template->KeyWords()->delete();
            $template->templateOptions()->delete();
            Storage::delete($template->icon);
            Storage::delete($template->img);
            $template->delete();
        });
        return redirect(route('template.index'))->with('successful', 'حذف قالب با موفقیت انجام شد .');
    }

    public function checkObjectUnique($obj, $value, $id)
    {
        $check_object_unique = Template::query()->where($obj, $value)->where('id', '!=', $id)->exists();
        if ($check_object_unique) {
            return true;
        }
        return false;
    }

    public function list()
    {
        $templates = Template::query()->where('status', 'active')->orderBy('sort', 'DESC')->get();
        return view('templates.list', [
            'templates' => $templates,
        ]);
    }

    public function customTemplate()
    {
        return view('templates.custom');
    }

    public function orderTemplate(OrderTemplateRequest $request)
    {
        OrderTemplate::query()->create([
            'name' => $request->get('name'),
            'mobile' => $request->get('mobile'),
            'email' => $request->get('email'),
            'market' => $request->get('market'),
            'sample' => $request->get('sample'),
            'title' => $request->get('title'),
            'description' => $request->get('description'),
        ]);
        return redirect(route('home'))->with('successful', 'درخواست شما ثبت و در اسرع وقت انجام خواهد شد .');
    }
}
