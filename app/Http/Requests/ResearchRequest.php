<!-- <?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResearchRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name_en' => 'required|max:50',
            'name_ar' => 'required|max:50',
            'description_en' => 'required',
            'description_ar' => 'required',
             'photo' => 'required|mimes:png,jpg,jpeg',
        ];
    }


    public function messages()
    {
        return [
            'name_en.required' => 'name is required',
            'name_en.max' => 'name length dose not be more than 50',
            'name_ar.required' => 'name is required',
            'name_ar.max' => 'name length dose not be more than 50',
            'description_en.required' => 'description is required',
            'description_ar.required' => 'description is required',
             'photo.required' => ' photo is required',
            'photo.mimes' =>  'image is not valid',

        ];
    }
} -->
