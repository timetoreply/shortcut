# # HistoryActionStoryCreate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**appUrl** | **string** | The application URL of the Story. |
**description** | **string** | The description of the Story. | [optional]
**started** | **bool** | Whether or not the Story has been started. | [optional]
**entityType** | **string** | The type of entity referenced. |
**taskIds** | **int[]** | An array of Task IDs on this Story. | [optional]
**storyType** | **string** | The type of Story; either feature, bug, or chore. |
**name** | **string** | The name of the Story. |
**completed** | **bool** | Whether or not the Story is completed. | [optional]
**blocker** | **bool** | Whether or not the Story is blocking another Story. | [optional]
**epicId** | **int** | The Epic ID for this Story. | [optional]
**requestedById** | **string** | The ID of the Member that requested the Story. | [optional]
**iterationId** | **int** | The Iteration ID the Story is in. | [optional]
**labelIds** | **int[]** | An array of Labels IDs attached to the Story. | [optional]
**groupId** | **string** | The Team IDs for the followers of the Story. | [optional]
**workflowStateId** | **int** | An array of Workflow State IDs attached to the Story. | [optional]
**objectStoryLinkIds** | **int[]** | An array of Story IDs that are the object of a Story Link relationship. | [optional]
**followerIds** | **string[]** | An array of Member IDs for the followers of the Story. | [optional]
**ownerIds** | **string[]** | An array of Member IDs that are the owners of the Story. | [optional]
**customFieldValueIds** | **string[]** | An array of Custom Field Enum Value ids on this Story. | [optional]
**id** | **int** | The ID of the entity referenced. |
**estimate** | **int** | The estimate (or point value) for the Story. | [optional]
**subjectStoryLinkIds** | **int[]** | An array of Story IDs that are the subject of a Story Link relationship. | [optional]
**action** | **string** | The action of the entity referenced. |
**blocked** | **bool** | Whether or not the Story is blocked by another Story. | [optional]
**projectId** | **int** | The Project ID of the Story is in. | [optional]
**deadline** | **string** | The timestamp representing the Story&#39;s deadline. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
