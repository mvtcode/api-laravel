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
     *         response="default",
     *         response=200,
     *         description="New user info",
     *         @OA\JsonContent(
     *            type="array",
     *            @OA\Items(
     *              @OA\Property(
     *                  property="id",
     *                  type="integer",
     *                  format="int32",
     *                  example=1
     *              ),
     *              @OA\Property(
     *                  property="name",
     *                  type="string",
     *                  example="Tan"
     *              ),
     *              @OA\Property(
     *                  property="address",
     *                  type="string",
     *                  example="Hanoi"
     *              )
     *            )
     *         )
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
     * @OA\Get(
     *     path="/users/{id}",
     *     operationId="getUsersDetail",
     *     tags={"Example"},
     *     summary="Get user detail",
     *     description="Returns user info",
     *     @OA\Parameter(
     *         name="id",
     *         in="query",
     *         description="User_id",
     *         required=true,
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Response(
     *          response=200,
     *          description="User info",
     *          @OA\JsonContent(
     *              @OA\Property(
     *                  property="id",
     *                  type="integer",
     *                  format="int32",
     *                  example=1
     *              ),
     *              @OA\Property(
     *                  property="name",
     *                  type="string",
     *                  example="Tan"
     *              ),
     *              @OA\Property(
     *                  property="address",
     *                  type="string",
     *                  example="Hanoi"
     *              )
     *         )
     *      ),
     *      security={
     *           {"api_key_security_example": {}}
     *      }
     *    )
     *
     */
    public function Info($id) {
        return [
            'error' => 0,
            'message' => 'Done',
            'list' => $id
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
     *     @OA\RequestBody(
     *         description="User object info",
     *         required=true,
     *         @OA\JsonContent(
     *            @OA\Property(
     *              property="name",
     *              type="string",
     *              default=""
     *            ),
     *            @OA\Property(
     *              property="address",
     *              type="string"
     *            )
     *         )
     *     ),
     *
     *     @OA\Response(
     *         response=200,
     *         description="New user info",
     *         @OA\JsonContent(
     *            @OA\Property(
     *              property="id",
     *              type="integer"
     *            ),
     *            @OA\Property(
     *              property="name",
     *              type="string"
     *            ),
     *            @OA\Property(
     *              property="address",
     *              type="string"
     *            )
     *         )
     *      ),
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

    /**
     * @OA\Put(
     *     path="/users/{id}",
     *     operationId="updateUsers",
     *     tags={"Example"},
     *     summary="Update users",
     *     description="update users",
     *
     *     @OA\Parameter(
     *         name="id",
     *         in="query",
     *         description="User_id",
     *         required=true,
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *
     *     @OA\RequestBody(
     *         description="User object info",
     *         required=true,
     *         @OA\JsonContent(
     *            @OA\Property(
     *              property="name",
     *              type="string",
     *              default=""
     *            ),
     *            @OA\Property(
     *              property="address",
     *              type="string"
     *            )
     *         )
     *     ),
     *
     *     @OA\Response(
     *         response=200,
     *         description="New user info",
     *         @OA\JsonContent(
     *            @OA\Property(
     *              property="id",
     *              type="integer"
     *            ),
     *            @OA\Property(
     *              property="name",
     *              type="string"
     *            ),
     *            @OA\Property(
     *              property="address",
     *              type="string"
     *            )
     *         )
     *      ),
     *      security={
     *          {"api_key_security_example": {}}
     *      }
     *    )
     *
     */
    public function Update() {
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

    /**
     * @OA\Delete(
     *     path="/users/{id}",
     *     operationId="deleteUsers",
     *     tags={"Example"},
     *     summary="Delete users",
     *     description="Delete users",
     *
     *     @OA\Parameter(
     *         name="id",
     *         in="query",
     *         description="User_id",
     *         required=true,
     *         @OA\Schema(
     *              type="string",
     *              example="123"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Result info",
     *         @OA\JsonContent(
     *            @OA\Property(
     *              property="result",
     *              type="boolean",
     *              example=true
     *            )
     *         )
     *      ),
     *      security={
     *          {"api_key_security_example": {}}
     *      }
     *    )
     *
     */
    public function Delete() {
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
