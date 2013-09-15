<?php
namespace Petstore\Resources;

/**
 * @license    http://www.apache.org/licenses/LICENSE-2.0
 *             Copyright [2013] [Robert Allen]
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @package
 * @category
 * @subpackage
 */
use Swagger\Annotations\Operation;
use Swagger\Annotations\Operations;
use Swagger\Annotations\Parameter;
use Swagger\Annotations\Parameters;
use Swagger\Annotations\Api;
use Swagger\Annotations\ResponseMessage;
use Swagger\Annotations\ResponseMessages;
use Swagger\Annotations\Resource;

use Swagger\Annotations\Properties;
use Swagger\Annotations\Property;
use Swagger\Annotations\Model;
use Swagger\Annotations\Items;

/**
 * @package
 * @category
 * @subpackage
 *
 * @Resource(
 *  apiVersion="0.2",
 *  swaggerVersion="1.2",
 *  resourcePath="/pet",
 *  basePath="http://petstore.swagger.wordnik.com/api"
 * )
 *
 * @Model(
 *   id="PetResponse",
 *   @Properties(
 *     @Property(name="status",type="integer"),
 *     @Property(name="statusName",type="string"),
 *     @Property(name="tags",type="array", items="$ref:Tag")
 *   )
 * )
 *
 * @Model(
 *   id="OtherPetResponse",
 *   @Properties(
 *     @Property(name="status",type="integer"),
 *     @Property(name="statusName",type="string"),
 *     @Property(name="pet",type="Pet")
 *   )
 * )
 */
class Pet
{
    /**
     *
     * @Api(
     *   path="/pet.{format}/{petId}",
     *   description="Operations about pets",
     *   @operations(
     *     @operation(
     *       method="GET",
     *       summary="Find pet by ID",
     *       notes="Returns a pet based on ID",
     *       type="PetResponse",
     *       nickname="getPetById",
     *       @parameters(
     *         @parameter(
     *           name="petId",
     *           description="ID of pet that needs to be fetched",
     *           paramType="path",
     *           required="true",
     *           type="string"
     *         )
     *       ),
     *       @responseMessages(
     *          @responseMessage(
     *            code="400",
     *            reason="Invalid ID supplied"
     *          ),
     *          @responseMessage(
     *            code="404",
     *            reason="Pet not found"
     *          )
     *       )
     *     )
     *   )
     * )
     */
    public function getPetById()
    {
    }

    /**
     *
     * @Api(
     *   path="/pet.{format}",
     *   description="Operations about pets",
     *   @operations(
     *     @operation(
     *       method="POST",
     *       summary="Add a new pet to the store",
     *       type="OtherPetResponse",
     *       nickname="addPet",
     *       @parameters(
     *         @parameter(
     *           description="Pet object that needs to be added to the store",
     *           paramType="body",
     *           required="true",
     *           type="Pet"
     *         )
     *       ),
     *       @responseMessages(
     *          @responseMessage(
     *            code="405",
     *            reason="Invalid input"
     *          )
     *       )
     *     )
     *   )
     * )
     */
    public function addPet()
    {
    }

    /**
     *
     * @Api(
     *   path="/pet.{format}/findByStatus",
     *   description="Operations about pets",
     *   @operations(
     *     @operation(
     *       method="GET",
     *       summary="Finds Pets by status",
     *       notes="Multiple status values can be provided with comma seperated strings",
     *       type="List[Pet]",
     *       nickname="findPetsByStatus",
     *       @parameters(
     *         @parameter(
     *           name="status",
     *           description="Status values that need to be considered for filter",
     *           paramType="query",
     *           defaultValue="available",
     *           enum="['available', 'pending', 'sold']",
     *           required="true",
     *           type="string"
     *         )
     *       ),
     *       @responseMessages(
     *          @responseMessage(
     *            code="400",
     *            reason="Invalid status value"
     *          )
     *       )
     *     )
     *   )
     * )
     */
    public function findPetsByStatus()
    {
    }

    /**
     *
     * @Api(
     *   path="/pet.{format}/findByTags",
     *   description="Operations about pets",
     *   @operations(
     *     @operation(
     *       method="GET",
     *       summary="Finds Pets by tags",
     *       notes="Muliple tags can be provided with comma seperated strings. Use tag1, tag2, tag3 for testing.",
     *       type="List[Pet]",
     *       nickname="findPetsByTags",
     *       @parameters(
     *         @parameter(
     *           name="tags",
     *           description="Tags to filter by",
     *           paramType="query",
     *           required=true,
     *           type="string"
     *         )
     *       ),
     *       @responseMessages(
     *          @responseMessage(
     *            code="400",
     *            reason="Invalid tag value"
     *          )
     *       )
     *     )
     *   )
     * )
     */
    public function findPetsByTags()
    {
    }
    /**
     *
     * @Api(
     *   path="/pet.{format}",
     *   description="Operations about pets",
     *   @operations(
     *     @operation(
     *       method="PUT",
     *       summary="Update an existing pet",
     *       type="void",
     *       nickname="updatePet",
     *       @parameters(
     *         @parameter(
     *           description="Pet object that needs to be updated in the store",
     *           paramType="body",
     *           required="true",
     *           type="Pet"
     *         )
     *       ),
     *       @responseMessages(
     *          @responseMessage(
     *            code="400",
     *            reason="Invalid ID supplied"
     *          ),
     *          @responseMessage(
     *            code="404",
     *            reason="Pet not found"
     *          ),
     *          @responseMessage(
     *            code="405",
     *            reason="Validation exception"
     *          )
     *       )
     *     )
     *   )
     * )
     */
    public function updatePet()
    {
    }
}
