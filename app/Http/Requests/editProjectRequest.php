<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class editProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        #$this->route('project') 获取当前传递的值
        return [
            'project_name'=>[
            'required',
             Rule::unique('projects','name')->ignore($this->route('project'))->where(function($query){

                return $query->where('user_id', request()->user()->id);

             })
            
        ],
            'project_thumbnail'=>'image|dimensions:min_width=200,min_height=100'
        ];
    }

    public function messages()
    {
        return [
            'project_name.required' =>'项目名为必填',
            'project_name.unique'=>'项目名重复',
            'project_thumbnail.image'=>'文件必须为图片格式',
            'project_thumbnail.dimensions'=>'图片最小宽高为200*100'

        ];


    }


}
