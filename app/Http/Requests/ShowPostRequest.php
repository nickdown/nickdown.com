<?php

namespace App\Http\Requests;

use App\Models\Post;
use Illuminate\Foundation\Http\FormRequest;

/**
 * @property Post $post
 */
class ShowPostRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->post->isPublished();
    }

    public function rules(): array
    {
        return [
            //
        ];
    }
}
