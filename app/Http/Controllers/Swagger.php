<?php
/**
 * Created by PhpStorm.
 * User: tanmv
 * Date: 14/03/2019
 * Time: 15:02
 * docs: https://github.com/DarkaOnLine/L5-Swagger/blob/master/tests/storage/annotations/OpenApi/Anotations.php
 * Example: https://github.com/zircote/swagger-php/blob/master/Examples/petstore.swagger.io/controllers/PetController.php
 */

/**
 * @OA\Info(
 *      version="1.0.0",
 *      title="API Documents",
 *      description="API Documents description for Emotiv subscription",
 *      @OA\Contact(
 *          email="dev@emotiv.com"
 *      ),
 *     @OA\License(
 *         name="Emotiv@2018",
 *         url="https://www.emotiv.com"
 *     )
 * )
 */

/**
 *  @OA\Server(
 *      url="http://localhost:8000/api",
 *      description="Server dev"
 *  )
 *
 *  @OA\Server(
 *      url="https://dev-services.emotiv.com/api",
 *      description="Server Staging"
 * )
 *
 * @OA\Server(
 *      url="https://services.emotiv.com/api",
 *      description="Server Live"
 * )
 */

/**
 * @OA\SecurityScheme(
 *     type="oauth2",
 *     description="Use a global client_id / client_secret and your username / password combo to obtain a token",
 *     name="Password Based",
 *     in="header",
 *     scheme="https",
 *     securityScheme="Password Based",
 *     @OA\Flow(
 *         flow="password",
 *         authorizationUrl="/oauth/authorize",
 *         tokenUrl="/oauth/token",
 *         refreshUrl="/oauth/token/refresh",
 *         scopes={}
 *     )
 * )
 */