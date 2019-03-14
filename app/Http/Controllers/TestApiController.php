<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestApiController extends Controller {
    /**
     * @OA\Get(
     *     path="/users",
     *     operationId="getUsersList",
     *     tags={"Example"},
     *     summary="Get list users",
     *     description="Returns list users",
     *     @OA\Response(
     *         response=200,
     *         description="List users"
     *      ),
     *      @OA\Response(response=400, description="Bad request"),
     *      security={
     *          {"api_key_security_example": {}}
     *      }
     *    )
     *
     */
    public function List() {
        return [
            'error' => 0,
            'message' => 'Done',
            'list' => [1, 2, 3, 4 ,5]
        ];
    }

    /**
     * @OA\Post(
     *     path="/users",
     *     operationId="addUsers",
     *     tags={"Example"},
     *     summary="Add new users",
     *     description="Add new users",
     *
     *     @OA\Response(
     *         response=200,
     *         description="New user info"
     *      ),
     *      @OA\Response(response=400, description="Bad request"),
     *      security={
     *          {"api_key_security_example": {}}
     *      }
     *    )
     *
     */
    public function Add() {
        return [
            'error' => 0,
            'message' => 'Done',
            'info' => [
                'id' => 1,
                'name' => 'A',
                'address' => 'hanoi'
            ]
        ];
    }
}
