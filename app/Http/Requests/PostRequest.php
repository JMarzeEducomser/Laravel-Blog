<?php

namespace Blog\Http\Requests;

use Blog\Http\Requests\Request;

class PostRequest extends Request
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
        $codigoPost = $this->route('post');
        return [
            'codigo' => 'required|string|size:10|unique:posts,codigo,'.$codigoPost.',codigo',
            'titulo' => 'required|string|max:100|min:2',
            'contenido' => 'required|min:2',
            'categoria_id' => 'required',
            'imagen' => 'image',
        ];
    }
}
