<?php

namespace App\Http\Controllers;

use App\Models\UserData;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $data = UserData::where('user_id', auth()->id())->latest()->paginate($perPage);
        } else {
            $data = UserData::where('user_id', auth()->id())->latest()->paginate($perPage);
        }

        return view('pages.edit-prof.index', compact('data'));
    }

    public function create()
    {
        return view('pages.edit-prof.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'portfolio_image' => 'required|image|max:15360'
        ]);

        if ($validator->fails()) {
            return back()->withErrors(['portfolio_image' => trans('Что-то, не так с изображением')]);
        }

        $image = $request->file('portfolio_image');

        $imageName = auth()->id() . '-' . time() . '.' . $request->file('portfolio_image')->getClientOriginalExtension();

        $img = Storage::disk('photos')->putFileAs('', $image, $imageName);

        $requestData = $request->except('portfolio_image');

        $requestData = array_merge(['portfolio_image' => $imageName], $requestData);

        if ($img) {
            auth()->user()->data()->create($requestData);
            return redirect('edit')->with('flash_message', 'Успешно добавлено!');
        } else {
            Log::error('Не загрузил изображение: id пользователя - ' . auth()->user()->id. '; дата - '.now());
            return redirect('edit')->with('flash_message', 'Что-то пошло не так!');
        }
    }

    public function show($id)
    {
        $data = UserData::findOrFail($id);

        return view('pages.edit-prof.show', compact('data'));
    }

    public function edit($id)
    {
        $data = UserData::findOrFail($id);

        return view('pages.edit-prof.edit', compact('data'));
    }

    public function update(Request $request)
    {
        $requestData = $request->all();

        $data = UserData::findOrFail(auth()->id());

        $data->update($requestData);

        return redirect('edit')->with('flash_message', 'Успешно обновлено!');
    }

    public function destroy($id)
    {
        UserData::destroy($id);

        return redirect('edit')->with('flash_message', 'Удалено!');
    }

    public function export ()
    {
        $pdf = PDF::loadView('pages.pdf-portfolio');
        return $pdf->download('portfolio-userid'.auth()->user()->id.'-'.time().'.pdf');
    }
}
