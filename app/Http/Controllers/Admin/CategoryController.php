<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return Category::all();
    }



    public function store(Request $request)
    {


        $validator = Validator::make(
            $request->all(),
            [
                'name_ar' => 'required|string|min:3|max:50',

            ],
            [
                'name_ar.required' => 'الرجاء ادخال الاسم. ',
                'name_ar.string' => 'الرجاء ادخال الاسم بشكل صحيح . ',
                'name_ar.min' => 'الاسم يجب ان يكون على الأقل 3 حروف. ',
                'name_ar.max' => 'الاسم يجب ان لا يزيد عن 50 حرف. ',

            ]
        );
        if ($validator->passes()) {
            Category::create([
                'name_ar' => $request['name_ar'],
                'name_en' => $request['name_en'],
                'name_hr' => $request['name_hr'],
                'description_ar' => $request['description_ar'],
                'description_en' => $request['description_en'],
                'description_hr' => $request['description_hr'],
                'sort_order' => $request['sort_order'],
                'is_published' => $request['is_published'],
            ]);
            return response()->json(['success' => 'تم انشاء بنجاح']);
        }

        return response()->json(['error' => $validator->errors()->all()]);
    }

    public function update(Request $request, string $id)
    {


        $validator = Validator::make(
            $request->all(),
            [
                'name_ar' => 'required|string|min:3|max:50',

            ],
            [
                'name_ar.required' => 'الرجاء ادخال الاسم. ',
                'name_ar.string' => 'الرجاء ادخال الاسم بشكل صحيح . ',
                'name_ar.min' => 'الاسم يجب ان يكون على الأقل 3 حروف. ',
                'name_ar.max' => 'الاسم يجب ان لا يزيد عن 50 حرف. ',

            ]
        );
        if ($validator->passes()) {
            Category::where('id', $id)
                ->update([
                    'name_ar' => $request['name_ar'],
                    'name_en' => $request['name_en'],
                    'name_hr' => $request['name_hr'],
                    'description_ar' => $request['description_ar'],
                    'description_en' => $request['description_en'],
                    'description_hr' => $request['description_hr'],
                    'sort_order' => $request['sort_order'],
                    'is_published' => $request['is_published'],
                ]);
            return response()->json(['success' => 'تم انشاء بنجاح']);
        }

        return response()->json(['error' => $validator->errors()->all()]);
    }
    public function show(string $id)
    {
        return Category::where('id', $id)->get();
    }

    public function destroy(string $id)
    {
        Category::where('id', $id)->delete();
    }
}
