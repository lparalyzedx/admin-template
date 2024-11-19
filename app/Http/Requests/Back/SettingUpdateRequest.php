<?php

namespace App\Http\Requests\Back;

use Illuminate\Foundation\Http\FormRequest;

class SettingUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'seo_title'       => 'nullable|string|max:255',
            'seo_keywords'    => 'nullable|string|max:255',
            'seo_description' => 'nullable|string',
            'email'           => 'nullable|email|max:255',
            'phone'           => 'nullable|string|max:15',
            'adress'          => 'nullable|string|max:255',
            'map'             => 'nullable|string',
            'facebook'        => 'nullable|url|max:255',
            'twitter'         => 'nullable|url|max:255',
            'instagram'       => 'nullable|url|max:255',
            'linkedin'        => 'nullable|url|max:255',
            'youtube'         => 'nullable|url|max:255',
        ];
    }

    public function messages(): array
    {
        return [
            'seo_title.string'        => 'SEO Title geçerli bir metin olmalıdır.',
            'seo_title.max'           => 'SEO Title 255 karakteri geçemez.',
            'seo_keywords.string'     => 'SEO Keywords geçerli bir metin olmalıdır.',
            'seo_keywords.max'        => 'SEO Keywords 255 karakteri geçemez.',
            'seo_description.string'  => 'SEO Description geçerli bir metin olmalıdır.',
            'email.email'             => 'Geçerli bir e-posta adresi girin.',
            'email.max'               => 'E-posta adresi 255 karakteri geçemez.',
            'phone.string'            => 'Telefon numarası geçerli bir metin olmalıdır.',
            'phone.max'               => 'Telefon numarası 15 karakteri geçemez.',
            'adress.string'           => 'Adres geçerli bir metin olmalıdır.',
            'adress.max'              => 'Adres 255 karakteri geçemez.',
            'map.string'              => 'Map alanı geçerli bir metin olmalıdır.',
            'facebook.url'            => 'Facebook URL geçerli bir adres olmalıdır.',
            'twitter.url'             => 'Twitter URL geçerli bir adres olmalıdır.',
            'instagram.url'           => 'Instagram URL geçerli bir adres olmalıdır.',
            'linkedin.url'            => 'LinkedIn URL geçerli bir adres olmalıdır.',
            'youtube.url'             => 'YouTube URL geçerli bir adres olmalıdır.',
        ];
    }
}
