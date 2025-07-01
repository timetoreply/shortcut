# # HistoryActionsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The ID of the entity referenced. |
**entityType** | **string** | The type of entity referenced. |
**name** | **string** | The name of the workspace2 in which the BulkUpdate occurred. |
**url** | **string** | The URL from the provider of the VCS Pull Request. |
**action** | **string** | The action of the entity referenced. |
**appUrl** | **string** | The application URL of the Story Comment. |
**number** | **int** | The VCS Repository-specific ID for the Pull Request. |
**title** | **string** | The title of the Pull Request. |
**description** | **string** | The description of the Task being deleted. |
**started** | **bool** | Whether or not the Story has been started. | [optional]
**taskIds** | **int[]** | An array of Task IDs on this Story. | [optional]
**storyType** | **string** | The type of Story; either feature, bug, or chore. |
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
**ownerIds** | **string[]** | An array of Member IDs that represent the Task&#39;s owners. | [optional]
**customFieldValueIds** | **string[]** | An array of Custom Field Enum Value ids on this Story. | [optional]
**estimate** | **int** | The estimate (or point value) for the Story. | [optional]
**subjectStoryLinkIds** | **int[]** | An array of Story IDs that are the subject of a Story Link relationship. | [optional]
**blocked** | **bool** | Whether or not the Story is blocked by another Story. | [optional]
**projectId** | **int** | The Project ID of the Story is in. | [optional]
**deadline** | **string** | A timestamp that represent&#39;s the Task&#39;s deadline. | [optional]
**changes** | [**\Timetoreply\Shortcut\Model\HistoryChangesTask**](HistoryChangesTask.md) |  |
**text** | **string** | The text of the Story Comment. |
**authorId** | **string** | The Member ID of who created the Story Comment. |
**verb** | **string** | The verb describing the link&#39;s relationship. |
**subjectId** | **int** | The Story ID of the subject Story. |
**objectId** | **int** | The Story ID of the object Story. |
**mentionIds** | **string[]** | An array of Member IDs that represent who has been mentioned in the Task. | [optional]
**groupMentionIds** | **string[]** | An array of Groups IDs that represent which have been mentioned in the Task. | [optional]
**complete** | **bool** | Whether or not the Task is complete. |
**storyId** | **int** | The Story ID that contains the Task. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
