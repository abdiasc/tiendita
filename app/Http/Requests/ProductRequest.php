<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if($this->user_id == auth()->user()->id){
            return true;
        }else{
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $product = $this->route()->parameter('product');
            $rules = [
                'title'=>'required',
                'slug'=>'required|unique:products',
                'status'=>'required|in:1,2',
                'file'=>'image',
            ];
            if($product){
                $rules['slug']='required|unique:products,slug,'.$product->id;
            }
            if($this->status==2){
                $rules = array_merge($rules,[

                    'category_id'=>'required',
                    'tags'=>'required',
                    'price'=>'required',
                    'stract'=>'required',
                    'description'=>'required',
                    'video_url'=>'url',
                ]);
            }
            return $rules;
    }
}
