<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class SampleController extends Controller
{
    /**
     * @api {get} /sample/:code 1. show
     * @apiGroup Sample
     * @apiName show
     * @apiDescription
     * 一覧を取得します。
     *
     * @apiUse ShowSampleRequest
     *
     * @apiUse ShowSampleResponse
     * @apiUse ShowSampleResponseExample
     */
    /**
     * @return JsonResponse
     */
    public function show(): JsonResponse {
        return response()->json('', Response::HTTP_OK, [], JSON_UNESCAPED_UNICODE);
    }
}
