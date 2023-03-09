<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Item::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
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
            Item::create([
                'name_ar'=>  $request['name_ar'],
                'name_en'=>  $request['name_en'],
                'name_hr'=>  $request['name_hr'],
                'description_ar'=>  $request['description_ar'],
                'description_en'=>  $request['description_en'],
                'description_hr'=>  $request['description_hr'],
                'category_id'=>  $request['category_id'],
                'is_new'=>  $request['is_new'],
                'wieght'=>  $request['wieght'],
                'price'=>  $request['price'],
                'image'=>  $request['image'],
                'spicy'=>  $request['spicy'],
                'free_gluten'=>  $request['free_gluten'],
                'vegetarian'=>  $request['vegetarian'],
                'potato'=>  $request['potato'],
                'sort_order'=>  $request['sort_order'],
                'is_published'=>  $request['is_published'],
            ]);
            return response()->json(['success' => 'تم انشاء بنجاح']);
        }

        return response()->json(['error' => $validator->errors()->all()]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Item::where('id', $id)->get();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
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
            Item::where('id', $id)
                ->update([
                    'name_ar'=>  $request['name_ar'],
                    'name_en'=>  $request['name_en'],
                    'name_hr'=>  $request['name_hr'],
                    'description_ar'=>  $request['description_ar'],
                    'description_en'=>  $request['description_en'],
                    'description_hr'=>  $request['description_hr'],
                    'category_id'=>  $request['category_id'],
                    'is_new'=>  $request['is_new'],
                    'wieght'=>  $request['wieght'],
                    'price'=>  $request['price'],
                    'image'=>  $request['image'],
                    'spicy'=>  $request['spicy'],
                    'free_gluten'=>  $request['free_gluten'],
                    'vegetarian'=>  $request['vegetarian'],
                    'potato'=>  $request['potato'],
                    'sort_order'=>  $request['sort_order'],
                    'is_published'=>  $request['is_published'],
                ]);
            return response()->json(['success' => 'تم انشاء بنجاح']);
        }

        return response()->json(['error' => $validator->errors()->all()]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Item::where('id', $id)->delete();
    }
}
