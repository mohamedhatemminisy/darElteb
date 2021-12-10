<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class OfferRequest extends FormRequest
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
        $image = request()->isMethod('put') ? 'nullable|mimes:jpeg,jpg,png,gif,svg|max:8000' : 'required|mimes:jpeg,jpg,png,gif,svg|max:8000';

        $rules=[
            'image'  => $image,
            'type'  => 'required',
            "tests"    => "required|array",
            "tests.*"  => "required|string",
            'target'  => 'required',
            'gender'  => 'required_if:target,gender',
            'age'  => 'required_if:target,age',
        ];
        foreach (config('translatable.locales') as $locale) {
            $rules += [$locale . '.name' => ['required']];
            $rules += [$locale . '.description' => ['required']];
        }
        return $rules;
    }

    public function messages()
    {
        $messages = [];
        foreach (config('translatable.locales') as $locale) {
            $messages += [$locale . '.name.required' => trans('admin.error_message.name_required_' . $locale)];
            $messages += [$locale . '.description.required' => trans('admin.error_message.description_required_' . $locale)];

        }
        return $messages;
    }
}
