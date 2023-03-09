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
                'category_name_ar' => 'required|string|min:3|max:50',

            ],
            [
                'category_name_ar.required' => 'الرجاء ادخال الاسم. ',
                'category_name_ar.string' => 'الرجاء ادخال الاسم بشكل صحيح . ',
                'category_name_ar.min' => 'الاسم يجب ان يكون على الأقل 3 حروف. ',
                'category_name_ar.max' => 'الاسم يجب ان لا يزيد عن 50 حرف. ',

            ]
        );
        if ($validator->passes()) {
            Category::create([
                'category_name_ar' => $request['category_name_ar'],
                'category_name_en' => $request['category_name_en'],
                'category_name_hr' => $request['category_name_hr'],
            ]);
            return response()->json(['success' => 'تم انشاء بنجاح']);
        }

        return response()->json(['error' => $validator->errors()->all()]);
    }

    public function edit(Request $request,$id)
    {


        $validator = Validator::make(
            $request->all(),
            [
                'category_name_ar' => 'required|string|min:3|max:50',

            ],
            [
                'category_name_ar.required' => 'الرجاء ادخال الاسم. ',
                'category_name_ar.string' => 'الرجاء ادخال الاسم بشكل صحيح . ',
                'category_name_ar.min' => 'الاسم يجب ان يكون على الأقل 3 حروف. ',
                'category_name_ar.max' => 'الاسم يجب ان لا يزيد عن 50 حرف. ',

            ]
        );
        if ($validator->passes()) {
            Category::where('id', $id)
                ->update([
                    'category_name_ar' => $request['category_name_ar'],
                    'category_name_en' => $request['category_name_en'],
                    'category_name_hr' => $request['category_name_hr'],
                ]);
            return response()->json(['success' => 'تم انشاء بنجاح']);
        }

        return response()->json(['error' => $validator->errors()->all()]);
    }
    public function get($id)
    {
       return Category::where('id', $id)->get();
    }
}
