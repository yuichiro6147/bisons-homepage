<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @apiDefine ShowSampleRequest
 *
 * @apiParam {string} code コード
 *
 * @apiParamExample {path} Path-Example:
 *   /sample/1
 */

/**
 * 一覧取得のリクエストクラス
 * @property string $code
 * @package App\Http\Controllers
 */
class ShowSampleRequest extends FormRequest
{
    /**
     * バリデーション
     * @return array
     */
    public function rules()
    {
        return [
            'code' => 'required|string|max:19'
        ];
    }
}
